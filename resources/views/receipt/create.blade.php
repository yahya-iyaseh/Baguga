<x-head />
<x-navbar />
<x-dashboard>

  <form method="POST" action="{{ route('receipt.store') }}" class="form-group p-3">
    {{ method_field('POST') }}
    {{-- @method_field('POST') --}}
    @csrf
    <div class="row my-2">
      <div class="col-lg-3 my-auto label">
        <label for="created_for">Choose the customer</label>
      </div>
      <div class="col-lg-9">
        <select name="created_for" id="created_for" class="form-control">
          @foreach (DB::table('users')->get() as $created_for)
            <option value="{{ $created_for->id }}" @if ($created_for->id === old('created_for'))
              selected
          @endif>{{ $created_for->first_name . ' ' . $created_for->last_name }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="row my-2">
      <div class="col-lg-3 my-auto label">
        <label for="created_for">Choose the type</label>
      </div>
      <div class="col-lg-9">
        <select name="type" id="type" class="form-control">
          <option value="P" @if ('P' === old('type'))
            selected
            @endif>Pull</option>
          <option value="D" @if ('D' === old('type'))
            selected
            @endif>Deposit</option>

        </select>
      </div>
    </div>

    <div class="row my-2">
      <div class="col-lg-3 my-auto label">
        <label for="created_for">Choose the type</label>
      </div>
      <div class="col-lg-9">
        <input type="number" step="0.01" class="form-control my-2 @error('amount')
    is-invalid
    @enderror" value="{{ old('amount') }}" id="amount" name="amount" placeholder="Amount" min="0" requiured>
        @error('amount')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <textarea name="note" id="note" class="form-control my-2 @error('note')
        is-invalid
    @enderror" rows="4" placeholder="Note!">{{ old('note') }}</textarea>
    @error('note')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    <div class="mt-3 py-3">
      <button type="submit" class="btn btn-primary w-25">Create Receipt</button>
      <a href="/receipt" class="btn btn-outline-dark w-25">Back</a>
    </div>

  </form>
  @if ($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
  @endif

</x-dashboard>

<x-footer />
