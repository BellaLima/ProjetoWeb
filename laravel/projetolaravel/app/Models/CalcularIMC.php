<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeIMC extends Model
{
    public function calcular() {
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];

        $calculoIMC = ($peso/ ($altura^2));

        return $calculoIMC;

    }
}