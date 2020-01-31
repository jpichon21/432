<?php get_header(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>4_32 Architectes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" src="main.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div id="bodyContainer">
        <span id="switchContainerMobile"><svg id="switchIconMobile" onclick="toggleYellow()"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.2 381.38">
                <defs>
                    <style>
                        .cls-1 {
                            isolation: isolate;
                        }
                    </style>
                </defs>
                <title>432_assets</title>
                <g id="Composant_12_1" data-name="Composant 12 1">
                    <g id="_" data-name=" " class="cls-1">
                        <g class="cls-1">
                            <path
                                d="M385.5,191c0,108-82.13,189.12-191.63,189.12C84,380.1,1.5,299,1.5,191S83.79,1.88,193.5,1.88,385.5,83,385.5,191ZM193.87,350.28h1.88l.35-318.57-2.6,0c-92,0-161,68.22-161,159.3S101.71,350.28,193.87,350.28Z" />
                        </g>
                    </g>
                </g>
            </svg></span>
        <?php ?>
        <div id="leftNavContainer">
            <nav>
                <?php 
                            $logo = get_field('logo');
                            if( !empty( $logo ) ): ?>
                <img id="logo" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                <?php endif; ?>
                <?php 
                            $logoAlt = get_field('logoAlt');
                            if( !empty( $logo ) ): ?>
                <img id="logoAlt" class="hideIcon" src="<?php echo esc_url($logoAlt['url']); ?>" alt="<?php echo esc_attr($logoAlt['alt']); ?>" />
                <?php endif; ?>

                <span class="mobileHide"><a href="#About">A propos</a></span>
                <span class="mobileHide"><a href="#Team">Équipe</a></span>
                <span class="mobileHide"><a href="#Refs">Références</a></span>
                <span class="mobileMenu" id="mobileMenuContainer"><svg id="menuIcon" onclick="toggleMenu()"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496.2 381.38">
                        <defs>
                            <style>
                                .cls-1 {
                                    isolation: isolate;
                                }
                            </style>
                        </defs>
                        <title>432_assets</title>
                        <g id="_" data-name=" " class="cls-1">
                            <g class="cls-1">
                                <path
                                    d="M.49,16.25H496.41V58.1H.49Zm0,152.65H496.41v41.79H.49Zm0,152.57H496.41v41.86H.49Z" />
                            </g>
                        </g>
                    </svg>
                    <svg id="menuClose" class="hideIcon" onclick="toggleMenu()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 382.2 381.38"><defs><style>.cls-1{isolation:isolate;}</style></defs><title>432_assets</title><g id="_2" data-name=" 2" class="cls-1"><g class="cls-1"><path d="M222.48,189.79,377.2,344.5,345.72,376,191,221.27,36.3,376,4.83,344.5,159.54,189.79,4.83,35.08,36.3,3.6,191,158.32,345.72,3.6,377.2,35.08Z"/></g></g></svg>
                
                </span>
                <span class="mobileHide" id="switchContainer"><svg id="switchIcon" onclick="toggleYellow()"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.2 381.38">
                        <defs>
                            <style>
                                .cls-1 {
                                    isolation: isolate;
                                }
                            </style>
                        </defs>
                        <title>432_assets</title>
                        <g id="Composant_12_1" data-name="Composant 12 1">
                            <g id="_" data-name=" " class="cls-1">
                                <g class="cls-1">
                                    <path
                                        d="M385.5,191c0,108-82.13,189.12-191.63,189.12C84,380.1,1.5,299,1.5,191S83.79,1.88,193.5,1.88,385.5,83,385.5,191ZM193.87,350.28h1.88l.35-318.57-2.6,0c-92,0-161,68.22-161,159.3S101.71,350.28,193.87,350.28Z" />
                                </g>
                            </g>
                        </g>
                    </svg></span>
            </nav>
        </div>

        <div id="contentContainer">
            <!----------------------------------------------------
                    ------------------ Mobile Menu ---------------------
                    ------------------------------------------------------>
            <div id="mobileMenuSplash">
                <div class="content">
                    <div class="mobileNav">
                        <span class=""><a onclick="toggleMenu()" href="#About">A propos</a></span>
                        <span class=""><a onclick="toggleMenu()" href="#Team">Équipe</a></span>
                        <span class=""><a onclick="toggleMenu()" href="#Refs">Références</a></span>
                    </div>

                    <div id="coordinatesContainerMobile">
                        <table id="coordinatesListMobile">
                            <tr>
                                <th>284 Rue de Créqui,</th>
                                <th class="mobile">69007 Lyon</th>
                                <th class="hidetab">T. +33 6 33 77 82 64</th>
                                <th class="mobile">&nbsp;</th>
                            </tr>

                            <tr>
                                <th class="hidetab">69007 Lyon</th>
                                <th class="mobile">T. +33 6 33 77 82 64</th>
                                <th><a href="mailto:contact@432.archi">M. contact@432.archi</a></th>
                            </tr>
                            </table>
                    </div>
            
            </div>
        </div>

        <!----------------------------------------------------
                    ------------------ Homepage Hero ---------------------
                    ------------------------------------------------------>
        <div id="heroContainer">
            <div class="content">
                <?php 
                            $image = get_field('headerhero');
                            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>

        <!----------------------------------------------------
                    ------------------ Homepage Hero Mobile---------------
                    ------------------------------------------------------>
        <div id="heroMobileContainer">
            <div class="content">
                <?php 
                            $imagemobile = get_field('headerheromobile');
                            if( !empty( $imagemobile ) ): ?>
                <img src="<?php echo esc_url($imagemobile['url']); ?>"
                    alt="<?php echo esc_attr($imagemobile['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>


        <!----------------------------------------------------
                    ------------------ Homepage Description ---------------------
                    ------------------------------------------------------>
        <div id="descContainer">
            <div class="content" id="About">
                <?php echo the_field('description'); ?>
            </div>
        </div>

        <!--- Box -->
        <div id="blackBox">
            <div class="content" id="Team">
                <?php $imagecontenu = get_field('image_contenu');
                    if( !empty( $imagecontenu ) ): ?>
                <img src="<?php echo esc_url($imagecontenu['url']); ?>" alt="<?php echo esc_attr($imagecontenu['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
       
        <!----------------------------------------------------
                    ------------------ Homepage Team ---------------------
                    ------------------------------------------------------>
        <div id="teamContainer">
            <div class="content" >

                <div class="title">
                    <h2>Équipe</h2>
                </div>

                <!--liste !-->
                <table id="teamList">
                    <?php
                                    if( have_rows('equipe') ):
                                        while ( have_rows('equipe') ) : the_row(); ?>
                    <tr>
                        <th class="member"><?php echo the_sub_field('prenom'); ?> <?php echo the_sub_field('nom'); ?>
                        </th>
                        <th class="role"> <?php echo the_sub_field('role'); ?> </th>
                    </tr>
                    <?php
                                    endwhile;
                                    else :
                                        // no rows found
                                    endif;
                                ?>
                </table>
                <!-- -->

            </div>
        </div>

        <!----------------------------------------------------
                    ------------------ Homepage Projets ---------------
                    ------------------------------------------------------>
        <div id="projContainer">
            <div class="content" >
                <!--tableau !-->

                <div class="title">
                    <h2>Projets</h2>
                </div>

                <table id="projTable">
                    <thead>
                        <tr id="tableHead">
                            <th>Projets</th>
                            <th class="hide">Programme</th>
                            <th class="hide">Maîtrise d'ouvrage</th>
                            <th class="hide">Surface</th>
                            <th class="hide"></th>
                            <th class="">Phase</th>
                            <th class="hide">Equipe</th>
                            <th class="hide"></th>
                            <th class="hide"></th>
                            <th class="hide"></th>
                            <th class="hide"></th>
                            <th class="hide"></th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                    if( have_rows('projets') ):
                                        while ( have_rows('projets') ) : the_row(); ?>
                        <tr>
                            <th><?php echo the_sub_field('projets'); ?> </th>
                            <th class="hide"><?php echo the_sub_field('programme'); ?> </th>
                            <th class="hide"><?php echo the_sub_field('maitrise_douvrage');?></th>
                            <th class="hide" colspan="2"><?php echo the_sub_field('surface'); ?> </th>
                            <th class=""><?php echo the_sub_field('phase'); ?> </th>
                            <th class="hide" colspan="6"><?php echo the_sub_field('equipe'); ?> </th>

                        </tr>
                        <?php
                                            endwhile;
                                            else :
                                                // no rows found
                                            endif;
                                        ?>

                    </tbody>
                </table>
                <!-- -->

            </div>
        </div>
        <!--END CONTENT CONTAINER -->

        <!----------------------------------------------------
                    ------------------ Homepage References ---------------
                    ------------------------------------------------------>
        <div id="refsContainer">
            <div class="content" id="Refs">
                <!--tableau !-->

                <div class="title">
                    <h2>Références chez AIA Architectes</h2>
                </div>

                <table id="refsTable">
                    <thead>
                        <tr id="tableHead">
                            <th>Projets</th>
                            <th class="hide">Programme</th>
                            <th class="hide">Maîtrise d'ouvrage</th>
                            <th class="hide">Surface</th>
                            <th class="">Livraison</th>
                            <th class="hide">Mission</th>
                            <th class="hide"></th>
                            <th class="hide"></th>
                            <th class="hide"></th>
                            <th class="hide"></th>
                            <th class="hide"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                    if( have_rows('references') ):
                                        while ( have_rows('references') ) : the_row(); ?>
                        <tr>
                            <th><?php echo the_sub_field('projets'); ?> </th>
                            <th class="hide"><?php echo the_sub_field('programme'); ?> </th>
                            <th class="hide"><?php echo the_sub_field('maitrise_douvrage');?></th>
                            <th class="hide"><?php echo the_sub_field('surface'); ?> </th>
                            <th class=""><?php echo the_sub_field('livraison'); ?> </th>
                            <th class="hide" colspan="6"><?php echo the_sub_field('mission'); ?> </th>

                        </tr>
                        <?php
                                            endwhile;
                                            else :
                                                // no rows found
                                            endif;
                                        ?>

                    </tbody>
                </table>
                <!-- -->

            </div>
        </div>

        <div id="coordinatesContainer">
            <table id="coordinatesList">
                <tr>
                    <th>284 Rue de Créqui,</th>
                    <th class="mobile">69007 Lyon</th>
                    <th class="hidetab">T. +33 6 33 77 82 64</th>
                    <th class="mobile">&nbsp;</th>
                </tr>

                <tr>
                    <th class="hidetab">69007 Lyon</th>
                    <th class="mobile">T. +33 6 33 77 82 64</th>
                    <th><a href="mailto:contact@432.archi">M. contact@432.archi</a></th>
                </tr>
                <table>
        </div>

        <!--END CONTENT CONTAINER -->
    </div>


    <?php get_footer(); ?>

    </div>
    <script>
        function toggleYellow() {
            var target = document.getElementById("switchIcon");
            var targetMobile = document.getElementById("switchIconMobile");
            var tbody = document.getElementById("bodyContainer");
            target.classList.toggle("switchOn");
            targetMobile.classList.toggle("switchOn");
            tbody.classList.toggle("yellowOn");
        }

        function toggleMenu() {
            var menu = document.getElementById("mobileMenuSplash");
            var header = document.getElementById("leftNavContainer");
            var icon = document.getElementById("menuIcon");
            var close = document.getElementById("menuClose");
            var logo = document.getElementById("logo");
            var logoAlt = document.getElementById("logoAlt");
            var body = document.getElementById("bodyContainer");
            menu.classList.toggle("menuOn");
            header.classList.toggle("navBlack");
            body.classList.toggle("blackOn");
            icon.classList.toggle("hideIcon");
            close.classList.toggle("hideIcon");
            logo.classList.toggle("hideIcon");
            logoAlt.classList.toggle("hideIcon");
        }
    </script>
</body>

</html>