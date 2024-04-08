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

  </div>

  <!-- Modal Add New -->
  @include('modals.welcome-add')
@endsection
