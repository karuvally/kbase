@extends('layouts.master')
@section('title','Kbase')
@section('styles')
<link rel="stylesheet" href="{{URL::asset('assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
<div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">User List</strong>
                        </div>
                        <div class="card-body">

<form>
  <div class="row">
    <div class="col">
    <div class="form-group">
    <label>State</label>
    <select class="form-control" >
      <option>Kerala</option>
      <option>Tamilnadu</option>  
    </select>
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label>District</label>
    <select class="form-control" >
      <option>Ernakulam</option>
      <option>Alleppy</option>
      <option>Thrissur</option>    
    </select>
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label>Area</label>
    <select class="form-control" >
      <option>Edappally</option>
      <option>Aluva</option>
      <option>Ankamali</option>      
    </select>
  </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Filter</button>
</form>
<hr />
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Camps</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>tiger@test.com</td>
                        <td>volunteer</td>
                        <td>ekm, alpy</td>
                        <td><span class="badge badge-success">Active</span></td>
                        <td><button type="button" class="btn btn-outline-primary">Edit</button> 
                        <button type="button" class="btn btn-outline-danger">Block</button> 
                        <button type="button" class="btn btn-outline-warning">Reset Password</button>
                        <button type="button" class="btn btn-outline-info">Assign Camp</button></td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>angelica@test.com</td>
                        <td>rescue</td>
                        <td>aluva, edappally</td>
                        <td><span class="badge badge-danger">InActive</span></td>                        
                        <td><button type="button" class="btn btn-outline-primary">Edit</button> 
                        <button type="button" class="btn btn-outline-danger">Block</button> 
                        <!-- <button type="button" class="btn btn-outline-warning">Reset Password</button>
                        <button type="button" class="btn btn-outline-info">Assign Camp</button></td> -->
                      </tr>

                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
@endsection
@section('scripts')
<script src="{{URL::asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/lib/data-table/datatables-init.js')}}"></script>
<script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table').DataTable();
        } );
    </script>
@endsection
