
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <style>
        h1{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
   <h1>Add Product</h1>
<div class="container">
  <form action="{{route('product.store')}}" method="POST">
  @csrf
    <div class="form-group">
      <label for="Name">Enter Product:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Product Name" name="product">
    </div><div class="form-group">
      <label for="Price">Enter Price:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Price" name="price">
   
    <center><input type="submit" class="btn btn-info" value="ADD" name="submit"></center>
  </form>
</div>

</body>
</html>
