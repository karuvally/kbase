@extends('layouts.master')
@section('title','Registration')
@section('content')
<div class="card">
                      <div class="card-header">
                        <strong>New Inventory</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class ="row">
                    <div class="col">
                    <div class="form-group">
                         <label>Category</label>
                          <select class="form-control" >
                              <option>Food</option>
                              <option>Medicine</option>
                        </select>
                        </div>
                        </div>  
                        <div class="col">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label>Unit</label>
                            <select class="form-control" >
                              <option>KG</option>
                              <option>Unit</option>
                        </select>
                        </div>
                    </div>                    
                        <div class="col">
                        <div class="form-group">
                    <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                         <label class="form-check-label" for="gridCheck">
                         Perishable
                         </label>
                        </div>
                    </div>
                        </div>
                        </div>
                        
                      
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                    @endsection
