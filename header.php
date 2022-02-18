<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="aOzSZt0jWe31aC48FwsL1tMrjRJvkDoPFIy0zdt2FBM" />
</head>
<?php wp_head();?>
<body>
<div class="sub-menu">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-12 col-md-5 col-lg-5 izquierda">
		</div>
		<div class="col-sm-12 col-md-7 col-lg-7 derecha">
	      <a  href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_url')?>/images/facebook.png" alt="paginas web cusco facebook"/>
	      <a  href="#" target="_blank"><img class="img-fluid" src="<?php bloginfo('template_url')?>/images/twitter.png" alt="paginas web cusco twitter"/>
	      
	    </div>
    </div>
  </div>
</div>
<div class="barra-menu ">
  <div class="container">
    <div class="row">
      <div class="col-6 campo-logo">
        <a  href="#"><img class="logo img-fluid" src="<?php bloginfo('template_url')?>/images/logo.jpg" alt="paginas web cuscoup"/>
        <h4>AudiCont</h4>
        <h5>ESTUDIO CONTABLE & AUDITORÍA<br>
        Asesoría & Consultoría  </h5>
         <h6>Tu visión es nuestra misión</h6>
      </div>
    <!-- menu -->
      <div class="col-6">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
             <div class="navegacion">
                     <?php wp_nav_menu(
                          array(
                            'container' => false,
                            'items_wrap' => '<li class="nav-item"> %3$s </li>',
                            'theme_location' => "top_menu"
                        ));?>
                    </div>
            </ul>
          </div>
        </nav>
       </div>
    <!-- main-menu end -->
  </div>
</div>

