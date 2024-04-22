@foreach ($films as $film)
  @php
    $image = '';
    if (count($film->images) > 0) {
        $image = $film->images[0]['image'];
    } else {
        $image = 'no_image.jpg';
    }
  @endphp

  <tr class="table-films__row" data-bs-toggle="modal" data-bs-target="#filmInfo" data-id="{{ $film->id }}">
    <td class="table-films__data">{{$loop->iteration }}</td>
    {{-- $loop->iteration - это текущая итерация цикла (начинается с 1) цикла @foreach (встроено в Laravel) --}}
    <td class="table-films__data table-films__film-image"><img src="/images/{{ $image }}" alt="{{ $film->name }}">
    </td>
    <td class="table-films__data">{{ $film->name_ru }}</td>
    <td class="table-films__data">{{ $film->description }}</td>
    <td class="table-films__data">
      <span class="badge bg-warning text-dark">{{ $film->genre->name_ru }}</span>
    </td>
    <td class="table-films__data">{{ $film->year }}</td>
    <td class="table-films__data">{{ $film->director->name }}</td>
  </tr>
@endforeach
