@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Leták</div>

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

                   </div>
                    
                    <hr />







    <form>
        <div class="form-row">
                <div class="form-group row col-sm-8">
                        <label for="FormControlSelectCustomer" class="col-sm-3 col-form-label">vyberte zákazníka</label>
                        <div class="col-sm-9">
                            <select name="Customer" class="form-control" id="FormControlSelectCustomer">
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer -> str_first_name }} {{ $customer -> str_last_name }}</option>
                                @endforeach
                            </select>    
                        </div>    
                </div>
        </div>
        <div class="form-row">
                <div class="form-group row col-sm-8">
                        <label for="FormControlInput1" class="col-sm-3 col-form-label">Názov / popis</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="FormControlInput1" placeholder=" ">
                        </div>    
                </div>
        </div>
        <div class="form-row">
                <div class="form-group row col-sm-8">
                        <label for="FormControlInputPocetKusov" class="col-sm-3 col-form-label">Počet kusov</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputPocetKusov" placeholder="1000">    
                        </div>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-sm-2">
                        <label for="FormControlSelectPF">Format vyr.</label>
                        <select name="paperformat" class="form-control" id="FormControlSelectPF">
                                @foreach($paperformats as $paperformat)
                                    <option value="{{ $paperformat->id }}" data-width="{{ $paperformat -> int_pf_width }}" data-height="{{ $paperformat -> int_pf_height }}">{{ $paperformat -> str_pf_name }}</option>
                                @endforeach
                        </select>         
                </div>
                <div class="form-group col-sm-1">  
                        <label for="FormControlInputPFwidth">Width</label>
                        <input type="text" class="form-control" id="FormControlInputPFwidth" placeholder="{{ $paperformat -> int_pf_width }}">    
                </div>
                <div class="form-group col-sm-1">  
                        <label for="FormControlInputPFheight">Height</label>
                        <input type="text" class="form-control" id="FormControlInputPFheight" placeholder="{{ $paperformat -> int_pf_height }}">    
                </div>
                <div class="form-group col-sm-3">
                        <label for="FormControlSelectP">Papier</label>
                        <select name="paper" class="form-control" id="FormControlSelectP">
                                @foreach($papers as $paper)
                                    <option value="{{ $paper->id }}">{{ $paper -> str_paper_name }}</option>
                                @endforeach
                        </select>    
                </div>
                <div class="form-group col-sm-1">
                        <label for="FormControlInputG">Gramáž</label>
                        <input type="text" class="form-control" id="FormControlInputG" placeholder="80">    
                </div>

                <div class="form-group col-sm-1">
                    <label for="FormControlSelectFarP">F. predná</label>
                    <select name="farbapredna" class="form-control" id="FormControlSelectFarP">   
                        <option value="0">0</option> 
                        <option value="1">1</option>
                        <option value="4">4</option>
          </select>
                </div>
                <div class="form-group col-sm-1">
                    <label for="FormControlSelectFarZ">F. zadná</label>
                    <select name="farbapredna" class="form-control" id="FormControlSelectFarZ">   
                        <option value="0">0</option> 
                        <option value="1">1</option>
                        <option value="4">4</option>
                    </select>    
                </div>
        </div>
        <hr />
        <div class="form-row">
                <fieldset class="col-sm-4 form-group mx-2 px-4">
                    <legend>Predná strana</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_laku_p" name="lak_p" value="bez_laku_p" checked>
                        <label for="bez_lbez_laku_paku">bez laku</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_offsetovy_p" name="lak_p" value="lak_offsetovy_p">
                        <label for="lak_offsetovy_p">lak offsetový</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_UV_p" name="lak_p" value="lak_UV_p">
                        <label for="lak_UV_p">lak UV</label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lak_UV_parcialny_p" name="lak_p" value="lak_UV_parcialny_p">
                        <label for="lak_UV_parcialny_p">lak UV parciálny</label>
                        <input type="text" class="form-control" id="lak_UV_parcialny_p_value" placeholder="25" style="margin:-5px 0 0 15px;width:50px" >
                        <div class="input-group-append" style="margin:-5px 0 0 0;">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_lamina_p" name="lamino_p" value="bez_lamina_p" checked>
                        <label for="bez_lamina_p">bez lamina</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_lesk_p" name="lamino_p" value="lamino_lesk_p">
                        <label for="lamino_lesk_p">lamino - lesk</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_mat_p" name="lamino_p" value="lamino_mat_p">
                        <label for="lamino_mat_p">lamino - mat</label><br>
                    </div>
                </fieldset>    
                <fieldset class="col-sm-4 form-group mx-2 px-4">
                    <legend>Zadná strana</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_laku_z" name="lak_z" value="bez_laku_z" checked>
                        <label for="bebez_laku_zz_laku">bez laku</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_offsetovy_z" name="lak_z" value="lak_offsetovy_z">
                        <label for="lak_offsetovy_z">lak offsetový</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_UV_z" name="lak_z" value="lak_UV_z">
                        <label for="lak_UV_z">lak UV</label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lak_UV_parcialny_z" name="lak_z" value="lak_UV_parcialny_z">
                        <label for="lak_UV_parcialny_z">lak UV parciálny</label>

                        <input type="text" class="form-control" id="lak_UV_parcialny_z_value" placeholder="25" style="margin:-5px 0 0 15px;width:50px" >
                        <div class="input-group-append" style="margin:-5px 0 0 0;">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_lamina_z" name="lamino_z" value="bez_lamina_z" checked>
                        <label for="bez_lamina_z">bez lamina</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_lesk_z" name="lamino_z" value="lamino_lesk_z">
                        <label for="lamino_lesk_z">lamino - lesk</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_mat_z" name="lamino_z" value="lamino_mat_z">
                        <label for="lamino_mat_z">lamino - mat</label><br>
                    </div>
                </fieldset> 
                <div class="col-sm-3 form-group">
                    <div class="form-check">
                        <label for="FormControlCheckFakValue">
                        <input type="checkbox" onclick="var input = document.getElementById('FormControlCheckFakValue'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                        fak:
                        </label>
                        <input type="text" id="FormControlCheckFakValue" name="FormControlCheckFakValue" disabled="disabled" style="width:100px" />
                    </div>


                </div>
        </div>
        <hr />
        <div class="form-row">
                <div class="form-group row col-sm-8">
                        <label for="FormControlInputCenaZaTlac" class="col-sm-3 col-form-label">Cena za tlač</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="FormControlInputCenaZaTlac" placeholder="0,00">   
                        </div>     
                </div>
                <div class="form-group row col-sm-8">
                        <label for="FormControlInputCenaZaSluzby" class="col-sm-3 col-form-label">Cena za služby</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="FormControlInputCenaZaSluzby" placeholder="0,00">    
                        </div>

                </div>
                <div class="form-group row col-sm-8">
                        <label for="FormControlInputCenaZaCelkom" class="col-sm-3 col-form-label">Cena za celkom</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="FormControlInputCenaZaCelkom" placeholder="0,00">    
                        </div>
                </div>
                <div class="form-group row col-sm-8">
                        <label for="FormControlInputCenaZaKus" class="col-sm-3 col-form-label">Cena za kus</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="FormControlInputCenaZaKus" placeholder="0,00">    
                        </div>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Dopniť ceny</button>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Uložiť objednávku</button>
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
