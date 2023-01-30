<?php
    function greeting(){
        $theDate = date("H"); 
        if($theDate < 12){
            return "Good morning to you";
        }  
        else if($theDate < 18) {
            return "Good afternoon to you"; 
        }
        else{
            return "Good evening to you"; 
        } 
    }


    function make_avatar($character)
	{
	    $path = "images/". time() . ".png";
        $file_name = time() . ".png";
		$image = imagecreate(200, 200);
		$red = rand(0, 255);
		$green = rand(0, 255);
		$blue = rand(0, 255);
	    imagecolorallocate($image, $red, $green, $blue);  
	    $textcolor = imagecolorallocate($image, 255,255,255);

	    $font = dirname(__FILE__) . '/assets/fonts/Montserrat-Bold.ttf';

	    imagettftext($image, 100, 0, 55, 150, $textcolor, $font, $character);
	    imagepng($image, $path);
	    imagedestroy($image);

	    return $file_name;
	}
    
?>