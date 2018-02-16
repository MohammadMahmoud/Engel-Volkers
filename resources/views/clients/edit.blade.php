@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Client
            </div>
            <div class="card-body">
                <h5 class="card-title">Info</h5>
                <p>General info</p>
                <form action="{{route('update.client')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$client->id}}">
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name"
                               value="{{ $client->firstName }}">
                    </div>
                    @if ($errors->has('firstName'))
                        <div class="alert alert-danger" role="alert">
                            <span>{{ $errors->first('firstName') }}</span>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name"
                               value="{{ $client->lastName }}">
                    </div>
                    @if ($errors->has('lastName'))
                        <div class="alert alert-danger" role="alert">
                            <span>{{ $errors->first('lastName') }}</span>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="telephone">Telephone *</label>
                        <input type="text" class="form-control" name="telephone" id="telephone"
                               placeholder="+3112345678" value="{{ $client->telephone }}">
                    </div>
                    @if ($errors->has('telephone'))
                        <div class="alert alert-danger" role="alert">
                            <span>{{ $errors->first('telephone') }}</span>
                        </div>
                    @endif
                    <h5 class="card-title">Address</h5>
                    <p>Address of client</p>
                    <div class="form-group">
                        <label for="city">City *</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Amsterdam"
                               value="{{ $client->city  }}">
                    </div>
                    @if ($errors->has('city'))
                        <div class="alert alert-danger" role="alert">
                            <span>{{ $errors->first('city') }}</span>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="street">Street *</label>
                        <input type="text" class="form-control" name="street" id="street" placeholder="Van Heemkstarrt"
                               value="{{ $client->street  }}">
                    </div>
                    @if ($errors->has('street'))
                        <div class="alert alert-danger" role="alert">
                            <span>{{ $errors->first('street') }}</span>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="zip">Zip Code *</label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="9272 QA"
                               value="{{ $client->zip  }}">
                    </div>
                    @if ($errors->has('zip'))
                        <div class="alert alert-danger" role="alert">
                            <span>{{ $errors->first('zip') }}</span>
                        </div>
                    @endif
                    <p>* is required Field </p>
                    <button type="submit" class="btn btn-secondary btn-square">Update</button>
                </form>
            </div>
        </div>

@endsection