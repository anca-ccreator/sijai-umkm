<?php

namespace App\Http\Controllers;

use App\Services\ColorThemeService;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function switch(Request $request, string $theme)
    {
        if (ColorThemeService::isValid($theme)) {
            session(['color_theme' => $theme]);
            return redirect()->back()->withCookie(cookie('sijai_color_theme', $theme, 60 * 24 * 365, null, null, false, false));
        }

        return redirect()->back();
    }
}
