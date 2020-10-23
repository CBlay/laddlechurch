@extends('layouts.app')

@section('title')
Members | Innerlife Chapel NY
@endsection

@section('content')

@component('components.header')

Members

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
  <h1 class="title is-3 has-text-primary">
    Quick register for members
  </h1>
  <form method="POST" action="{{ route('members') }}">
      @csrf

      <div class="field">
          <label class="label" for="email">{{ __('Name') }}</label>
          <div class="control">
              <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          </div>

          @error('name')
              <p class="help is-danger" role="alert">
                  {{ $message }}
              </p>
          @enderror
      </div>


                    <div class="field">
                        <label class="label" for="email">Phone</label>
                        <div class="control">
                            <input type="tel" class="input @error('name') is-danger @enderror" name="tel" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        @error('name')
                            <p class="help is-danger" role="alert">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

      <div class="field">
          <label class="label" for="email">{{ __('E-Mail Address') }}</label>
          <div class="control">
              <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">
          </div>
          @error('email')
              <p class="help is-danger" role="alert">
                  {{ $message }}
              </p>
          @enderror
      </div>

      <hr>

      <div class="field is-form-action-buttons">
          <button type="submit" class="button is-primary">
              Register
          </button>
      </div>
  </form>
  </div>
  <div class="column"></div>
  </div>

@endslot

@endcomponent

@endsection
