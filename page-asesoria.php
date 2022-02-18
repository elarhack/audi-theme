<?php get_header(); ?>
<?php /*------
---------Template Name: asesoria
------*/
?>
<?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Paginas')): endif;?>
<div class="asesoria">
  <div class="container">
    <div class="row">
       
      <div class="col-sm-12 col-md-8 col-lg-8 ">
      	<h2 class="title_index"><?php the_title(); ?></h2>
      	<div class="avatar col-xs-6 col-sm-6 col-md-1 col-lg-1"><?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?></div>
        <p>En AudiCont Asesores & Consultores S.R.L. sabemos lo importante que es para usted la gestión empresarial con servicios de la más alta calidad profesional en materia Contable, tributación, la gestion de recursos humano y outsourcing contable.

​

Nuestra trayectoria y la satisfacción de nuestros de clientes que han confiado en nosotros son nuestra mejor carta de presentación. Además, contamos con un staff especializado que tiene entre sus políticas de trabajo ofrecer una atención personalizada y lograr los mejores resultados en los intereses de cada uno de nuestros clientes.</p>
			<ul>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/list.png" class="img-fluid" >
					<p>Declaracion mensual de impuestos IGV RENTA  y declaracion de la renta anual tercera categoria y persona natural .</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/list.png" class="img-fluid" >
					<p>Declaracion mensual de impuestos IGV RENTA  y declaracion de la renta anual tercera categoria y persona natural .</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/list.png" class="img-fluid" >
					<p>Declaracion mensual de impuestos IGV RENTA  y declaracion de la renta anual tercera categoria y persona natural .</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/list.png" class="img-fluid" >
					<p>Declaracion mensual de impuestos IGV RENTA  y declaracion de la renta anual tercera categoria y persona natural .</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/list.png" class="img-fluid" >
					<p>Declaracion mensual de impuestos IGV RENTA  y declaracion de la renta anual tercera categoria y persona natural .</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/list.png" class="img-fluid" >
					<p>Declaracion mensual de impuestos IGV RENTA  y declaracion de la renta anual tercera categoria y persona natural .</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/list.png" class="img-fluid" >
					<p>Declaracion mensual de impuestos IGV RENTA  y declaracion de la renta anual tercera categoria y persona natural .</p>
				</li>
				<li>
					<img src="<?php bloginfo('template_url')?>/images/list.png" class="img-fluid" >
					<p>Declaracion mensual de impuestos IGV RENTA  y declaracion de la renta anual tercera categoria y persona natural .</p>
				</li>
				

			</ul>

      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 formulario-2">
         <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Formulario-asesoria')): endif;?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>