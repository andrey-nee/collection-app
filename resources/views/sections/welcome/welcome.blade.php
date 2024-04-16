@extends('layouts.app')

@section('title')
  Collection | Главная
@endsection

@section('page-title')
  Главная страница
@endsection

@section('content')
  <div class="table-responsive small py-3 collections" id="items_container">

    <table class="table table-hover table-striped table-sm table-collections">
      <thead class="table-collections__head">
        <tr class="table-collections__row">
          <th scope="col" class="table-collections__header">#</th>
          <th scope="col" class="table-collections__header">Название</th>
          <th scope="col" class="table-collections__header">Описание</th>
          <th scope="col" class="table-collections__header">Размер</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($collections as $collection)
          <tr class="table-collections__row" data-name="{{ $collection->name }}">
            <td class="table-collections__data">{{ $loop->iteration }}</td>
            <td class="table-collections__data">{{ $collection->name }}</td>
            <td class="table-collections__data">{{ $collection->description }}</td>
            <td class="table-collections__data">{{ $count }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <!-- Table pagination -->
    <div id="pagination_links">
      {{ $collections->links('pagination::bootstrap-5') }}
    </div>

  </div>

  <!-- Modal Add New -->
  @include('modals.welcome-add')
@endsection

@section('custom-script')
  <script>
    // Collection table link
    $(document).ready(function() {
      $('#items_container').on('click', '.table-collections__row', function() {
        const name = $(this).data('name').toLowerCase();
        // Мы используем значение ячейки "name" из таблицы
        // и формируем из него адрес для перехода
        window.location.href = name;
      })
    })
  </script>
@endsection
