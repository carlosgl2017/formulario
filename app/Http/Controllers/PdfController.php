<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function imprimirFormulario(Formulario $formulario)
    {
        $pdf = Pdf::loadView('pdf.formulario', compact('formulario'));

        // stream() abre el PDF en el navegador.
        // download() lo descarga directamente.
        return $pdf->stream('formulario-'.$formulario->id.'.pdf');
    }
}
