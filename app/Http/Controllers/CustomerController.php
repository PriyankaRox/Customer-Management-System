<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::withTrashed()->get();
        //$customers = Customer::withTrashed()->paginate(2)->get();
        return view("customers.index", [
            "customers" => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("customers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $values = $this->validate($request, [
            "name" => "required",
            "dob"=>'required',
            "gender"=>'required',
            "email"=>'required',
            "mobile"=>'required',
            "address"=>'required',
            "city"=>'required',
            "pin"=>'required',
            "state"=>'required',
            "country"=>'required',
            "adhar_number"=>'required',
            "religion"=>'required',
            "caste"=>'required',
            "category"=>'required',
            "emergency_contact"=>'required'
        ]);

        Customer::create($values + ['created_user_id' => auth()->user()->id]);
        $created_customer = collect(Customer::all())->last();

        $message = "<strong>Success!</strong> customer captured successfully.
                    <a href=\"#\" class=\"alert-link\">View Details</a>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>";
        return redirect()->route('customers.index')
            ->with("success", $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view("customers.details", [
            "customers" => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view("customers.edit", [
            "customers" => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $values = $this->validate($request, [
            "name" => "required",
            'dob'=>'required',
            'gender'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'city'=>'required',
            'pin'=>'required',
            'state'=>'required',
            'country'=>'required',
            'adhar_number'=>'required',
            'religion'=>'required',
            'caste'=>'required',
            'category'=>'required',
            'emergency_contact'=>'required',
            
        ]);

        $customer->update($values + ['created_user_id' => auth()->user()->id]);

        $message = "<strong>Notice!</strong> customer updated successfully.
                    <a href=\"#\" class=\"alert-link\">View Details</a>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>";

        return redirect()->route('customers.index')
            ->with("notice", $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Customer::destroy($customer->id);

        $message = "<strong>Notice!</strong> Customer deleted successfully.
                    <a href=\"#\" class=\"alert-link\">View Details</a>
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>";
        return redirect()->route('customers.index')
            ->with("notice", $message);
    }
}
