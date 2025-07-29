<?php
	//获取子主题文件夹名
   	$Path = get_theme_file_path() .'/theme';
	$Arr=scandir($Path);
	$num = count($Arr);  
   	$ThemeFileNames = array();
   	for($i=0;$i<$num;++$i){
   		if($Arr[$i] == '.' || $Arr[$i] == '..' || strstr($Arr[$i],'.') != false){
   			continue;
   		}
   		array_push($ThemeFileNames, $Arr[$i]); 
	}
?>