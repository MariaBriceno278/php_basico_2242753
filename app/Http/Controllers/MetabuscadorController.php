<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //controlador esta compuesto de aciones
    //cada accion estara vinculada a su correspondiente ruta
    public function mostrar_formulario(){
        //mostrar la vista del metabuscador
        return view('metabuscador');
    }

    //realizar la busqueda segun el motor

    public function buscar_termino(){
        //realizar la busqueda
            $termino= $_POST["termino"];
            $motor = $_POST["motores"];

            //la busqueda se realiza acorde al motor
            //de busqueda elegido

            switch($motor){
                case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                    break;
                case 2: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                    break;
                case 3: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                    break;
                case 4: return redirect()->to("https://yandex.com/search/?text=$termino");
                    break;
                case 5: return redirect()->to("https://duckduckgo.com/?q=$termino");
                    break;
                case 6: return redirect()->to("https://www.ask.com/web?q=$termino");
                    break;
                case 7: return redirect()->to("https://www.wolframalpha.com/input/?i=$termino");
                    break;
                case 8: return redirect()->to("https://www.ecosia.org/search?q=$termino");
                    break;
                case 9: return redirect()->to("https://www.qwant.com/?q=$termino");
                    break;
                case 10: return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
                    break;
                case 11: return redirect()->to("https://www.pinterest.ch/search/pins/?q=$termino");
                    break;
            }
    }
}
