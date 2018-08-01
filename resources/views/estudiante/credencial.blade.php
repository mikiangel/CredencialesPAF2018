<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
*{
    margin: 0px;
    padding: 0px;
}
@page{
    margin: 0px 0px;          
}
h4{
    font-family: Calibri, sans-serif;
    font-size: 10px; 
    color: #1176A8;
}
.contenido-cara{
    position: fixed;
    /*border: 1px solid #000;*/
    /*border-radius: 10px;*/
    width: 8.64cm;
    height: 5.39cm;
}

/*----------- CABEZERA ----------*/
.cred-cabecera{
    /*background-color: #43A047;*/
    height: 53px;
    width: 100%;
    margin-top: -5px;
    padding-top: 5px;
}
.cred-cabecera-logo{
    margin-top: 5px; 
    margin-left: 10px;
    height: 47px;
    width: 26px;
    float: left;
}
.cred-cabecera-titulo{
    margin-top: 10px;
    margin-left: -35px;
    text-align: center;
    float: left;
}

/*--- LINEAS----*/
.cred-linea-rojo{
    background-color: #E53935; 
    height: 5px;
    width: 95%;
    margin: 0 auto;
}
.cred-linea-azul{
    background-color: #1565C0; 
    height: 5px;
    width: 95%;
    margin: 0 auto;
}

/*--------- CUERPO -------------*/
.cred-cuerpo{
    height: 98px;
    width: 100%;
}
.cred-cuerpo-foto{
    /*background-color: blue;*/
    margin: 0px;
    margin-top: 5px;
    padding: 0px;
    width: 2.9cm;
    heigth: 100%;
    float: left;
}
.foto{
    /*border: 1px solid #000;*/
    height: 95px;
    width: 95px;
    margin-left: 10px;
}
.cred-cuerpo-campos{
    /*background-color: green;*/
    margin: 0px;
    margin-top: 5px;
    padding: 0px;
    width: 1.4cm;
    heigth: 100%; 
    float: left;
}
.cred-cuerpo-datos{
    /*background-color: red;*/
    margin: 0px;
    margin-top: 5px;
    padding: 0px;
    width: 4cm;
    heigth: 100%; 
    float: left;
}
p{
    font-family: Calibri, sans-serif;
    font-size: 12px; 
    color: #1176A8;
}
span{
    color: #757575;
}

/*------- PIE ----------*/

.cred-pie{
    /*background-color: #5BB63B;*/
    /*border: 2px solid #5BB63B;*/
    width: 100%;
}
.cred-pie-carrera{
    float: left;
    
}
.cred-pie-carrera-eco{
    font-family: Calibri, sans-serif;
    font-size: 12px; 
    font-weight: bold;
    color: #FFFFFF;
    /*padding-top: 8px;  */
    margin-left: 10px;
    margin-right: 10px;
    background-color: #FFD600;
    border: 6px solid #FFD600;
}
.cred-pie-carrera-admin{
    font-family: Calibri, sans-serif;
    font-size: 12px; 
    font-weight: bold;
    color: #FFFFFF;
    /*padding-top: 8px;*/
    margin-left: 10px;
    margin-right: 10px;
    background-color: #0288D1;
    border: 5px solid #0288D1;
}
.cred-pie-carrera-conta{
    font-family: Calibri, sans-serif;
    font-size: 12px; 
    font-weight: bold;
    color: #FFFFFF;
    /*padding-top: 8px;*/
    margin-left: 10px;
    margin-right: 10px;
    background-color: #43A047;
    border: 6px solid #43A047;
}
.cred-pie-barcode{
    padding-left: 2cm;
    padding-top: 1px;
    float: left;
}
</style>
</head>
<body>
    <div class="contenido-cara">
        <div class="cred-cabecera">
            <div class="cred-cabecera-logo">
                <img src="{{ public_path('images/logo.gif') }}" alt="" height="46px" width="26px">
            </div>
            <div class="cred-cabecera-titulo">
                <h4>UNIVERSIDAD MAYOR DE SAN ANDRÉS</h4>
                <h4>FACULTAD DE CIENCIAS ECONÓMICAS Y FINANCIERAS</h4>
                <h4>Proceso de Admisión Facultativa 2018</h5>
            </div>
        </div>

        <div class="cred-linea-rojo"></div>
        <div class="cred-linea-azul"></div>
        
        <div class="cred-cuerpo">
            <div class="cred-cuerpo-foto">
                <div class="foto">
                    <img src="{{ public_path('fotos/'.$estudiante->ci.'.jpg') }}" alt="" height="94px" width="94px">
                </div>
            </div>
            <div class="cred-cuerpo-campos">
                <p><span>Paterno:</span></p>
                <p><span>Materno:</span></p>
                <p><span>Nombres:</span></p>
                <p><span>Nro. C.I.:</span></p>
                <p><span>Código:</span></p>
            </div>
            <div class="cred-cuerpo-datos">
                <p>{{ $estudiante->paterno }}</p>
                <p>{{ $estudiante->materno }}</p>
                <p>{{ $estudiante->nombres }}</p>
                <p>{{ $estudiante->ci }}</p>       
                <p>{{ $estudiante->codigo }}</p>
            </div>
        </div>
        
        <div class="cred-pie">
            <div class="cred-pie-carrera">
                @if($estudiante->carrera == "ECONOMIA")
                    <p class="cred-pie-carrera-eco">ECONOMÍA</p>
                @endif
                @if($estudiante->carrera == "ADMINISTRACION DE EMPRESAS")
                    <p class="cred-pie-carrera-admin">ADMINISTRACIÓN</p>
                @endif
                @if($estudiante->carrera == "CONTADURIA PUBLICA")
                    <p class="cred-pie-carrera-conta">CONTADURÍA</p>
                @endif
            </div>
            <div class="cred-pie-barcode">
                <!--{!! DNS1D::getBarcodeHTML("$estudiante->ci", "C39E",1,30,"black") !!}-->
                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($estudiante->ci, 'C128',1,30)}}" alt="barcode" />
            </div> 
        </div>
        
    </div>
</body>
</html>