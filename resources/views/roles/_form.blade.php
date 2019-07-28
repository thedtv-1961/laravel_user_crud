{{Form::label('name', trans('model.role.name.label'))}}
{{Form::text('name', $role->name, ['placeholder'=> trans('model.role.name.placeholder')])}}
