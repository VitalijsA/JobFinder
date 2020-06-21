@extends('layouts.app')
@section('content')
<div class="row-fluid">
    <div class="container h-100">
    <div class="h1">
        All vacancies:
    </div>
        <div class="row">
            <div class="col-sm">
            @foreach($jobs as $job)
                <div class="card w-100 h-25 mb-3">
                        {{ $job->id }}
                        <br>
                        {{ $job->description }}
                </div>
            @endforeach
            <div class="justify-content-center">
                {{ $jobs->links() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection