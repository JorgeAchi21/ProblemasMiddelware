@extends ('layouts.plantilla')

@section ('title', 'Show gallery')

@section ('content')

<!-- Detalle -->
<div class="jumbotron">
    <p class="text-center h3 text-primary"><span class="font-weight-bold">Gallery:</span> list:</p>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name:</th>
  
            <th scope="col">View:</th>
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
  
              <td>
                {{-- <a href='{{route('team.showid', $itemG->id)}}' class='btn btn-success'>Show</a> --}}
                <a href='#' class='btn btn-success'>Show</a>
              </td>
  
              <td>
                {{-- <a href='{{route('team.edit', $itemG->id)}}' class='btn btn-info'>Edit</a> --}}
                <a href='#' class='btn btn-info'>Edit</a>
              </td>
  
              <td>
                {{-- <form method="POST" action="{{route("team.destroy", $itemG->id)}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>

@endsection