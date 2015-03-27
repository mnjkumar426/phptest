<?php
/*
 Template Name:  Help

*/

get_header();
 
?>
<div class="row margin main-content">
 <div class="container">
 
 <div class="col-md-9">
 
 <?php 
if (have_posts()) : while (have_posts()) : the_post();?>
<h2>
<?php the_title()?>

</h2>
<?php 
 the_content(); ?>
<?php endwhile; endif; ?>
 
 </div>
</div>
</div>
<div class="row margin">
<?php get_footer()?>

</div>