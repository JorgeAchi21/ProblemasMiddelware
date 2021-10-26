<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #617c91;">
    <a class="navbar-brand" href="#">White Collar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

      <div class="navbar-nav">
        <li>
            <a class="nav-item nav-link active" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Art Galleries:
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route('view.gallery') }}">View galleries</a>
              <a class="dropdown-item" href="{{ route('create.gallery') }}">Add a gallery</a>
              <a class="dropdown-item" href="{{ route('burnDown.gallery') }}">Burn down a gallery</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Paintings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route('selectGallery.painting') }}">Painting by Gallery</a>
              <a class="dropdown-item" href="{{ route('allPaintings.painting') }}">All painting</a>
              <a class="dropdown-item" href="{{ route('create.painting') }}">Add a painting</a>
          </div>
        </li>

      </div>

    </div>
  </nav>
