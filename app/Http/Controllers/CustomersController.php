<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\Events\NewUserHasRegisteredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $customers = Customer::all();
        return view("customers.index", compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('companies', 'customer'));
    }

    public function store()
    {

        $customer = Customer::create($this->validateRequest());
        $this->storeImage($customer);
        event(new NewUserHasRegisteredEvent($customer));



        return redirect('customers');
    }


    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();

        return view('customers.edit', compact('companies', 'customer'));
    }

    public function update(Customer $customer)
    {


        $customer->update($this->validateRequest());
        $this->storeImage($customer);
        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('customers');
    }

    private function validateRequest()
    {

        return tap(request()->validate([
            'name' => 'required|min:3',
            'email' => 'email|required',
            'active' => 'required',
            'company_id' => 'required',
        ]), function () {

            if (request()->hasFile('image')) {
                request()->validate([
                    'image' => 'file|image|max:5000'
                ]);
            }
        });
    }

    public function storeImage($customer)
    {
        if (request()->has('image')) {
            $customer->update([
                'image' => request()->image->store('uploads', 'public')
            ]);
        }
    }
}
