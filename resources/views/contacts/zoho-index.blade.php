<!DOCTYPE html>
<html>
<head>
    <title>Zoho Contacts</title>
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
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        
        @foreach ($data as $key => $value)        
        <tr>
            
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
        </tr>
        @endforeach
    </table>
</div>
   
</body>
</html>