<?php
get_header();

?>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

  <div class="gray-bar">
    <div class="sidebar">
      <ul class="list">
        <?php
        wp_list_pages(array(
          'title_li' => NULL));
        ?>
        </ul>
      </div>
    <div class="title, other">Arden</div>
  </div>
  <div class="meat">
<?php
  get_field('project_thumbnail');

  while(have_posts()) {
    the_post(); ?>

<!--    <h1>THis is  PAGE</h1>
    <p><?php the_title(); ?></p>
  -->
    <?php the_content(); ?>
    <?php
  }

get_footer();
 ?>
 </div class="meat">
 </body>
