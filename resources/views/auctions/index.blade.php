
<div>
    <div>
    <div>
                <a href="{{ route('auctions.create') }}">Create An Auction</a>
                <br>
                <h2>Choose By A Category:</h2>
                @foreach ($categories_index as $category_index)
                <a href="{{ route('categories.show', $category_index->id) }}">{{ $category_index->name }}</a>
                @endforeach
                <br>
                <h2>Auctions:</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Categories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($auctions as $auction)
                        <tr>
                            <td>{{ $auction->name }}</td>
                            <td>{{ $auction->description }}</td>
                            <td>
                                @foreach ($auction->categories as $category)
                                {{ $category->name }}
                                @endforeach
                                </td>
                            <td>
                            <a href="{{ route('auctions.show', $auction->id) }}">Show</a>
                            <a href="{{ route('auctions.edit', $auction->id) }}">Edit</a>
                            <form action="{{ route('auctions.destroy', $auction->id) }}" method="post" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
