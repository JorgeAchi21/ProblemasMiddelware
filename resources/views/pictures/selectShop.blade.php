@extends ('layouts.plantilla')

@section ('title', 'Show gallery')

@section ('content')

<!-- Detalle -->
<div class="jumbotron">
    <p class="text-center h3 text-primary"><span class="font-weight-bold">Select </span> a gallery to show pictures</p>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name:</th>
            <th scope="col">Address:</th>
  
            <th scope="col">Detail:</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($gallery as $itemG)
            <tr>
              <td class="text-white bg-secondary">
                {{$itemG->id}}
              </td>
              <td>
                {{$itemG->name}}
              </td>
              <td>
                {{$itemG->address}}
              </td>

              <td>
                <a href="{{ route('gallery.painting', $itemG->id) }}" class='btn btn-success'>View Gallery</a>
              </td>
  
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>

@endsection