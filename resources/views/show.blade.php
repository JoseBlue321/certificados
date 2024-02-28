<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>

    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-12">
                <br><br>
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
                        @foreach ($evento->participantes as $participante)
                        <tr>
                            <td>{{$participante->id}}</td>
                            <td>{{$participante->carnet}}</td>
                            <td>{{$participante->nombre}}</td>
                            <td>{{$participante->paterno}}</td>
                            <td>{{$participante->materno}}</td>
                            <td>{{$participante->correo}}</td>
                            <td>{{$participante->telefono}}</td>
                            <td>
                                <a class="btn btn-success" href="{{route('pdf.eventos',$participante->id)}}" role="button">Generar Certificado</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


    @include('partials.js')
</body>
</html>