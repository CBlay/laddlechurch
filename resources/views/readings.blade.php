@extends('layouts.app')

@section('title')
Readings | Innerlife Chapel NY
@endsection

@section('content')

@component('components.header')

Readings

@slot('content')

@foreach ($name as $about)

<h1 class="title has-text-centered has-text-primary is-5">
  Scripture readings for this period
</h1>
    <article class="message is-primary">
      <div class="message-header">
        <p>{{ $about->title }}</p>
        <small>{{ $about->dte }}</small>
      </div>
      <div class="message-body">
        <strong>{{ $about->message }}</strong>
        <br>
        <small class="has-text-primary">{{ $about->name }}</small>
      </div>
    </article>

    @endforeach


@endslot

@endcomponent

@endsection
