@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center w-100 p-7 choice">
                    <a class="button button2" href="{{ url('/joblist') }}">Find a Job</a>
                </div>
            </div>
        <div class="col-md-6">
            <div class="text-center option">
                    <a class="button button2" href="{{ url('/create') }}">Create a Job</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
