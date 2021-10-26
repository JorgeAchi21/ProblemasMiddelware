<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Gallery</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style type="text/css">
        .cuaImg{
            //width: auto;
            max-width: 300px;
            //height: auto;
            max-height: 300px;
        }
    </style>

</head>

<body>
    @include('layouts.navigation')
    
    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">SHOP PICTURES BY GALLERY:</h1>

                <p><h3>GALERY NAME: <strong>{{ $gallery[0]->name }}</strong> </h3></p>
                <p><h3>GALERY CAPACITY:{{ $gallery[0]->max_capacity }} </h3></p>
                <p><h6>Number of paints: {{ count($picture) }}</h6></p>

                {{-- <h6>Ver id pasado: {{ $picture}}</h6> --}}
                <p>
                    <a href="{{ route('selectGallery.painting') }}" class="btn btn-primary my-2">Go to home</a>
                    {{-- <a href="#" class="btn btn-secondary my-2">Burn shop</a> --}}
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">

                    @foreach ($picture as $itemP)

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top cuaImg rounded mx-auto" src="{{ asset($itemP->url) }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="h6">Title:</strong></p>
                                <p class="h5"><strong>{{ $itemP->picture_name }}</strong></p>
                                <p class="h6">Author:</p>
                                <p class="h5"><strong>{{ $itemP->author }}</strong></p>
                                <p class="h6 card-text">{{ $itemP->comment }}</p>
                                <p class="small">Price: {{ $itemP->price }}</p>
                                <p class="small">Entry date: {{ $itemP->entry_date }}</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">

                                        <a href='{{ route('viewPicture.painting', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>View</a>

                                        <a href='{{ route('editPicture.painting', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>Edit</a>
                                        
                                        <a href='{{ route('deletePicture.paintingDestroy', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>Delete</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted small">id: {{ $itemP->id }}</small>
                                <small class="text-muted small">Gallery: {{ $itemP->shop_id }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </main>

    <!-- CDN bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>

</html>