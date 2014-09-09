<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Matice {

    static private $matrix = [];

    public function __construct(Array $_matrix) {
        self::$matrix = $_matrix;
    }
    // 
    static public function obvod() { //hotovo
        $result = 0;
        $vnitrek = 0;

        foreach (self::$matrix as $radek) {     //scitam celou matici     
            foreach ($radek as $kamen) {
                $result += $kamen;
            }
        }

        for ($i = 1; $i < count(self::$matrix) - 1; $i++) { //scitam vnitrni cast matice bez obvodu
            for ($r = 1; $r < count(self::$matrix[$i]) - 1; $r++) {
                $vnitrek += self::$matrix[$i][$r];
            }
        }

        return $result - $vnitrek;
    }

    static public function sectiUhlopricky() { //hotovo
        $result = 0;
        if (count(self::$matrix) === count(self::$matrix[1])) {
            for ($i = 0; $i < count(self::$matrix); $i++) { //scitam obe uhlopricky
                $result += self::$matrix[$i][$i];   //cast prve uhlopricny
                $result += self::$matrix[$i][count(self::$matrix[$i]) - 1 - $i]; //cast druhe uhlopricny
            }
        } else {
            $result = -1;
        }

        return $result;
    }

}
