@extends ('layouts.plantilla')

@section ('title', 'Home')

@section ('content')

<div class="jumbotron">
    <!--
    <p class="text-center h3" style="color:#b3b3b3">White Collar</p>
    <img src="img/LogoApp.jpg" class="mx-auto d-block" alt="Logo">
    -->

    <div class="card bg-dark text-white">
        <img class="card-img" src="img/LogoApp.jpg" alt="Card image">
        <div class="card-img-overlay">
          <h5 class="card-title h2">
            <span style="background-color: rgba(71, 62, 62, 0.7);">White Collar Shop</h5></span>
          <p class="card-text h3">
            <span style="background-color: rgb(136, 120, 120, 0.7);"> We have the best "necklaces" for our clients...</span>
          </p>
          <p class="card-text h4">
            <span style="background-color: rgb(136, 120, 120, 0.7);"> Buy one.</span>
          </p>
        </div>
      </div>
</div>
@endsection