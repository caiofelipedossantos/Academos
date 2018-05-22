<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Colégio Academos">
      <meta name="author" content="webThemez.com">
      <title><?php echo utf8_encode($this->config['site_title']);?></title>
      <link href="assets/images/favicon.png" rel="favicon" />
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" media="screen" rel="stylesheet" />
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
      <link href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css" rel="stylesheet" />
      <link href="<?php echo BASE_URL; ?>assets/css/bootstrap-theme.css" media="screen" rel="stylesheet" />
      <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" />
      <link href="<?php echo BASE_URL; ?>assets/css/camera.css" id="camera-css" media="all" rel="stylesheet" type="text/css" />
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <?php
        $this->loadMenu();
      ?>
    <?php $this->loadViewInTemplate($viewName, $viewData);?>
      
      <footer id="footer">
         <div class="container">
            <div class="row">
               <div class="footerbottom">
                  <div class="col-md-3 col-sm-6">
                     <div class="footerwidget">
                        <h4>Institucional</h4>
                        <div class="menu-course">
                           <ul class="menu">
                              <li><a href="historico.html">Hist&oacute;rico </a></li>
                              <li><a href="missao.html">Miss&atilde;o </a></li>
                              <li><a href="principios.html">Princ&iacute;pios </a></li>
                              <li><a href="instalacoes.html">Instala&ccedil;&otilde;es </a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="footerwidget">
                        <h4>Ensino</h4>
                        <div class="menu-course">
                           <ul class="menu">
                              <li><a href="infantil.html">Edua&ccedil;&atilde;o Infantil </a></li>
                              <li><a href="fundamental.html">Ensino Fundamental </a></li>
                              <li><a href="medio.html">Ensino M&eacute;dio </a></li>
                              <li><a href="integral.html">Sistema Integral - SIA </a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="footerwidget">
                        <h4>Redes Sociais</h4>
                        <div class="menu-course">
                           <ul class="menu">
                              <li><a href="https://www.facebook.com/colegioacademos/" target="_blank">Facebook </a></li>
                              <li><a href="https://www.instagram.com/colegioacademos/" target="_blank">Instagram </a></li>
                              <li><a href="https://www.youtube.com/channel/UCbNhnQSvNMO6b122d9Lr0Xw" target="_blank">Youtube </a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="footerwidget">
                        <h4>Contato</h4>
                        <div class="row">
                           <div class="col-sm-12"><i class="fa fa-whatsapp" aria-hidden="true"></i> (85) 98137-8612</div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12"><i class="fa fa-map-marker" aria-hidden="true"></i> Rua Costa Barros, 850 | Fortaleza/CE</div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12"><i class="fa fa-phone" aria-hidden="true"></i> (85) 3226-3747</div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12"><i class="fa fa-envelope-o" aria-hidden="true"></i> colegioacademos@hotmail.com</div>
                        </div>
                     </div>
                     <!-- end widget -->
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <!--CLEAR FLOATS-->
         <div class="footer2">
            <div class="container">
               <div class="row">
                  <p></p>
               </div>
            </div>
            <p></p>
         </div>
         <!-- /row of panels -->
      </footer>
      <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
      <script type='text/javascript' src="<?php echo BASE_URL; ?>assets/js/modernizr-latest.js"></script>
      <script type='text/javascript' src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
      <script type='text/javascript' src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
      <script type='text/javascript' src='<?php echo BASE_URL; ?>assets/js/fancybox/jquery.fancybox.pack.js'></script>
      <script type='text/javascript' src='<?php echo BASE_URL; ?>assets/js/jquery.mobile.customized.min.js'></script>
      <script type='text/javascript' src='<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js'></script>
      <script type='text/javascript' src='<?php echo BASE_URL; ?>assets/js/camera.min.js'></script>
      <script type='text/javascript' src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>
      <script>
         jQuery(function(){
         	
         	jQuery('#camera_wrap_4').camera({
                       transPeriod: 500,
                       time: 3000,
         		height: '600',
         		loader: 'false',
         		pagination: true,
         		thumbnails: false,
         		hover: false,
                       playPause: false,
                       navigation: false,
         		opacityOnGrid: false,
         		imagePath: 'assets/images/'
         	});
         
         });
         
         // TOOLSTIP
         $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
         });
         
         $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
             
      </script>
      <script>
         $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip(); 
         });
         
         
        
      
         
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
      <!-- Google Analytics --><script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
         ga(function(){setTimeout(function(){for(var a=ga.getAll(),e="UA-108332662-1",t=!1,g=a.length-1;g>=0;--g){var n=a[g].get("name");if(t=t||"t0"==n,"awx"==n||a[g].get("trackingId")==e)return}ga("create",e,"auto",t?"awx":"t0"),ga(t?"awx.send":"send","pageview")})});
      </script>
   </body>
</html>