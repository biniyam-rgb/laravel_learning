<h1>All Contacts</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>

    @foreach($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
         <td>
        <a href="/delete/{{ $contact->id }}">Delete</a>
    </td>
    <td>
    <a href="/edit/{{ $contact->id }}">Edit</a>
</td>
    </tr>
    @endforeach
</table>

<a href="/contact">Add New</a>