@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-12 mb-3">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="mt-2">
                                    <h4> {{$user->name}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-white">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="mb-0">Imię i Nazwisko</h6>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    {{$user->name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    {{$user->email}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card bg-white">
                        <div class="card-body row text-center">
                                <div class="row border-bottom border-1">
                                    <h4 class="col-md-8">Wypożyczenia</h4>
                                    <h4 class="col-md-4">Rezerwacje</h4>
                                </div>
                                <div class="col-md-7 mt-3">
                                    <div class="row mt-2 pb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Książki wypożyczone przez użytkownika:</h6>
                                        </div>
                                    </div>
                                    <div class="row-sm-12">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="col">ID ksiązki</th>
                                                <th scope="col">Kategoria</th>
                                                <th scope="col">Tytuł</th>
                                                <th scope="col">Autor</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($user->rentals as $rental)
                                                @foreach($rental->books as $book)
                                                <tr>
                                                    <th scope="row">{{$book->id}}</th>
                                                    <td>{{$book->genre->name}}</td>
                                                    <td>{{$book->title}}</td>
                                                    <td>{{$book->author}}</td>
                                                </tr>
                                                @endforeach
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-3 border-start border-1">
                                    <div class="row mt-2 pb-3">
                                            <div class="col-sm-12">
                                                <h6 class="mb-0">Książki wypożyczone przez użytkownika:</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col">ID ksiązki</th>
                                                    <th scope="col">Kategoria</th>
                                                    <th scope="col">Tytuł</th>
                                                    <th scope="col">Autor</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($user->reservations as $reservation)
                                                    @foreach($reservation->books as $book)
                                                        <tr>
                                                            <th scope="row">{{$book->id}}</th>
                                                            <td>{{$book->genre->name}}</td>
                                                            <td>{{$book->title}}</td>
                                                            <td>{{$book->author}}</td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
