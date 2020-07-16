@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Sluzby</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="links">
                        <a href="{{ URL::to('home') }}">Home</a>
                        |
                        <a href="{{ URL::to('kalkulacie') }}">Klakulácie</a>
                        |
                        <a href="{{ URL::to('katalog') }}">Katalóg</a>
                        |
                        <a href="{{ URL::to('letak') }}">Leták</a>
                   </div>
                    
                    <hr />
                    <table>
                    <tr>
                    <th>meno</th>
                    <th>popis</th>
                    <th>kategory</th>
                    <th>service_type</th>
                    <th>service_param</th>
                    <th>pricetype</th>
                    <th>sort_order</th>
                    <th>boolenabled</th>
                    </tr>
                    @foreach($sluzby as $sluzba)
                    <tr>
                    <td>{{ $sluzba -> str_service_name }}</td>
                    <td>{{ $sluzba -> str_service_desc }}</td>
                    <td>{{ $sluzba -> int_service_category_id }}</td>
                    <td>{{ $sluzba -> int_service_type }}</td>
                    <td>{{ $sluzba -> int_service_param }}</td>
                    <td>{{ $sluzba -> int_service_price_type }}</td>
                    <td>{{ $sluzba -> int_service_sort_order }}</td>
                    <td>{{ $sluzba -> bool_enabled }}</td>
                    </tr>
                    @endforeach
                    </table>
                    <hr />

                    <a href="{{ URL::to('logout') }}">Logout</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
