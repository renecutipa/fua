<!DOCTYPE html>
<html>
<head>
	<title>{{$fua->codigo_ipress}}-24A-{{str_pad($fua->id, 8, "0", STR_PAD_LEFT); }}</title>

	<style>
        @page { margin: 10px 20px }
        body {
            margin: 0px;
            background-size: 100%;
            padding: 0;
            font-family: Helvetica;
        }
        .text-center{
            text-align: center;
            text-transform: uppercase;
        }
        .borde{
            border: solid 2px #AAA;
            border-radius: 20px;
            margin: 0 80px;
        }
        
        .page_break { page-break-before: always; }

        .encabezado01{
            background: #999;
            text-align: center;
            font-size: 0.5em;
            padding: 2px 0px;
            margin-bottom: 5px;
        }
        .encabezado02{
            background: #CCC;
            text-align: center;
            font-size: 0.4em;
            padding: 2px 2px;
        }

        

        .encabezado03{
            background: #CCC;
            text-align: center;
            font-size: 0.4em;
            padding: 10px 2px 11px 2px;
        }

        .encabezado04{
            background: #CCC;
            text-align: center;
            font-size: 0.3em;
            padding: 1px 1px;
        }
        .text90grados span{
            transform: rotate(-90deg);
        }

        table{
            margin: 0;
            border-spacing: 0;
        }
        table.contenido{
            border-collapse: collapse;
            width: 100%                   
        }

        table.reducido td{
            height: 8px !important;                   
        }
        table.contenido td{
            border: 0.5px solid #AAA;
            height: 13px; 
            
        }        
        .dato{
            font-weight: bold;
            text-align: center;
            font-size: 0.8em;
            height: 15px !important;
        }
        .dato2{
            
            text-align: center;
            font-size: 0.6em;
            height: 15px !important;
        }
        .encabezado05{
            font-size: 0.3em;
        }
        .firma{
            text-align:center;
            line-height: 10px;
            font-size: 0.4em;
            margin-top:50px;
        }
    </style>
