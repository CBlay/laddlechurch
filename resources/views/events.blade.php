@extends('layouts.app')

@section('title')
Events | Innerlife Chapel NY
@endsection

@section('content')

@component('components.header')

Events

@slot('content')
@foreach ($name as $newuser)
<h1 class="title is-1">{{ $newuser->title }}</h1>
<time datetime="{{ $newuser->dte }}" class="subtitle is-bold is-5"><strong>{{ $newuser->dte }}</time></p>
<hr>
<p class="subtitle is-4">{{ $newuser->message }}</p><hr>

@endforeach
@endslot

@endcomponent

@endsection
