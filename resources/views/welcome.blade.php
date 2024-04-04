@extends('layouts.app')

@section('title')
  Collection | Главная
@endsection

@section('page-title')
  Главная страница
@endsection

@section('content')
  <div class="table-responsive small py-3 collections">
    <table class="table table-hover table-bordered table-striped table-sm table-collections">
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
          <tr class="table-collections__row">
            <td class="table-collections__data">{{ $loop->iteration }}</td>
            <td class="table-collections__data">{{ $collection->name }}</td>
            <td class="table-collections__data">{{ $collection->description }}</td>
            <td class="table-collections__data">unknown</td>
          </tr>
        @endforeach

      </tbody>
    </table>

    {{ $collections->links() }}

    <div class="d-flex justify-content-center">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCollection">
        Добавить новую коллекцию
      </button>
    </div>

    <div class="modal fade" id="newCollection" tabindex="-1" aria-labelledby="newCollectionLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="newCollectionLabel">Новая коллекция</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Заполните поля и нажмите кнопку "Добавить" для создания</p>
            <form id="form-new-collection" action="#">
              <div class="mb-3">
                <label for="collection-name-ru" class="col-form-label">Название (ru) <span class="required">обязательное поле</span></label>
                <input type="text" class="form-control" id="collection-name-ru" required>
              </div>
              <div class="mb-3">
                <label for="collection-name-eng" class="col-form-label">Название (eng) <span></span></label>
                <input type="text" class="form-control" id="collection-name-eng">
              </div>
              <div class="mb-3">
                <label for="description-text" class="col-form-label">Описание <span class="required">обязательное поле</span></label>
                <input type="text" class="form-control" id="description-text" required></input>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-success" type="submit">Добавить</button>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
