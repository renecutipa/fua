@extends('layouts.app')


@section('content')

<div class="container">
    <div class="page-inner">        
        
        <form method="POST" action="{{route('fuas.store')}}">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold mb-3">Editar - Formato Unico de Atención</h3>
                <!--h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6-->
            </div>
            <div class="ms-md-auto py-2 py-md-0">
                <a href="{{route('reporteFUA', ['fua' => $fua->id])}}" class="btn btn-info btn-round me-2" target="_blank">Imprimir</a>
                <a href="#" class="btn btn-success btn-round">Guardar</a>
            </div>
        </div>
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <div class="card-title">Formato</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>{{$fua->codigo_ipress}}-24A-{{str_pad($fua->id, 8, "0", STR_PAD_LEFT); }}</h2>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-default label-ipress">
                                <label>Código IPRESS</label>
                                <input id="codigo_ipress" class="form-control" name="codigo_ipress" maxlength="10" value="{{$fua->codigo_ipress}}"/>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group form-group-default label-ipress">
                                <label>Nombre IPRESS</label>
                                <input id="nombre_ipress" class="form-control" disabled/>
                            </div>
                        </div>
                    </div>                    
                </div>                  
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Asegurado</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                            <div class="form-group form-group-default">
                            <label>Tipo Doc.</label>
                                <select class="form-select" id="tipo_documento"  disabled>
                                    <option value="2" @if($fua->tipo_documento == "2") selected @endif>2 - DNI</option>
                                    <option value="3" @if($fua->tipo_documento == "3") selected @endif>3 - CE</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default">
                                    <label>DNI</label>
                                    <input id="dni" type="text" class="form-control" value="{{$fua->dni}}" disabled/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default asegurado_dato">
                                    <label>Apellido Paterno</label>
                                    <input id="asegurado_paterno" type="text" class="form-control" value="{{$fua->asegurado_paterno}}" disabled/>
                                </div>                                
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default asegurado_dato">
                                    <label>Apellido Materno</label>
                                    <input id="asegurado_materno" type="text" class="form-control" value="{{$fua->asegurado_materno}}" disabled/>
                                </div>                                
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default asegurado_dato">
                                    <label>Primer Nombre</label>
                                    <input id="asegurado_nombres" type="text" class="form-control" value="{{$fua->asegurado_nombres}}" disabled/>
                                </div>                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-group-default asegurado_dato">
                                    <label>Otros Nombres</label>
                                    <input id="asegurado_onombres" type="text" class="form-control" value="{{$fua->asegurado_onombres}}" disabled/>
                                </div>                                
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default">
                                    <label>Genero</label>
                                    <select class="form-select" id="asegurado_genero" disabled>
                                        <option value="">-</option>
                                        <option value="M" @if($fua->asegurado_genero == "M") selected @endif>Masculino</option>
                                        <option value="F" @if($fua->asegurado_genero == "F") selected @endif>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default">
                                <label>Salud Materna</label>
                                    <select class="form-select" id="salud_materna" name="salud_materna">
                                        <option value="">-</option>
                                        <option value="G">Gestante</option>
                                        <option value="P">Puerpera</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default">
                                    <label>Fecha Probable de parto / Fecha de Parto</label>
                                    <div class="input-group">
                                        <input id="parto_d" type="text" class="form-control col-3" disabled="true" maxlength="2"/>
                                        <input id="parto_m" type="text" class="form-control col-3" disabled="true" maxlength="2"/>
                                        <input id="parto_y" type="text" class="form-control col-3" disabled="true" maxlength="4"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default">
                                    <label>Fecha de Nacimiento</label>
                                    <div class="input-group">
                                        <input id="nacimiento_d" type="text" class="form-control col-3" maxlength="2" value="{{substr($fua->fecha_nacimiento, 8,2)}}" disabled/>
                                        <input id="nacimiento_m" type="text" class="form-control col-3" maxlength="2" value="{{substr($fua->fecha_nacimiento, 5,2)}}" disabled/>
                                        <input id="nacimiento_a" type="text" class="form-control col-3" maxlength="4" value="{{substr($fua->fecha_nacimiento, 0,4)}}" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default">
                                    <label>Fecha de Fallecimiento</label>
                                    <div class="input-group">
                                        <input id="fallecimiento_d" type="text" class="form-control col-3" maxlength="2"/>
                                        <input id="fallecimiento_m" type="text" class="form-control col-3" maxlength="2"/>
                                        <input id="fallecimiento_a" type="text" class="form-control col-3" maxlength="4"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-group-default">
                                    <label>Historia Clínica</label>
                                    <input id="historia" name="historia" type="text" class="form-control"/>
                                </div>
                            </div>
                            
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <div class="card-title">Atención</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-group-default">
                                <label>Fecha de Atención</label>
                                <div class="input-group">
                                    <input id="fua_atencion_d" type="text" class="form-control col-3" maxlength="2"/>
                                    <input id="fua_atencion_m" type="text" class="form-control col-3" maxlength="2"/>
                                    <input id="fua_atencion_a" type="text" class="form-control col-3" maxlength="4"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-default">
                                <label>Hora de Atención</label>
                                <div class="input-group">
                                    <input id="fua_atencion_h" type="text" class="form-control col-6" maxlength="2"/>
                                    <input id="fua_atencion_i" type="text" class="form-control col-6" maxlength="2"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group form-group-default">
                            <label>Codigo de Prestación</label>
                                <select class="form-select" id="codigo_prestacional" name="codigo_prestacional">
                                    <option>- SELECCIONE -</option>
                                    <option value="111">111</option>
                                    <option value="117">117</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>                  
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <div class="card-title">Diagnósticos</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group form-group-default">
                                <label>Tipo Doc.</label>
                                <select class="form-select" name="dx[]">
                                    <option value="I">INGRESO</option>
                                    <option value="E">EGRESO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group form-group-default">
                                <label>Tipo de DX</label>
                                <select class="form-select" id="tipo_documento" name="tdx[]">
                                    <option value="P">PREVENTIVO</option>
                                    <option value="D">DEFINITIVO</option>
                                    <option value="R">REFERENCIA</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group form-group-default">
                                <label>CIE10</label>
                                <input id="cie10" name="cie10" type="text" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group form-group-default label-ipress">
                                <label>Descripción CIE10</label>
                                <input id="nombre_ipress" class="form-control" disabled/>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <button class="btn btn-block btn-danger btn-lg"> <i class="fas fa-trash"></i> </button>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <div class="card-title">Prestación Administrativa</div>
                </div>
                <div class="card-body">
                </div>                  
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <div class="card-title">Diagnósticos</div>
                </div>
                <div class="card-body">
                </div>                  
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <div class="card-title">Rendición de Gastos</div>
                </div>
                <div class="card-body">
                </div>                  
                </div>
            </div>
        </div>
        <div class="row">
                <button type="submit" class="btn-block btn btn-success">Guardar</button>
        </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $( "#dni" ).on( "keyup", function() {
        var tipo_documento = $('#tipo_documento').val();
        var dni = $('#dni').val();

        if(dni.length == 8 && tipo_documento == "2"){
            $.ajax({
                url: "../consultaDNI/"+dni,
                cache: false,
                success: function(data){
                    data = $.parseJSON(data);
                    if(data != null){
                        var nombres = (data.nombres).split(" ");                        
                        $('#asegurado_nombres').val(nombres[0]);
                        nombres.shift();
                        var onombres = "";
                        nombres.forEach(function(n){
                            onombres = onombres + n + " ";
                        });
                        $('#asegurado_onombres').val(onombres.trim());
                        $('#asegurado_paterno').val(data.apellidoPaterno);
                        $('#asegurado_materno').val(data.apellidoMaterno);
                        $( ".asegurado_dato" ).addClass( "has-success" );                        
                        $('#asegurado_genero').focus();
                    }
                    
                }
            });
        }
    } );

    $("#salud_materna" ).on( "change", function() {
        if($('#salud_materna').val() != ""){
            $("#parto_d").prop("disabled", false);
            $("#parto_m").prop("disabled", false);
            $("#parto_y").prop("disabled", false);
        }else{
            $("#parto_d").prop("disabled", true);
            $("#parto_m").prop("disabled", true);
            $("#parto_y").prop("disabled", true);
        }
    } );

    $("#asegurado_genero" ).on("change", function() {
        if($('#asegurado_genero').val() == "F"){
            $("#salud_materna").prop("disabled", false);
            /*$("#parto_d").prop("disabled", false);
            $("#parto_m").prop("disabled", false);
            $("#parto_y").prop("disabled", false);*/
        }else{
            $("#salud_materna").prop("disabled", true);
            /*$("#parto_d").prop("disabled", true);
            $("#parto_m").prop("disabled", true);
            $("#parto_y").prop("disabled", true);*/
        }
    } );

    $( "#codigo_ipress" ).on( "keyup", function() {
        var codigo_ipress = $('#codigo_ipress').val();

        if(codigo_ipress.length == 10){
            $.ajax({
                url: "../consultaIPRESS/"+codigo_ipress,
                cache: false,
                success: function(data){
                    data = $.parseJSON(data);
                    if(data.status == "success"){
                        $("#nombre_ipress").val(data.nombre_renaes);
                        $(".label-ipress").removeClass("has-error");
                        $(".label-ipress").addClass("has-success");
                        $('#tipo_documento').focus();
                    }else{
                        $(".label-ipress").removeClass("has-success");
                        $(".label-ipress").addClass("has-error");
                        $('#codigo_ipress').val("");
                        $('#nombre_ipress').val("");
                        $('#codigo_ipress').focus();
                    }
                        
                }
            });
        }
    } );


</script>
@endpush