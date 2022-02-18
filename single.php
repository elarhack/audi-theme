<?php get_header(); ?>
 <div class="entradas">
<section class="blog-entrada ">
<div class="container entrada"> 
        <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
    <?php while (have_posts()): the_post(); ?>
      <?php if( has_post_thumbnail())
        {the_post_thumbnail('$medium',array('class'=>'img-fluid blog-imagenes'));} ?>
          <h1><?php the_title(); ?></h1>
          
          <div class="contenido"><p><?php the_content(); ?></p><?php endwhile; wp_reset_query(); ?> </div>
		<div class="formulario-contacto">
        <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Formulario-Contacto')): endif;?>
      </div>
    </div>
        

  

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 lateral">
					<span class="text_destacado">
					Asesoria Contable
			</span>
					<?php
                  $args = array(
                      'posts_per_page' => 7,
                      'meta_key' => 'post_views',
                      'orderby' => 'meta_value_num',
                      'order' => 'DESC'
                  );
                  ?>
                 
                   
					 <?php
                  $popular_posts = new WP_Query( $args ); ?>
                   <?php
                  while ( $popular_posts->have_posts() ) : $popular_posts->the_post();?>
                   
                  <div class="cardview">
                  <ul>
				
                    <li>
						
                      <div class="text_card">
                        <a href="<?php the_permalink(); ?>">
                  <?php if( has_post_thumbnail() ){
              the_post_thumbnail('thumbnail','url', array('class'=>'entradas_index'));

          } ?>
                  

                   
                    <?php the_category(', ') ?>
                      <h2><?php the_title();?></h2></a>
                      
                  <?php   ?>
                   
                    </li> <?php
                   
                  endwhile;?>
                  </ul>
                  </div>


                </div>

  </div>
</div>
</section>

<?php get_footer(); ?>