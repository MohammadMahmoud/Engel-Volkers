@extends('layouts.app')

@section('content')
<div class="container">
    <div class="create-button text-right">
        <a href="{{route('create.client')}}" class="btn btn-lg btn-square btn-secondary"><i class="fas fa-plus-circle"></i>Create</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header text-uppercase font-weight-bold">Client List</div>

                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->firstName}}</td>
                        <td>{{$client->lastName}}</td>
                        <td><a href="/client/edit/{{$client->id}}"><i class="fas fa-edit"></i></a> <a href="/client/delete/{{$client->id}}"><i class="fas fa-trash"></i></a></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
