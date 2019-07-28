@extends('layouts.base')

@section('title')
    {{trans('page.role.index')}}
@endsection

@section('contain')
    @include('notifies._message')
    <a href="{{ route('roles.create') }}">{{trans('control.link.add_new')}}</a>
{{--    {{Form::open(['url'=>route('roles.index'), 'method'=>'get'])}}--}}
{{--    {{Form::text('name', null, ['placeholder'=>trans('control.textbox.search_by_name')])}}--}}
{{--    {{Form::submit(trans('control.button.search'))}}--}}
{{--    {{Form::close()}}--}}
    <table border="1">
        <thead>
        <tr>
            <th>{{trans('model.role.id.label')}}</th>
            <th>{{trans('model.role.name.label')}}</th>
            <th>{{trans('model.role.updated_at.label')}}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->updated_at->format('d/m/Y H:i:s')}}</td>
                <td>
                    <a href="{{route('roles.edit', $role->id)}}">{{trans('control.link.edit')}}</a>
                    |
                    {{Form::open(['url'=>route('roles.destroy', $role->id), 'method'=>'delete', 'style'=>'display: inline'])}}
                    {{Form::submit(trans('control.button.delete'), ['onclick'=>'return confirm("'.trans('message.confirm_delete').'")'])}}
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $roles->links() !!}}
@endsection
