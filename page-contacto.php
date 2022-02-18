<?php get_header(); ?>
<?php /*------
---------Template Name: contacto
------*/
?>
<div class="contacto-page">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 contacto-contenido">
			<h3>
				Audicont
			</h3>
			<p>
				Somos un Estudio Contable líder en el mercado de consultoría que le ofrece un servicio especializado bajo la nómina de expertos profesionales. Céntrate en hacer crecer tu negocio, nosotros nos encargaremos del área tributario, contable y financiero para un buen desarrollo empresarial. Nuestra firma fue fundado para servir a las MYPES en Lima, hoy atendemos a varios clientes de diferentes rubros y a nivel nacional. Somos tus aliados estratégicos para tu éxito en la toma de decisiones de tu negocio.
			</p>
			<div class="formulario-contacto">
				<?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Formulario-Pagina')): endif;?>
			</div>
		
		</div>
		<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 contacto-sidebar">
			<?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Contacto-Info')): endif;?>
		</div>
	</div>
</div>
</div>


<?php get_footer(); ?>