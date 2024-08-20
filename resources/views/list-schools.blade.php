<div>
    <h1>School list</h1>
    <form action="search" action="get">
        <input type="text" name="search" placeholder="Search with name">
        <button>Search</button>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>bash</td>
            <td>created_at</td>
            <td>Operation</td>
        </tr>
        @foreach($schools as $school)
        <tr>
            <td>{{ $school->name }}</td>
            <td>{{ $school->email }}</td
                <td>{{ $school->bash }}</td>
            <td>{{ $school->created_at }}</td>
            <td>{{ $school->updated_at }}</td>
            <td><a href="{{ 'delete/'.$school->id }}">Delete</a></td>
            <td><a href="{{ 'edit/'.$school->id }}">Edit</a></td>
        </tr>
        @endforeach


    </table>
</div>
