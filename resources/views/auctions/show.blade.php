

<div>
    <div>
    <div>
                <a href="{{ route('auctions.index') }}" class="btn btn-primary mb-2">Go back to all auctions</a>
                <br>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Categories</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $auction->name }}</td>
                            <td>{{ $auction->description }}</td>
                            <td>
                            @foreach ($auction->categories as $category)
                            {{ $category->name }}
                            @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>
