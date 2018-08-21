@extends('layouts.master')

@section('content')

<table class="table">
<thead>
<tr>
    <th>Name</th>
    <th>Contact Details</th>
    <th>District</th>
    <th>Area</th>
    <th>Location</th>
    <th>Capacity</th>
</tr>
</thead>
<tbody>
@foreach ($camps as $camp)
<tr>
    <td>{{ $camp->name }}</td>
    <td>{{ $camp->contact_details }}</td>
    <td>{{ $camp->area_id }}</td>
    <td>{{ $camp->area_id }}</td>
    <td>{{ $camp->location }}</td>
    <td>{{ $camp->max_capacity }}</td>
</tr>
@endforeach
</tbody>
</table>

@endsection

