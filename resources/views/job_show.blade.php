@extends('layouts.app')
@section('content')
@isset($job)
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="advertisement m-5">
                            <div class="d-flex">
                                <div class="float-left pl-1 pt-1">
                                    <img src="{{asset('storage/'.$job->image)}}" width="100px" height="60px">
                                </div>
                                <div class="pl-5 pt-3">
                                    <h5 class="card-text font-weight-bold text-center text-danger mt-2 ml-2">{{$job->title}}</h5>
                                </div>
                            </div>
                            <hr>
                            {!!$job->description!!}
                        </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        </div>
@endisset
@endsection