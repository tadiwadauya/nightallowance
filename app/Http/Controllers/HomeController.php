<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $drivers = Driver::all();
      //  $transactions = Transaction::latest()->get();
      $transactions = DB::table('transactions')
      ->where('status', 'active')
      ->orderBy('id', 'desc')->take(7);
      $transactions = $transactions->get();

        return view('home',compact('transactions','drivers'));
    }
    public function admin()
    {
      $drivers = Driver::all();
      //  $transactions = Transaction::latest()->get();
      $transactions = DB::table('transactions')
      ->where('status', 'active')
      ->orderBy('id', 'desc')->take(7);
      $transactions = $transactions->get();

        return view('admin-home',compact('transactions','drivers'));
    }
}
