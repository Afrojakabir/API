@extends('adminlayout')
@section('links')
@endsection
@section('nav')

<div class="container">
  <h1 class="text-center">View Catetory</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-2">
    </div>
   <div class="col-md-8 card" style=" margin-top: 30px;" >
    <div class ="div1 card-body ">
      <table class="table container">
        <thead>
          <tr>
            <th scope="col">Category ID</th>
            <th scope="col">Category Name</th>
            
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
            @foreach($datas as  $data)
          <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->name}}</td>
            
            <td><a href="/category/{{ $data->id}}/edit" class="btn btn-default">Update</a></td>
            <td>
              <form method="POST" action="/category/{{ $data->id }}" >
              @method('DELETE')
              @csrf
              <div>
                <button type="submit" class="btn btn-danger " >Delete</button>
              </div>
              @include('errors')
              </form>
            </td>
          </tr>
               @endforeach
        </thead>
      </table>
    </div>
  </div>
</div>

 @endsection  
@section('footer')
@endsection

