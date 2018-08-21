@extends('layouts.master')
@section('title','Registration')
@section('content')
<div class="login-form">
                    <form action="/user/create_user_form" method="post"  >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class ="row">
                    <div class="col">
                    <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="username" required>
                        </div>
                        </div>
                    </div>
                    <div class ="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" name="address" required>
                        </div>
                        </div>
                        </div>
                        <div class ="row">
                    <div class="col">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="City" name="city" required>
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label>District</label>
                            <input type="text" class="form-control" placeholder="District" name="district" required>
                        </div>
                        </div>
                        </div>
                        <div class ="row">
                    <div class="col">
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control" placeholder="State" name="state" required>
                        </div>
                        </div>
                        <div class="col">
                         <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="phone mumber" name="phone_no" required>
                        </div>
                        </div>
                        </div>
                        <!-- <?php $role_list = DB::select('select * from roles');?>

                        <div class="form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Role</label></div>
                            <div class="col-12 col-md-9">

                              <!-- <select name="role" id="role" class="form-control" required>
                                <option value="0">Please select</option>
                                @foreach($role_list as $value)
                                <option value="{{ $value->id }}">{{$value->role_name}}</option>
                                @endforeach
                              </select> -->
                            <!-- </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">

                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="radios" value="M" class="form-check-input">Male
                                  </label>
                               &nbsp;&nbsp;
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="radios" value="F" class="form-check-input">Female
                                  </label>
                                  &nbsp;&nbsp;
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="radios" value="O" class="form-check-input">Others
                                  </label>

                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Age</label>
                            <input type="number" class="form-control"  name="age" required>
                        </div>  -->
                     <!--   <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>-->
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                    </form>
                </div>

@endsection