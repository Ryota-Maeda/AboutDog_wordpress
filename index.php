
<?php get_header(); ?>

    <div>
      <?php if ( get_header_image() ) : ?>
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
      <?php endif; ?>
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
                  <p><?php the_time("Y/m/d/"); ?></p>
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

    <aside class="contact">

      <h2>Contact</h2>
      <form>
          <div class="form">
            <input type="text" placeholder="お名前">
            <input type="text" placeholder="メールアドレス">
            <textarea placeholder="&#13;&#13;&#13;&#13;&#13;お問い合わせ内容"></textarea>
          </div>

          <p class="submit">
              <input type="submit" value="送信">
          </p>
      </form>

    </aside>

  <?php get_footer(); ?>