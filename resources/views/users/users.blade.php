@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>User list</h1>
        <div class="col-12">

            {{--<users-list-component v-bind:users-list="{{$usersList}}"></users-list-component>--}}
            {{--<users-list-table-component v-bind:users-list="{{json_encode($usersList)}}"></users-list-table-component>--}}
            <users-list-table-component endpoint={{config('app.url')}}api/users></users-list-table-component>
           {{-- <users-list-component></users-list-component>--}}

            {{-- users list blade--}}
            {{--<table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>E-mail</td>
                        <td>Created at</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($usersList as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>--}}
            {{--{{ $users->links() }}--}}

        </div>
    </div>

@endsection
