@extends('layouts.app')

@section('title','Contact Us')

@section('content')
    @if (!session()->has('message'))
    {{-- action="{{url('/contact')}}" --}}
        <form action="{{route('contact.store')}}" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name"  value="{{old('name') }}" class="form-control">
            </div>
            <div class="text-danger">{{$errors->first('name')}}</div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control">
            </div>
            <div class="text-danger">{{$errors->first('email')}}</div>

                 <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="" class="form-control"></textarea>
                </div>
             <div class="text-danger">{{$errors->first('message')}}</div>
            <button type="submit" class="btn btn-primary">Send Message</button>
            @csrf
    </form>     
    @endif
@endsection
