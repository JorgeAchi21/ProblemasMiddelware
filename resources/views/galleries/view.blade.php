@extends ('layouts.plantilla')

@section ('title', 'Show gallery')

@section ('content')

<!-- Detalle -->
<div class="jumbotron">
    <p class="text-center h3 text-primary"><span class="font-weight-bold">Gallery </span> list:</p>
    
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name:</th>
            <th scope="col">Address:</th>
            <th scope="col">Max capacity:</th>
  
            <th scope="col">Detail:</th>
            <th scope="col">Edit:</th>
            <th scope="col"></th>
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
                {{$itemG->max_capacity}}
              </td>
  
              <td>
                <a href='{{ route('show.gallery', $itemG->id) }}' class='btn btn-success'>Show</a>
                
              </td>
  
              <td>
                <a href='{{ route('edit.gallery', $itemG->id) }}' class='btn btn-info'>Edit</a>
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