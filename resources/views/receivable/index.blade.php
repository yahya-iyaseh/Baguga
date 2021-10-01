<x-head />
<x-navbar />
<x-dashboard>
  <form action="receivable/create" method="GET" class="my-3">
    @csrf
    <button type="submit" class="btn btn-primary form-control">Create New Receivable</button>
  </form>
  @if (session()->has('message'))
    <div class="alert alert-success" role="alert">{{ session('message') }}</div>
  @endif
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">address</th>
        <th scope="col">phone</th>
        <th scope="col">Description</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    @foreach ($receivables as $key => $receivable)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $receivable->name }}</td>
        <td>{{ $receivable->address }}</td>
        <td>{{ $receivable->phone }}</td>
        <td>{{ $receivable->description }}</td>
        <th><a href="receivable/{{$receivable ->id}}/edit" class="btn btn-success">Edit</a></th>

      </tr>
    @endforeach
    </tbody>
  </table>
  {{ $receivables->links() }}
</x-dashboard>
<x-footer />