</head>
<body>	
	<div class="encabezado01 dato">FORMATO ÚNICO DE ATENCIÓN - FUA</div>
    <table style="width: 100%">
        <tr>
            <td style="width: 30%">
                <table class="contenido">
                    <tr>
                        <td colspan="3" class="encabezado02">NÚMERO DE FORMATO</td>
                    </tr>
                    <tr>
                        <td class="dato">{{$fua->codigo_ipress}}</td>
                        <td class="dato">24A</td>
                        <td class="dato">{{str_pad($fua->id, 8, "0", STR_PAD_LEFT)}}</td>
                    </tr>
                </table>
            </td>
            <td style="width: 40%">
            </td>
            <td style="width: 30%">
                <table class="contenido">
                    <tr>
                        <td colspan="3" class="encabezado02">N° FUA PRESTACIÓN DE SALUD A VINCULAR                        </td>
                    </tr>
                    <tr>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                    </tr>
                </table>
            </td>
    </table>
    <div class="encabezado01" style="margin-top: 5px;">DE LA IPRESS ORIGEN</div>
    <table class="contenido" style="width:100%">
        <tr>
            <td class="encabezado02" style="width:30%">CÓDIGO RENIPRESS DE LA IPRESS</td>
            <td class="encabezado02" style="width:70%">NOMBRE DE LA IPRESS QUE REALIZA LA ATENCIÓN</td>
        </tr>
        <tr>
            <td class="dato">{{$fua->codigo_ipress}}</td>
            <td class="dato">{{$redess->nombre_renaes }}</td>
        </tr>
    </table>

    <div class="encabezado01" style="margin-top: 5px;">DEL ASEGURADO / USUARIO</div>
    <table style="width: 100%">
        <tr>
            <td style="width: 20%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02" style="width:30%" colspan="2">IDENTIFICACIÓN</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:30%">TDI</td>
                        <td class="encabezado02" style="width:70%">N° DOCUMENTO DE IDENTIDAD</td>
                    </tr>
                    <tr>
                        <td class="dato">{{$fua->tipo_documento}}</td>
                        <td class="dato">{{$fua->dni }}</td>
                    </tr>
                </table>
            </td>
            <td style="width: 30%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02" style="width:30%" colspan="3">CÓDIGO DEL ASEGURADO SIS</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:30%">DIRESA / OTROS</td>
                        <td class="encabezado02" style="width:70%" colspan="2">NÚMERO</td>
                    </tr>
                    <tr>
                        <td class="dato"></td>
                        <td class="dato" style="width:20%"></td>
                        <td class="dato">{{$fua->dni }}</td>
                    </tr>
                </table>
            </td>
            <td style="width:50%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02" colspan="2">ASEGURADO DE OTRA IAFAS</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:20%">INSTITUCION</td>
                        <td class="dato" style="width:80%"></td>
                    </tr>
                    <tr>
                    <td class="encabezado02" style="width:20%">COD. SEGURO</td>
                    <td class="dato" style="width:80%"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width: 100%">
        <tr>
            <td style="width: 50%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02">APELLIDO PATERNO</td>
                    </tr>                    
                    <tr>
                        <td class="dato">{{$fua->asegurado_paterno}}</td>
                    </tr>
                </table>
            </td>            
            <td style="width:50%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02">APELLIDO MATERNO</td>
                    </tr>                    
                    <tr>
                        <td class="dato">{{$fua->asegurado_materno}}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width: 100%">
        <tr>
            <td style="width: 50%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02">PRIMER NOMBRE</td>
                    </tr>                    
                    <tr>
                        <td class="dato">{{$fua->asegurado_nombres}}</td>
                    </tr>
                </table>
            </td>            
            <td style="width:50%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02">OTROS NOMBRES</td>
                    </tr>                    
                    <tr>
                        <td class="dato">{{$fua->asegurado_onombres}}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width: 100%">
        <tr>
            <td style="width: 20%">
                <table class="contenido reducido" style="width:100%;">
                    <tr>
                        <td class="encabezado02" colspan="2">SEXO</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:70%">MASCULINO</td>
                        <td class="dato" style="width:30%">
                            @if($fua->asegurado_genero == 'M')
                                X
                            @endif
                        </td>
                    </tr>
                    <tr>
                    <td class="encabezado02 " style="width:70%">FEMENINO</td>
                    <td class="dato" style="width:30%">
                            @if($fua->asegurado_genero == 'F')
                                X
                            @endif
                    </td>
                    </tr>
                </table>
                <table class="contenido reducido" style="width:100%; margin-top: 5px;">
                    <tr>
                        <td class="encabezado02" colspan="2">SALUD MATERNA</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:70%">GESTANTE</td>
                        <td class="dato" style="width:30%"></td>
                    </tr>
                    <tr>
                    <td class="encabezado02" style="width:70%">PUERPERA</td>
                    <td class="dato" style="width:30%"></td>
                    </tr>
                </table>
            </td>
            <td style="width:40%">
                <table class="contenido" style="width:100%: height: 100%">
                    <tr>
                        <td class="encabezado02" style="width: 25%">FECHA</td>
                        <td class="encabezado02" colspan="2">DIA</td>
                        <td class="encabezado02" colspan="2">MES</td>
                        <td class="encabezado02" colspan="4">AÑO</td>
                    </tr>                    
                    <tr>
                        <td class="encabezado02">FECHA PROBABLE DE PARTO / FECHA DE PARTO</td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                    </tr>
                    <tr>
                        <td class="encabezado02">FECHA DE NACIMIENTO</td>
                        <td class="dato">{{substr($fua->fecha_nacimiento, 8,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_nacimiento, 9,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_nacimiento, 5,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_nacimiento, 6,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_nacimiento, 0,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_nacimiento, 1,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_nacimiento, 2,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_nacimiento, 3,1)}}</td>
                    </tr>
                    <tr>
                        <td class="encabezado02">FECHA DE FALLECIMIENTO</td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                    </tr>
                </table>
            </td>
            <td style="width:40%">
                <table style="width:100%">
                    <tr>
                        <td style="width:50%">
                        <table class="contenido" style="width:100%">
                            <tr>
                                <td class="encabezado02">N° DE HISTORIA CLÍNICA</td>
                            </tr>                    
                            <tr>
                                <td class="dato">{{$fua->historia}}</td>
                            </tr>
                        </table>
                        </td>
                        <td style="width:50%">
                        <table class="contenido" style="width:100%">
                            <tr>
                                <td class="encabezado02">ETNIA</td>
                            </tr>                    
                            <tr>
                                <td class="dato"></td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                </table>
                <table class="contenido reducido" style="width:100%; margin-top: 5px;">                    
                    <tr>
                        <td class="encabezado02" style="width:50%">DNI / CNV / AFILIACIÓN DEL RN 1</td>
                        <td class="dato" style="width:50%"></td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:50%">DNI / CNV / AFILIACIÓN DEL RN 2</td>
                        <td class="dato" style="width:50%"></td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:50%">DNI / CNV / AFILIACIÓN DEL RN 3</td>
                        <td class="dato" style="width:50%"></td>
                    </tr>
                </table>
                
            </td>
        </tr>
    </table> 
    <div class="encabezado01" style="margin-top: 5px;">DE LA ATENCIÓN EN LA IPRESS DE ORIGEN</div>
    <table style="width: 100%">
        <tr>
            <td style="width: 20%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02" style="width:30%" colspan="8">FECHA DE ATENCION</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:30%" colspan="2">DIA</td>
                        <td class="encabezado02" style="width:30%" colspan="2">MES</td>
                        <td class="encabezado02" style="width:70%" colspan="4">AÑO</td>
                    </tr>
                    <tr>
                        <td class="dato">{{substr($fua->fecha_atencion, 8,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_atencion, 9,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_atencion, 5,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_atencion, 6,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_atencion, 0,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_atencion, 1,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_atencion, 2,1)}}</td>
                        <td class="dato">{{substr($fua->fecha_atencion, 3,1)}}</td>                        
                    </tr>
                </table>                                
            </td>
            <td  style="width: 2%"></td>
            <td  style="width: 10%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado03" style="width:30%" colspan="5">HORA</td>
                    </tr>
                   
                    <tr>
                        <td class="dato">{{substr($fua->hora_atencion, 0,1)}}</td>
                        <td class="dato">{{substr($fua->hora_atencion, 1,1)}}</td>
                        <td class="dato">:</td>
                        <td class="dato">{{substr($fua->hora_atencion, 3,1)}}</td>
                        <td class="dato">{{substr($fua->hora_atencion, 4,1)}}</td>                      
                    </tr>
                </table>  
            </td>
            <td  style="width: 2%"></td>
            <td  style="width: 10%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado03" style="width:30%">UPS</td>
                    </tr>                   
                    <tr>
                        <td class="dato"></td>                                              
                    </tr>
                </table>  
            </td>
            <td  style="width: 2%"></td>
            <td  style="width: 10%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado03" style="width:30%">COD. PRESTA.</td>
                    </tr>                   
                    <tr>
                        <td class="dato"></td>                                              
                    </tr>
                </table>  
            </td>
            <td  style="width: 4%">
                
            </td>
            <td  style="width: 40%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02" rowspan="3">HOSP.</td>
                        <td class="encabezado02">FECHA</td>
                        <td class="encabezado02" colspan="2">DIA</td>
                        <td class="encabezado02" colspan="2">MES</td>
                        <td class="encabezado02" colspan="4">AÑO</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:20%">DE INGRESO</td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:20%">DE ALTA</td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div class="encabezado01" style="margin-top: 5px;">DE LA PRESTACION ADMINISTRATIVA</div>
    <table style="width: 100%">
        <tr>
            <td style="width: 35%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02" style="width:30%" colspan="9">FECHA</td>
                        <td class="encabezado02" style="width:30%" colspan="5" rowspan="2">HORA</td>
                    </tr>
                    <tr>
                        <td class="encabezado02"></td>
                        <td class="encabezado02" style="width:30%" colspan="2">DIA</td>
                        <td class="encabezado02" style="width:30%" colspan="2">MES</td>
                        <td class="encabezado02" style="width:70%" colspan="4">AÑO</td>
                    </tr>
                    <tr>
                        <td class="encabezado02">INICIO</td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                    </tr>
                    <tr>
                        <td class="encabezado02">FIN</td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                    </tr>
                </table>
                <table class="contenido" style="width:100%; margin-top: 5px;">
                    <tr>
                        <td class="encabezado02" style="width:30%" colspan="6">DEL DESTINO DEL ASEGURADO</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" rowspan="2"  style="width:15%">REFERIDO</td>
                        <td class="encabezado05" style="width:25%">EMERGENCIA</td>
                        <td class="dato" style="width:10%"></td>
                        <td class="encabezado02" rowspan="3"  style="width:15%">CONTRA REFERIDO</td>
                        <td class="encabezado05" style="width:25%">CURADO</td>
                        <td class="dato" style="width:10%"></td>
                    </tr>
                    <tr>
                        <td class="encabezado05">APOYO AL DIAGNOSTICO</td>
                        <td class="dato"></td>
                        <td class="encabezado05">MEJORADO</td>
                        <td class="dato"></td>
                    </tr>
                    <tr>
                        <td class="encabezado05" colspan="3"></td>
                        <td class="encabezado05">FALLECIDO</td>
                        <td class="dato"></td>
                    </tr>
                </table>
            </td>
            <td  style="width: 5%"></td>
            <td  style="width: 60%">
                <table class="contenido" style="width:100%">
                    <tr>
                        <td class="encabezado02" colspan="6">DE LA ALIMENTACIÓN EN LA CASA MATERNA</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" rowspan="4" style="width:10%">MOTIVO DE INGRESO A LA CASA MATERNA</td>
                        <td class="encabezado05" style="width:30%" >RESIDE EN UNA LOCALIDAD DISTANTE</td>
                        <td class="dato" style="width:5%" ></td>
                        <td class="dato" rowspan="4" style="width:5%" ></td>
                        <td class="encabezado02" rowspan="2" style="width:15%" >CODIGO DE LA CASA MATERNA</td>
                        <td class="encabezado02" rowspan="2" style="width:35%" >NOMBRE DE LA CASA MATERNA</td>
                    </tr>
                    <tr>
                        <td class="encabezado05">CARECE DE ASISTENCIA DOMICILIARIA</td>
                        <td class="dato"></td>
                    </tr>
                    <tr>
                        <td class="encabezado05">PRESENTA COMPLICACIONES</td>
                        <td class="dato"></td>
                        <td class="dato" rowspan="2"></td>
                        <td class="dato" rowspan="2"></td>
                    </tr>
                    <tr>
                        <td class="encabezado05">OTRO</td>
                        <td class="dato"></td>
                    </tr>
                </table>

                <table class="contenido" style="width:100%; margin-top:5px;">
                    <tr>
                        <td class="encabezado02" colspan="3">DEL TRASLADO DE EMERGENCIA</td>
                    </tr>
                    <tr>
                        <td class="encabezado02" style="width:10%">CODIGO RENIPRESS</td>
                        <td class="encabezado02" style="width:60%">NOMBRE DE LA IPRESS DE DESTINO</td>
                        <td class="encabezado02" style="width:30%">REFERENCIA</td>
                    </tr>
                    <tr>
                        <td class="dato"></td>
                        <td class="dato"></td>
                        <td class="dato"></td>
                    </tr>                    
                </table>
            </td>
            
        </tr>
    </table>
    <div class="encabezado01" style="margin-top: 5px;">DIAGNOSTICOS</div>
    <table class="contenido" style="width:100%; margin-top: 5px;">
        <tr>
            <td class="encabezado02" rowspan="2" style="width:5%">N°</td>
            <td class="encabezado02" rowspan="2" style="width:50%">DESCRIPCION</td>
            <td class="encabezado02" colspan="4" style="width:23%">INGRESO</td>
            <td class="encabezado02" colspan="3" style="width:17%">EGRESO</td>
        </tr>
        <tr>
            <td class="encabezado02" colspan="3">TIPO DE DX</td>
            <td class="encabezado02">CIE-10</td>
            <td class="encabezado02" colspan="2">TIPO DE DX</td>
            <td class="encabezado02">CIE-10</td>
        </tr>
        <tr>
            <td class="dato2">1</td>
            <td class="dato2" style="text-align:left;">TOS SECA</td>
            <td class="dato2">P</td>
            <td class="dato2">D</td>
            <td class="dato2">R</td>
            <td class="dato2"></td>
            <td class="dato2">D</td>
            <td class="dato2">R</td>
            <td class="dato2"></td>
        </tr>
    </table>
    <div class="encabezado01" style="margin-top: 5px;">DE LA RENDICION DE GASTOS</div>
    <table style="width: 100%">
        <tr>
            <td style="width: 34%; vertical-align: top">
                <table class="contenido" style="width:100%; margin-top: 5px;">
                    <tr>
                        <td class="encabezado02" colspan="7">TRANSPORTE</td>
                    </tr>
                    <tr>                        
                        <td class="encabezado04">COD. TIPO TRANSPORTE</td>
                        <td class="encabezado04">COD. TRANSPORTE</td>
                        <td class="encabezado04" style="width:40%">DETALLE TRANSPORTE</td>
                        <td class="encabezado04">NRO PASAJEROS</td>
                        <td class="encabezado04">CANTIDAD</td>
                        <td class="encabezado04">PRECIO UNITARIO</td>
                        <td class="encabezado04">TOTAL</td>
                    </tr>
                    <tr>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                    </tr>
                </table>
            </td>
            <td style="width: 33%; vertical-align: top">
                <table class="contenido" style="width:100%; margin-top: 5px;">
                    <tr>
                        <td class="encabezado02" colspan="6">VIATICOS</td>
                    </tr>
                    <tr>                        
                        <td class="encabezado04">REV</td>
                        <td class="encabezado04">COD.GASTO</td>
                        <td class="encabezado04"  style="width:40%">DETALLE VIATICOS</td>
                        <td class="encabezado04">N° DIAS</td>
                        <td class="encabezado04">REV</td>
                        <td class="encabezado04">TOTAL</td>
                    </tr>
                    <tr>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                    </tr>
                </table>
            </td>
            <td style="width: 33%;  vertical-align: top">
                <table class="contenido" style="width:100%; margin-top: 5px;">
                    <tr>
                        <td class="encabezado02" colspan="7">OTROS GASTOS</td>
                    </tr>
                    <tr>                        
                        <td class="encabezado04">COD. TIPO</td>
                        <td class="encabezado04">CODIGO</td>
                        <td class="encabezado04" style="width:40%">DETALLE OTROS GASTOS</td>
                        <td class="encabezado04">CANTIDAD</td>
                        <td class="encabezado04">N° DIAS</td>
                        <td class="encabezado04">PRECIO UNITARIO</td>
                        <td class="encabezado04">TOTAL</td>
                    </tr>
                    <tr>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                        <td class="dato2"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div class="firma"> _________________________________________________<br>RESPONSABLE DE LA UNIDAD DE SEGUROS <br>O LA QUE HAGA SUS VECES</div>
</body>
</html>