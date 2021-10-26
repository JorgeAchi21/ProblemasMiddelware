@extends ('layouts.plantilla')

@section ('title', 'Create Gallery')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary">Edit <span class="font-weight-bold">gallery:</span></p>
    <small>Info: Ruta envio form por post:</small>


    <form action="{{ route('edit.galleryStore', $gallery->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="name">Gallery Name:  *(text)</label>
        <input type="text" 
               class="form-control" 
               id="name" name="name" 
               value="{{old('name', $gallery->name) }}">

        @error('name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="address">Address:  *(text)</label>
        <input type="text" 
              class="form-control" 
              id="address" 
              name="address" 
              value="{{old('address', $gallery->address) }}">

        @error('address') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="max_capacity">Max capacity: *(number)</label>
        <input type="number" 
                class="form-control" 
                id="max_capacity" 
                name="max_capacity" 
                value="{{old('max_capacity', $gallery->max_capacity) }}">

        @error('max_capacity') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
