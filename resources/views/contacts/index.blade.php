<!DOCTYPE html>
<html>
<head>
    <title> Contact add in Zoho CRM</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Job Title</th>
            <th>City</th>
            <th>Country</th>
            <th width="280px">Action</th>
        </tr>
        
        @foreach ($data as $key => $value)        
        <tr>
            
            <td>{{$value->id}}</td>
            <td>{{$value->first_name}} {{$value->last_name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->job_title}}</td>
            <td>{{$value->city}}</td>
            <td>{{$value->country}}</td>
            <td>
                <a href="{{ route('contacts.edit',$value->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $value->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('zohocrmauth', ['id' => $value->id]) }}">Add Contact in ZOHO</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

</body>
</html>