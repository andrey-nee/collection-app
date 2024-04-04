@extends('layouts.app')

@section('title')
  Collection | Фильмы
@endsection

@section('page-title')
  Коллекция фильмов
@endsection

@section('content')
  <div class="table-responsive small py-3 films">
    <table class="table table-hover table-bordered table-striped table-sm table-films">
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

          <tr class="table-films__row" data-bs-toggle="modal" data-bs-target="#filmInfo" data-id="{{ $film->id }}">
            <td class="table-films__data">{{ $loop->iteration }}</td> {{-- $loop->iteration (встроено в Laravel) считает кол-во итераций внутри @foreach --}}
            <td class="table-films__data table-films__film-image"><img src="/images/{{ $image }}"
                alt="{{ $film->name }}"></td>
            <td class="table-films__data">{{ $film->name_ru }}</td>
            <td class="table-films__data">{{ $film->description }}</td>
            <td class="table-films__data">{{ $film->genre_id }}</td>
            <td class="table-films__data">{{ $film->year }}</td>
            <td class="table-films__data">{{ $film->director_id }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>

    {{ $films->links() }}

    <div class="d-flex justify-content-center">
      {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCollection"> --}}
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
        Добавить новую коллекцию
      </button>
    </div>

  </div>

  <!-- Modal Film Info -->
@section('modal-title')
  Новый фильм
@endsection

@section('modal-body')
  <p>Заполните поля и нажмите кнопку "Добавить" для создания</p>
  <form id="form-new-collection" action="#">
    <div class="mb-3">
      <label for="collection-name-ru" class="col-form-label">
        Название<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-name-ru" required>
    </div>
    <div class="mb-3">
      <label for="collection-name-ru" class="col-form-label">
        Описание<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-name-ru" required>
    </div>
    <div class="mb-3">
      <label for="collection-name-ru" class="col-form-label">
        Жанр<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-name-ru" required>
    </div>
    <div class="mb-3">
      <label for="collection-name-ru" class="col-form-label">
        Год<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-name-ru" required>
    </div>
    <div class="mb-3">
      <label for="collection-name-ru" class="col-form-label">
        Режиссер<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-name-ru" required>
    </div>
    <div class="mb-3">
      <label for="collection-name-ru" class="col-form-label">
        Обложка<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-name-ru" required>
    </div>
  </form>
@endsection

@section('modal-footer')
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
  <button type="button" class="btn btn-primary" type="submit">Добавить</button>
@endsection

<!-- Modal Film Info -->
<div class="modal fade" id="filmInfo" tabindex="-1" aria-labelledby="modalFilmInfo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalFilmInfo">Название фильма</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection

<script>
  $(document).ready(function {

    $('.row-click').on('click', function() {
      let id = $(this).data('id');
      console.log(id);
      $('#insertData').empty();
      $.ajax({
        type: 'post',
        url: "{{ route('bxo-report.edit') }}",
        data: {
          'id': id
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
          $('#insertData').html(response);
        }
      })
    })

    setTimeout(() => {
      $('#FlashMsg').hide();
    }, 4500);

  })
</script>
