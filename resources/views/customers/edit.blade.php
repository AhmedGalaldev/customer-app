
@extends('layouts.app')

@section('title','Edit '.$customer->name)
    

@section('content')  
<h2>Edit {{$customer->name}}</h2> 
   <div class="row">
       <div class="col-12">
         {{-- action="/customers/{{$customer->id}}" --}}
            <form action="{{route('customers.edit',['customer',$customer])}}" method="POST" class="mb-5">
                @method('PATCH')
              @include('customers.form')
            </form>
       </div>
   </div>
  
@endsection
