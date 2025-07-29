<?php
/*
Template Name: 申请友链
* 提示：友情链接，需在后台审核
*/
?>
<?php
    if( isset($_POST['blink_form']) && $_POST['blink_form'] == 'send'){
    global $wpdb;
    
    // 表单变量初始化
    $link_name = isset( $_POST['blink_name'] ) ? trim(htmlspecialchars($_POST['blink_name'], ENT_QUOTES)) : '';
    $link_url = isset( $_POST['blink_url'] ) ? trim(htmlspecialchars($_POST['blink_url'], ENT_QUOTES)) : '';
    $link_description = isset( $_POST['blink_lianxi'] ) ? trim(htmlspecialchars($_POST['blink_lianxi'], ENT_QUOTES)) : ''; // 联系方式
    $link_target = "_blank";
    $link_visible = "N"; // 表示链接默认不可见
    
    // 表单项数据验证
    if ( empty($link_name) || mb_strlen($link_name) > 20 ){
    wp_die('连接名称必须填写，且长度不得超过30字');
    }
    
    if ( empty($link_url) || strlen($link_url) > 60 ) { //验证url
    wp_die('链接地址必须填写');
    }
    
    $sql_link = $wpdb->insert(
    $wpdb->links,
    array(
    'link_name' => '【待审核】--- '.$link_name,
    'link_url' => $link_url,
    'link_target' => $link_target,
    'link_description' => $link_description,
    'link_visible' => $link_visible
    )
    );
    
    $result = $wpdb->get_results($sql_link);
    
    wp_die('亲，友情链接提交成功，【等待站长审核中】！<p><a href="/">点此返回</a>', '提交成功');
    
    }
    get_header();
?>
<article class="flex-1 <?php if(QUI_CodeCopy()) {echo "sel-no";}else{ echo "sel-auto";} ?>">
<main>
    <section class="ui-link-apply overflow-hidden bgff p-r ui-shadow mt20"> 
    		<div class="link-left-img left">
    			<img src="<?php echo bloginfo('template_url'); ?>/static/img/link.jpg"/>
    		</div>
    		<div class="link-right-box right p20">
    			 <div class="link-title text-center">
                        <h1>友链申请</h1>
                        <p>您可以通过提交下面的表单贵站相关信息。</p>
                    </div>
                    <div class="link-form">
                    <!--表单开始-->
                        <form method="post" class="mt20" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
                            <div class="form-group">
                                <label for="blink_name"><font color="red">*</font> 关键词:</label>
                                <input type="text" size="40" value="" class="form-control" id="blink_name" placeholder="请输入链接名称" name="blink_name" />
                            </div>
                            
                            <div class="form-group ">
                                <label for="blink_url"><font color="red">*</font> 链接地址:</label>
                                <input type="text" size="40" value="" class="form-control" id="blink_url" placeholder="请输入链接地址" name="blink_url" />
                            </div>
                            
                            <div class="form-group ">
                                <label for="blink_lianxi"><font color="red">*</font> 联系QQ:</label>
                                <input type="text" size="40" value="" class="form-control" id="blink_lianxi" placeholder="请输入联系QQ" name="blink_lianxi" />
                            </div>
                            
                            <div style="margin-top:80px">
                                <div class="text-center">
	                                <input type="hidden" value="send" name="blink_form" />
	                                <button type="submit" class="btn-primary">提交申请</button>
	                                <button type="reset" class="btn-default">重填</button>
                                </div>
                                <p class="text-center mt20 cor99">（提示：带有<font color="red">*</font>，表示必填项~）</p>
                            </div>
                    </form>
                <!--表单结束-->
                </div>
    		</div>
    </section>  
</main>
</article>
<?php get_footer(); ?>