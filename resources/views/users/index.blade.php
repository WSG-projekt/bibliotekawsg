@extends('layouts.app')

@section('content')

    <div class="container">
        @if(Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
        <div class="col-6">
            <h1><i class="fa-solid fa-user-group"></i> Lista Użytkowników</h1>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">E-mail</th>
                <th scope="col">Imię i Nazwisko</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        <a href="{{route('users.show',$user->id)}}">
                            <button class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </a>
                        <button class="btn delete btn-danger btn-sm" data-id="{{$user->id}}"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div/>
@endsection
@section('js-variables')
            <script>
                const deleteUrl="{{url('users')}}/";
            </script>
@endsection
@section('javascript')
    @vite('resources/js/delete.js')
@endsection
