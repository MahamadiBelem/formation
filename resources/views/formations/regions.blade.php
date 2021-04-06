@extends('layout.templateformation')

@section('content')

<div class="row" style="margin-top: 5%;margin-left: -50%">
  <div class="card-body">
  
  
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary">
               <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg" style="color: white; font-weight:bold;"> Nouveau <i class="fa fa-plus"></i></button>
                <a class="btn btn-warning" style="color: white; font-weight:bold;"> Exporter <i class="fa fa-download"></i></a>
               </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 5%">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table id="typeenvoyeurTable" class="table table-bordered table-striped">
                <thead style="background-color: #007bff;color:white;">
                <tr>
                  <th>Regions </th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>aaa</td>
                  <td>
                      <button  data-toggle="modal" data-target="'#modifier'"  class="btn btn-outline-success"><i style="color: #007bff"  class="fa fa-edit"></i></button>
                      <button data-toggle="modal" data-target="'#suprimer'" class="btn btn-outline-danger"><i style="color: red" class="fa fa-trash"></i></button>
                   </td>
                </tr>
                
              </table>
        </div>
    </div>
  
</div>
</div>

@endsection