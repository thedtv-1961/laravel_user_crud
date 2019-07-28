@extends('layouts.base')

@section('title')
    {{trans('page.role.create')}}
@endsection

@section('contain')
    @include('notifies._message')
    {{Form::open(['url'=> route('roles.store'), 'method'=>'post'])}}
    @include('roles._form')
    {{Form::submit(trans('control.button.save'))}}
    {{Form::close()}}
@endsection
