<h1>Edit Contact</h1>

<form method="POST" action="/update/{{ $contact->id }}">
    @csrf

    Name:
    <input type="text" name="name" value="{{ $contact->name }}"><br><br>

    Email:
    <input type="email" name="email" value="{{ $contact->email }}"><br><br>

    <button type="submit">Update</button>
</form>