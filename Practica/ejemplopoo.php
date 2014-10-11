<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
interface Figure
{
    public function draw($width, $height);
}

class Circle extends Figure
{
    public function draw($width, $height)
    {
        //create image
        $canvas = imagecreatetruecolor($width, $height);
        
        //build color
        $color = imagecolorallocate($canvas, 135, 132, 28);
        
        imagearc($canvas, 200, 200, 200, 200, 0, 360, $color);
       // imagearc($image, $cx, $cy, $width, $height, $start, $end, $color)
        
        imagepng($canvas);
        
        imagedestroy($canvas);
    }
}
class rectangle extends Figure
{
        public function draw($width, $height)
        {
            //create image
            $canvas = imagecreatetruecolor($width, $height);

            //build color
            $color = imagecolorallocate($canvas, 135, 132, 28);

            imagerectangle($canvas, 50, 50, 100, 100, $color);
           // imagerectangle($image, $x1, $y1, $x2, $y2, $color)

            imagepng($canvas);

            imagedestroy($canvas);
        }
}

header('Content-type: image/png');
$figures = array();
$figures[] = new Circle();
$figures[] = new rectangle;
        
// foreach ($figure) ME FALTO ESTE
        
?>