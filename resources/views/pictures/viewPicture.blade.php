@extends ('layouts.plantilla')

@section ('title', 'Show gallery')

@section ('content')

<!-- Detalle -->
<div class="jumbotron">
    <h1>View picture</h1>
    <h4>Id: {{ $painting[0]->id }}</h4>
    <img src="  {{ asset($painting[0]->url) }}" class="img-fluid" alt="Responsive image">

</div>

@endsection