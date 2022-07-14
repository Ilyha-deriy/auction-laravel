
<div>
    <div>
    <div>
                <a href="{{ route('categories.index') }}">Go back to all categories</a>
                <br>
                <br>
                <a href="{{ route('auctions.index') }}">Go back to all auctions</a>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category->auctions as $auction)
                        <tr>
                            <td>{{ $auction->name }}</td>
                            <td>{{ $auction->description }}</td>
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
