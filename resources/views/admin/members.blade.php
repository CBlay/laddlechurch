
@component('components.adminapp')
@slot('title')
Admin Members | InnerlifeChapelbx
@endslot
<h1 class="title is-3 has-text-primary">List of church members appear here</h1><hr>
<div class="table-container subtitle is-4">
<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
  <thead>
    <tr>
      <th><abbr title="ID">ID</abbr></th>
      <th><abbr title="Name">Name</abbr></th>
      <th><abbr title="Recipient">Email</abbr></th>
      <th><abbr title="Phone">Phone</abbr></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($members as $rr)
    <tr>
      <th>{{ $rr->id }}</th>
      <td>{{ $rr->name }}</td>
      <td>{{ $rr->email }}</td>
      <td>{{ $rr->tel }}</td>
    </tr>
    @endforeach
  </tbody>

</table>
</div>

@endcomponent
