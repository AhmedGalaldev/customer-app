
@extends('layouts.app')

@section('title','Customers')
    

@section('content')   
   <div class="row">
       <div class="col-12">
            <form action="{{route('customers.store')}}" method="POST" class="mb-5">
                
              @include('customers.form')
            </form>
       </div>
   </div>
  
@endsection
