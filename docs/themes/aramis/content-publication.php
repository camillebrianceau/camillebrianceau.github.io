<?php

$post_title = get_the_title( $post_id );;
$scientific_title = get_field('title', $post->ID);
$keywords = get_field('keywords', $post->ID);
$date = get_field('date', $post->ID);
$authors = get_field('authors', $post->ID);
$journal = get_field('journal', $post->ID);
$publisher_link = get_field('publisher_link', $post->ID);
$open_access_link = get_field('open_access_link', $post->ID);
$abstract = get_field('abstract', $post->ID);
$description = get_field('description', $post->ID);
$image = get_field('image', $post->ID);
$caption = get_field('caption', $post->ID);

?>

<!-- TITLE -->
<?php if( $post_title ): ?>
  <div class="col-md-12 col-title">
    <h1><?php echo esc_html( $post_title ); ?></h1>
    <h5><span class="publication-highlight">By</span> <?php echo esc_html( $authors ); ?></h1>
  </div>
<?php endif; ?>

<!-- Keywords -->
<?php if( $keywords ): ?>
  <div class="col-md-12 m-2 col-keywords">
    <p><span class="publication-highlight">Keywords:</span>
      <?php foreach( $keywords as $k): ?>
      <span class="keyword-tag"><?php echo esc_html( $k->name ); ?></span>
      <?php endforeach; ?>
    </p>
  </div>
<?php endif; ?>

<!-- Description -->
<?php if( $description ): ?>
  <div class="col-md-10 col-md-offset-1 text-justify col-blockquote">
    <blockquote><?php echo $description; ?></blockquote>
  </div>
<?php endif; ?>


<!-- JOURNAL, DATE, Access -->
<div class="col-md-12 col-information">
  <?php if( $journal ): ?>
    <span class="publication-highlight">Published in</span> <?php echo esc_html( $journal ); ?>
  <?php endif; ?>
  <?php if( $journal ): ?>
    <span class="publication-highlight">the</span> <?php echo esc_html( $date ); ?>
  <?php endif; ?>
</div>

<!-- LINKS -->
<div class="col-md-12 col-links">
  <div class="row row-links">
    <?php if( $publisher_link ): ?>
      <div class="col-md-6 text-center">
        <a class="button-link" href="<?php echo $publisher_link ?>">View at publisher</a>
      </div>
    <?php endif; ?>
    <?php if( $open_access_link ): ?>
      <div class="col-md-6 text-center">
        <a class="button-link" href="<?php echo $open_access_link ?>">Open access</a>
      </div>
    <?php endif; ?>
  </div>
</div>


<?php if( $image ): ?>
  <div class="col-md-8 col-md-offset-2 col-image">
	   <img src="<?= $image['url'] ?>" class="publication-image attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
     <?php if( $caption ): ?>
       <p><?php echo esc_html( $caption ); ?></p>
      <?php endif; ?>
  </div>
<?php endif; ?>


<!-- Full title TITLE -->
<?php if( $post_title ): ?>
  <div class="col-md-12 col-scientific-title">
    <h3><span class="publication-highlight">Full title</span> <?php echo esc_html( $scientific_title ); ?></h3>
  </div>
<?php endif; ?>



<!-- Abstract -->
<?php if( $abstract ): ?>
  <div class="col-md-12 text-justify col-abstract">
    <h4><u><b>Article abstract: </u></b></h4>
    <?php echo $abstract; ?>
  </div>
<?php endif; ?>
