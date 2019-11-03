@extends('layouts.app')

@section('content')
    
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h3>Admin page</h3>
        </div>
    </div>
</div>

<div class="card my-1">
    <div class="card-body">
        <div class="card-subtitle">
            <h4>Users</h4>
            <hr>

            <form method="POST" action="{{ action('AdminController@search') }}">
                @csrf
                <div class="container">
                    <div class="form-group">
                        <div class="row">
                            <input type="text" name="search" class="col form-control" placeholder="Search for user...">
                            <button type="submit" class="btn btn-primary ml-1">Search</button>

                            <div class="btn-group btn-group-toggle ml-2" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                    <input type="radio" name="filter" autocomplete="off" checked> All
                                </label>

                                <label class="btn btn-secondary">
                                    <input type="radio" name="filter" autocomplete="off"> Users
                                </label>

                                <label class="btn btn-secondary">
                                    <input type="radio" name="filter" autocomplete="off"> Admins
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <table class="table table-striped table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Username</th>
                        <th>E-mail</th>
                        <th>Rank</th>
                        <th>Joined on</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>undefined</td>
                        <td>{{$user->created_at}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{$users->links('includes.paginator')}}

        </div>
    </div>
<div>

@endsection
