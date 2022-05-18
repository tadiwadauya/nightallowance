<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('Drivers.driver',['drivers' => $drivers,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers = Driver::all();
        return view('Drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'pay_number'             => 'required|max:255|unique:drivers|alpha_dash',
            'first_name' =>             'required',
            'last_name' =>              'required',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        else {

            try {

       $driver = Driver::create([
       'pay_number' => $request->input('pay_number'),
       'first_name' => $request->input('first_name'),
       'last_name' => $request->input('last_name'),
    ]);
       $driver->save();

       return redirect('driver/driverslist')->with('success','User was created successfully');

    } catch (\Exception $th) {
        return redirect()->back()->with('error','Failed to create new user');
    }
}

return redirect()->back()->with('error','System was unable to create user account.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = Driver::find($id);
        $drivers = Driver::all();
        return view('driver',['drivers'=>$drivers,'driver'=>$driver,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::find($id);
        $drivers = Driver::all();
        return view('Drivers.edit',['driver'=> $driver]);
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


        $validator = Validator::make($request->all(),[

            'pay_number'            => 'required|max:255|unique:drivers|alpha_dash',
            'first_name'                  => 'required|max:255',
            'last_name'             => 'required|max:255',
        ]);
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }
        $driver = Driver::findOrFail($id);
        $driver->pay_number = $request->input('pay_number');
        $driver->first_name = $request->input('first_name');
        $driver->last_name = $request->input('last_name');

        $driver->save();

        return redirect('driver/driverslist')->with('success','Driver details has been updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect('/');
    }
}
