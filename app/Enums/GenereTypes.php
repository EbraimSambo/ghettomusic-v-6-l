<?php

namespace App\Enums;

enum GenereTypes: string {
    case RAP = "rap";
    case KIZOMBA = 'kizomba';
    case KUDURO = 'kuduro';
    case SEMBA = 'semba';
    case AFROBEAT = 'afrobeat';
    case AFROHOUSE = 'afrohouse';

    public function coverss(): string {
        return match ($this) {
            self::RAP => 'bi-cone-striped',
            self::KIZOMBA => 'bi-cassette',
            self::KUDURO => 'bi-vinyl',
            self::SEMBA => 'bi-hourglass-split',
            self::AFROBEAT => 'bi-music-player',
            self::AFROHOUSE => 'bi-dice-5',
        };
    }

    public function atrrStyles(): array {
        return match ($this) {
            self::RAP => [
                'title'=> 'Rap',
                'cover'=>'images/grafics/categores/4.png',
                'banner'=>'images/grafics/banners/4.jpg',
            ],
            self::KIZOMBA => [
                'title'=> 'Kizomba',
                'cover'=>'images/grafics/categores/2.png',
                'banner'=>'images/grafics/banners/2.jpg',
            ],
            self::KUDURO =>[
                'title'=> 'Kuduro',
                'banner'=>'images/grafics/banners/6.jpg',
                'cover'=>'images/grafics/categores/6.png',
            ],
            self::SEMBA => [
                'title'=> 'Semba',
                'cover'=>'images/grafics/categores/1.png',
                'banner'=>'images/grafics/banners/3.jpg',
            ],
            self::AFROBEAT => [
                'title'=> 'Afrobeat',
                'cover'=>'images/grafics/categores/3.png',
                'banner'=>'images/grafics/banners/7.jpg',
            ],
            self::AFROHOUSE => [
                'title'=> 'Afrohouse',
                'cover'=>'images/grafics/categores/5.png',
                'banner'=>'images/grafics/banners/1.jpg',
            ],
        };
    }
}