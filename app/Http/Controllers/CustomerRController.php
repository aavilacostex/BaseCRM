<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\shipping_add;
use App\Models\cemail;
use App\Models\cphone;

use Illuminate\Http\Request;

class CustomerRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->id(); 
        $clients = Customer::All();

        //dd($clients);
        return view('customer.index',['clients' => $clients, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::all()->find($id);

        $shipps = shipping_add::all();
        $cemails = cemail::all();
        $cphones = cphone::all();

        //$emails = emails

        //dd($customer);
        //return view('customer.show', compact('customer'));
        return view('customer.show',['customer' => $customer, 'shipps' => $shipps, 'cemails' => $cemails, 'cphones' => $cphones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
