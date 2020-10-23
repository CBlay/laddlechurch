@extends('layouts.app')

@section('title')
Contact Us | Innerlife Chapel NY
@endsection

@section('content')

@component('components.header')

Contact Us

@slot('content')
@if(session()->get('message1'))
    <div class="notification is-success is-light subtitle is-4">
      <button class="delete"></button>
       {{ session()->get('message1') }}
    </div>
@endif
<div class="columns">
  <div class="column"></div>
  <div class="column">
    <form method="post" action="{{ route('contact') }}" enctype="multipart/form-data">
<h1 class="title is-3">Send us a message</h1>
    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">From</label>
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control is-expanded has-icons-left">
            <input class="input" type="text" name="fromname" placeholder="Name">
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded has-icons-left has-icons-right">
            <input class="input is-success" name="email" type="email" placeholder="Email" value="alex@smith.com">
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span>
          </p>
        </div>
      </div>
    </div>


    <div class="field is-horizontal">
  <div class="field-label"></div>
  <div class="field-body">
    <div class="field is-expanded">
      <div class="field has-addons">
        <p class="control">
          <a class="button is-static">
            +
          </a>
        </p>
        <p class="control is-expanded">
          <input class="input" type="tel" name="tel" placeholder="Your phone number">
        </p>
      </div>
      <p class="help">Do not enter the first zero</p>
    </div>
  </div>
</div>



    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Subject</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input class="input is-danger" name="subject" type="text" placeholder="e.g. Prayer request">
          </div>
          <p class="help is-danger">
            This field is required
          </p>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Message</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <textarea class="textarea" name="message" placeholder="Explain how we can help you"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label">
        <!-- Left empty for spacing -->
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-primary">
              Send message
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>

  </div>
  <div class="column"></div>

</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
(document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
  $notification = $delete.parentNode;

  $delete.addEventListener('click', () => {
    $notification.parentNode.removeChild($notification);
  });
});
});
</script>
@endslot

@endcomponent

@endsection
