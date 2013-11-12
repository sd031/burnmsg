@extends('layouts.default')

@section('content')
<div class="alert alert-success">
    Your message has been saved.
    Here is the URL <a href="{{ route('messages.show', [$url, $key]) }}">{{ route('messages.show', [$url, $key]) }}</a>
</div>
@stop
