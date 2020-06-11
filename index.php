
<?php get_header(); ?>

    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="dog" class="top-image">
    </div>

    <section>
      <h2 class="subtitle">Latest</h2>

      <div class="section">

        <?php if (have_posts()):?>
        <!-- 投稿がある場合 -->
          <h2>最近の投稿</h2>
          <ul class="articles">
              <?php while(have_posts()): the_post(); ?>
                  <li class="img-box" >
                  <a href="<?php the_permalink(); ?>">
                      <?php if (has_post_thumbnail()): ?>
                      <!-- サムネイルがある時 -->
                      <?php the_post_thumbnail('thumbnail'); ?>
                      <?php else: ?>
                          <!-- サムネイルがない時 -->
                          <img src="https://placehold.jp/150x150.png" alt="">
                      <?php endif; ?>
                  </a>
                  <p><?php the_category(); ?></p>
                  <p><?php the_time("Y年m月d日"); ?></p>
                  <p><?php the_excerpt(); ?></p>
                  </li>
              <?php endwhile; ?>            
          </ul>
        <?php else:?>
      <!-- 投稿がない場合 -->
          <h2>最近の投稿はありません</h2>
        <?php endif; ?>
      </div>
    </section>
  </div>

  <nav></nav>

  <?php get_footer(); ?>