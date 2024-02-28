<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>

    <div class="container">







        
        <div class="row justify-content-center align-items-center">
            <div class="col-md-2">
                <img src="{{ asset('img/umsa.png')}}" height="100px" width="100px" alt="" >
            </div>
            <div class="col-md-8">
                hola
            </div>
            <div class="col-md-2">
                <img src="{{ asset('img/logo_medicina.png')}}" height="100px" width="100px" alt="" >
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-12">
                <br><br>
                <h1>Código QR en PDF</h1>
                <img src="data:image/png;base64,{{ base64_encode($qr) }}" alt="Código QR">

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>carnet</th>
                            <th>nombre</th>
                            <th>paterno</th>
                            <th>materno</th>
                            <th>correo</th>
                            <th>telefono</th>
                            <th>Generar Certificado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$participante->id}}</td>
                            <td>{{$participante->carnet}}</td>
                            <td>{{$participante->nombre}}</td>
                            <td>{{$participante->paterno}}</td>
                            <td>{{$participante->materno}}</td>
                            <td>{{$participante->correo}}</td>
                            <td>{{$participante->telefono}}</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


    @include('partials.js')
</body>
</html>