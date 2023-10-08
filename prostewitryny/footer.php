<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prostastrona
 */

?>

<footer id="footer" class="site-footer">
            
            <div class="container-fluid p-0">
                <div class="row no-gutters footer-links-row">
                    
                    <div class="col-12 col-md-3 footer-brand-col">
                    
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/ProsteWitrynyLogo2.webp" alt="Logo" width="280" height="40" class="d-inline-block align-text-top">
                        
                        <div class="social-box">
                            <h4 class="footer-col-title">Śledź nas na:</h4>
                            <a href="https://www.facebook.com/ProsteWitryny" target="_blank"><i class="fa-brands fa-facebook-f footer-social-icon fb-footer"></i></a>
                            <a href="https://goo.gl/maps/b4dGRgm7cohhqC2K9" target="_blank"><i class="fa-brands fa-google footer-social-icon google-footer"></i></a>
                        </div>
                        
                    </div>
                    
                    <div class="col-6 col-md-3 footer-offer-col">
                        
                        <h4 class="footer-col-title"><span><strong>Oferty</strong><br></span>dedykowane</h4>
                        <ul class="footer-ul">
                        <li class="footer-li">
                                <a href="<?php echo site_url('/firmowa-strona-internetowa'); ?>" class="footer-a">Firmowe strony internetowe</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo site_url('/prosta-strona-internetowa'); ?>
" class="footer-a">Proste strony internetowe</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo site_url('/wizytowka-internetowa'); ?>
" class="footer-a">Wizytówki internetowe</a>
                            </li>
                        </ul>
                        
                    </div>
                    
                    <div class="col-6 col-md-3 footer-pages-col">
                        
                        <h4 class="footer-col-title">Linki</h4>
                        <ul class="footer-ul">
                            
                            <li class="footer-li">
                                <a href="<?php echo site_url('/o-nas'); ?>
" class="footer-a">O nas</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo site_url('/kontakt'); ?>
" class="footer-a">Kontakt</a>
                            </li>
                            <li class="footer-li">
                                <a href="<?php echo site_url('/polityka-prywatnosci'); ?>
" class="footer-a">Polityka prywatności</a>
                            </li>
                        </ul>
                        
                    </div>
                    
                    <div class="col-12 col-md-3 footer-contact-col">
                        
                        <h4 class="footer-col-title">Kontakt</h4>
                        <p>
                            <a href="https://goo.gl/maps/zPWMuHkg3KA3ueQi6" target="_blank"><i class="fa-solid fa-map-location-dot"></i> Brogi 19/18, Kraków</a><br>
                            <a href="https://goo.gl/maps/zPWMuHkg3KA3ueQi6" target="_blank"><i class="fa-solid fa-map-location-dot"></i> Krakowska 62d/1, Słomniki</a><br>
                            <a href="mailto:biuro@prostewitryny.pl"><i class="fa-solid fa-envelope"></i> biuro@prostewitryny.pl</a><br>
                            <a href="tel:+48602726478"><i class="fa-solid fa-phone"></i> 602 726 478</a>
                        </p>
                        
                    </div>
                    
                </div>
                
                <div class="row no-gutters footer-copyright-row">
                    <div class="col-12 col-md-3 footer-copyright-col">
                        <p>Copyright &copy; <?php echo date("Y"); ?> ProsteWitryny.pl<br>Wszystkie prawa zastrzeżone</p>
                    </div>
                    <div class="col-12 col-md-7 footer-seo-col">
                        <h5>Proste i responsywne strony internetowe</h5>
                    </div>
                    <div class="col-12 col-md-2 footer-dev-col">
                        <p>
                            Projekt i wykonanie:<br>
                            <a href="https://prostewitryny.pl/">ProsteWitryny.pl</a>
                        </p>
                    </div>
                </div>
                
            </div>
            
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
