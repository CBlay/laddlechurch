@component('components.adminapp')
@slot('title')
Admin Leaders | InnerlifeChapelbx
@endslot
<h1 class="title is-3">Church Leaders</h1><hr>
<form method="post" action="{{ route('leaders') }}" enctype="multipart/form-data">
<div class="field">
  <label class="label">Role</label>
  <div class="control">
    <input class="input @error('title1') is-invalid @enderror"  name="role" type="text" autocomplete="title1" autofocus placeholder="Title">
    @error('role')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">Name of Leader</label>
  <div class="control">
    <input class="input @error('name') is-invalid @enderror" name="name" type="text" autofocus placeholder="Name of leader">
    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input" name="email" type="email" autocomplete="title1" autofocus placeholder="Email">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>


<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea @error('message1') is-invalid @enderror" name="message1" type="text" autocomplete="message1" autofocus placeholder="Write a message about leader here"></textarea>
    @error('message1')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>


<div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link">Post</button>
  </div>
</div>
</form>
@endcomponent
