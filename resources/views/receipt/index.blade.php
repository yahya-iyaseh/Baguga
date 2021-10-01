<x-head/>
<x-navbar/>
<x-dashboard>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
    <form action="/receipt/create" method="GET" class="my-3">
    @csrf
    <button type="submit" class="btn btn-primary form-control">Create New Receipt</button>
  </form>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">The Actor</th>
        <th scope="col">Amount</th>
        <th scope="col">Note</th>
      </tr>
    </thead>
    @foreach ($receipts as $key => $receipt)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $receipt->user->first_name . " " . $receipt->user->last_name }}</td>
        <td style="{{ $receipt->type == 'P' ? "color:#FF4848" : "color:#71EFA3" }}">{{ $receipt->amount }}</td>
        <td>{{ $receipt->note }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  {{ $receipts->links() }}

</x-dashboard>

<x-footer/>
