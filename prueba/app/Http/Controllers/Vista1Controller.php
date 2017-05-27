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
    public function index()
    {
        //Declaro Varibles
        $extraidos = array(); $enero = array(); $febrero = array(); $marzo = array(); $abril = array(); $marzo = array();
        $coordinadoras_enero = array(); $coordinadoras_febrero = array(); $coordinadoras_marzo = array();
        $coordinadoras_abril = array(); $coordinadoras_mayo = array();

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

        foreach ($coordinadoras_enero as $key => $value) {
            foreach ($enero as $mes) {
                if($mes[4] == $key) {
                    $coordinadoras_enero[$key] += 1;
                }
            }
        }

        print_r($coordinadoras_enero);
die();
        /*foreach ($coordinadoras_enero as $coordinadora_enero) {
            foreach ($enero as $registro) {
                $atenciones_enero[] = $coordinadoras_enero => $registro
            }
        }*/

        print_r($enero);
        die();

        return view('vista1', $datos);
    }
}