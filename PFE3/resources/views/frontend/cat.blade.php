@extends('layouts.master')

@section('content')


<div class="container top_cars">
    <h1 >Page Catalog</h1>
<div  style="margin-top:10px">
<form action="">
<div class="row text-center">


    <div class="form-group col-md-4"><input class="form-control" name="searchtxt" type="text" placeholder="Serach" required>

</div>
<div class="col-md-8"> <button type="button" class="search_btn">Search</button></div>
</div>
</form>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
