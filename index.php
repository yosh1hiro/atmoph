<? get_header(); ?>
  <div class="row">
    <div class="col-md-12" "col-sm-12">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="mod-entry">
      <h2 class="mod-entry-head"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="mod-entry-body">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>

  </div>
<?php get_footer(); ?>
