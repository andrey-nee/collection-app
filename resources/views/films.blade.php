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
        @foreach($films as $film)
        <tr>
          <td>1</td>
          <td>{{ $film->name }}</td>
          <td>{{ $film->description }}</td>
          <td>{{ $film->genre_id }}</td>
          <td>{{ $film->year }}</td>
          <td>{{ $film->director_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
