<?php

namespace App\Services;

class ColorThemeService
{
    /**
     * Daftar tema warna resmi yang diadopsi dari SAMAKI Kabupaten Sinjai
     */
    private const THEMES = [
        'government-green' => [
            'label' => 'Hijau Pemerintahan Sinjai (Bawaan)',
            'description' => 'Resmi, institusional, dengan perpaduan hijau daun dan aksen emas.',
            'colors' => ['#2F6B52', '#C78B22', '#E7F2EC', '#F4F8F5'],
            'primary' => '#2f6b52',
            'accent' => '#c78b22',
            'header_end' => '#1b4332',
        ],
        'maritime-sinjai' => [
            'label' => 'Maritim Sinjai (Bahari)',
            'description' => 'Biru laut dan toska bahari yang segar khas pesisir Sinjai.',
            'colors' => ['#18778A', '#2AA596', '#E4F3F5', '#F2F8F9'],
            'primary' => '#18778a',
            'accent' => '#2aa596',
            'header_end' => '#165d7a',
        ],
        'blue-samaki' => [
            'label' => 'Biru SAMAKI (Modern)',
            'description' => 'Tema klasik SAMAKI yang modern, tegas, dan berwibawa.',
            'colors' => ['#1769E0', '#0F9F91', '#EEF4FB', '#F5F8FC'],
            'primary' => '#1769e0',
            'accent' => '#0f9f91',
            'header_end' => '#0b4ca6',
        ],
        'pastel-sinjai' => [
            'label' => 'Pastel Sinjai (Lembut)',
            'description' => 'Kombinasi hijau sage dan biru lembut yang nyaman di mata.',
            'colors' => ['#417A63', '#557CA8', '#E7F2EA', '#F4F7FB'],
            'primary' => '#417a63',
            'accent' => '#557ca8',
            'header_end' => '#2d5343',
        ],
    ];

    /**
     * Mendapatkan tema warna yang sedang aktif dari session / cookie / default
     */
    public static function current(): string
    {
        $theme = session('color_theme') ?? request()->cookie('sijai_color_theme') ?? 'government-green';
        return self::isValid($theme) ? $theme : 'government-green';
    }

    public static function isValid(string $theme): bool
    {
        return array_key_exists($theme, self::THEMES);
    }

    public static function options(): array
    {
        return self::THEMES;
    }

    public static function themeDetail(string $theme): array
    {
        $key = self::isValid($theme) ? $theme : 'government-green';
        return self::THEMES[$key];
    }
}
