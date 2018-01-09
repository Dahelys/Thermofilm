<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Construction
 */
?>
<div id="footer-wrapper">
    	<div class="container">
        
            <div class="cols-3 widget-column-1">  
			
            <div class="footertitle"><?php echo get_theme_mod('contact_title',__('Contact Info','skt-construction')); ?></div> 
                <p><?php echo get_theme_mod('contact_add',__('100 King St, Melbourne PIC 4000,<br /> Australia','skt-construction')); ?></p>
              <div class="phone-no"><?php echo get_theme_mod('contact_no',__('<strong>Phone:</strong> +123 456 7890','skt-construction')); ?> <br  />
             
           <strong> Email:</strong> <a href="mailto:<?php echo get_theme_mod('contact_mail','contact@company.com'); ?>"><?php echo get_theme_mod('contact_mail','contact@company.com'); ?></a></div>
         
             
            </div><!--end .col-3-->
			         
           
             <div class="cols-3 widget-column-2">  
			 
			<div class="footertitle">Sitios Frecuentes</div>
			
<A HREF="http://192.168.113.135/nuestros-productos/">NUESTROS PRODUCTOS</A><br><br>
<A HREF="http://192.168.113.135/que-nos-diferencia/">¿QUE NOS DIFERENCIA?</A><br><br>
<A HREF="http://192.168.113.135/preguntas-frecuentes/">PREGUNTAS FRECUENTES</A><br><br>
<A HREF="http://192.168.113.135/blog-corporativo/">BLOG</A><br><br>
<A HREF="http://192.168.113.135/contactenos/">CONTACTENOS</A><br><br>

			 
                
                          	
              </div><!--end .col-3-->
                      
               <div class="cols-3 widget-column-3">
			   
			   <div class="footertitle">Redes Sociales</div>
			   
                <?php echo DISPLAY_ULTIMATE_PLUS(); ?>
                </div><!--end .col-3-->
                
            <div class="clear"></div>
         </div><!--end .container-->
              
            
       <div class="copyright-wrapper">
        	
        </div>
      2017 © Todos los Derechos Reservados | Amagi Services C.A | J-29963305-4
    </div><!--end .footer-->
	
<?php wp_footer(); ?>

</body>
</html>