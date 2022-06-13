@extends('layouts.conquer2')
@section('content')
<form action="{{ route('kategori_obat.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nama Obat:</label>
        <input type="text" class="form-control" id="name" placeholder="Nama Obat" name="name">
    </div>
    <div class="form-group">
        <label for="form">Form:</label>
        <input type="text" class="form-control" id="form" placeholder="Form" name="form">
    </div>
    <div class="form-group">
        <label for="resctriction_and_formula">Restriction and Formula:</label>
        <input type="text" class="form-control" id="resctriction_and_formula" placeholder="Restriction and Formula" name="resctriction_and_formula">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" placeholder="Description" name="description">
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="text" class="form-control" id="image" placeholder="Image" name="image">
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" placeholder="Price" name="price">
    </div>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">List Medicine
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JavaScript</a></li>
        </ul>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection