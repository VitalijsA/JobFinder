@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" >
<div class="row-fluid">
@if(!$jobs->isEmpty())
    <div class="container h-100">
    <div class="h1">
    {{ __('My posted vacancies') }}
    </div>
        <div class="row">
            <div class="col-sm">
            @foreach($jobs as $job)
                <div class="bg-white border border-secondary d-flex mt-1 p-2">
                        <div class="float-left pl-1 pt-1">
                            <img src="{{asset('storage/'.$job->image)}}" width="130px" height="90px">
                        </div>
                        <div class="ml-3 p-0">
                            <div>
                                <button id="title" class="btn pl-5 pt-0 pb-0 text-uppercase font-weight-bold text-left text-danger" type="button" onclick="window.location='{{ route('joblist.show', $job->id)}}'">{{ $job->title }}</button>
                            </div>
                            <div class="bg-info text-white w-50">
                            <span class="ml-1 w-25 bg-info text-white">{{ __('messages.Salary') }} {{ $job->salary }} Eur</span>
                            </div>
                            <ul>
                                <li>
                                    <img src="{{asset('images/mail.png')}}" height= "13px", width="20px">
                                    {{$job->emailaddress}}
                                </li>
                                <li class="ml-1 p-0">
                                    <img class="mr-1" src="{{asset('images/location.png')}}" height= "13px", width="10px">
                                    {{$job->emailaddress}}
                                </li>
                            </ul>
                        </div>
                        <div class="float-right ml-5" style="">
                        <ul>
                                <li>
                                <a class="d-block p-2" href="{{action('JobController@edit', $job->id)}}">Edit</a></li>
                                </li>
                                <li>
                                <a class="d-block p-2" href="{{action('JobController@destroy', $job->id)}}">Delete</a></li>
                                </li>
                            </ul>
                        </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-sm">
                        <h4 class="list-group-item ">You have no active vacancies yet!</h4>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection