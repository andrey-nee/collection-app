{{-- <div class="modal fade" id="newCollection" tabindex="-1" aria-labelledby="newCollectionLabel" aria-hidden="true"> --}}
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal">@yield('modal-title')</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @yield('modal-body')
      </div>
      <div class="modal-footer">
        @yield('modal-footer')
      </div>
    </div>
  </div>
</div>

<div class="d-flex justify-content-center">
  {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCollection"> --}}
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
    Добавить новую коллекцию
  </button>
</div>
