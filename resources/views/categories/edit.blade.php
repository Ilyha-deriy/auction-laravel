<div>
    <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div>
            <label for="name"> Name </label>
            <div class="mt-1">
                <input type="text" id="name" name="name" value="{{ $category->name }}"/>
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
