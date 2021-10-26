@extends ('layouts.plantilla')

@section ('title', 'Show gallery')

@section ('content')

<!-- Detalle -->
<div class="jumbotron">
    <p class="text-center h3 text-primary"><span class="font-weight-bold">Gallery:</span> list:</p>

    <h1><strong>You have exceeded the number of pictures in this gallery</strong></h1>

    <a href="{{ route('selectGallery.painting') }}" class="btn btn-primary my-2">Go to home</a>

  </div>

@endsection