@extends('layouts.conquer2')
@section('content')
<form action="{{route('kategori_obat.store')}}" method="POST" >
    @csrf
    <!-- @method("PUT") -->
    <div class="form-group">
        <label for="name">Nama:</label>
        <input type="text" class="form-control" id="name" placeholder="Nama Kategori" name="name" value="{{$data->name}}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="3" id='description' name='description'>{{$data->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection