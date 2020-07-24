
@extends('layouts.app')

@section('title','Customers List')
    

@section('content')   
   

<div class="row">
    <div class="col-12">
        <h1>Customers List</h1>
     </div>
 </div>     
 
 <div class="row">
    <div class="col-12">
        <h3><a href="/customers/create">Add New Customer</a></h3>
     </div>
 </div>  
 <div class="row">
     <div class="col-12">
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Company</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                            <tr>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->company->name}}</td>
                                <td>{{$customer->active}}</td>
                                <td>
                                    <div class="row">
                                        <a href="/customers/{{$customer->id}}" class="btn btn-primary">Show</a>
                                        <a href="/customers/{{$customer->id}}/edit" class="btn btn-primary ml-2">Edit</a>
                                        <form action="/customers/{{$customer->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                        </form>
                                    </div>
                                    
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
     </div>
 </div>

   


   
@endsection
