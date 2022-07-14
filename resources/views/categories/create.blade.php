<div>
    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name"> Name </label>
            <div>
                <input type="text" id="name" name="name" value="{{ old('name') }}"/>
            </div>
            @error('name')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
        </div>
    </div>
      <div>
            <button type="submit">Store</button>
      </div>
    </form>
