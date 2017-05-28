<?php
/**
 * Created by PhpStorm.
 * User: adalberto
 * Date: 27-05-17
 * Time: 14:05
 */

namespace App\Http\Controllers;


class Vista2Controller extends Controller
{
    private function calculos($arreglo_mes,$productos) {
        //Realizo los calculos de la primera y la ultima en atención
        $atenciones = array();
        foreach ($productos as $key => $value) {
            $coordinadoras = array();
            if (!array_key_exists($key, $atenciones)) {
                $atenciones[$key] = array("producto" => $key, "atenciones" => 0, "coordinadoras" => 0);
            }
            foreach ($arreglo_mes as $mes) {
                if($mes[5] == $key) {
                    $atenciones[$key]["atenciones"] += 1;
                    if(!in_array($mes[4], $coordinadoras)){
                        $coordinadoras[] = $mes[4];
                        $atenciones[$key]["coordinadoras"] += 1;
                    }
                }
            }
        }

        return $atenciones;
    }

    public function index()
    {
        //Declaro Varibles
        $extraidos = array(); $enero = array(); $febrero = array(); $marzo = array(); $abril = array(); $mayo = array();

        //Extraigo CSV
        $csv = fopen("files/atenciones.csv","r");
        while(! feof($csv)) {
            $linea = fgetcsv($csv);
            $registro = $linea[0];
            $extraidos[] = explode(";", $registro);
        }
        fclose($csv);

        //Elimino Titulos y registro vacio
        unset($extraidos[0]);
        array_pop($extraidos);

        //Divido array en meses y delete = 0
        foreach ($extraidos as $extraido) {
            if($extraido[7] == 0) {
                $fecha = date("m",strtotime($extraido[1]));
                switch ($fecha) {
                    case "01":
                        $enero[] = $extraido;
                        break;
                    case "02":
                        $febrero[] = $extraido;
                        break;
                    case "03":
                        $marzo[] = $extraido;
                        break;
                    case "04":
                        $abril[] = $extraido;
                        break;
                    case "05":
                        $mayo[] = $extraido;
                        break;
                }
            }
        }

        //Creo arreglos de productos por mes con el codigo como llave
        $productos_enero = array_fill_keys(array_keys(array_flip(array_unique(array_column($enero, 5)))), 0);
        $productos_febrero = array_fill_keys(array_keys(array_flip(array_unique(array_column($febrero, 5)))), 0);
        $productos_marzo = array_fill_keys(array_keys(array_flip(array_unique(array_column($marzo, 5)))), 0);
        $productos_abril = array_fill_keys(array_keys(array_flip(array_unique(array_column($abril, 5)))), 0);
        $productos_mayo = array_fill_keys(array_keys(array_flip(array_unique(array_column($mayo, 5)))), 0);

        //Realizo los calculos por mes
        $datos["productos_enero"] = $this->calculos($enero,$productos_enero);
        $datos["productos_febrero"] = $this->calculos($febrero,$productos_febrero);
        $datos["productos_marzo"] = $this->calculos($marzo,$productos_marzo);
        $datos["productos_abril"] = $this->calculos($abril,$productos_abril);
        $datos["productos_mayo"] = $this->calculos($mayo,$productos_mayo);

        return view('vista2', $datos);
    }
}