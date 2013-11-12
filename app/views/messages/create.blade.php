{{ Form::open(['method' => 'post', 'route' => 'messages.store']) }}
{{ Form::label('body', 'Message') }}
{{ Form::textarea('body') }}
{{ Form::submit('Submit') }}
{{ Form::close() }}
