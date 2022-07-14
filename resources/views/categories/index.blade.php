
<div>
    <div>
    <div>
                <a href="{{ route('categories.create') }}">Create A Category</a>
                <br>
                <h2>Categories:</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>
                            <a href="{{ route('categories.show', $category->id) }}">Show</a>
                            <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post" onsubmit="return confirm('Are you sure?');">
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
</div
