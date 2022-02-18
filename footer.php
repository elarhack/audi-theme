<footer class="footer">
  <div class="container">
    <div class="row">
       <div class="col-sm-12 col-md-5 col-lg-5 ">
        <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer-Contac')): endif;?>
       </div>
       <div class="col-lg-4 ">
       <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer-Etiquetas')): endif;?>
       </div>
      <div class="col-sm-12 col-md-3 col-lg-3 ">
        <div class="soc-list">
          <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Footer-Redes')): endif;?>
        </div>
      </div>
      
      
      </div>
    </div>
</footer>
<div class="copyright">
    <span >Copyright © 2017 AudiCont. Todos los Derechos Reservados.<br>

    <a class="" >Lima - peru</a>
    </span>
</div>
<?php wp_footer(); ?>