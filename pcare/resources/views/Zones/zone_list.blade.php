@extends('layouts.app')
@section('content')
    <div class="container">
        <table id="table_id" class="table-bordered table-striped">
            <thead>
            <tr>

                <th>#</th>
                <th>Name</th>
                <th> Description</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach($zones as $zone)
                <tr>
                    <td>{{$zone->id}}</td>
                    <td>{{$zone->name}}</td>
                    <td>
                        {{$zone->description}}
                    </td>
                    <td>
                        <div class="row">
                            <div class="mx-3">@include('Zones.edit_zones')</div>
                            <div class="mx-3">@include('Zones.delete_zone')</div>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@endsection
