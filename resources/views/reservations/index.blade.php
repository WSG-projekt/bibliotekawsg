@extends('layouts.app')

@section('content')

    <div class="container">
        @include('components.flash-messages')
        <div class="col-6">
            <h1><i class="fa-solid fa-address-book"></i> Lista Rezerwacji</h1>
        </div>

            @if((!$reservations->isEmpty()))
        <table class="table table-hover">
            @if($user->isAdmin)
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data upływu rezerwacji</th>
                    <th scope="col">Imię i Nazwisko</th>
                    <th scope="col">Książki</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <th scope="row">{{$reservation->id}}</th>
                        <td>{{$reservation->pickup_date}}</td>
                        <td>{{$reservation->users->name}}</td>
                        <td>
                        @foreach($reservation->books as $book)
                        {{$book->title}} , {{$book->author}}
                        @endforeach
                        </td>
                                            <td>
                                                <a href="{{route('reservations.show',$reservation->id)}}">
                                                    <button class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i> Podgląd</button>
                                                </a>
                                                <button class="btn delete btn-danger btn-sm" data-id="{{$reservation->id}}"><i
                                                            class="fa-solid fa-trash"></i> Odwołaj Rezerwacje</button>
                                            </td>
                    </tr>
                @endforeach
                </tbody>
            @else
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data upływu rezerwacji</th>
                    <th scope="col">Książki</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                    <tr>
                        <th scope="row">{{$reservation->id}}</th>
                        <td>{{$reservation->pickup_date}}</td>
                        <td rowspan="{{count($reservation->books)}}">
                            @foreach($reservation->books as $book)
                                {{$book->title}} , {{$book->author}}
                            @endforeach
                        </td>
                        <td>
                            <button class="btn delete btn-danger btn-sm" data-id="{{$reservation->id}}"><i
                                        class="fa-solid fa-trash"></i> Odwołaj Rezerwacje
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            @endif

        </table>
            @else
                <div class="col-12 text-center">
                    <h3>Brak Rezerwacji</h3>
                </div>
            @endif
        <div/>
        @endsection
        @section('js-variables')
            <script>
                const deleteUrl = "{{url('reservations')}}/";
            </script>
@endsection
@section('javascript')
    @vite('resources/js/delete.js')
@endsection
