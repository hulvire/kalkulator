@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Katalóg</div>

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
                        <a href="{{ URL::to('letak') }}">Leták</a>
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
        </div>



        <div class="col-sm-4 form-group">
                <h3>Knikárske práce</h3>

                    <div class="form-check">
                        <label for="FormControlCheckVazbaV1">
                        <input type="checkbox" onclick="var input = document.getElementById('FormControlCheckVazbaV1'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                        väzba V1
                        </label>
                        <input style="width:100px" type="text" id="FormControlCheckVazbaV1" name="FormControlCheckVazbaV1" disabled="disabled" />
                    </div>
                    <div class="form-check">
                        <label for="FormControlCheckVazbaV2">
                        <input type="checkbox" onclick="var input = document.getElementById('FormControlCheckVazbaV2'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                        väzba V2
                        </label>
                        <input style="width:100px" type="text" id="FormControlCheckVazbaV2" name="FormControlCheckVazbaV2" disabled="disabled" />
                    </div>
                    <div class="form-check">
                        <label for="FormControlCheckOcka">
                        <input type="checkbox" onclick="var input = document.getElementById('FormControlCheckOcka'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                        očká 
                        </label>
                        <input style="width:100px" type="text" id="FormControlCheckOcka" name="FormControlCheckOcka" disabled="disabled" />
                    </div>
                    <div class="form-check">
                        <label for="FormControlCheckVrtanie">
                        <input type="checkbox" onclick="var input = document.getElementById('FormControlCheckVrtanie'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" />
                        vŕtanie
                        </label>
                        <input style="width:100px" type="text" id="FormControlCheckVrtanie" name="FormControlCheckVrtanie" disabled="disabled" />
                    </div>


                </div>

    </div>
        <hr />
        <div class="form-row">
                <div class="col-sm-3">
                        <h3>Obálka</h3>
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
                    </select>
                </div>
                <div class="form-group col-sm-1">
                    <label for="FormControlSelectFarZ">F. zadná</label>
                    <select name="farbapredna" class="form-control" id="FormControlSelectFarZ">   
                        <option value="0">0</option> 
                        <option value="1">1</option>
                    </select>    
                </div>


                <fieldset class="col-sm-4 form-group mx-3 px-4">
                    <legend>Predná strana</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_laku_predna" name="lak_predna" value="bez_laku_predna" checked>
                        <label for="bez_laku_predna">bez laku</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_offsetovy_predna" name="lak_predna" value="lak_offsetovy_predna">
                        <label for="lak_offsetovy_predna">lak offsetový</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_UV_predna" name="lak_predna" value="lak_UV">
                        <label for="lak_UV">lak UV</label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lak_UV_parcialny_predna" name="lak_predna" value="lak_UV_parcialny_predna">
                        <label for="lak_UV_parcialny_predna">lak UV parciálny</label>
                        <input type="text" class="form-control" id="lak_UV_parcialny_predna_value" placeholder="25" style="margin:-5px 0 0 15px;width:50px" >
                        <div class="input-group-append" style="margin:-5px 0 0 0;">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_lamina_predna" name="lamino_predna" value="bez_lamina_predna" checked>
                        <label for="bez_lamina_predna">bez lamina</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_lesk_predna" name="lamino_predna" value="lamino_lesk_predna">
                        <label for="lamino_lesk_predna">lamino - lesk</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_mat_predna" name="lamino_predna" value="lamino_mat_predna">
                        <label for="lamino_mat_predna">lamino - mat</label><br>
                    </div>
                </fieldset>    
                <fieldset class="col-sm-4 form-group mx-3 px-4">
                    <legend>Zadná strana</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_laku_zadna" name="lak_zadna" value="bez_laku_zadna" checked>
                        <label for="bez_laku_zadna">bez laku</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_offsetovy_zadna" name="lak_zadna" value="lak_offsetovy_zadna">
                        <label for="lak_offsetovy_zadna">lak offsetový</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_UV_zadna" name="lak_zadna" value="lak_UV_zadna">
                        <label for="lak_UV_zadna">lak UV</label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lak_UV_parcialny_zadna" name="lak_zadna" value="lak_UV_parcialny_zadna">
                        <label for="lak_UV_parcialny_zadna">lak UV parciálny</label>

                        <input type="text" class="form-control" id="lak_UV_parcialny_zadna_value" placeholder="25" style="margin:-5px 0 0 15px;width:50px" >
                        <div class="input-group-append" style="margin:-5px 0 0 0;">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_lamina_zadna" name="lamino_zadna" value="bez_lamina_zadna" checked>
                        <label for="bez_lamina_zadna">bez lamina</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_lesk_zadna" name="lamino_zadna" value="lamino_lesk_zadna">
                        <label for="lamino_lesk">lamino - lesk</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_mat_zadna" name="lamino_zadna" value="lamino_mat_zadna">
                        <label for="lamino_mat_zadna">lamino - mat</label><br>
                    </div>
                </fieldset> 

        </div>
        <hr />
        <div class="form-row">
                <div class="col-sm-3">
                        <h3>Vnutro A</h3>
                </div>
                <div class="form-group col-sm-3">
                        <label for="FormControlSelectP_A">Papier</label>
                        <select name="paper" class="form-control" id="FormControlSelectP_A">
                                @foreach($papers as $paper)
                                    <option value="{{ $paper->id }}">{{ $paper -> str_paper_name }}</option>
                                @endforeach
                        </select>    
                </div>
                <div class="form-group col-sm-1">
                        <label for="FormControlInputG_A">Gramáž</label>
                        <input type="text" class="form-control" id="FormControlInputG_A" placeholder="80">    
                </div>

                <div class="form-group col-sm-1">
                    <label for="FormControlSelectFarP_A">F. predná</label>
                    <select name="farbapredna" class="form-control" id="FormControlSelectFarP_A">   
                        <option value="0">0</option> 
                        <option value="1">1</option>
                        <option value="4">4</option>
                </select>
                </div>
                <div class="form-group col-sm-1">
                    <label for="FormControlSelectFarZ_A">F. zadná</label>
                    <select name="farbapredna" class="form-control" id="FormControlSelectFarZ_A">   
                        <option value="0">0</option> 
                        <option value="1">1</option>
                        <option value="4">4</option>
                    </select>    
                </div>
                <div class="form-group col-sm-1">
                        <label for="FormControlInputPocet_A">Počet str.</label>
                        <input type="text" class="form-control" id="FormControlInputPocet_A" placeholder="2">    
                </div>

                <fieldset class="col-sm-4 form-group mx-3 px-4">
                    <legend>Predná strana</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_laku_predna_A" name="lak_predna_A" value="bez_laku_predna_A" checked>
                        <label for="bez_laku_predna_A">bez laku</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_offsetovy_predna_A" name="lak_predna_A" value="lak_offsetovy_predna_A">
                        <label for="lak_offsetovy_predna_A">lak offsetový</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_UV_predna_A" name="lak_predna_A" value="lak_UV_predna_A">
                        <label for="lak_UV_predna_A">lak UV</label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lak_UV_parcialny_predna_A" name="lak_predna_A" value="lak_UV_parcialny_predna_A">
                        <label for="lak_UV_parcialny_predna_A">lak UV parciálny</label>
                        <input type="text" class="form-control" id="lak_UV_parcialny_predna_value_A" placeholder="25" style="margin:-5px 0 0 15px;width:50px" >
                        <div class="input-group-append" style="margin:-5px 0 0 0;">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_lamina_predna_A" name="lamino_predna_A" value="bez_lamina_predna_A" checked>
                        <label for="bez_lamina_predna_A">bez lamina</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_lesk_predna_A" name="lamino_predna_A" value="lamino_lesk_predna_A">
                        <label for="lamino_lesk_predna_A">lamino - lesk</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_mat_predna_A" name="lamino_predna_A" value="lamino_mat_predna_A">
                        <label for="lamino_mat_predna_A">lamino - mat</label><br>
                    </div>
                </fieldset>    
                <fieldset class="col-sm-4 form-group  mx-3 px-4">
                    <legend>Zadná strana</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_laku_zadna_A" name="lak_zadna_A" value="bez_laku_zadna_A" checked>
                        <label for="bez_laku_zadna_A">bez laku</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_offsetovy_zadna_A" name="lak_zadna_A" value="lak_offsetovy_zadna_A">
                        <label for="lak_offsetovy_zadna_A">lak offsetový</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_UV_zadna_A" name="lak_zadna_A" value="lak_UV_zadna_A">
                        <label for="lak_UV_A">lak UV</label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lak_UV_parcialny_zadna_A" name="lak_zadna_A" value="lak_UV_parcialny_zadna_A">
                        <label for="lak_UV_parcialny_zadna_A">lak UV parciálny</label>

                        <input type="text" class="form-control" id="lak_UV_parcialny_zadna_value_A" placeholder="25" style="margin:-5px 0 0 15px;width:50px" >
                        <div class="input-group-append" style="margin:-5px 0 0 0;">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_lamina_zadna_A" name="lamino_zadna_A" value="bez_lamina_zadna_A" checked>
                        <label for="bez_lamina_zadna_A">bez lamina</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_lesk_zadna_A" name="lamino_zadna_A" value="lamino_lesk_zadna_A">
                        <label for="lamino_lesk_zadna_A">lamino - lesk</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_mat_zadna_A" name="lamino_zadna_A" value="lamino_mat_zadna_A">
                        <label for="lamino_mat_zadna_A">lamino - mat</label><br>
                    </div>
                </fieldset> 

        </div>
        <hr />
        <div class="form-row">
                <div class="col-sm-3">
                        <h3>Vnutro B</h3> <span id="open-close-vnotro-B"> open </span>
                </div>
                <div class="form-group form-vnutro-B col-sm-3">
                        <label for="FormControlSelectP_B">Papier</label>
                        <select name="paper" class="form-control" id="FormControlSelectP_B">
                                @foreach($papers as $paper)
                                    <option value="{{ $paper->id }}">{{ $paper -> str_paper_name }}</option>
                                @endforeach
                        </select>    
                </div>
                <div class="form-group form-vnutro-B col-sm-1">
                        <label for="FormControlInputG_B">Gramáž</label>
                        <input type="text" class="form-control" id="FormControlInputG_B" placeholder="80">    
                </div>
                <div class="form-group form-vnutro-B col-sm-1">
                    <label for="FormControlSelectFarP_B">F. predná</label>
                    <select name="farbapredna" class="form-control" id="FormControlSelectFarP_B">   
                        <option value="0">0</option> 
                        <option value="1">1</option>
                        <option value="4">4</option>
                </select>
                </div>
                <div class="form-group form-vnutro-B col-sm-1">
                    <label for="FormControlSelectFarZ_B">F. zadná</label>
                    <select name="farbapredna" class="form-control" id="FormControlSelectFarZ_B">   
                        <option value="0">0</option> 
                        <option value="1">1</option>
                        <option value="4">4</option>
                    </select>    
                </div>
                <div class="form-group form-vnutro-B col-sm-1">
                        <label for="FormControlInputPocet_B">Počet str.</label>
                        <input type="text" class="form-control" id="FormControlInputPocet_B" placeholder="2">    
                </div>

                <fieldset class="col-sm-4 form-group form-vnutro-B mx-3 px-4">
                    <legend>Predná strana</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_laku_predna_B" name="lak_predna_B" value="bez_laku_predna_B" checked>
                        <label for="bez_laku_predna_B">bez laku</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_offsetovy_predna_B" name="lak_predna_B" value="lak_offsetovy_predna_B">
                        <label for="lak_offsetovy_predna_B">lak offsetový</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_UV_predna_B" name="lak_predna_B" value="lak_UV_predna_B">
                        <label for="lak_UV_predna_B">lak UV</label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lak_UV_parcialny_predna_B" name="lak_predna_B" value="lak_UV_parcialny_predna_B">
                        <label for="lak_UV_parcialny_predna_B">lak UV parciálny</label>
                        <input type="text" class="form-control" id="lak_UV_parcialny_predna_value_B" placeholder="25" style="margin:-5px 0 0 15px;width:50px" >
                        <div class="input-group-append" style="margin:-5px 0 0 0;">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_lamina_predna_B" name="lamino_predna_B" value="bez_lamina_predna_B" checked>
                        <label for="bez_lamina_predna_B">bez lamina</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_lesk_predna_B" name="lamino_predna_B" value="lamino_lesk_predna_B">
                        <label for="lamino_lesk_predna_B">lamino - lesk</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_mat_predna_B" name="lamino_predna_B" value="lamino_mat_predna_B">
                        <label for="lamino_mat_predna_B">lamino - mat</label><br>
                    </div>
                </fieldset>    
                <fieldset class="col-sm-4 form-group form-vnutro-B  mx-3 px-4">
                    <legend>Zadná strana</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_laku_zadna_B" name="lak_zadna_B" value="bez_laku_zadna_B" checked>
                        <label for="bez_laku_zadna_B">bez laku</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_offsetovy_zadna_B" name="lak_zadna_B" value="lak_offsetovy_zadna_B">
                        <label for="lak_offsetovy_zadna_B">lak offsetový</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lak_UV_zadna_B" name="lak_zadna_B" value="lak_UV_zadna_B">
                        <label for="lak_UV_B">lak UV</label><br>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lak_UV_parcialny_zadna_B" name="lak_zadna_B" value="lak_UV_parcialny_zadna_B">
                        <label for="lak_UV_parcialny_zadna_B">lak UV parciálny</label>

                        <input type="text" class="form-control" id="lak_UV_parcialny_zadna_value_B" placeholder="25" style="margin:-5px 0 0 15px;width:50px" >
                        <div class="input-group-append" style="margin:-5px 0 0 0;">
                            <div class="input-group-text">%</div>
                        </div>
                    </div>
                    <hr />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="bez_lamina_zadna_B" name="lamino_zadna_B" value="bez_lamina_zadna_B" checked>
                        <label for="bez_lamina_zadna_B">bez lamina</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_lesk_zadna_B" name="lamino_zadna_B" value="lamino_lesk_zadna_B">
                        <label for="lamino_lesk_zadna_B">lamino - lesk</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="lamino_mat_zadna_B" name="lamino_zadna_B" value="lamino_mat_zadna_B">
                        <label for="lamino_mat_zadna_B">lamino - mat</label><br>
                    </div>
                </fieldset> 

        </div>
        <hr />
        <div class="form-row">
                <div class="form-group row col-sm-12">
                        <label  class="col-sm-3 col-form-label">&nbsp;</label>
                        <label class="col-sm-2 col-form-label" >Obálka</label>     
                        <label class="col-sm-2 col-form-label" >Vnutro A</label>
                        <label class="col-sm-2 col-form-label" >Vnutro B</label> 
                        <label class="col-sm-2 col-form-label" >Celkom</label>
                </div>
                <div class="form-group row col-sm-12">
                        <label for="FormControlInputCenaZaTlac" class="col-sm-3 col-form-label">Cena za tlač</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaTlac" placeholder="0,00">   
                        </div>     
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaTlacVnutroA" placeholder="0,00">   
                        </div>   
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaTlacVnutroB" placeholder="0,00">   
                        </div>   
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaTlacCelkom" placeholder="0,00">   
                        </div>   
                </div>
                <div class="form-group row col-sm-12">
                        <label for="FormControlInputCenaZaSluzby" class="col-sm-3 col-form-label">Cena za služby</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaSluzby" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaSluzbyVnutroA" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaSluzbyVnutroB" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaSluzbyCelmon" placeholder="0,00">    
                        </div>

                </div>
                <div class="form-group row col-sm-12">
                        <label for="FormControlInputCenaZaCelkom" class="col-sm-3 col-form-label">Cena za celkom</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaCelkom" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaCelkomVnutroA" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaCelkomVnutroB" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaCelkomCelkom" placeholder="0,00">    
                        </div>
                </div>
                <div class="form-group row col-sm-12">
                        <label for="FormControlInputCenaZaKus" class="col-sm-3 col-form-label">Cena za kus</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaKus" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaKusVnutroA" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaKusVnutroB" placeholder="0,00">    
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="FormControlInputCenaZaKusCelkom" placeholder="0,00">    
                        </div>
                </div>
                <hr />
            <div class="form-group row col-sm-12">
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Dopniť ceny</button>
                </div>

                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Uložiť objednávku</button>
                </div>
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
