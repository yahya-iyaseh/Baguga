<x-head />
<x-navbar />
<x-dashboard>

  <form method="POST" action="{{ route('receivable.store') }}" class="form-group p-3 mt-5 pt-1">
    {{ method_field('POST') }}
    @csrf

    <input type="text" class="form-control @error('name')
        is-invalid
        @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="Name" required>
    @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror


    <input type="text" class="form-control my-2 @error('address')
    is-invalid
    @enderror" value="{{ old('address') }}" id="address" name="address" placeholder="Address">
    @error('address')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror


    <input type="text" class="form-control my-2 @error('phone')
    is-invalid
    @enderror" value="{{ old('phone') }}" id="phone" name="phone" placeholder="Phone">
    @error('phone')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

    <textarea name="description" id="description" class="form-control my-2 @error('description')
        is-invalid
    @enderror"rows="4" placeholder="Description">{{ old('description') }}</textarea>
      @error('description')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

    <div class="mt-3 py-3">
      <button type="submit" class="btn btn-primary w-25">Create Receivable</button>
      <a href="/receivable" class="btn btn-outline-dark w-25">Back</a>
    </div>

  </form>

</x-dashboard>

<x-footer />
