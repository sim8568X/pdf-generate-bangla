<?php

namespace App\Http\Controllers;

use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
use Mpdf\MpdfException;

class HomeController extends Controller
{
    /**
     * @throws MpdfException
     */
    public function pdf()
    {
        $data = [
            'foo' => 'bar'
        ];

        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->stream('pdf.pdf');
        //return $pdf->download('pdf.pdf');
    }
}
