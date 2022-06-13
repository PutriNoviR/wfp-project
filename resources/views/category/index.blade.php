@extends('layouts.conquer2')
@section('content')
<div class="container">
  <div class="page-content">
    @if(session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
    @endif

  </div>
  <h2>List Medicines</h2>
  <a href="#modalCreate" data-toggle='modal' class='btn btn-info'> +Category Baru </a>
  <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" >
                <div class="modal-header">
                  <button type="button" class="close" 
                    data-dismiss="modal" aria-hidden="true"></button>
                  <h4 class="modal-title">Add New Category</h4>
                </div>
                <div class="modal-body">
  		   <!-- the  new supplier form goes here -->
         <form action="{{ route('kategori_obat.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Kategori" name="name" value="">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" rows="3" id='description' name='description'></textarea>
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
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama Kategori</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listCategory as $li)
      <tr>
        <td>{{$li->name}}</td>
        <td>{{$li->description}}</td>
        <td><a href="{{url('kategori_obat/'.$li->id.'/edit')}}"
              class='btn btn-xs btn-info'>edit</a>
            <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs'
                onclick="getEditForm({{$li->id}})"> +Edit A</a>
          <td>
        <form method='POST' action="{{url('kategori/'.$li->id)}}">
          @csrf
          @method('DELETE')
          <input type="submit" value="delete" class='btn btn-danger btn-xs' onclick="if(!confirm('are you sure to delete this record?')) return false;"/>
        </form>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id='modalContent'>
</div>
</div>
</div>
@endsection
@section('javascript')
<script>
  function getEditForm(id)
  {
    $.ajax({
      type:'POST',
      url:'{{route("kategori_obat.getEditForm")}}',
      data:{'_token':'<?php echo csrf_token() ?>',
            'id':id
          },
      success: function(data){
        $('#modalContent').html(data.msg)
      }
    });
  }
  </script>
<!-- </body>
</html> -->