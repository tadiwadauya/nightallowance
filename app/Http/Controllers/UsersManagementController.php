<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use jeremykenedy\LaravelRoles\Models\Role;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpKernel\Event\TerminateEvent;

class UsersManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return View('usersmanagement.show-users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('usersmanagement.create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'paynumber'             => 'required|max:255|unique:users|alpha_dash',
                'first_name' =>             'required',
                'last_name' =>              'required',
                'email' =>              'required|email|max:255|unique:users',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            try {
                $users = new User();
                $users->name = $request->input('name');
                $users->paynumber = $request->input('paynumber');
                $users->first_name = $request->input('first_name');
                $users->last_name = $request->input('last_name');
                $users->Department = $request->input('Department');
                $users->Position = $request->input('Position');
                $users->mobile = $request->input('mobile');
                $users->email = $request->input('email');
                $users->password = Hash::make($request->input('password'));

                $users->save();


                return redirect('users')->with('success', 'User was created successfully');
            } catch (\Exception $th) {
                return redirect()->back()->with('error', 'Failed to create new user');
            }
        }

        return redirect()->back()->with('error', 'System was unable to create user account.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $yuza = Auth::user();
        $user = User::find($id);
        $users = User::all();
        return view('usersmanagement.show-user', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $data = ['user'        => $user,];
        return view('usersmanagement.edit-user')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $emailCheck = ($request->input('email') != '') && ($request->input('email') != $user->email);

        if ($emailCheck) {
            $validator = Validator::make($request->all(), [
                'paynumber'     => 'required|max:255',
                'email'    => 'email|max:255|unique:users',
                'password' => 'present|confirmed|min:6',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'paynumber'     => 'required|max:255',
                'password' => 'nullable|confirmed|min:6',
            ]);
        }
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $user->name = $request->input('name');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->paynumber = $request->input('paynumber');
        $user->Department = $request->input('Department');
        $user->Position = $request->input('Position');
        $user->mobile = $request->input('mobile');

        if ($emailCheck) {
            $user->email = $request->input('email');
        }

        if ($request->input('password') != null) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect('users')->with('success', 'User details has been updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}
