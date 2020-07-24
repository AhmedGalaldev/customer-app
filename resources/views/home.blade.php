@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- add style in app.scss --}}
                  {{-- <div class="new-class">{{ __('You are logged in!') }}</div>   --}}
                  <button-component text="My Button" type="submit"></button-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
