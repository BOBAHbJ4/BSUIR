<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getIndex() {
        return view('welcome');
    }

    public function getProducts() {
        return view('products');
    }
    public function getRecipes() {
        return view('recipes');
    }
    public function getDiets() {
        return view('diets');
    }
    public function getTrainings() {
        return view('trainings');
    }
}
