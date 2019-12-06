<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']); ?>
    <div class="as-container">
      <div class="as-hero__copy">
        <?php print render($content['field_hero']); ?>
      </div>
    </div>
  </div>
</div>

<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>
 <!-- title -->
   <div class="as-page__block text-center">
    <div class="as-container">
      <h1 class="pageTitle centered">
      <?php print $title; ?>
      </h1>

      <!-- Description -->
      <div class="as-page__introduction">
        <?php print render($content['field_description']); ?>
      </div>
    </div>
  </div>

  <!-- popular destinations -->
  <div class="as-page__block as-page__block--gray">
    <div class="as-container links links--inline links--gray centered">
          <?php print render($content['field_links']); ?>
        </div>
  </div>
  <!-- stats -->

  <div class="as-page__block">
    <h3 class="centered">By the Numbers</h3>
    <?php if ($content['field_stat']): ?>
      <div class="as-stats">
      <?php print render($content['field_stat']); ?>
      </div>
      <?php else: ?>
      <div class="as-stats as-stats--double">
      <?php
      $block = block_load('views', 'factoid_blocks-stat_block');
      $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
      print $output; ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="as-page__block" style="padding-top:0;">
    <div class="as-container__narrow as-page__introduction">
      <h1 class="centered">Musicologist finds unknown Lou Reed songs</h1>

      <p>
        The songs on the cassette were a “very intimate, close-mic’d sound. The import of the discovery didn’t hit me until.. a curator of the archive said, ‘I think you’ve just discovered a lost Lou Reed album.’”
      </p>
      <p>
        Judith Peraino, professor of music in the College of Arts and Sciences, describes how her archival research in the Andy Warhol Museum led to an unexpected discovery.
      </p>
      <p>
        <a href="https://as.cornell.edu/news/musicologist-discovers-tape-unreleased-lou-reed-music
">Read the full article</a>.
      </p>

    </div>
    <div class="as-container">
        <p class="videoContainer">
          <iframe src='https://www.cornell.edu/video/lost-lou-reed-mixtape-for-andy-warhol-discovered/embed' title="Judith Peraino discusses Lost Lou Reed recordings" allowfullscreen></iframe>
        </p>
    </div>
  </div>
<!-- Research Stories
  <section id="research-news" class="as-container as-cards__wrapper">
    <h1>Faculty Work</h1>
    <a href="/all-articles" class="viewAll as-button as-button--light">View all work</a>
    <div class="content as-cards">

        <?php
        //$block = block_load('views', 'work-work_8');
        //$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
        //print $output; ?>

    </div>
  </section>-->
  <!-- Research Stories -->
  <div id="research-news" class="as-container as-cards__wrapper" aria-label="Other Research "News>
    <h1>Research News</h1>
    <a href="/all-articles" class="viewAll as-button as-button--light">View all news</a>
    <div class="content as-cards">
      <?php if ($content['field_article']): ?>
        <?php print render($content['field_article']); ?>
      <?php else: ?>
        <?php
        $block = block_load('views', 'fa57134d7e02e99d6dbd46e4a086beb5');
        $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
        print $output; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
