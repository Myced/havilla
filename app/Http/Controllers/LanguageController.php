<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function english()
    {
        $local = 'en';
        App::setLocale($local);
        return back();
    }

    public function french()
    {
        $local = 'fr';
        App::setLocale($local);

        return back();
    }
}
