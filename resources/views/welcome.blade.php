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
      {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCollection"> --}}
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
        Добавить новую коллекцию
      </button>
    </div>

  </div>

@section('modal-title')
  Новая коллекция
@endsection

@section('modal-body')
  <p>Заполните поля и нажмите кнопку "Добавить" для создания</p>
  <form id="form-new-collection" action="#">
    <div class="mb-3">
      <label for="collection-name-ru" class="col-form-label">Название<span class="required"></span></label>
      <input type="text" class="form-control" id="collection-name-ru" required>
    </div>
    <div class="mb-3">
      <label for="description-text" class="col-form-label">Описание<span class="required"></span></label>
      <input type="text" class="form-control" id="description-text" required></input>
    </div>
  </form>
@endsection

@section('modal-footer')
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
  <button type="button" class="btn btn-primary" type="submit">Добавить</button>
@endsection

@endsection
