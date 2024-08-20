 <div>
    <h1>Update Schools </h1>

    <form action="/edit-student/{{$data->id}}" method="POST">
        <input type="hidden" name=" _method" value="put"/>
        @csrf
        <input type="text" name="name" value="{{$data->name }}" placeholder"Enter name" />
<br></br>
<input type="text" name="email" value="{{$data->email }}" placeholder"Enter email" />
<br></br>
<input type="text" name="bash" value="{{$data->bash }}" placeholder"Enter bash" />
<br></br>
<button type="submit">update profile</button>
<a href="/list">cancel</a>
    </form>
 </div>
