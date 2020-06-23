<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function swap($locale){
        // available language in template array
        $availLocale = [
            'en' => 'en',
            'es' => 'es',
            'fr' => 'fr',
            'de' => 'de',
            'pt' => 'pt'
        ];
        // check for existing language
        if(array_key_exists($locale, $availLocale)){
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
