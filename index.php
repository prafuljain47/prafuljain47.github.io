<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ojas</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="for_mobiles.css" />
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
        <div class="desc">
			<?php
				chdir("edit_files");
				include("Other_func.php");
				$desc = fopen("desc.txt","r") or die("Unable to open file");
			    echo fread($desc,filesize("desc.txt"));
				fclose($desc);
			?>
        </div>
		<center>
        	<div class="topics">
				<?php
                    chdir("content_files");
                    $arr = glob("*.txt");
					$arr = sort_date($arr);
                    foreach($arr as $k => $v) {
						$file = fopen($v,"r") or die("Unable to open file");
						$file_topic = fgets($file);
						if(!empty($file_topic)){
							echo '<a href="?filename='.$v.'"><div class="box"><p class="title">'.$file_topic.'</p></div></a>';
							}
						}
					if(isset($_GET['filename'])){
						echo '<meta http-equiv="refresh" content="0; url=content.php?filename='.$_GET['filename'].'"/>';
						}
                ?>
			</div>
		</center>
		<div style="background:#202020;margin:40px 0px -100px 0px;z-index:4;">
			<p class="foot">Designed by : Praful Jain (+91 7987022006)</p>
			<p class="foot">© 2018 ALL RIGHTS RESERVED</p>
		</div>
    </body>
</html>