@extends('layouts.master')
@section('content')
<div class="container">
  <div class="big-padding text-center blue-grey white-text"> </div>
  <h1 class="ver">Lista de Usuarios</h1>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>id</td>
          <td>nombres</td>
          <td>email</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop