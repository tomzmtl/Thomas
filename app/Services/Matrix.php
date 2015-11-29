<?php

namespace App\Services;

class Matrix
{
    private $output = '';

    public function getThomas ()
    {
        $matrix =
        [
            0,0,0,6,5,4,4,4,4,5,6,0,0,0,
            0,5,5,1,6,6,6,6,6,6,1,5,5,0,
            0,6,1,1,1,1,1,1,1,1,1,1,6,0,
            2,2,2,2,2,2,2,2,2,2,2,2,2,2,
            6,2,8,3,3,3,2,2,3,8,3,3,2,6,
            1,2,3,3,3,2,1,1,2,3,3,3,2,1,
            1,2,2,2,2,2,1,1,2,2,2,2,2,1,
            0,6,1,1,5,6,6,6,6,5,1,1,6,0,
            0,6,1,1,5,7,7,7,7,5,1,1,6,0,
            0,6,6,6,4,5,5,5,5,4,6,6,6,0,
            0,0,4,4,4,4,4,4,4,4,4,4,0,0,
            0,0,0,0,0,1,1,1,1,0,0,0,0,0,
            0,0,0,0,0,1,1,1,1,0,0,0,0,0,
            0,9,9,9,1,1,1,1,1,1,9,9,9,0,
            9,9,9,9,9,9,9,9,9,9,9,9,9,9
        ];

        $textures =
        [
            0 => 'air',
            1 => 'skin',
            2 => 'glasses',
            3 => 'eyes',
            4 => 'hair1',
            5 => 'hair2',
            6 => 'hair3',
            7 => 'mouth',
            8 => 'iris',
            9 => 'shirt'
        ];

        foreach ( $matrix as $dot )
        {
            $this->createDot($textures[$dot]);
        }

        return $this->output;
    }

    private function createDot ( $texture )
    {
        $delay = rand( 0, 30 ) * 10 . 'ms';
        $this->output .= '<div class="dot '.$texture.'" style="animation-delay:'.$delay.'"></div>';
    }
}