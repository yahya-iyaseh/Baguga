<x-head />
<x-navbar />
<x-dashboard>
  <form action="customer/create" method="GET" class="my-3">
    @csrf
    <button type="submit" class="btn btn-primary form-control">Create New Customer</button>
  </form>
  @if (session()->has('message'))
    <div class="alert alert-success" role="alert">{{ session('message') }}</div>
  @endif
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">coming_from</th>
        <th scope="col">address</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>
      </tr>
    </thead>
    @foreach ($Customers as $key => $Customer)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $Customer->name }}</td>
        <td>{{ $Customer->coming_from }}</td>
        <td>{{ $Customer->address }}</td>
        <td>{{ $Customer->phone }}</td>
        <td>{{ $Customer->email }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{ $Customers->links() }}
</x-dashboard>
<x-footer />


