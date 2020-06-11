
<?php get_header(); ?>

    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="dog" class="top-image">
    </div>

    <section>
      <h2 class="subtitle">Latest</h2>

      <div class="section">

        <ul class="articles">
          <li class="article">
            <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="dog">
            <p class="article-content">ここに記事が表示されます。
            <br>ここに記事が表示されます。</p>
            <p class="read-more"><a href="">Read More</a></p>
          </li>
        </ul>

        <ul class="articles">
          <li class="article">
            <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="dog">
            <p class="article-content">ここに記事が表示されます。
            <br>ここに記事が表示されます。</p>
            <p class="read-more"><a href="">Read More</a></p>
          </li>
        </ul>

        <ul class="articles">
          <li class="article">
            <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="dog">
            <p class="article-content">ここに記事が表示されます。
            <br>ここに記事が表示されます。</p>
            <p class="read-more"><a href="">Read More</a></p>
          </li>
        </ul>

        <ul class="articles">
          <li class="article">
            <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="dog">
            <p class="article-content">ここに記事が表示されます。
            <br>ここに記事が表示されます。</p>
            <p class="read-more"><a href="">Read More</a></p>
          </li>
        </ul>

        <ul class="articles">
          <li class="article">
            <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="dog">
            <p class="article-content">ここに記事が表示されます。
            <br>ここに記事が表示されます。</p>
            <p class="read-more"><a href="">Read More</a></p>
          </li>
        </ul>

        <ul class="articles">
          <li class="article">
            <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog.jpg" alt="dog">
            <p class="article-content">ここに記事が表示されます。
            <br>ここに記事が表示されます。</p>
            <p class="read-more"><a href="">Read More</a></p>
          </li>
        </ul>

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