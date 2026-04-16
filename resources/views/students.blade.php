<h1>Students List</h1>

<ul>
@foreach($students as $student)
    <li>{{ $student }}</li>
@endforeach
</ul>

<a href="/">Home</a>