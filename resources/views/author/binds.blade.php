@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }

  tr:nth-child(odd) td {
    background-color: #FFFFFF;
  }

  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'binds.blade.php')

@section('content')
<p>Author</p>
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>AGE</th>
    <th>NATIONALITY</th>
  </tr>
  <tr>
    <td> {{$item->id}} </td>
    <td> {{$item->name}} </td>
    <td> {{$item->age}} </td>
    <td> {{$item->nationality}} </td>
  </tr>
</table>
@endsection