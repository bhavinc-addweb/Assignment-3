<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud Operaation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
        h1{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Product</h1>
<div class="container">          
  <table class="table table-striped">
  @csrf
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Delete</th>
      </tr>
    </thead>
   
    <tbody>
    @foreach($data as $row)
      <tr>
        <td>{{$row->Product_Name}}</td>
        <td>{{$row->Price}}</td>
        <td><form action="{{route('product.destroy',$row->id)}}" method="POST">
            @csrf
            @method('DELETE')
          <button class="btn btn-danger">Delete</button></td>
          </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  <center><a class="btn btn-info" href="{{route('product.create')}}" role="button">Insert</a>
</center>
</div>

</body>
</html>
