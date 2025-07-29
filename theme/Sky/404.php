<?php
/**
 * The template for displaying 404 pages (not found)
 * 
 */
get_header(); ?>
<article class="flex-1">
<main>
    <section class="padding mt20 bgff ui-radius ui-border">
            <div class="ui-page404">
                <img src="<?php echo QUI_TempUrl();?>/svg/404.png" alt="404页面无法找到！">
                <h5>页面无法追踪到，还是看看其他的吧！</h1>
            </div>
     </section>
</main>
</article>
<?php get_footer();?>