<x-head />
<x-navbar />
<x-dashboard>

  <form method="POST" action="{{ route('project.store') }}" class="form-group p-3 mt-5 pt-1">
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
   <input type="number" step="0.01" min="0"class="form-control my-2 @error('cost')
    is-invalid
    @enderror" value="{{ old('cost') }}" id="cost" name="cost" placeholder="Cost">
    @error('cost')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

      <select name="status" id="stusts" class="form-control">
          <option value="Wating">Wating</option>
          <option value="Starting">Starting</option>
          <option value="Cancelled">Cancelled</option>
          <option value="Delayed">Delayed</option>
          <option value="Finished">Finished</option>
      </select>




    <div class="row my-2">
        <div class="col-lg-2 my-auto label">
          <label for="start_date" class="text-secondary">Start Date</label>
        </div>
        <div class="col-lg-10">

          <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}" class="form-control @error('start_date')
          is-invalid
          @enderror">
          @error('start_date')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      <div class="row my-2">
        <div class="col-lg-2 my-auto label">
          <label for="end_date" class="text-secondary">End Date</label>
        </div>
        <div class="col-lg-10">

          <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}" class="form-control @error('end_date')
          is-invalid
          @enderror">
          @error('end_date')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>


    <textarea name="details" id="details" class="form-control my-2 @error('details')
        is-invalid
    @enderror"rows="4" placeholder="Details">{{ old('details') }}</textarea>
      @error('details')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror

    <div class="mt-3 py-3">
      <button type="submit" class="btn btn-primary w-25">Create Project</button>
      <a href="/receivable" class="btn btn-outline-dark w-25">Back</a>
    </div>

  </form>

</x-dashboard>

<x-footer />
