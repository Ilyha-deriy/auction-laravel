<div>
    <form method="POST" action="{{ route('auctions.store') }}" enctype="multipart/form-data">
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
        <div>
            <label for="description"> Desciption </label>
            <div>
                <input type="text" id="description" name="description" value="{{ old('description') }}"/>
            </div>
            @error('description')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
        </div>

    </div>
      <div>
        <label for="categories">Categories</label>
        <div>
            <select id="categories" name="categories[]"
                        multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('categories')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
        </div>
      </div>
      <div>
            <button type="submit">Store</button>
      </div>
    </form>
