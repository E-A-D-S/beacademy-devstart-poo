<?php

include 'vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();


$html = '';

for ($n = 0; $n < 10; $n++) {
    $html .= 'mean down <br>';
}
$dompdf->loadHtml('<h1>hello world</h1>'. $html);

$dompdf->render();

$dompdf->stream();