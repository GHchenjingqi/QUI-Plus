<section class="ui-login  mla p-r">
<?php if (is_user_logged_in()){ ?>
	<aside class="ui-login-out ui-radius">
        <a href="/wp-admin/" class="login-out-ava">
            <?php global $current_user;wp_get_current_user();echo get_avatar( $current_user->user_email, 32); ?>
        </a> 
        <ul class="loginpout-list shadow">
        	<li><a href="/wp-admin/"><?php global $current_user; echo esc_attr( $current_user->nickname ) ?></a></li>
            <?php if( QUI_IsAdministrator() ) { ?>
            <li><a href="/wp-admin/">管理后台</a></li>
            <?php } ?>
            <li><?php $url_this = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; ?> <a href="<?php echo wp_logout_url($url_this); ?>">退出</a></li>
        </ul>
    </aside>
<?php  }else{ ?>
	<a class="login-in"  href="<?php echo wp_login_url( home_url(add_query_arg(array(),$wp->request)) ); ?>">登录</a> 
<?php  }  ?>

</section>