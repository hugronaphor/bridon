<?php foreach ($results as $key => $result): ?>

  <article>
    <h2 class="article-title"><a href="<?php print $result['reference']; ?>" title="<?php print $result['title']; ?>"><?php print $result['title']; ?></a></h2>
    <!--image-->
    <div class="summary">
      <?php print $result['summary']; ?>
    </div>
  </article>
<?php endforeach; ?>
