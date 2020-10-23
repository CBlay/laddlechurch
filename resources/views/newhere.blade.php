@extends('layouts.app')

@section('title')
New Here | Innerlife Chapel NY
@endsection

@section('content')

@component('components.header')

New Here
@slot('content')
  @foreach ($name as $newuser)
<h1 class="title is-1">{{ $newuser->title }}</h1>
<hr>
<p class="subtitle is-4">{{ $newuser->message }}</p>

@endforeach

@endslot

@endcomponent

@endsection
