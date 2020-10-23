@component('components.adminapp')
@slot('title')
Admin New Here | InnerlifeChapelbx
@endslot
<h1 class="title is-3">Message for newcomers</h1><hr>
<form method="post" action="{{ route('newhere') }}" enctype="multipart/form-data">
<div class="field">
  <label class="label">Title</label>
  <div class="control">
    <input class="input @error('title1') is-invalid @enderror" name="title1" type="text" autocomplete="title1" autofocus placeholder="Title">
    @error('title1')
        <span class="invalid-feedback" role="alert">
            <strong class="has-text-danger">{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>


<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea @error('message1') is-invalid @enderror" name="message1" type="text" autocomplete="message1" autofocus placeholder="Write a message for newcomers here"></textarea>
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
