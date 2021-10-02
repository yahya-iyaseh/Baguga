<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Customers = Customer::latest()->paginate(10);
        return view('customer.index', compact('Customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.create');
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
        $customer = Request()->validate([
            'name' => 'required|max:255'
        ]);
        Customer::create($request->all());
        return redirect('customer')->with('message', 'Successfully created project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
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
        $Customer = Customer::find($customer->id);
        Customer::FindOrFail($customer->id);
        $Customer = Customer::select('id', 'name', 'coming_from', 'address', 'phone', 'email')->find($customer->id);
        return view('customer.edit', compact('Customer'));
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

        $Customer = Customer::find($customer->id);
        $Customer->update($request->all());
        return redirect('customer')->with('message', 'Successfully udpate Customer');
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
        $Customer = Customer::find($customer->id);
        $Customer->delete();
        return redirect('customer')->with('message', 'Successfully delete Customer');
    }



    public function deletecustomer($customer_id)
    {
        //
        $Customer = Customer::find($customer_id);
        $Customer->delete();
        return redirect('customer')->with('message', 'Successfully delete Customer');
    }
}
