
<?php get_header(); ?>
<?php
/*
Template Name: page-blog
*/
?>
<div class="blog ">
<div class="container">
  <div class="row"> 

      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    
        <h2 class="title_index"><?php the_title(); ?></h2>
        <?php query_posts('category_name=blog' ); ?>
               
       <ul>
        
        <?php while (have_posts()): the_post(); ?>
               

          
        <li>
          <a href="<?php the_permalink(); ?>">
          <?php if( has_post_thumbnail() ){
              the_post_thumbnail('medium','url', array('class'=>'entradas_index'));


          } ?></a>
          <?php wp_get_attachment_thumb_url( $attachment_id ); ?>



          <?php $pulgar = wp_get_attachment_image_src (get_post_thumbnail_id ($post-> ID), 'thumbnail_size');
$url = $pulgar ['0']; ?>
          <p class="blog-autor"><?php the_author(); ?></p>
          <h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          
          <p class="blog-fecha"><img class="comments" src="<?php bloginfo('template_url')?>/images/calendar.png"> <?php the_date ('F j, Y');?><img class="comments" src="<?php bloginfo('template_url')?>/images/chat.png"> <?php $numero_de_comentarios = get_comments_number(); echo $numero_de_comentarios;  ?><?php $post_views = get_post_views(get_the_ID());?><img class="views" src="<?php bloginfo('template_url')?>/images/view.png"> <?php echo sprintf( _n( '%s vez', '%s ', $post_views, 'your_textdomain' ), $post_views );?></p>


          
          </li>

       
        <?php endwhile; wp_reset_query(); ?>
             
 
        </ul>
       

    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
