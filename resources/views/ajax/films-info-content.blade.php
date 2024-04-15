<div class="modal-film-info">
  <h2 class="modal-title fs-5">{{ $data->name_ru }}</h2>
  <div class="d-inline-flex gap-3">
    <p class="card-subtitle fs-6">Год: <span>{{ $data->year }}</span></p>
    <p class="card-subtitle fs-6">Жанр: <span>{{ $genre }}</span></p>
  </div>
  <p class="card-subtitle fs-6">Режиссер: <span>{{ $director }}</span></p>
  <div class="modal-film-info__description">
    <p class="card-subtitle fs-6">Описание:</p>
    <div class="row">
      <div class="col-8">
        <p>{{ $data->description }}</p>
      </div>
      <div class="col-4 modal-film-info__image">
        <img src="/images/{{ $image }}" alt="{{ $data->name_ru }}">
      </div>
    </div>
  </div>
</div>
