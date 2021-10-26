@extends ('layouts.plantilla')

@section ('title', 'Gallery Detail')

@section ('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card mx-auto" style="width: 40rem;">
      
      <div class="card-body">
        <h5 class="card-title">Gallerly Id detail:</h5>
        <dl class="row">
          <dt class="col-sm-3">Id:</dt>
          <dd class="col-sm-9">{{ $gallery->id }}</dd>
        
          <dt class="col-sm-3">Name:</dt>
          <dd class="col-sm-9">{{ $gallery->name }}</dd>
        
          <dt class="col-sm-3">Address:</dt>
          <dd class="col-sm-9">{{ $gallery->address }}</dd>
        
          <dt class="col-sm-3">Max Capacity:</dt>
          <dd class="col-sm-9">{{ $gallery->max_capacity }}</dd>
                      
        </dl>
      
        <a href="{{ route('view.gallery') }}" class="btn btn-primary">Return GALLERY Show</a>
      </div>
      </div>
      
  </div>
</div>
@endsection
