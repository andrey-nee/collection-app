@extends('layouts.app')

@section('title')
  Collection | Фильмы
@endsection

@section('page-title')
  Коллекция фильмов
@endsection

@section('content')
  <div class="table-responsive small py-3 films">
    <table class="table table-striped table-sm table-films">
      <thead class="table-films__head">
        <tr class="table-films__row">
          <th scope="col" class="table-films__header">#</th>
          <th scope="col" class="table-films__header">Обложка</th>
          <th scope="col" class="table-films__header">Название</th>
          <th scope="col" class="table-films__header">Описание</th>
          <th scope="col" class="table-films__header">Жанр</th>
          <th scope="col" class="table-films__header">Год</th>
          <th scope="col" class="table-films__header">Режиссер</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($films as $film)
          @php
            $image = '';
            if (count($film->images) > 0) {
                $image = $film->images[0]['image'];
            } else {
                $image = 'no_image.jpg';
            }
          @endphp

          <tr class="table-films__row">
            <td class="table-films__data">{{ $loop->iteration }}</td> {{-- $loop->iteration (встроено в Laravel) считает кол-во итераций внутри @foreach --}}
            <td class="table-films__data table-films__film-image"><img src="/images/{{ $image }}" alt="{{ $film->name }}"></td>
            <td class="table-films__data">{{ $film->name }}</td>
            <td class="table-films__data">{{ $film->description }}</td>
            <td class="table-films__data">{{ $film->genre_id }}</td>
            <td class="table-films__data">{{ $film->year }}</td>
            <td class="table-films__data">{{ $film->director_id }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>

    {{ $films->links() }}

  </div>
@endsection
