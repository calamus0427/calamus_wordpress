<?php get_header(); ?>
    <body style="background-image:url(<?php bloginfo('template_url'); ?>/images/bg.jpg)">
        <div class="wrapper">
            <?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
            <article>
                <header class="title">
                     <h1><?php the_title(); ?></h1>
                     <h4><?php echo count_words ($text); ?></h4>
                </header>
                <div class="content">
                <?php the_content(); ?>
                </div>
                <div class="post-like">
         <a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>">❤ 喜欢 <span class="count">
            <?php if( get_post_meta($post->ID,'bigfa_ding',true) ){            
                    echo get_post_meta($post->ID,'bigfa_ding',true);
                 } else {
                    echo '0';
                 }?></span>
        </a>
 </div>
 <?php comments_template(); ?>
                <div class="info"><span>归档于</span>
<a><?php the_category(', '); ?></a>
                </div>
            </article>
<div class="paginator pager pagination">
    <div class="paginator_container pagination_container"><?php
 $prev_post = get_previous_post();
 if (!empty( $prev_post )): ?><a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="btn next older-posts older_posts">›</a><?php endif; ?>
<?php
 $next_post = get_next_post();
 if (!empty( $next_post )): ?><a href="<?php echo get_permalink( $next_post->ID ); ?>" class="btn pre newer-posts newer_posts">‹</a><?php endif; ?>
        <div style="clear:both;height:0;"></div>
    </div>
</div>
	<?php else : ?>
	<div class="errorbox">
		没有文章！
	</div>
	<?php endif; ?>
<?php get_footer(); ?>