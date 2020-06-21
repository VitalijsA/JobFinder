@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center w-100 p-7">
                    <a href="{{ url('/joblist') }}">Find a Job</a>
                </div>
            </div>
        <div class="col-md-6">
            <div class="card text-center">
                    <a href="{{ url('/create') }}">Create a Job</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
