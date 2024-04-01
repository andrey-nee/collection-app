@extends('layouts.app')

@section('title')
  Collection | Главная
@endsection

@section('page-title')
  Главная страница
@endsection

@section('content')
  <div class="table-responsive small py-3">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Q'ty</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>random</td>
          <td>data</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
