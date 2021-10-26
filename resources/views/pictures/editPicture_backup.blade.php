@extends ('layouts.plantilla')

@section ('title', 'Show gallery')

@section ('content')

<!-- Detalle -->
<div class="jumbotron">
    <h1> Edit picture</h1>
    {{ $painting[0]->id }}
    <img src="  {{ asset($painting[0]->url) }}" class="img-fluid" alt="Responsive image">

</div>

@endsection