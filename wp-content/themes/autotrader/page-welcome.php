<?php
/*
Template Name: Welcome
Author: Adrian Roy Antonio Baguio
Template Post Type: post, page, event
*/
get_header();
?>

 	<div class="content">
        <div id="search-marketing">
            <div class="flex-container">
                <div>
                    <h2>Search Marketing</h2>
                    <p>Search Marketing, also known as, PPC or SEM, allows you to purchase ads on the world’s biggest search engine, Google. Search Marketing offers great return-on-investment because you only pay when someone clicks on your ad.
                    </p>
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() ?>/img/Search-Marketing.png" alt="Search Marketing" title="Search Marketing" class="responsive">
                </div>
            </div>
        </div>
        <hr/>
        <div id="dynamic-inventory-advertising">
            <div class="flex-container">
                <div id="search-marketing-div-img">
                    <img src="<?= get_template_directory_uri() ?>/img/Dynamic-Inventory.png" alt="Dynamic Inventory" title="Dynamic Inventory" class="responsive">
                </div>
                <div id="search-marketing-div-content">
                    <h2>Dynamic Inventory Advertising</h2>
                    <p>We advertise your inventory exactly as it’s shown on your website. Add a new vehicle to your inventory – an ad is created. Sell three cars today? The ads will be removed.
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div id="google-premier-partner">
            <div class="flex-container">
                <div>
                    <h2>Google Premier Partner</h2>
                    <p>As a Google Premier Partner, EDealer is among the top suppliers in North America offering fully managed SEM. Through our partnership, we leverage the knowledge and expertise of the top experts around the world.</p>
                    <img src="<?= get_template_directory_uri() ?>/img/Google badge.png" alt="Google badge image" title="Google Badge image">
                    <img src="<?= get_template_directory_uri() ?>/img/adwords_express_512dp.png" width="50px" alt="Adwords image" title="Adwords image" id="img_adwords_express">
                </div>
                <div>
                    <div id="skyscrapper">
                        <img src="<?= get_template_directory_uri() ?>/img/Skyscraper.png" alt="Skyscrapper image" title="Skyscrapper" id="img_skyscrapper">
                    </div>
                    <div id="square">
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/img/Square.png" alt="Square image" title="Square" id="img_square">
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() ?>/img/leaderboard.png" alt="leaderboard image" title="leaderboard image" id="img_leaderboard">
                        </div>
                    </div>
                    <div id="googleAllin1">
                        <img src="<?= get_template_directory_uri() ?>/img/Google.png" alt="Google image" title="Google image" class="responsive"> 
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div id="social_media_marketing">
            <div class="flex-container">
                <div id="search-marketing-div-img">
                    <img src="<?= get_template_directory_uri() ?>/img/Social-Marketing2.png" alt="Social Marketing" title="Social Marketing" with="100%" id="img_socialmarketing">
                </div>
                <div id="search-marketing-div-content">
                    <h2>Social Media Marketing</h2>
                    <p>Facebook, who also owns Instagram, is no longer about comments, likes and shares for your dealership. While these are still important, these platforms now offer highly robust advertising platforms that allow you to drive traffic to your dealership website with creatively compelling ads.
                    </p>
                    <div>
                        <img src="<?= get_template_directory_uri() ?>/img/blueprint-badges-08.png" alt="Blue Print Badge" title="Blue Print Badge" id="blueprintbadge">
                        <span class="icon-template-2-facebook" id="icon_fb"><span class="path1"></span><span class="path2"></span></span>
                        <span class="icon-instagram" id="icon_insta"></span>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div>
<?php
get_sidebar();
get_footer();
