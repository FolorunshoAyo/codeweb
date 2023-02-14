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
	    $path = "C:/xampp/htdocs/codeweb/student/" . "images/". time() . ".png";
        $file_name = time() . ".png";
		$image = imagecreate(200, 200);
		$red = rand(0, 255);
		$green = rand(0, 255);
		$blue = rand(0, 255);
	    imagecolorallocate($image, $red, $green, $blue);  
	    $textcolor = imagecolorallocate($image, 255,255,255);

	    $font = 'C:/xampp/htdocs/codeweb/assets/fonts/Montserrat-Bold.ttf';

	    imagettftext($image, 100, 0, 55, 150, $textcolor, $font, $character);
	    imagepng($image, $path);
	    imagedestroy($image);

	    return $file_name;
	}
    
    // Redirects user depending on registeration status
    function autoRedirect($currPage){
        if($_SESSION['reg_status'] === "0" && $currPage !== "make-form-payment"){
            header("Location: ../student/make-form-payment");
        }
        if($_SESSION['reg_status'] === "1" && $currPage !== "application-form"){
            header("Location: ../student/application-form");
        }
        if($_SESSION['reg_status'] === "2" && $currPage !== "select-course"){
            header("Location: ../student/select-course");
        }
        if($_SESSION['reg_status'] === "3" && $currPage !== "course-payment"){
            header("Location: ../student/course-payment");
        }
    }
?>