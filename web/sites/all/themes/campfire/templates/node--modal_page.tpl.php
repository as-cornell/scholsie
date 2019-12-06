<?php if (!empty($content['field_hero'])): ?>
<div class="as-page__block">

  <div class="as-img">
    <div class="as-hero">
      <div class="field-pano-image">
        <?php print render($content['field_pano_image']); ?>
      </div>

      <div class="as-container">
        <div class="as-hero__copy">
          <?php print render($content['field_hero']); ?>
        </div>
      </div>
    </div>
</div>
<?php endif ?>


<div class="as-page__block">
<div class="as-container as-grid as-grid--one-two">
  <div class="fullPage__sidebar">
    <div class="sticky">
      <h2 class="menu-title sidebarNav__trigger">On This Page</h2>
        <ul class="fullPage__sidebarNav">
          <?php
          // Modal page sidebar links, markup provided by as_modal_links module
            $link_count=0;
            foreach($content['field_text_group']['#items'] as $item) {
            $index=$item['value'];
            if ($content['field_text_group'][$link_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#markup']) {
            print render($content['field_text_group'][$link_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#linktext']);
            }
            $link_count++;
            }
          ?>
        </ul>
        <?php if (!empty($content['field_article'])): ?>
          <h2>Related News</h2>
          <div class="small-cards">
            <?php print render($content['field_article']);?>
          </div>
        <?php endif;?>

    </div>
  </div>
  <div class="">
    <h1><?php print $title_attributes; ?><?php print $title; ?></h1>
  <?php
  $breadcrumb = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb())) ;
  print $breadcrumb ?>

    <div class="modal-page-content">
      <?php
        // Modal page section title and text, anchor tag markup provided by as_modal_links module
        $text_count=0;
        foreach($content['field_text_group']['#items'] as $item) {
        $index=$item['value'];
        if ($content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#markup']) {
        print render ($content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#markup']);
          }
        print render($content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_text'][0]['#markup']);
        $text_count++;
          }
      ?>
    </div>


  </div>


</div>



</div>

