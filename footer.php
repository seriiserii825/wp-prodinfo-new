<footer class="footer">
    <div class="footer__img-bg">
	    <?php echo kama_thumb_img('w=1920 &h=600', carbon_get_theme_option('crb_footer_photo')); ?>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="footer-contacts">
                <h2><?php echo carbon_get_theme_option('crb_contacts_title'.get_lang()); ?></h2>

				<?php
				$phone = carbon_get_theme_option('crb_phone');
				$phoneClear = clear_phone($phone);
				$mail = carbon_get_theme_option('crb_mail');
				$address = carbon_get_theme_option('crb_address' . get_lang());
				?>
                <ul class="footer-list address">
                    <li class="address__item"><i class="fas fa-phone"></i>
                        <a href="tel:<?php echo $phoneClear; ?>"><?php echo esc_html__( 'Phone', 'bs-prodinfo' ) ?>: <?php echo $phone; ?></a>
                    </li>
                    <li class="address__item"><i class="fas fa-envelope"></i><a href="mailto:<?php echo $mail; ?>">Email: <?php echo $mail; ?></a></li>
                    <li class="address__item"><i class="fas fa-map-marker-alt"></i><a href="#"><?php echo $address; ?></a></li>
                </ul>
            </div>
            <div class="footer-form">
                <?php if(get_lang() == '_ru'): ?>
					<?php echo do_shortcode('[contact-form-7 id="61" title="Форма rus"]'); ?>
                <?php elseif(get_lang() == '_ro'): ?>
	                <?php echo do_shortcode('[contact-form-7 id="108" title="Form rom"]'); ?>
                    <?php else: ?>
						<?php echo do_shortcode('[contact-form-7 id="107" title="Form en"]'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="map" id="js-map">
	            <?php if(get_lang() === '_ro'): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
	            <?php elseif(get_lang() === '_ru'): ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.2967.0/node_modules/wix-santa/static/external/googleMap.html?language=ru&amp;lat=47.04084899999999&amp;long=28.891227999999956&amp;address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&amp;addressInfo=Р. Молдова, мун. Кишинев, блв. Мирча чел Бэтрын 8/1&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true"></iframe>
	            <?php else: ?>
                    <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
	            <?php endif; ?>
            </div>
        </div>
    </div>
</footer>


<div class="socials-bottom">
    <ul class="socials-bottom__list">
        <li class="socials-bottom__item phone">
            <a href="tel:<?php echo clear_phone(carbon_get_theme_option('crb_phone')); ?>">
                <svg data-bbox="17.052 7.009 15.938 16.944" width="50" height="30" viewBox="0 0 50 30" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M21.886 7.46c-.265-.483-.827-.599-1.271-.247l-1.74 1.38c-2.164 1.718-2.44 4.79-.618 6.86l5.96 6.772c1.822 2.07 5.011 2.316 7.13.542l1.313-1.1c.428-.357.444-.946.028-1.322l-2.904-2.63c-.412-.373-1.105-.404-1.54-.076l-1.714 1.296-4.843-5.353 1.743-1.259c.446-.321.595-.97.327-1.457l-1.87-3.406z" fill-rule="evenodd"></path>
                    </g>
                </svg>
            </a>
        </li>
        <li class="socials-bottom__item facebook">
            <a href="https://msng.link/fm/euconsult.md">
                <svg data-bbox="17 6 17 17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 30" height="30" width="50" data-type="shape">
                    <g>
                        <path d="M33.062 23H17.938a.938.938 0 0 1-.938-.938V6.938c0-.518.42-.938.938-.938h15.124c.518 0 .938.42.938.938v15.124c0 .518-.42.938-.938.938zm-4.547 0v-6.462h2.228l.334-2.518h-2.562v-1.608c0-.73.208-1.227 1.282-1.227h1.37V8.933c-.237-.031-1.05-.1-1.996-.1-1.974 0-3.326 1.174-3.326 3.329v1.858H23.61v2.518h2.234V23h2.67z" fill-rule="evenodd"></path>
                    </g>
                </svg>
            </a>
        </li>
        <li class="socials-bottom__item consult">
            <a href="#">
                <svg data-bbox="17 8 17 17.989" width="50" height="30" viewBox="0 0 50 30" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M19 8c-1.105 0-2 .892-2 2.005v9.577a2 2 0 0 0 1.99 2.004h2.238l-.18 3.847c-.027.555.3.724.736.371L27 21.586h4.994A2.001 2.001 0 0 0 34 19.582v-9.577C34 8.897 33.11 8 32 8H19z" fill-rule="evenodd"></path>
                    </g>
                </svg>
            </a>
        </li>
    </ul>
</div>

<!--<div class="footer-buttons">-->
<!--    <a target="_blank" class="footer-buttons__phone" href="tel:--><?php //echo $phoneClear; ?><!--"><i class="fas fa-phone"></i></a>-->
<!--    <a target="_blank" class="footer-buttons__facebook" href="https://msng.link/fm/euconsult.md"><i class="fab fa-facebook-square"></i></a>-->
<!--</div>-->
<a target="_blank" href="https://msng.link/fm/prodinfo.md" class="messenger">
    <img src="<?php echo get_template_directory_uri().'/site/assets/i/MESSENGER.png'; ?>" alt="">
</a>
<a href="#" id="js-up" class="up"><img src="<?php echo get_template_directory_uri().'/site/assets/i/svg/up-arrow.svg'; ?>" alt=""></a>
<!--[if lt IE 9]>
<script src="assets/libs/html5shiv/es5-shim.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv.min.js"></script>
<script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="assets/libs/html5shiv/respond.min.js"></script>
<!--<![endif]-->
<?php wp_footer(); ?>

</body>
</html>



