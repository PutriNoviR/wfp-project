@extends('layouts.conquer2')
@section('content')

<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" 
                data-dismiss="modal" aria-hidden="true"></button>
                  <h4 class="modal-title">Add New Supplier</h4>
            </div>
            <div class="modal-body">
  		        <!-- the  new supplier form goes here -->
             <form action="{{ route('kategori_obat.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Kategori" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" rows="3" id='description' name='description'>{{$data->description}}</textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('kategori_obat')}}" class="btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
@endsection