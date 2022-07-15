
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content= "width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<nav>
        <div class="nav__container">
            <div class="site__logo">
                <div class="logo"><a href="<?php echo site_url(); ?>">Anusimh-wp Webpage</a></div>
            </div>
            <div class="navigation__menu">
                <ul>
                    <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">More</a></li>
                  
                    <li><button style="padding: 7px; backround-color: #3d4d4d; " class="header__btn">Login</button></li>
                    <li><button  style="padding: 7px;backround-color: #3d4d4d;" class="header__btn">Sign Up</button></li>
        
                </ul>
            </div>
        </div>


    </nav>
    
