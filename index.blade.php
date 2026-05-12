<h2>Personal Info List</h2>
<a href="{{ route('personal.create') }}">Add New Entry</a>

<table border="1">
    <thead>
        <tr>
            <th>Name</th><th>Email</th><th>Age</th><th>Mobile</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($infos as $item)
        <tr>
            
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->age }}</td>
            <td>{{ $item->mobile }}</td>
            <td>
                <a href="{{ route('personal.edit', $item->id) }}">Edit</a>
                <form action="{{ route('personal.destroy', $item->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>