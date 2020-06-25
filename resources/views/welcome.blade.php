@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-white pt-5">{{ __('messages.Active_vacancies_right_now') }}: {{$count}}</h1>
    </div>
</div>
@endsection
