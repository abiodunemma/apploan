<h2>
 @if   (session('name'))
<h2>welcome, {{ session('name')}}</h2>
@else
<h2>no user</h2>

@endif

</h2>
<a href="logout">logout</a>
