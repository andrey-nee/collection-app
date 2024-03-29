@extends('layouts.app')

@section('title')
Collection | Фильмы
@endsection

@section('page-title')
Коллекция фильмов
@endsection

@section('content')

<div class="table-responsive small py-3">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Название</th>
          <th scope="col">Описание</th>
          <th scope="col">Жанр</th>
          <th scope="col">Год</th>
          <th scope="col">Режиссер</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>random</td>
          <td>data</td>
          <td>1</td>
          <td>1991</td>
          <td>name</td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection
