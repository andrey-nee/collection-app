<div class="table-responsive small py-3 films">
  <table class="table table-hover table-bordered table-striped table-sm table-films">

    <thead class="table-films__head">
      <tr class="table-films__row">
        <th scope="col" class="table-films__header">Название</th>
        <th scope="col" class="table-films__header">Описание</th>
        <th scope="col" class="table-films__header">Жанр</th>
        <th scope="col" class="table-films__header">Год</th>
        <th scope="col" class="table-films__header">Режиссер</th>
      </tr>
    </thead>

    <tbody>
      <tr class="table-films__row" data-bs-toggle="modal" data-bs-target="#filmInfo" data-id="{{ $data->id }}">
        <td class="table-films__data">{{ $data->name_ru }}</td>
        <td class="table-films__data">{{ $data->description }}</td>
        <td class="table-films__data">{{ $data->genre_id }}</td>
        <td class="table-films__data">{{ $data->year }}</td>
        <td class="table-films__data">{{ $data->director_id }}</td>
      </tr>
    </tbody>

  </table>
</div>
