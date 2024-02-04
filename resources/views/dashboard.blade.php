@extends('layout.layout')

@section('content')
<div class="table-responsive-md">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Type of Donation</th>
                <th scope="col">Category</th>
                <th scope="col">Contact Phone</th>
                <th scope="col">isVerified</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organizations as $orgainzation)
                <tr>
                    <td>{{$orgainzation->id}}</td>
                    <td><img src="{{$orgainzation->image}}" class="img-fluid w-50"></td>
                    <td>{{$orgainzation->name}}</td>
                    <td>{{$orgainzation->description}}</td>
                    <td>{{$orgainzation->type}}</td>
                    <td>{{$orgainzation->category}}</td>
                    <td>{{$orgainzation->contact_phone}}</td>     
                    <td>{{$orgainzation->isVerified}}</td>     
            
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section("title", "dashboard")