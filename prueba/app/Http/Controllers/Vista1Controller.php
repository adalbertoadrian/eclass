<?php
/**
 * Created by PhpStorm.
 * User: adalberto
 * Date: 27-05-17
 * Time: 14:05
 */

namespace App\Http\Controllers;


class Vista1Controller extends Controller
{
    private function calculos($arreglo_mes,$coordinadoras) {
        //Realizo los calculos de la primera y la ultima en atención
        foreach ($coordinadoras as $key => $value) {
            foreach ($arreglo_mes as $mes) {
                if($mes[4] == $key) {
                    $coordinadoras[$key] += 1;
                }
            }
        }
        asort($coordinadoras);
        reset($coordinadoras);
        $key_primero = key($coordinadoras);
        $valor_primero = current($coordinadoras);
        end($coordinadoras);
        $key_ultimo = key($coordinadoras);
        $valor_ultimo = current($coordinadoras);
        $coordinadoras = array("primero" => array("coordinadora" => $key_primero, "atenciones" => $valor_primero), "ultimo" => array("coordinadora" => $key_ultimo, "atenciones" => $valor_ultimo));

        return $coordinadoras;
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

        //Creo arreglos de coordinadoras por mes con el codigo como llave
        $coordinadoras_enero = array_fill_keys(array_keys(array_flip(array_unique(array_column($enero, 4)))), 0);
        $coordinadoras_febrero = array_fill_keys(array_keys(array_flip(array_unique(array_column($febrero, 4)))), 0);
        $coordinadoras_marzo = array_fill_keys(array_keys(array_flip(array_unique(array_column($marzo, 4)))), 0);
        $coordinadoras_abril = array_fill_keys(array_keys(array_flip(array_unique(array_column($abril, 4)))), 0);
        $coordinadoras_mayo = array_fill_keys(array_keys(array_flip(array_unique(array_column($mayo, 4)))), 0);

        //Realizo los calculos por mes
        $datos["coordinadoras_enero"] = $this->calculos($enero,$coordinadoras_enero);
        $datos["coordinadoras_febrero"] = $this->calculos($febrero,$coordinadoras_febrero);
        $datos["coordinadoras_marzo"] = $this->calculos($marzo,$coordinadoras_marzo);
        $datos["coordinadoras_abril"] = $this->calculos($abril,$coordinadoras_abril);
        $datos["coordinadoras_mayo"] = $this->calculos($mayo,$coordinadoras_mayo);

        return view('vista1', $datos);
    }
}