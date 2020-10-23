@extends('layouts.app')

@section('title')
About Us | Innerlife Chapel NY
@endsection

@section('content')

@component('components.header')

About Us

@slot('content')
@foreach ($name as $about)
<h1 class="title is-1">{{ $about->title }}</h1>
<hr>
<p class="subtitle is-4">{{ $about->message }}</p>

@endforeach

@endslot

@endcomponent

@endsection
