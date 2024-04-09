@extends('layouts.app')

@section('title')
  Collection | Фильмы
@endsection

@section('page-title')
  Коллекция фильмов
@endsection

@section('content')
  <div class="table-responsive small py-3 films" id="items_container">
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
        @include('ajax.films-data')
      </tbody>
    </table>

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
    $(document).ready(function() {
      $(document).on('click', '#pagination_links a', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');
        fetch_data(url);
        console.log('paginator click');
      });
    });

    function fetch_data(url) {
      $.ajax({
        url: url,
        type: 'get',
        dataType: 'html',
        success: function(data) {
          var $data = $(data);
          var $filteredData = $data.find('#items_container').html();
          $('#items_container').html($filteredData );

          // console.log($filteredData);

          // $('#items_container').html(data);
        }
      });
    }

    $(document).ready(function() {
      $('.table-films__row').on('click', function() {
        let id = $(this).data('id');
        // console.log(id);

        // Получаем CSRF-токен из мета-тега
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // Очищаем содержимое модального окна перед загрузкой новых данных
        $('#insertData').empty();

        // Отправляем AJAX-запрос для получения информации о фильме
        $.ajax({
          type: 'post',
          url: "{{ route('filmsInfoContent') }}",
          data: {
            'id': id,
            '_token': '{{ csrf_token() }}'
          },

          // ЛИБО добавляем в заголовке app.blade.php следующую строку:
          // <meta name="csrf-token" content="{{ csrf_token() }}">

          // И передаем CSRF-токен в заголовке запроса:
          // data: {
          //   'id': id
          // },
          // headers: {
          //   'X-CSRF-TOKEN': csrfToken // Передаем CSRF-токен в заголовке запроса
          // },

          success: function(response) {
            $('#insertData').html(response); // Вставляем полученные данные в модальное окно
            // console.log('Data inserted successfuly!');
          },
          error: function(xhr, status, error) {
            console.error(xhr.responseText); // Выводим сообщение об ошибке в консоль
          }
        });
      });
    });
  </script>
@endsection
