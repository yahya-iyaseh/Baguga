<x-head />
<x-navbar />
<x-dashboard>
    <form action="project/create" method="GET" class="my-3">
        @csrf
        <button type="submit" class="btn btn-primary form-control">Create New project</button>
      </form>
      @if (session()->has('message'))
        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
      @endif
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">details</th>
            <th scope="col">cost</th>
            <th scope="col">start_date</th>
            <th scope="col">end_date</th>
            <th scope="col">status</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        @foreach ($Projects as $key => $Project)
          <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $Project->name }}</td>
            <td>{{ $Project->details }}</td>
            <td>{{ $Project->cost }}</td>
            <td>{{ $Project->start_date }}</td>
            <td>{{ $Project->end_date }}</td>
            <td>{{ $Project->status }}</td>
            <th><a href="project/{{$Project->id}}/edit" class="btn btn-success">Edit</a></th>
          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $Projects->links() }}
    </x-dashboard>
    <x-footer />
