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
</body>
</html>