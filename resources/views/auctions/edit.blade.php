<div>
    <form method="POST" action="{{ route('auctions.update', $auction->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div>
            <label for="name"> Name </label>
            <div class="mt-1">
                <input type="text" id="name" name="name" value="{{ $auction->name }}"/>
            </div>
            @error('name')
                <div class="text-sm text-red-400">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description"> Desciption </label>
            <div class="mt-1">
                <input type="text" id="description" name="description" value="{{ $auction->description }}"/>
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
                            <option value="{{ $category->id }}"
                                @selected($auction->categories->contains($category))>{{ $category->name }}</option>
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
