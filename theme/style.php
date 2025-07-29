      <style type="text/css">
      	:root{
			<?php 
      		if(QUI_MainColor()){
      			echo '--mainColor:'.QUI_MainColor().';';
      		}
			if(QUI_Border()){
		      	echo '--border:'.QUIMedia(QUI_Border(),'all').'px '.QUIMedia(QUI_Border(),'style').' '.QUIMedia(QUI_Border(),'color').';';
		    }
		    if(QUI_Border()){
		      	echo '--borderColor:'.QUIMedia(QUI_Border(),'color').';';
		    }
		    if(QUI_Radius()>-1){
		      	echo '--radius:'.QUI_Radius().'px;';
		    }	
 			$p= QUI_PagePadding()==1 ? '1.5em' : '0';
 			$r= QUI_PagePadding()==1 ? '1em' : '0';
		    echo '--paddinglr:'.$p.';';
		    echo '--paddingr:'.$r.';';
		    if(QUI_ListLiheH() || QUI_LineCardH()){
		      	$h = QUI_ListLayer() ? QUIMedia(QUI_LineCardH(),'height') : QUIMedia(QUI_ListLiheH(),'height');
		      	echo '--listBottom:'.$h.'px;';
		    }	
			if(QUI_Width()){
				echo '--mainWidth:'.QUIMedia(QUI_Width(),'width').'px;';
			}
			// if(QUI_MainBGColor()){
      		// 	echo '--BGColor:'.QUI_MainBGColor().';';
      		// }
			echo '--BGColor: #ffffff;';
      		if(QUI_MainBGImg()){
      			echo '--mainbg:url("'.QUIMedia(QUI_MainBGImg(),'url').'");';
      		} ?> }
      	<?php if(QUI_DarkFlag()){ get_template_part( '/theme/dark' ); }	?>
		/* 兼容深色模式 */
		@media (prefers-color-scheme: dark) {
			<?php get_template_part( '/theme/dark' );	?>
		}
      </style>