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
