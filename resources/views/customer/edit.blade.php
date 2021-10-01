<x-head />
<x-navbar />
<x-dashboard>
  <form method="POST" action="/customer/{{$Customer->id}}" class="form-group p-3 mt-5 pt-1">
    {{ method_field('POST') }}
    @method('PUT')
    @csrf
    <input type="text" class="form-control @error('name')
        is-invalid
        @enderror" value="{{ $Customer->name }}" id="name" name="name"  placeholder="Name" required>
    @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror


    <input type="text" class="form-control my-2 @error('coming_from')
    is-invalid
    @enderror" value="{{ $Customer->coming_from }}" id="coming_from" name="coming_from" value="{{$Customer ->coming_from}}" placeholder="Coming From">
    @error('coming_from')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    <input type="text" class="form-control my-2 @error('address')
    is-invalid
    @enderror" value="{{ $Customer->address}}" id="address" name="address" value="{{$Customer ->address}}"  placeholder="Address">
    @error('coming_from')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    <input type="text" class="form-control my-2 @error('phone')
    is-invalid
    @enderror" value="{{$Customer->phone}}" id="phone" name="phone" value="{{$Customer ->phone}}" placeholder="Phone">
    @error('phone')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

    <textarea name="email" id="email" class="form-control my-2 @error('email')
        is-invalid
    @enderror"rows="4" placeholder="email">{{ $Customer->email }}</textarea>
      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

    <div class="mt-3 py-3">
      <button type="submit" class="btn btn-primary w-25">Edit Customer</button>
      <a href="/customer" class="btn btn-outline-dark w-25">Back</a>
    </div>

  </form>

</x-dashboard>

<x-footer />
