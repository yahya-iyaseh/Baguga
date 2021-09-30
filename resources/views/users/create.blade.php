<x-head />
<x-navbar />
<x-dashboard>
  <form method="POST" action="{{ route('user.store') }}" class="form-group p-3">
    {{ method_field('POST') }}
    {{-- @method_field('POST') --}}
    @csrf
    <div class="row">

      <div class="col pr-1">
        <input type="text" class="form-control @error('first_name')
        is-invalid
        @enderror" value="{{ old('first_name') }}" id="first_name" name="first_name" placeholder="First Name" required>
      </div>
      @error('first_name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

      <div class="col pl-1">
        <input type="text" class="form-control @error('last_name')
        is-invalid
        @enderror" value="{{ old('last_name') }}" id="last_name" name="last_name" placeholder="Last Name" required>
      </div>
      @error('last_name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror

    </div>

    <input type="email" class="form-control my-2 @error('email')
    is-invalid
    @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="Email" requiured>
    @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror


    {{-- <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

      <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>

    <div class="form-group row">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

      <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
    </div> --}}
    <input type="password" class="form-control my-2 @error('password')
    is-invalid
    @enderror" value="{{ old('password') }}" id="password" name="password" placeholder="Password" required>
    @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    <input type="password" class="form-control my-2 @error('password-confirm')
    is-invalid
    @enderror" value="{{ old('password-confirm') }}" id="password-confirm" name="password_confirmation" placeholder="confirm password" required
      autocomplete="new-password">
    @error('password-confirm')
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

    <select name="gender" id="gender" class="form-control custom-select">
      <option value="male" selected>Male</option>
      <option value="female">Female</option>
    </select>
    {{-- <div class="row">
      <div class="col-3">
        <label for="radio" class="label text-center text-secondary">Gender</label>
      </div>
      <div class="col">
        <div class="form-check form-check-inline">

          <input class="form-check-input @error('')
            is-invalid
          @enderror" type="radio" name="gender" id="male" value="male" checked>
          @error('')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <label class="form-check-label text-secondary" for="gender">Male</label>
        </div>
        <div class="form-check form-check-inline">

          <input class="form-check-input @error('')
            is-invalid
          @enderror" type="radio" name="gender" id="gender" value="female">
          @error('')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <label class="form-check-label text-secondary" for="female">Female</label>
        </div>
      </div>
    </div> --}}

    <input type="text" class="form-control my-2 @error('phone')
    is-invalid
    @enderror" value="{{ old('phone') }}" id="phone" name="phone" placeholder="Phone">
    @error('phone')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

    <input type="text" class="form-control my-2 @error('phone_two')
    is-invalid
    @enderror" value="{{ old('phone_two') }}" id="phone_two" name="phone_two" placeholder="Phone two">
    @error('phone')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

    <div class="row my-2">
      <div class="col-lg-2 my-auto label">
        <label for="birth_date" class="text-secondary">Birth Date</label>
      </div>
      <div class="col-lg-10">

        <input type="date" id="birth_date" value="{{ old('birth_date') }}" class="form-control @error('birth_date')
        is-invalid
        @enderror">
        @error('birth_date')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>

    <div class="row">
      <div class="col-lg-2 my-auto label">
        <label for="hire_date" class="text-secondary">Hire Date</label>
      </div>
      <div class="col-lg-10">

        <input type="date" id="hire_date" value="{{ old('hire_date') }}" class="form-control @error('hire_date')
                    is-invalid
                @enderror">
        @error('hire_date')
          <span class="inavlid-alert" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>

    <div class="row my-2">
      <div class="col-lg-2 my-auto label">
        <label for="check" class="text-secondary">Is Admin?</label>
      </div>
      <div class="col-lg-10">

        <input type="checkbox" id="check" class="my-2 ml-2 @error('is_admin')
        is-invalid
        @enderror" value="1" id="is_admin" name="is_admin" placeholder="is admin">
        @error('is_admin')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="mt-3 py-3">
      <button type="submit" class="btn btn-primary w-25">Create User</button>
      <a href="/user" class="btn btn-outline-dark w-25">Back</a>
    </div>

  </form>


</x-dashboard>





<x-footer />
