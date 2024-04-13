@extends('layouts.app')

@section('title')
  Collection | Фильмы
@endsection

@section('page-title')
  Коллекция фильмов
@endsection

@section('content')
  <div class="table-responsive small py-3 films" id="items_container">
    <table class="table table-hover table-striped table-sm table-films">
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
        @include('ajax.films-data')
      </tbody>
    </table>

    <!-- Table pagination -->
    <div id="pagination_links">
      {{ $films->links('pagination::bootstrap-5') }}
    </div>

  </div>

  <!-- Modal Add New -->
  @include('modals.films-add')

  <!-- Modal Film Info -->
  @include('modals.films-info')
@endsection

@section('custom-script')
  <script>
    // Film info modal
    $(document).ready(function() {
      // Обработчик события клика на элемент .table-films__row
      $('#items_container').on('click', '.table-films__row', function() {
        let id = $(this).data('id');
        let route = "{{ route('filmsInfoContent') }}"
        // Вызываем функцию для отправки AJAX-запроса
        // Функция лежит в app.blade.php
        sendAjaxRequest(id, route);
      });
    });
  </script>
@endsection
