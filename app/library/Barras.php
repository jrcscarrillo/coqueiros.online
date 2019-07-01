<?php
use Phalcon\Mvc\User\Component as componente;
/**
 * Description of barras
 *
 * @author Juan Carrillo
 */
class Barras extends componente {
    function generaBarra() {
        $barra = new Picqer\Barcode\BarcodeGeneratorPNG();
        return $barra;
    }
}
