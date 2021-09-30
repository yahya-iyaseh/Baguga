<x-head />
<x-navbar />
<x-dashboard>
    <form action="user/create" method="GET" class="my-3">
      @csrf
      <button class="btn btn-primary form-control" >Create New User</button>
</form>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">is_admin</th>
      </tr>
    </thead>
    @foreach ($users as $key => $user)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $user->first_name . " " . $user->last_name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @if ($user->is_admin)
                <p class="text-success">Admin</p>
                @else
                <p class="text-danger">Not Admin</p>
            @endif

        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
{{ $users->links() }}
</x-dashboard>
<x-footer />
