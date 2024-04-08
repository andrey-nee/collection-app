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
      <label for="collection-description" class="col-form-label">
        Описание<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-description" required>
    </div>
    <div class="mb-3">
      <label for="collection-genre_id" class="col-form-label">
        Жанр<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-genre_id" required>
    </div>
    <div class="mb-3">
      <label for="collection-year" class="col-form-label">
        Год<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-year" required>
    </div>
    <div class="mb-3">
      <label for="collection-director_id" class="col-form-label">
        Режиссер<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-director_id" required>
    </div>
    <div class="mb-3">
      <label for="collection-image" class="col-form-label">
        Обложка<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="collection-image" required>
    </div>
  </form>
@endsection

@section('modal-footer')
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
  <button type="button" class="btn btn-primary" type="submit">Добавить</button>
@endsection
