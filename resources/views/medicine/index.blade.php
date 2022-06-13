@extends('layouts.conquer2')
@section('content')
@section('javascript')
<script>
function showInfo()
{
  $.ajax({
    type:'POST',
    url:'{{route("obat.showInfo")}}',
    data:'_token=<?php echo csrf_token() ?>',
    success: function(data){
       $('#showinfo').html(data.msg)
    }
  });
}
</script>
@endsection

<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">DISCLAIMER</h4>
            </div>
            <div class="modal-body">
                Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
<div>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#" onclick="showInfo()">Welcome
                    <i class="icon-bulb"></a></i>
            </li>
        </ul>
    </div>
    <div id='showinfo'></div>
    <h2>List Medicines</h2>
    <p>The .table-hover class enables a hover state on table rows:</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Form</th>
                <th>Restriction and Formula</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category name</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listData as $li)
            <tr>
                <td>
                    <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" data-toggle="modal">{{ $li->generic_name }}</a>
                    <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{$li->generic_name}}</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('images/').'/'.$li->image }}" height='200px'>
                                    <p>Description:</p>
                                    <p>{{ $li->description }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>{{$li->form}}</td>
                <td>{{$li->restriction_and_formula}}</td>
                <td>{{$li->description}}</td>
                <td>{{$li->price}}</td>
                <td>{{$li->category->name}}</td>
                
                <td>
                    <a class='btn btn-info' href="{{route('obat.show',$li->id)}}" data-target="#show{{$li->id}}" data-toggle='modal'>detail</a>
                    <div class="modal fade" id="show{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- put animated gif here -->
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection