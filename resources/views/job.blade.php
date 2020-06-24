@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <h4 class="list-group-item list-group-item-primary">Add a new vacancy:</h4>
                    <div class="card-body">
                            {{ Form::open(['action' => 'JobController@store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
                        @csrf
                            <div class="form-group row">
                            {{ Form::label('title', 'Title', ['class' => 'col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('title', '', ['class' => 'form-control '.($errors->has('title') ? ' is-invalid' : '')]) }}
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('title') }}</strong>
                            </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('category', 'Category', ['class' => 'col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6 mt-1">
                            {{ Form::select('category', array('Part-time' => 'Part-time', 'Full-time' => 'Full-time'), 'Full-time') }}
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('salary', 'Salary', ['class' => 'col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('salary', '', ['class' => 'form-control '.($errors->has('salary') ? ' is-invalid' : '')]) }}
                                @if ($errors->has('salary'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('salary') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('emailaddress', 'Email address', ['class' => 'col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('emailaddress', '', ['class' => 'form-control '.($errors->has('emailaddress') ? ' is-invalid' : '')]) }}
                                @if ($errors->has('emailaddress'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('emailaddress') }}</strong>
                            </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('phonenum', 'Phone number', ['class' => 'col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::number('phonenum', '', ['class' => 'form-control '.($errors->has('phonenum') ? ' is-invalid' : '') ]) }}
                                @if ($errors->has('phonenum'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('phonenum') }}</strong>
                                </span>
                                @endif
                            </div>
                            </div>
                        <div class="form-group row">
                        {{ Form::label('dateuntil', 'Date until', ['class' => 'col-md-4 control-label text-md-right']) }}
                        <div class="col-md-6">
                        {{ Form::date('dateuntil', '', ['class' =>  'input form-control '.($errors->has('dateuntil') ? ' is-invalid' : '')]) }}
                        @if ($errors->has('dateuntil'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('dateuntil') }}</strong>
                            </span>
                        @endif
                        </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('description', 'Description', ['class' => 'col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::textarea('description', '', ['name'=> 'description', 'id'=> 'textarea', 'class' => 'form-control '.($errors->has('description') ? ' is-invalid' : '') ]) }}
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('descrption') }}</strong>
                                </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('image', 'Add an image', ['class' => 'col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::file('image', ['name'=> 'image' .($errors->has('image') ? ' is-invalid' : '') ]) }}
                                @if ($errors->has('image'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
                            </div>
                            </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                {{ Form::submit('Post vacancy', ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection