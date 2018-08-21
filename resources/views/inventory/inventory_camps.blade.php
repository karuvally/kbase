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
                            <strong class="card-title">Camps List</strong>
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
    <div class="col">
        <div class="form-group">
        <label>Camp</label>
        <select class="form-control" >
          <option>camp1</option>
          <option>camp2</option>
          <option>camp3</option>      
        </select>
      </div>
        </div>
        <div class="col">
            <div class="form-group">
            <label>search</label>
            <input type="text" class="form-control" placeholder="Search" name="search">
          </div>
            </div>
  </div>
  <button type="submit" class="btn btn-primary">Filter</button>
</form>
<hr />
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Item Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Available</th>
                        <th>Required</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Rice</td>
                        <td>Food</td>
                        <td>KG</td>                        
                        <td><input type="text" value="50" class="form-control" placeholder="Available" name="available"></td>
                        <td><input type="text" value="100" class="form-control" placeholder="Required" name="required"></td>
                      </tr>
                      <tr>
                        <td>Bread</td>
                        <td>Food</td>
                        <td>Unit</td>                        
                        <td><input type="text" value="150" class="form-control" placeholder="Available" name="available"></td>
                        <td><input type="text" value="540" class="form-control" placeholder="Required" name="required"></td>
                      </tr>
                      <tr>
                        <td>Kids dress</td>
                        <td>Clothing</td>
                        <td>Unit</td>                        
                        <td><input type="text" value="600" class="form-control" placeholder="Available" name="available"></td>
                        <td><input type="text" value="957" class="form-control" placeholder="Required" name="required"></td>
                      </tr>
                      <tr>
                        <td>Water</td>
                        <td>Food</td>
                        <td>Litre</td>                        
                        <td><input type="text" value="1000" class="form-control" placeholder="Available" name="available"></td>
                        <td><input type="text" value="500" class="form-control" placeholder="Required" name="required"></td>
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
