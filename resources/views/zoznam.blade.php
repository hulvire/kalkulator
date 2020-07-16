@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Zoznam</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="links">
                        <a href="{{ URL::to('home') }}">Home</a>
                        |
                        <a href="{{ URL::to('sluzby') }}">Služby</a>
                        |
                        <a href="{{ URL::to('kalkulacie') }}">Klakulácie</a>
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



                    <h3>Zoznam typov papiera</h3>
                   <table>
                   <tr>
                   <th>id</th>
                    <th>str_paper_name</th>
                    <th>byte_paper_price_type</th>
                    <th>int_paper_format_id</th>
                    <th>int_paper_price</th>
                    <th>bool_active</th>
                   </tr>
                   @foreach($papers as $paper)
                   <tr>
                   <td>{{ $paper -> id }}</td>
                   <td>{{ $paper -> str_paper_name }}</td>
                    <td>{{ $paper -> byte_paper_price_type }}</td>
                    <td>{{ $paper -> int_paper_format_id }}</td>
                    <td>{{ $paper -> int_paper_price }}</td>
                    <td>{{ $paper -> bool_active }}</td>
                   </tr>
                   @endforeach
                   </table>
<hr />



                    <hr />

                    <a href="{{ URL::to('logout') }}">Logout</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
