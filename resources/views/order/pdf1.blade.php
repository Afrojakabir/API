<!DOCTYPE html>
<html>
<head>
  <title>E-commerce</title>
  <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
  </head>
  <body>


    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center"><strong>Order Summary</strong></h3>
          </div>
          <br>
          <br>
          <br>
          <div class="panel-body">
            
            <div class="table-responsive">
           <table class="table container">
  <thead>
    <tr>
     <th scope="col">Order ID</th>
     <th scope="col">User Id</th>
     <th scope="col">User Address</th>
     <th scope="col">User Mobile no.</th>
     <th scope="col">Payment Type</th>
     <th scope="col">Price</th>
     <th scope="col">Order Status</th>

    </tr>
     @foreach($datas as  $data)
    <tr>
      <td>{{ $data->id }}</td>
      <td>{{ $data->user_id}}</td>
      <td>{{ $data->address}}</td>
      <td>{{ $data->phone_no}}</td>
      <td>{{ $data->payment}}</td>
      <td>{{ $data->total_price}}</td>
      <td>{{ $data->status}}</td>
     
    </tr>
      @endforeach
  </thead>
</table>
            </div>
        
          </div>
        </div>
      </div>
    </div>

</body>
</html>