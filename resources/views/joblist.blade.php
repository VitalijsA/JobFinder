@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" >
<div class="row-fluid">
    <div class="container h-100">
    <div class="h1">
        All vacancies:
    </div>
        <div class="row">
            <div class="col-sm">
            @foreach($jobs as $job)
                <div class="card jobbox">
                        <div class="text-uppercase font-weight-bold mt-1 ml-5 color text-danger">{{ $job->title }}</div>
                        <div class="bg-info salary text-white">Salary: {{ $job->salary }} Eur</div>
                        <ul class="unlisted">
                        <li>
                            <img class="ml-5" src="{{asset('images/mail.png')}}" height= "13px", width="20px">
                            {{$job->emailaddress}}
                        </li>
                        <li class="ml-1">
                            <img class="ml-5 mr-1" src="{{asset('images/location.png')}}" height= "13px", width="10px">
                            {{$job->emailaddress}}
                        </li>
                        </ul>
                </div>
            @endforeach
            <div class="pagebut">
                {{ $jobs->links() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection