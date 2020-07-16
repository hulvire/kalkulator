@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Zákazky</div>

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







    <form>
    <div class="form-row">
        <div class="col-sm-8">
                <div class="form-group row">
                        <label for="FormControlSelectCustomer" class="col-sm-4 col-form-label">vyberte zákazníka</label>
                        <div class="col-sm-7">
                            <select name="Customer" class="form-control" id="FormControlSelectCustomer">
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer -> str_first_name }} {{ $customer -> str_last_name }}</option>
                                @endforeach
                            </select>    
                        </div>    
                </div>

                <div class="form-group row">
                        <label for="FormControlInput1" class="col-sm-4 col-form-label">Názov / popis</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="FormControlInput1" placeholder=" ">
                        </div>    
                </div>

                <div class="form-group row">
                        <label for="FormControlInputPocetKusov" class="col-sm-4 col-form-label">Počet kusov</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputPocetKusov" placeholder="1000">    
                        </div>
                </div>
                

                <div class="form-row">
                <div class="form-group col-sm-4">
                        <label for="FormControlSelectPF">Format vyr.</label>
                        <select name="paperformat" class="form-control" id="FormControlSelectPF">
                                @foreach($paperformats as $paperformat)
                                    <option value="{{ $paperformat->id }}" data-width="{{ $paperformat -> int_pf_width }}" data-height="{{ $paperformat -> int_pf_height }}">{{ $paperformat -> str_pf_name }}</option>
                                @endforeach
                        </select>         
                </div>
                <div class="form-group col-sm-2">  
                        <label for="FormControlInputPFwidth">Width</label>
                        <input type="text" class="form-control" id="FormControlInputPFwidth" placeholder="{{ $paperformat -> int_pf_width }}">    
                </div>
                <div class="form-group col-sm-2">  
                        <label for="FormControlInputPFheight">Height</label>
                        <input type="text" class="form-control" id="FormControlInputPFheight" placeholder="{{ $paperformat -> int_pf_height }}">    
                </div>

        </div>
    </form>         


                    <hr />

                    <a href="{{ URL::to('logout') }}">Logout</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
