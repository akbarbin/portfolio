<div class="content" id="about">
  <div class="container">
    <div class="row">
      <div class="page-space">
        <div class="span12">
          <h1 class="heading"><span>News</span></h1>
          <h2 class="subheading"><span>Subheading Goes Here</span></h2>
          <div><p><a href="news/create">New article</a></p></div>
          <div class="short-intro">
            <?php foreach ($news as $news_item): ?>
              <h2><?php echo $news_item['title'] ?></h2>
              <div id="main">
                <?php echo $news_item['text'] ?>
              </div>
              <p><a href="news/<?php echo $news_item['slug'] ?>">View article</a></p>
              <p><a href="news/edit/<?php echo $news_item['slug'] ?>">Edit article</a></p>
              <p><a href="news/destroy/<?php echo $news_item['slug'] ?>" onclick="return confirm('Are you sure delete?')">Delete article</a><p>
            <?php endforeach ?>
          </div>
        </div>
      </div>                
    </div>
  </div>
</div>