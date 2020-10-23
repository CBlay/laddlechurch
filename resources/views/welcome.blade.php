@extends('layouts.app')

@section('title')
Home | Innerlife Chapel NY
@endsection
@section('content')
<section class="hero is-primary is-fullheight" style="background-image: url('background.jpg')">
<div class="hero-body">
<div class="container has-text-centered">
  <h1 class="title is-1">
    Preaching the Gospel. Making Disciples.
  </h1>
  <h2 class="subtitle is-3">
    Worship with us on Sundays at 10am
  </h2>
  <h3><a href="new-here" class="button is-large is-primary">New Here</a></h3>
</div>
</div>
</section>

<section class="hero" style="background-color:#E9D6D6;">
<div class="hero-body">
  <h1 class="title has-text-centered has-text-primary is-3">
    Scripture readings
  </h1>
  <div class="columns">
    @foreach ($readings as $about)
    <div class="column">
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
    </div>
    @endforeach
  </div><br>
  <small class="subtitle is-5 is-pulled-left">
    <a href="readings" class="button is-small is-primary">All readings</a>
  </small>
</div>
</section>


<section class="hero is-primary is-medium" style="background-image: url('background2.jpg')">
<div class="hero-body">
<div class="container has-text-centered">
  <h1 class="title is-1">
    Get Involved
  </h1>
  <h2 class="subtitle is-3">
    We here at Innerlife chapel seek to raise God inspired leaders to impact generations.  </h2>
  <h3><a href="events" class="button is-large is-primary">See opportunities to serve</a></h3>
</div>
</div>
</section>
@endsection
