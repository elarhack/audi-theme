<?php get_header(); ?>
<?php /*------
---------Template Name: index
------*/
?>

<div class="container">
    <div class="row">
  <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Slider')): endif;?>
</div>
</div>
<dic class="container d-none d-md-block">
  <div class="pre ">
    <div class="row">
      <div class="contact-form">
        <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Formulario')): endif;?>
      </div>
      </div>
    </div>
</dic>


<div class="firma">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-2 col-lg-2">
        <img src="<?php bloginfo('template_url')?>/images/contable.png" class="img-fluid" alt="firma">
        <h6>Nuestra Firma</h6>
      </div>
      <div class="col-sm-12 col-md-10 col-lg-10">
		  <p>
		  Somos un Estudio Contable líder en el mercado de consultoría que le ofrece un servicio especializado bajo la nómina de expertos profesionales.  Nuestra firma fue fundado para servir a las MYPES en Lima, hoy atendemos a varios clientes de diferentes rubros y a nivel nacional.
        <p>Somos tus aliados estratégicos para tu éxito en la toma de decisiones de tu empresa. Céntrate en hacer crecer tu negocio, nosotros nos encargaremos de la documentación.

      </div>
    </div>
  </div>
</div>

<div class="servicios">
     <h3>Soluciones y Servicios</h3>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
     <ul>     
		 <?php query_posts('category_name=asesoria-contable' ); ?>
        <?php while (have_posts()): the_post(); ?>        
        <li>
          <a href="<?php the_permalink(); ?>">
          <?php if( has_post_thumbnail() ){
              the_post_thumbnail('medium','url', array('class'=>'entradas_index'));
              
          } ?><h5><?php the_title(); ?></h5></a>
          <?php wp_get_attachment_thumb_url( $attachment_id ); ?>
          <?php $pulgar = wp_get_attachment_image_src (get_post_thumbnail_id ($post-> ID), 'thumbnail_size');
$url = $pulgar ['0']; ?><p>
			
			</p>
          <?php the_excerpt(); ?>
		 </li>
				<?php endwhile; wp_reset_query(); ?>
		 </ul>
      </div>
    </div>
  </div>
</div>

<div class="consultoria">
  <h3 >Outsourcing</h3>
  <div class="container">
    <div class="row">
    <div class="  col-sm-12 col-md-5 col-lg-5 img-valores">
      
        <img  class="img-fluid" src="<?php bloginfo('template_url')?>/images/outsourcing contable cusco.jpg" />
    </div>
    <div class="col-sm-12 col-md-7 col-lg-7 valores">
     <p>Otorgamos a tu empresa la más destacada asesoría  bajo la nomina de expertos, garantizando el buen cuidado de tus recursos económicos, con transparencia, responsabilidad y confidencialidad.</p>
<p>RAZONES PARA SUBCONTRATAR</p>
<ul>
  <li>Alcanzar la efectividad concentrándose en lo que la empresa hace mejor</li>
  <li>Aumentar la flexibilidad para alcanzar el cambio</li>
  <li>mejorar la credibilidad y la imagen corporativa gracias a la asociación con proveedores grandes</li>
  <li>reducir inversiones.</li>
  <li>ganar acceso al mercado a través de la red de proveedores.</li>
  <li>expandir operaciones.</li>
  <li>Transferir el costo de los empleados y los gastos gerenciales al proveedor.</li>
</ul>
<a href="#"> Mas Informacion</a>
    </div>
</div>
</div>
</div>

<div class="beneficios">
  <h3>Conoce cuales son los beneficios de ser pequeña y mediana empresa</h3>
  <div class="container">
    <div class="row">


      <div class="col-sm-12 col-md-5 col-lg-5 ">
     <p>Sabes cual son las obligaciones de una micro, pequeña y mediana empresa?, Sabe que régimen de renta le corresponde?, Estas preparado para la facturación electrónica?,
Tienes la obligación de presentar libros electrónicos?,. Realizamos un análisis de la gestión contable de tu empresa y te damos soluciones, a través de retroalimentación y damos nuevos enfoques con planes estratégicos.</p>
<h6>Beneficios de una micro, pequeña, mediana empresa</h6>

<a href="http://audicontac.com/contacto/">Ver mas informacion</a>
    </div>
    <div class="col-sm-12 col-md-7 col-lg-7 ">
      
        <img class="img-fluid"  src="<?php bloginfo('template_url')?>/images/beneficios de ser pequeña y mediana empresa.png" />
    </div>
    
</div>
</div>
</div>




<div class="blog ">
<div class="container">
  <div class="row"> 
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <h4>Compartiendo nuestro Conocimiento</h4>
        <hr>
        <p>Accede a nuestro canal de videos donde encontrarás nuestras últimas entrevistas y entradas a los blogs.</p>
        <hr>
        <ol>
          <li>ASESORÍA EMPRESARIAL</li>
          <li>SUNAT</li>
          <li>ASESORÍA TRIBUTARIA</li>
          <li>ASESORÍA CONTABLE</li>
        </ol>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <ul>
          <?php query_posts('category_name=blog' ); ?>
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
</div>

<div class="mapa">
	<h3>Contáctanos</h3>
	<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.7090200771706!2d-77.00281654207996!3d-12.083508097860683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c62d281936c9%3A0x761f5d869eaecccd!2sAv.+Canad%C3%A1+1993%2C+Cercado+de+Lima+15021!5e0!3m2!1ses-419!2spe!4v1519167958797" width="100%" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
</div>







 







<?php get_footer(); ?>