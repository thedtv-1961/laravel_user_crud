@extends('layouts.base')

@section('title')
    {{trans('page.role.edit')}}
@endsection

@section('contain')
    @include('notifies._message')
    {{Form::open(['url'=> route('roles.update', $role->id), 'method'=>'put'])}}
    @include('roles._form')
    {{Form::submit(trans('control.button.update'))}}
    {{Form::close()}}
@endsection
