@extends('layouts.app')

@section('content')
<h1>This is The data</h1>
<button class = "btn btn-md btn-default" id ="custom_data_button">Click on me</button>
<table class = "custom_data_table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Type</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($custom_data as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->type}}</td>
    </tr>
  @endforeach
  </tbody>

</table>





@endsection
