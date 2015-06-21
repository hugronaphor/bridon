<?php foreach ($results as $key => $result): ?>

  <article>
    <h2 class="article-title"><a href="<?php print $result['reference']; ?>" title="<?php print $result['title']; ?>"><?php print $result['title']; ?></a></h2>
    <!--image-->
    <div class="summary">
      <?php print $result['summary']; ?>
    </div>
    <?php if (!empty($result['more_entities'])) : ?>
      <div class="more-like-this">
        <a class="more-like-this-button" href="#">More about this</a>
        <div class="hidden expand-entities">
          <?php foreach ($result['more_entities'] as $entity_name => $more_entity): ?>
            <div class="term-search">
              <div class="entity-wrapp-label"><?php print $entity_name; ?></div>
              <div class="entity-wrapp-expand hidden">
                <?php foreach ($more_entity as $final_term): ?>
                  <a class="final-term" href="/?search=<?php print $final_term; ?>"><?php print $final_term; ?></a>
                <?php endforeach; ?>
              </div>
            </div>

          <?php endforeach; ?>
        </div> 
      </div>
    <?php endif; ?>
  </article>
<?php endforeach; ?>
