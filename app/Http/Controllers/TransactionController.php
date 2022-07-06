<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $drivers = Driver::all();
        //  $transactions = Transaction::latest()->get();
        // $transactions = DB::table('transactions')
        //     ->where('status', 'active');
        // $transactions = $transactions->get();

        $transactions = DB::table('transactions')->where('status', 'active')->get();
        return view('transactions.index', compact('transactions'));
    }

    public function closed()
    {
        $drivers = Driver::all();
        //  $transactions = Transaction::latest()->get();
        $transactions = DB::table('transactions')
            ->where('status', 'closed');
        $transactions = $transactions->get();
        return view('transactions.closedtrans', compact('transactions', 'drivers'));
    }

    public function report()
    {
        $drivers = Driver::all();
        $transactions = Transaction::latest()->get();
        return view('transactions.report', compact('transactions', 'drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers = Driver::all();
        $transactions = Transaction::all();
        return view('transactions.create', compact('transactions', 'drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $transactions = new Transaction();
        $transactions->driver = $request->input('driver');
        $transactions->month = $request->input('month');
        $transactions->amt_adv = $request->input('amt_adv');
        $transactions->percentage = $request->input('percentage');
        $transactions->amount = $request->input('amount');
        $transactions->days_truck = $request->input('days_truck');
        $transactions->amt_per_day = $request->input('amt_per_day');
        $transactions->amt_utilized = $request->input('amt_utilized');
        $transactions->bal_to_be_recoverd = $request->input('bal_to_be_recoverd');
        $transactions->days_rebooking = $request->input('days_rebooking');
        $transactions->rebooking_amt = $request->input('rebooking_amt');
        $transactions->days_rebooking1 = $request->input('days_rebooking1');
        $transactions->rebooking_amt2 = $request->input('rebooking_amt2');
        $transactions->closing_bal = $request->input('closing_bal');
        $transactions->final_recovery = $request->input('final_recovery');
        $transactions->total_amt_recoverd = $request->input('total_amt_recoverd');
        $transactions->done_by = $request->input('done_by');
        $transactions->save();
        return redirect('/transactions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drivers = Driver::all();
        $transaction = Transaction::find($id);

        return view('transactions.show', compact('transaction', 'drivers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $drivers = Driver::all();
        $transaction = Transaction::find($id);

        return view('transactions.edit', compact('transaction', 'drivers'));
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
        $transactions = Transaction::findOrFail($id);


        $transactions->driver = $request->input('driver');
        $transactions->amt_adv = $request->input('amt_adv');
        $transactions->percentage = $request->input('percentage');
        $transactions->amount = $request->input('amount');
        $transactions->days_truck = $request->input('days_truck');
        $transactions->amt_per_day = $request->input('amt_per_day');
        $transactions->amt_utilized = $request->input('amt_utilized');
        $transactions->bal_to_be_recoverd = $request->input('bal_to_be_recoverd');
        $transactions->days_rebooking = $request->input('days_rebooking');
        $transactions->rebooking_amt = $request->input('rebooking_amt');
        $transactions->days_rebooking1 = $request->input('days_rebooking1');
        $transactions->rebooking_amt2 = $request->input('rebooking_amt2');
        $transactions->closing_bal = $request->input('closing_bal');
        $transactions->final_recovery = $request->input('final_recovery');
        $transactions->total_amt_recoverd = $request->input('total_amt_recoverd');
        $transactions->status = $request->input('status');
        $transactions->save();

        return redirect('/transactions')->with('success', 'Transaction details has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
