@extends('layouts.app')
@section('content')
@isset($job)
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="advertisement m-5">
                            <h5 class="card-text font-weight-bold text-center text-danger mt-2 ml-2">{{$job->title}}</h5>
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
@empty($job)
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <h4 class="list-group-item list-group-item-primary">There are no orders yet!</h4>
                    </div>
                </div>
            </div>
        </div>
@endempty
@endsection