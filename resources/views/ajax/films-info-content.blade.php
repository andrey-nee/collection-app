<h2 class="modal-title fs-5">{{ $data->name_ru }}</h2>
<p class="card-subtitle">Год: <span>{{ $data->year }}</span></p>
<p class="card-subtitle">Жанр: <span>{{ $data->genre_id }}</span></p>
<p class="card-subtitle">Режиссер: <span>{{ $data->director_id }}</span></p>
<div class="row">
  <div class="col-8">
    <p class="card-subtitle">Описание:</p>
    <p>{{ $data->description }}</p>
  </div>
  <div class="col-4" id="filmImageContainer">
    <img id="filmImage" src="/images/{{ $image }}" alt="{{ $data->name_ru }}">
  </div>
</div>
