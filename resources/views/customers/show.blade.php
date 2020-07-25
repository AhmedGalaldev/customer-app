
@extends('layouts.app')

@section('title','Details for '.$customer->name)
    

@section('content')   
<div class="row">
    <div class="col-12">
        <h1>Details for {{$customer->name}}</h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h1><a href="/customers/{{$customer->id}}/edit" class="btn btn-primary">Edit Customer {{$customer->name}}</a></h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h1><a href="/customers" class="btn btn-primary">Customers List</a></h1>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="/customers/{{$customer->id}}" method="POST">
            @csrf
            @method('Delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p>{{$customer->name}}</p>
        <p>{{$customer->email}}</p>
        <p>{{$customer->company->name}}</p>
    </div>
</div>
@if ($customer->image)
    <div class="row">
    <div class="col-12">
        <img src="{{asset('storage/'.$customer->image)}}" alt="" class="img-thumbnail">
    </div>
</div>
@endif

   
@endsection
