<?php

class Rectangulo
{
    private $base;
    private $altura;

    /**
     * Método constructor
     *
     * @param $b La base del rectángulo
     * @param $a La altura del rectángulo
     */
    public function __construct($b, $a)
    {
        $this->base = $b;
        $this->altura = $a;
    }

    /**
     * Calcula y retorna el perímetro del rectángulo.
     *
     * @return int El perímetro del rectángulo
     */
    public function calcularPerimetro()
    {
        $perimetro = $this->base * 2 + $this->altura * 2;
        return $perimetro;
    }

    /**
     * Calcula y retorna el área o superficie del rectángulo.
     *
     * @return int El área del rectángulo
     */
    public function calcularArea()
    {
        /*Cambie el + por un *. */
        return $this->base * $this->altura;
    }

    /**
     * Determina si el rectángulo es además un cuadrado
     *
     * @return bool Si es cuadrado, retorna true, y false de lo contrario.
     */
    public function esCuadrado()
    {
        return $this->base === $this->altura;
    }
}
