@extends('layouts.master')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('#district, #area').select2();
    });
    </script>
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ action('CampController@store') }}">
@csrf
  <div class="form-group row">
    <label class="col-4 col-form-label" for="name">Camp Name</label>
    <div class="col-8">
      <input id="name" name="name" class="form-control here" required="required" type="text">
    </div>
  </div>
  <div class="form-group row">
    <label for="state" class="col-4 col-form-label">State</label>
    <div class="col-8">
      <select id="state" name="state" class="custom-select" required="required">
        <option value="1">Kerala</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="district" class="col-4 col-form-label">District</label>
    <div class="col-8">
      <select id="district" name="district" class="custom-select" required="required">
        @foreach ($districts as $district)
        <option value="{{ $district->id }}">{{ $district->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="area" class="col-4 col-form-label">Area</label>
    <div class="col-8">
      <select id="area" name="area" class="custom-select" required="required">
        @foreach ($areas as $area)
        <option value="{{ $area->id }}">{{ $area->name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="location" class="col-4 col-form-label">Location</label>
    <div class="col-8">
      <input id="location" name="location" class="form-control here" required="required" type="text">
    </div>
  </div>
  <div class="form-group row">
    <label for="contact_details" class="col-4 col-form-label">Contact Details</label>
    <div class="col-8">
      <textarea id="contact_details" name="contact_details" cols="40" rows="3" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Location Coordinates</label>
    <div class="col-8">
      <input id="text" name="text" class="form-control here" type="text">
    </div>
  </div>
  <div class="form-group row">
    <label for="max_capacity" class="col-4 col-form-label">Maximum Capacity</label>
    <div class="col-8">
      <input id="max_capacity" name="max_capacity" class="form-control here" type="number">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Is Collection Center</label>
    <div class="col-8">
      <select id="is_collection_center" name="is_collection_center" class="custom-select" required="required">
        <option value="0">No</option>
        <option value="1">Yes</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection
