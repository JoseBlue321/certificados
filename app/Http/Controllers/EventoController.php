<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Participante;
//pdf
use Dompdf\Dompdf;
use Dompdf\Options;
//Generador de codigo QR
//use BaconQrCode\Encoder\QrCode;
//use BaconQrCode\Renderer\Image\Png;
//use BaconQrCode\Renderer\ImageRenderer;
//use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
//use BaconQrCode\Renderer\RendererStyle\RendererStyle;
//use BaconQrCode\Writer;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::all();
        return view('home',[
            'eventos'=>$eventos,
        ]);
    }

    public function show(string $id){
        $evento = Evento::findOrFail($id);
        return view('show',[
            'evento'=>$evento,
        ]);
    }

    public function pdf(string $id){
        // Lógica para obtener datos del participante
        $participante = Participante::findOrFail($id);
        $evento = $participante->eventos;

        // URL para el código QR
        $url = "Carnet:$participante->carnet 
        Nombre:$participante->nombre $participante->paterno $participante->materno
        Cod evento: $evento->codigo
        evento: $evento->evento
        fecha: $evento->fecha ";
        $qr = QrCode::generate($url);

         // Cargar la vista HTML
         $html = view('pdf', [
            'participante'=>$participante,
            'qr'=>$qr,
            ])->render();

        // Configurar DomPDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Opcional) Configurar opciones de visualización (tamaño de papel, etc.)
        $dompdf->setPaper('latter', 'portrait');

        // Renderizar el HTML como PDF
        $dompdf->render();

        // Devolver el PDF generado como respuesta
        //return $dompdf->stream("$participante->carnet.pdf");
        return $dompdf->stream("$participante->carnet.pdf", ['Attachment' => 0]);
       
    }
}
