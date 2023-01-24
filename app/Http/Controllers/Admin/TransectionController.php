<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Transection;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::with('services')->get();
        // return $data;
        return view('backend.transection.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $services = Service::all();
        $customers = Customer::all();
        return view('backend.transection.create', compact('users', 'services', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required',
            'update_date' => 'required',
            'fee' => 'required',
            'year' => 'required',
            'user_id' => 'required',
            'renew_date' => 'required',
        ]);
        // return dd($request->all());
        $customer = Customer::where('id', $request->customer_id)->first();
        $start_date = $request->start_date;
        $update_date = $request->update_date;
        $fee = $request->fee;
        $year = $request->year;
        $user_id = Auth::user()->id;
        $renew_date = Carbon::createFromFormat('Y-m-d', $start_date)->addYear($year);
        $customer->services()->attach($request->service_id, ["start_date" => $start_date, "update_date" => $update_date, "fee" => $fee, "year" => $year, "renew_date" => $renew_date, "user_id" => $user_id]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $services = Service::all(); //all servicer
        $customers = Customer::all(); // all customer
        $customer = Customer::find($id);
        $data =  $customer->services;
        return view('backend.transection.edit', compact('services', 'customers', 'customer', 'data'));
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
        $customer = Customer::find($id);
        $start_date = $request->start_date;
        $update_date = $request->update_date;
        $fee = $request->fee;
        $year = $request->year;
        $user_id = Auth::user()->id;
        $renew_date = Carbon::createFromFormat('Y-m-d', $start_date)->addYear($year);
        $customer->services()->syncWithPivotValues($request->service_id, ["start_date" => $start_date, "update_date" => $update_date, "fee" => $fee, "year" => $year, "renew_date" => $renew_date, "user_id" => $user_id]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
