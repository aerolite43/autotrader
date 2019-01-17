<?php
/**
 * @package AutoTrader
 * @author Adrian Roy Antonio Baguio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="sect-1">
            <div class="flex-container">
                <div class="info">
                </div>
                <div class="info banner logo_top">
                    <h1 style="color:white">AutoTrader</h1>
                </div>
                <div id="phonecall"  class="info">
                    <a class="click-phonecall-sent sales" href="tel:+1-866-776-9446">
                        <i class="icon-phone-dark"></i>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span class="label-txt">(866) 776-9446</span>
                    </a>
                    <div class="clear">
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="sect-2">
            <div class="flex-container">
                <div id="content_marketing">
                    <h1>Search and Social Marketing with AutoTrader</h1>
                    <p>At AutoTrader, our expertise in Search Marketing and Social Media Marketing helps your dealership sell more cars online. When you choose AutoTrader to help your dealership with online advertising, the result is a fully managed solution with expertise and knowledge of the industry. Online Advertising will dominate the other channels in your marketing mix through pure production and return on investment.
                    </p>
                    <p>In addition to Search Marketing and Social Media Marketing, our team has the expertise to deploy highly targeted campaigns across the display network, remarketing channels, YouTube.
                    </p>
                </div>
                <div id="content_flyers">
                    <div class="flyers">
                        <img class="img_track" src="<?= get_template_directory_uri() ?>/img/1000x1000.png" />
                        <img class="img_buick_price_break" src="<?= get_template_directory_uri() ?>/img/160x600.png" />
                        <img class="img_guelph_infinity" src="<?= get_template_directory_uri() ?>/img/1000x1000-2.png"  />
                      </div>
                </div>
            </div>
        </div>
    </header>
    <div class="half-circle-bottom">
        <div style="text-align:center;" id="learnhow">
            <a href="about-us" class="text-center" >Learn more about us
            <br>
            <span class="icon-thin-arrow-down">
            </span>
            </a>
        </div>
        
        <div id="content2">
            <div class="flex-container">
                <div class="info_hidden"></div>
            </div>
            <h1 class="text-center page_title">
	<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						the_title();
						//
						// Post Content here
						//
					} // end while
				} // end if
	?>
			</h1>
        </div>
    </div>
    <div id="navbar">
    <?php
    	$nav_items = is_user_logged_in() ? wp_get_nav_menu_items(2) : wp_get_nav_menu_items(3);
    	// Display the navigation Menu.
    	foreach ($nav_items as $nav) 
    	{
    		echo '<a href="'.$nav->url.'">'.$nav->title.'</a>';
    	}
        if(is_user_logged_in())
        {
            echo '<a href="'.wp_logout_url().'">Logout</a>';
        }
        else
        {
            echo '<a href="'.wp_login_url().'">Login</a>';
        }
    ?>
	</div>

