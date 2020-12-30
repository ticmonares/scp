<?php
class Paciente
{
    private $edad;
    private $nombre;
    public static function getEdad($fechaNacimiento)
    {
        list($ano, $mes, $dia) = explode("-", $fechaNacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }
    public static function traduceActividadFisica($dato){
        $actividad = "";
        switch ($dato) {
            case 1:
                $actividad = "Nada";
                break;
            case 2:
                $actividad = "Poca";
                break;
            case 3:
                $actividad = "Regular";
                break;
            case 2:
                $actividad = "Mucha";
                break;
            case 3:
                $actividad = "Atleta";
                break;
            
            default:
                $actividad = "";
                break;
        }
        return $actividad;
    }
}
