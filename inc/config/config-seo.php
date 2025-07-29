<?php
	//基础配置
	$setSeo = array(
      array(
	      'id'    => 'set-key',
	      'type'  => 'text',
	      'title' => '首页关键词',
	      'before' => '网站首页的关键词，多个关键词以英文‘,’或‘|’分割',
      ),
      array(
	      'id'    => 'set-describe',
	      'type'  => 'textarea',
	      'title' => '首页描述',
	      'before' => '网站首页的描述',
      ),
      array(
	      'id'    => 'set-siteMap',
	      'type'  => 'text',
	      'title' => '网站地图',
	      'before' => '建议是xml/txt格式的url链接',
      ),
      array(
	      'id'    => 'set-seoCount',
	      'type'  => 'textarea',
	      'title' => '统计代码',
	      'before' => '请不要带"script"标签',
      ),
    );
		

?>