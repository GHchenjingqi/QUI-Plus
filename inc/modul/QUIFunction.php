<?php
	//QUI主题自定义函数
	//空函数
	$QUICLOSE = function(){
		return null;
	};
	//过滤文章中的空格换行等
	function QUITrim($str){
		 $search = array(" ","　","\n","\r","\t");
		 $replace = array("","","","","");
		 return str_replace($search, $replace, $str);
	}
	//获取media属性值的方法,例如：$QUIMedia($LOGO,'url');
	function QUIMedia ($arr,$key){
		if($arr){
			if(array_key_exists($key,$arr)){
				return $arr[$key]; 
			}
		}
	};
	//获取repeater的第【n】个子数组对象的属性值的方法
	function QUIArrVal($arr,$n,$key){
		if($arr){
			$len = count($arr);
			//必须小于长度，索引值从0开始
			if($n < $len){
				$newArr = $arr[$n];
				if(array_key_exists($key,$newArr)){
					return $newArr[$key]; 
				} 
			}
		}
	};
	
	//获取子主题文件夹名
	function ThemeFileNames(){
	   	$Path = get_theme_file_path() .'/theme';
		$Arr=scandir($Path);
		$num = count($Arr);  
	   	$ThemeFileNames = array();
	   	for($i=0;$i<$num;++$i){
	   		if($Arr[$i] == '.' || $Arr[$i] == '..' || strstr($Arr[$i],'.') != false ){
	   			continue;
	   		}
	   		array_push($ThemeFileNames, $Arr[$i]); 
		}
		return $ThemeFileNames;
	}
	// 分页
	function  QUI_PageNavLink( $range = 4 ) {
	    global $paged,$wp_query; 
	    $max_page = $wp_query->max_num_pages;
	    if( $max_page >1 ) {
	        echo "<div class='ui-pages mt20 ui-radius ui-border'>"; 
	        if( !$paged ){
	            $paged = 1;
	        }

	        if ( $max_page >$range ) {
	            if( $paged <$range ) {
	                for( $i = 1; $i <= ($range +1); $i++ ) {
	                    echo "<a href='".get_pagenum_link($i) ."'";
	                if($i==$paged) echo " class='current'";echo ">$i</a>";
	                }
	            }elseif($paged >= ($max_page -ceil(($range/2)))){
	                for($i = $max_page -$range;$i <= $max_page;$i++){
	                    echo "<a href='".get_pagenum_link($i) ."'";
	                    if($i==$paged)echo " class='current'";echo ">$i</a>";
	                    }
	                }elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
	                    for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
	                        echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";
	                    }
	                }
	            }else{
	                for($i = 1;$i <= $max_page;$i++){
	                    echo "<a href='".get_pagenum_link($i) ."'";
	                    if($i==$paged)echo " class='current'";echo ">$i</a>";
	                }
	            }
	        echo '<span>共'.$max_page.'页</span>';
	        echo "<div class='right'>"; 
	        previous_posts_link('');
	        next_posts_link('');
	        echo "</div>"; "</div>";  
	    }
	}
	//字数统计
	function QUI_CountWords() {
	   global $post;
	   $text_num = mb_strlen(preg_replace('/\s/','',html_entity_decode(strip_tags($post->post_content))),'UTF-8');
	   $read_time = ceil($text_num/400);
	   $output = '';
	   $output .= '全文共'.$text_num . '个字，  阅读需要' . $read_time  . '分钟';
	   return $output;
	}
	//获取当前时间
	function QUI_CurTime() {
		echo date("Y-m-d");
	}
	//获取当前ip
	function getClientIP(){
		if (isset($_SERVER)) {
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
		/* 取X-Forwarded-For中第一个非unknown的有效IP字符串 */
		foreach ($arr AS $ip) {
		$ip = trim($ip);
		if ($ip != 'unknown') {
		$realip = $ip;
		break;
		}
		}
		if(!isset($realip)){
		$realip = "0.0.0.0";
		}
		} elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
		$realip = $_SERVER['HTTP_CLIENT_IP'];
		} else {
		if (isset($_SERVER['REMOTE_ADDR'])) {
		$realip = $_SERVER['REMOTE_ADDR'];
		} else {
		$realip = '0.0.0.0';
		}
		}
		} else {
		if (getenv('HTTP_X_FORWARDED_FOR')) {
		$realip = getenv('HTTP_X_FORWARDED_FOR');
		} elseif (getenv('HTTP_CLIENT_IP')) {
		$realip = getenv('HTTP_CLIENT_IP');
		} else {
		$realip = getenv('REMOTE_ADDR');
		}
		}
		preg_match("/[\d\.]{7,15}/", $realip, $onlineip);
		$realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';
		return $realip;
	}
	
	//面包屑功能
	function QUI_Breadcrumb() {
	    if( is_single() ){
	        $categorys = get_the_category();
	        if($categorys && $categorys[0]){
	        	$category = $categorys[0];
	        	echo( get_category_parents($category->term_id,true,'/  ') );
	        }
	        the_title();
	        } elseif ( is_page() ){
	        the_title();
	        } elseif ( is_category() ){
	        single_cat_title();
	        } elseif ( is_tag() ){
	        single_tag_title();
	        } elseif ( is_day() ){
	        the_time('Y年Fj日');
	        } elseif ( is_month() ){
	        the_time('Y年F');
	        } elseif ( is_year() ){
	        the_time('Y年');
	        } elseif ( is_search() ){
			 echo "搜索结果";
			}
	}
	//文章评论数
	function QUI_CommentsNumer($postid=0,$which=0) {
	    $comments = get_comments('status=approve&type=comment&post_id='.$postid); //获取文章的所有评论
	    if ($comments) {
	        $i=0; $j=0; $commentusers=array();
	        foreach ($comments as $comment) {
	            ++$i;
	            if ($i==1) { $commentusers[] = $comment->comment_author_email; ++$j; }
	            if ( !in_array($comment->comment_author_email, $commentusers) ) {
	                $commentusers[] = $comment->comment_author_email;
	                ++$j;
	            }
	        }
	        $output = array($j,$i);
	        $which = ($which == 0) ? 0 : 1;
	        return $output[$which]; //返回评论人数
	    }
	    return 0; //没有评论返回 0
	}
	//摘要
	function QUI_Abstract( $post ){
	    return mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,'……'); 
	}
	//文章点击量 start
	function QUI_Views($before = '(点击 ', $after = ' 次)', $echo = 1){
	    global $post;
	    $post_ID = $post->ID;
	    $views = (int)get_post_meta($post_ID, 'views', true);
	    if ($echo) echo $before, number_format($views), $after;
	    else return $views;
	}
	//获取文章首张图片
	function QUI_FirstImage(){
	    global $post, $posts;
		$first_img = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		if(empty($matches[1])){
			return false;	
		}else{
			$first_img = $matches[1][0];
			if(empty($first_img)){
				return false;
			}
		}
		return $first_img;
	}
	//获取文章图片数量
	function QUI_ImageAllNumber(){
        global $post;  
        $content = $post->post_content;    
        preg_match_all('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', $content, $result, PREG_PATTERN_ORDER);    
        return count($result[1]);    
	}
	//获取文章多图
	function QUI_GetThreeImage(){
        global $post;  
        $content = $post->post_content;    
        preg_match_all('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', $content, $result, PREG_PATTERN_ORDER);    
        if(count($result[1]) > 2){
        	return $result[1]; 
        }
	}
	
	function QUI_Timeago( $ptime ) {
	    $ptime = strtotime($ptime);
	    $etime = time() - $ptime;
	    if($etime < 1) return '刚刚';
	    $interval = array (
	        12 * 30 * 24 * 60 * 60  =>  '年前',
	        30 * 24 * 60 * 60       =>  '月前',
	        7 * 24 * 60 * 60        =>  '周前',
	        24 * 60 * 60            =>  '天前',
	        60 * 60                 =>  '小时前',
	        60                      =>  '分钟前',
	        1                       =>  '秒前'
	    );
	    foreach ($interval as $secs => $str) {
	        $d = $etime / $secs;
	        if ($d >= 1) {
	            $r = round($d);
	            return $r . $str;
	        }
	    };
	}

	//时间格式
	function QUI_GetFormatTime($val){
		$time = "";
		if($val == 1){
			$time = QUI_Timeago(get_gmt_from_date(get_the_time('Y-m-d G:i:s')));
		}else if($val == 2){
			$time = the_time('Y-m-d');
		}else if($val == 3){
			$time = the_time('Y-m-d G:i');
		}else if($val == 4){
			$time = the_time('Y年m月d日');
		}else if($val == 5){
			$time = the_time('Y年m月d日 G时i分');
		}else{
			$time = the_time('Y-m-d G:i:s');
		}
		return $time;
	}
	
	//获取分类文章数量
	function QUI_GetCategoryCount($id) {
		// 获取当前分类信息
		 $cat = get_category($id);
		 // 当前分类文章数
		 $count = (int) $cat->count;
		 // 获取当前分类所有子孙分类
		 $tax_terms = get_terms('category', array('child_of' => $id));
		 foreach ($tax_terms as $tax_term) {
		  // 子孙分类文章数累加
		  $count +=$tax_term->count;
		 }
		 return $count;
	}
	

?>