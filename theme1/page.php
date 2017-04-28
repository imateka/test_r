<?php get_header(); ?>
<!-- Contents -->     
  <div class="area-contents" id="contents">
    <div class="area-contents-inner">
      <div class="area-main" id="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
          <h1 class="title"><?php the_title(); ?></h1>
          <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
          <?php the_content(); ?>
        </div><!-- /.post -->
        <?php endwhile; ?>
        <?php else : ?>
            <h2 class="title">記事が見つかりませんでした。</h2>
            <p>検索で見つかるかもしれません。</p><br />
            <?php get_search_form(); ?>  
        <?php endif; ?>
      </div><!-- /#main -->
      <?php get_sidebar(); ?>
    <br class="clear">
  </div><!-- /.area-contents-inner -->
</div><!-- /#contents -->
<?php get_footer(); ?>
      