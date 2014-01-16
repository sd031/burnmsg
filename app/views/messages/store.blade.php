@extends('layouts.default')

@section('content')
<div class="alert alert-success">
    Your message has been saved.
    Here is the URL <a href="{{ secure_url('/' . $url . '/' . $key) }}" class="byline">{{ secure_url('/' . $url . '/' . $key)}}</a>
</div>
@stop
