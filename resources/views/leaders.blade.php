@extends('layouts.app')

@section('title')
Leaders | Innerlife Chapel NY
@endsection

@section('content')

@component('components.header')

Leaders

@slot('content')

<div class="columns">
  @foreach ($leaders as $name)
<div class="column">
<div class="card">
  <div class="card-content">
    <p class="title">
      “{{ $name->message }}”
    </p>
    <p class="subtitle has-text-primary">
      {{ $name->name }}
    </p>
  </div>
  <footer class="card-footer">
    <p class="card-footer-item">
      <span>
        Email on <a href="">{{ $name->email }}</a>
      </span>
    </p>
    <p class="card-footer-item">
      <span>
        Role <a href="#">{{ $name->role }}</a>
      </span>
    </p>
  </footer>
</div>
</div>
@endforeach

</div>




@endslot

@endcomponent

@endsection
