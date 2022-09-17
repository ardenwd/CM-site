<?php
/*
Template Name: Art
*/
get_header();

$p_thumbnail = get_field('project_thumbnail');
$p_title = get_field('project_title');
$p_description =  get_field('project_description');

$num = rand();

 ?>
 <head>
   <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=DM+Serif+Display:ital@0;1&family=Dawning+of+a+New+Day&family=Open+Sans:ital,wght@0,400;1,700&family=Rubik&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
 </head>

<!-- this is the header -->
<div class="header">
  <div class="header__bg"></div>
    <h1 class="header__left"> Arden </h1>
    <div class="header__right">
      <ul class="list">
        <?php
        wp_list_pages(array(
          'title_li' => NULL));
        ?>
      </ul>
    </div>
</div>
<!-- end header -->

<!-- Auto Populate grid idea:
name all images based on size using digits
have grid use logic to add into grid using string names -->

<body>
<div class="gallery">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/4.jpeg" class="g_i g_i-1">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/1.jpeg" class="g_i g_i-2">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-3">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-4">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-5">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-6">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-7">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-8">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-9">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-10">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-11">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-12">
</div>
<div class="gallery_break"></div>
<div class="gallery">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-1">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-2">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-3">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-4">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-5">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-6">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-7">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-8">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-9">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-10">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-11">
  <img src="<?php echo get_stylesheet_directory_uri();?>/art/<?php echo (($num++)%6)?>.jpeg" class="g_i g_i-12">
</div>

</body>
<?php
get_footer();
 ?>
