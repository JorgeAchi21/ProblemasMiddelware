@extends ('layouts.plantilla')

@section ('title', 'Create Gallery')

@section ('content')
<div class="jumbotron">
    
  <small>Info: Ruta envio form por post:</small>
  
    <form action="{{ route('destroy.gallery') }}" method="POST">
      {{-- <form action="destroy.gallery" method="POST"> --}}
      @csrf
      {{-- @method('DELETE') --}}

      <div class="form-group">
        <label for="galleryName">Select a Gallery to <strong>burn down</strong>:  *(list select)</label>
        <select class="form-control" id="galleryName" name="galleryName">
          @foreach ($gallery as $itemS)
          <option value="{{$itemS->id}}">
            {{$itemS->name}}
          </option>
          @endforeach
        </select>
        
        @error('galleryName') 
        <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      
      <button type="submit" class="btn btn-primary">Burn Down</button>
    </form>
  </div>
  @endsection
  