<?php
	if( QUI_ListLayer()  == 0){
		//默认列表
		get_template_part( 'temp/loopList' );
	}else if(QUI_ListLayer()  == 1){
		//卡片列表
		get_template_part( 'temp/loopCard' );
	}
?>