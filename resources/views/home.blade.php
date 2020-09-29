@extends('layouts.app')

@section('content')
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                <h6 style="float: right">Total users <badge class="badge badge-success">{{count($users)}}</badge></h6>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{Carbon\carbon::parse($user->created_at)->diffForHumans()}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>--}}



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi.. {{Auth::user()->name}},
                <h6 style="float: right">Total users <badge class="badge badge-success">{{count($all_user)}}</badge></h6>
                </div>

                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_user as $user)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{Carbon\carbon::parse($user->created_at)->diffForHumans()}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
