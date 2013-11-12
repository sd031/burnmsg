@extends('layouts.default')

@section('content')
Your message has been saved.
Here is the URL <a href="{{ route('messages.show', [$url, $key]) }}">{{ route('messages.show', [$url, $key]) }}</a>
@stop
