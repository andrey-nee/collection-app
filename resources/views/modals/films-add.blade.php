@section('modal-title')
  Новый фильм
@endsection

@section('modal-body')
  <p>Заполните поля и нажмите кнопку "Добавить" для создания</p>
  <form id="form-new-film" method="POST" action="{{ route('films.add_new')}}">
    @csrf
    <div class="mb-3">
      <label for="film-name-ru" class="col-form-label">
        Название<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="film-name-ru" name="name_ru" required>
    </div>
    <div class="mb-3">
      <label for="film-description" class="col-form-label">
        Описание<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="film-description" name="description" required>
    </div>
    <div class="mb-3">
      <label for="film-genre_id" class="col-form-label">
        Жанр<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="film-genre_id" name="genre_id" required>
    </div>
    <div class="mb-3">
      <label for="film-year" class="col-form-label">
        Год<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="film-year" name="year" required>
    </div>
    <div class="mb-3">
      <label for="film-director_id" class="col-form-label">
        Режиссер<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="film-director_id" name="director_id" required>
    </div>
    {{-- <div class="mb-3">
      <label for="film-image" class="col-form-label">
        Обложка<span class="required"></span>
      </label>
      <input type="text" class="form-control" id="film-image" name="image" required>
    </div> --}}
    <button type="submit" class="btn btn-primary">Добавить</button>
  </form>
@endsection

@section('modal-footer')
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
  {{-- <button type="submit" class="btn btn-primary">Добавить</button> --}}
@endsection

@section('modal-button-title')
новый фильм
@endsection
