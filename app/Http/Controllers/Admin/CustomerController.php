<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $words;
     public $request;
     public function searchcustomer()
     {
        // $this->words = explode(' ', $this->request->q);

        // $customer = DB::table('customer')->where(function ($query) {
        //     foreach($this->words as $word) {
        //         $query->orWhere('profession', 'LIKE', '%' . $word . '%');
        //     }
        // })->orWhere(function ($query) {
        //     foreach($this->words as $word) {
        //         $query->orWhere('country', 'LIKE', '%' . $word . '%');
        //     }
        // })->get();

        // $customer = Customer::where("name",'like',"%".$this->request->q ."%")->get();

        $customer = Customer::all();
        return $customer;
     }

    public function index()
    {
        // return 'jj';
        $customer = Customer::all();
        return view('backend.customer.index',compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'jj';
        $users = User::all();
        return view('backend.customer.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->contact_no = $request->contact_no;
        $customer->company_name = $request->company_name;
        $customer->address = $request->address;
        $customer->user_id = $request->user_id;
        $customer->save();
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
        $customer = Customer::find($id);
        $users = User::all();
        return view("backend.customer.edit",compact('customer','users'));
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
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->contact_no = $request->contact_no;
        $customer->company_name = $request->company_name;
        $customer->address = $request->address;
        $customer->user_id = $request->user_id;
        $customer->Update();
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