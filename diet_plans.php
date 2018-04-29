<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ojas</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="for_mobiles.css">
	</head>
    <body>
        <div class="menu_bar">
			<a href="index.php"><h1 class="logo">Ojas</h1></a>
            <ul class="menu" type="none">
                <a href="index.php"><li class="menu_item">Home</li></a>
                <a href="diet_plans.php"><li class="menu_item">Diet Plans</li></a>
                <a href="diet_tips.php"><li class="menu_item">Diet tips for Healthy Life</li></a>
                <a href="contact.php"><li class="menu_item">Contact Us</li></a>
            </ul>
        </div>
        <div class="file_div">
        	<?php
				chdir("edit_files");
				include("Other_func.php");
				chdir("diet_files");
				$file_array = glob("*.txt");
				$file_array = sort_date($file_array);
				foreach($file_array as $k => $v){
					$filename = $v;
					$content_file = fopen($filename,"r") or die("Unable to open file");
					$topic = fgets($content_file);
					if(!empty($topic)){
						echo '<h1>'.$topic.'</h1>';
						echo '<div class="content_div">';
						$content_array = file($filename);
						for($i=1;$i<count($content_array);$i++){
							echo $content_array[$i];
							}
						}
					echo '</div>';
				}
			?>
        </div>
		<div style="background:#202020;margin:40px 0px -100px 0px;z-index:4;">
			<p class="foot">Designed by : Praful Jain (+91 7987022006)</p>
			<p class="foot">© 2018 ALL RIGHTS RESERVED</p>
		</div>
    </body>
</html>