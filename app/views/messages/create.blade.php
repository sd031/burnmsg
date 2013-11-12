@extends('layouts.default')

@section('content')
{{ Form::open(['method' => 'post', 'route' => 'messages.store', 'class' => 'form']) }}
<div class="form-group">
    {{ Form::label('body', 'Message') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</div>
@stop
