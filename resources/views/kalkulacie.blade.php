@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Kalkulácie</div>

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
                        <a href="{{ URL::to('katalog') }}">Katalóg</a>
                        |
                        <a href="{{ URL::to('letak') }}">Leták</a>
                        |
                        <a href="{{ URL::to('zakazky') }}">Zákazky</a>
                        |
                        <a href="{{ URL::to('zoznam') }}">Zoznam</a>
                   </div>
                    
                    <hr />



<code>

    <h3>Tabulka Customer</h3>
                    @foreach($customers as $customer)
                      int_user_id: <strong>{{ $customer -> int_user_id }}</strong><br />
                        int_old_id: <strong>{{ $customer -> int_old_id }}</strong><br />
                        str_first_name: <strong>{{ $customer -> str_first_name }}</strong><br />
                        str_last_name: <strong>{{ $customer -> str_last_name }}</strong><br />
                        str_company: <strong>{{ $customer -> str_company }}</strong><br />
                        str_phoney: <strong>{{ $customer -> str_phone }}</strong><br />
                        str_email: <strong>{{ $customer -> str_email }}</strong><br />
                        str_address: <strong>{{ $customer -> str_address }}</strong><br />
                        str_ic: <strong>{{ $customer -> str_ic }}</strong><br />
                        str_dic: <strong>{{ $customer -> str_dic }}</strong><br />
                        int_client_printing_discount: <strong>{{ $customer -> int_client_printing_discount }}</strong><br />
                        bool_active: <strong>{{ $customer -> bool_active }}</strong><br />
                        bool_erased: <strong>{{ $customer -> bool_erased }}</strong><br />
                        bool_exported: <strong>{{ $customer -> bool_exported }}</strong><br />
                        <hr  style="width:20%;text-align:left;margin-left:0" />
                   @endforeach
<hr />
<h3>Tabulka Paper</h3>
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
<h3>Tabulka Service Category</h3>
                   <table>
                   <tr>
                   <th>id</th>
                   <th>str_service_type</th>
                   </tr>
                   @foreach($service_categories as $service_category)
                   <tr>
                   <td>{{ $service_category -> id }}</td>
                   <td>{{ $service_category -> str_service_type }}</td>
                   </tr>
                   @endforeach
                   </table>
<hr />
<h3>Tabulka Service Price</h3>
                   <table>
                   <tr>
                   <th>id</th>
                   <th>int_service_id</th>
                   <th>int_service_price_type</th>
                   <th>int_format_id</th>
                   <th>int_min_amount</th>
                   <th>int_max_amount</th>
                   <th>int_price_per_item</th>
                   <th>int_price_per_set</th>
                   </tr>
                   @foreach($service_prices as $service_price)
                   <tr>
                   <td>{{ $service_price -> id }}</td>
                   <td>{{ $service_price -> int_service_id }}</td>
                   <td>{{ $service_price -> int_service_price_type }}</td>
                   <td>{{ $service_price -> int_format_id }}</td>
                   <td>{{ $service_price -> int_min_amount }}</td>
                   <td>{{ $service_price -> int_max_amount }}</td>
                   <td>{{ $service_price -> int_price_per_item }}</td>
                   <td>{{ $service_price -> int_price_per_set }}</td>
                   </tr>
                   @endforeach
                   </table>
</code>



                    <hr />

                    <a href="{{ URL::to('logout') }}">Logout</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
