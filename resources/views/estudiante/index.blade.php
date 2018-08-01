<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    
    <div class="container">
        <div class="col-md-12">
            <h2><center>Listado de Estudiantes</center></h2>
            <form action="">
                <div class="form-row">
                    <div class="form-group col-sm-2">
                        <input type="email" class="form-control" placeholder="C.I.">
                    </div>
                    <div class="form-group col-sm-2">
                        <button class="btn btn-light"><i class="fas fa-search"></i></button>
                    </div>
                </div>      
            </form>
            <table class="table table-sm table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">PATERNO</th>
                        <th scope="col">MATERNO</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">C.I.</th>
                        <th scope="col">CODIGO</th>
                        <th scope="col">CARRERA</th>
                        <th scope="col">FOTO</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->paterno }}</td>
                        <td>{{ $estudiante->materno }}</td>
                        <td>{{ $estudiante->nombres }}</td>
                        <td>{{ $estudiante->ci }}
                        <!--
                        {!! DNS1D::getBarcodeHTML("434", "C128",1,30,"black") !!}
                        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('434', 'C128',1,30)}}" alt="barcode" />
                        -->
                        <td>{{ $estudiante->codigo }}</td>
                        <td>{{ $estudiante->carrera }}</td>
                        <td><img src="{{ asset('fotos/'.$estudiante->foto) }}" alt="" height="30px" width="30px" /></td>
                        <td>
                            <a href="{{ route('estudiantes.show', $estudiante->idestudiante) }}" class="btn btn-info btn-sm" title="Credencial"><i class="far fa-address-card fa-lg"></i></a>
                        </td>
                    </tr>
                    @endforeach           
                </tbody>
            </table>
            {{ $estudiantes->links() }}
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
</body>
</html>