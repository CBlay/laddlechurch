@extends('layouts.app')

@section('title')
Support Us | Innerlife Chapel NY
@endsection

@section('content')

@component('components.header')

Support Us

@slot('content')
<div class="columns">
  <div class="column"></div>
  <div class="column">
    <h1 class="title is-3">Support our efforts</h1>
    <p class="subtitle is-4">
We at Innerlife chapel endeavor to build up leaders to impact our generation and to preach the gospel throughout our lifetime.
We do this by investing our energies and resources. Every support is important. Please join us in our efforts.
  </p>
  <h3><a onclick="cashapp();" class="button is-large is-primary">Give</a></h3>
  </div>
  <div class="column"></div>
  <div class="modal" id="#modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head has-background-primary">
      <p class="modal-card-title">Cash App</p>
      <a class="delete" onclick="remove();" aria-label="close"></a>
    </header>
    <section class="modal-card-body">
      Funds may be transfered to <p class="subtitle is-3 is-info">Cashapp Account: $ICI2020</p>
    </section>
  </div>
</div>

</div>
<script>
  function cashapp() {
  var element = document.getElementById("#modal");
  element.classList.add("is-active");
}
</script>
<script>
function remove() {
var element = document.getElementById("#modal");
element.classList.remove("is-active");
}
</script>
@endslot

@endcomponent

@endsection
