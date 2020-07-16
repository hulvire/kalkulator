@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! {{ $premenna }}<br />


                    <div class="links">
                        <a href="{{ URL::to('sluzby') }}">Service</a>
                        |
                        <a href="{{ URL::to('kalkulacie') }}">Kalkulácie</a>
                        |
                        <a href="{{ URL::to('katalog') }}">Katalóg</a>
                        |
                        <a href="{{ URL::to('letak') }}">Leták</a>
                        |
                        <a href="{{ URL::to('zakazky') }}">Zákazky</a>
                        |
                        <a href="{{ URL::to('zoznam') }}">Zoznam</a>
                   </div>
                    
                    <hr />

                    @foreach($users as $user)
                    Loged pod username: <strong>{{ $user -> username }}</strong><br />
                    Tvoje meno: <strong>{{ $user -> name }}</strong><br />
                    Tvoj email: <strong>{{ $user -> email }}</strong><br />
                    @endforeach

                    <hr />

                    <a href="{{ URL::to('logout') }}">Logout</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
