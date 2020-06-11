<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutDog</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <?php wp_head(); ?>
</head>
<body>
  <div class="container">
    <header>
      <h1>About Dog</h1>
      <nav>
        <ul class="header-right">
          <li>Top</li>
          <li>Latest</li>
          <li>Contact</li>
        </ul>
      </nav>
    </header>

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

  </div>

  <?php wp_footer(); ?>
</body>
</html>