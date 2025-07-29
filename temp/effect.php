<?php
	if(QUI_Eeffect()){
		$case =  QUI_EffectStyle();
		$res = "";
		switch ($case)
		{
		case "1":
		    $res="heart.js";
		    break;
		case "2":
		    $res="colorball.js";
		    break;
		case "3":
		    $res="petal.js";
		    break;
		case "4":
		    $res="grain.js";
		    break;    
		default:
		    $res="heart.js";
		}
?>
<script src="<?php echo bloginfo('template_url').'/static/mouse/'.$res ;?>" type="text/javascript" charset="utf-8"></script>
<?php } if(QUI_TitleEffect()){ ?>
<script> if(QUI){ 
	QUI.data.titleInPage="<?=  QUI_TitleEffectInText() ?>", //进入页面提示语
    QUI.data.titleOutPage="<?=  QUI_TitleEffectOutText() ?>", //厉害页面提示语
	QUI.TitleChange();}</script>
<?php }?>