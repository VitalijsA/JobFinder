@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <h4 class="list-group-item list-group-item-primary">{{ __('Edit vacancy') }}:</h4>
                    <div class="card-body">
                            {{ Form::open(['action' => 'JobController@update', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}
                            {{ Form::hidden('job_id', $job->id) }}
                        @csrf
                            <div class="form-group row">
                            {{ Form::label('title', __('messages.Title'), ['class' => 'col-md-4 control-label pt-2 text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('title', $job->title, ['class' => 'form-control '.($errors->has('title') ? ' is-invalid' : '')]) }}
                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('title') }}</strong>
                            </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('category', __('messages.Category'), ['class' => 'col-md-4 pt-1 control-label text-md-right']) }}
                            <div class="col-md-6 mt-1">
                            {{ Form::select('category', array('Part-time' => 'Part-time', 'Full-time' => 'Full-time'), 'Full-time') }}
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('salary', __('messages.Salary'), ['class' => 'col-md-4 pt-2 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('salary', $job->salary, ['class' => 'form-control '.($errors->has('salary') ? ' is-invalid' : '')]) }}
                                @if ($errors->has('salary'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('salary') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('emailaddress', __('messages.Email_address'), ['class' => 'pt-2 col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('emailaddress', $job->emailaddress, ['class' => 'form-control '.($errors->has('emailaddress') ? ' is-invalid' : '')]) }}
                                @if ($errors->has('emailaddress'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('emailaddress') }}</strong>
                            </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('phonenum', __('messages.Phone_number'), ['class' => 'pt-2 col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::number('phonenum', $job->phonenum, ['class' => 'form-control '.($errors->has('phonenum') ? ' is-invalid' : '') ]) }}
                                @if ($errors->has('phonenum'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('phonenum') }}</strong>
                                </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('city', __('messages.City'), ['class' => 'pt-2 col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('city', $job->city, ['class' => 'form-control '.($errors->has('city') ? ' is-invalid' : '') ]) }}
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('street', __('messages.Street'), ['class' => 'pt-2 col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::text('street', $job->street, ['class' => 'form-control '.($errors->has('street') ? ' is-invalid' : '') ]) }}
                                @if ($errors->has('street'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('street') }}</strong>
                                </span>
                                @endif
                            </div>
                            </div>
                        <div class="form-group row">
                        {{ Form::label('dateuntil', __('messages.Date_until'), ['class' => 'pt-2 col-md-4 control-label text-md-right']) }}
                        <div class="col-md-6">
                        {{ Form::date('dateuntil', $job->dateuntil, ['class' =>  'input form-control '.($errors->has('dateuntil') ? ' is-invalid' : '')]) }}
                        @if ($errors->has('dateuntil'))
                            <span class="invalid-feedback">
                            <strong>{{ $errors->first('dateuntil') }}</strong>
                            </span>
                        @endif
                        </div>
                        </div>
                        <div class="form-group row">
                            {{ Form::label('description', __('messages.Description'), ['class' => 'pt-2 col-md-4 control-label text-md-right']) }}
                            <div class="col-md-6">
                                {{ Form::textarea('description', $job->description, ['name'=> 'description', 'id'=> 'textarea', 'class' => 'form-control '.($errors->has('description') ? ' is-invalid' : '') ]) }}
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback">
                            <strong>{{ $errors->first('descrption') }}</strong>
                                </span>
                                @endif
                            </div>
                            </div>
                            <div class="form-group row">
                            {{ Form::label('image', __('messages.Add_an_image'), ['class' => 'pt-1 col-md-4 control-label text-md-right']) }}
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
                                {{ Form::submit(__('Save changes'), ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection