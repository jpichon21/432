<?php get_header(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
                <?php ?>

                <!----------------------------------------------------
                ------------------ Homepage Hero ---------------------
                ------------------------------------------------------>
                <div id="heroContainer">
                    <div class="content">
                    </div>
                </div>

                <!----------------------------------------------------
                ------------------ Homepage Description ---------------------
                ------------------------------------------------------>
                <div id="descContainer">
                    <div class="content">
                        <?php echo the_field('description'); ?>
                    </div>
                </div>

                <!----------------------------------------------------
                ------------------ Homepage Team ---------------------
                ------------------------------------------------------>
                    <div id="teamContainer">
                    <div class="content">
                        <div id="coordinates"></div>

                        <!--liste !-->
                        <ul id="teamList">
                            <?php
                                if( have_rows('equipe') ):
                                    while ( have_rows('equipe') ) : the_row(); ?>
                                    <li class="member"><?php echo the_sub_field('nom'); ?> <?php echo the_sub_field('prenom'); ?> </li>
                            <?php
                                endwhile;
                                else :
                                    // no rows found
                                endif;
                            ?>
                        </ul>
                        <!-- -->

                    </div>
                </div>

                <!----------------------------------------------------
                ------------------ Homepage Références ---------------
                ------------------------------------------------------>
                <div id="refsContainer">
                    <div class="content">
                        <!--tableau !-->

                        <table id="refsTable">
                                <thead >
                                    <tr id="tableHead">
                                        <th>Projets</th>
                                        <th>Programme</th>
                                        <th>Maîtrise d'ouvrage</th>
                                        <th>Surface</th>
                                        <th>Travaux HT</th>
                                        <th>Livraison</th>
                                        <th>Mission</th>
                                        <th>Localisation</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                if( have_rows('references') ):
                                    while ( have_rows('references') ) : the_row(); ?>
                                        <th><?php echo the_sub_field('projets'); ?> </th>
                                        <th><?php echo the_sub_field('programme'); ?> </th>
                                        <th><?php echo the_sub_field('maitrise_douvrage'); ?> </th>
                                        <th><?php echo the_sub_field('surface'); ?> </th>
                                        <th><?php echo the_sub_field('travaux_ht'); ?> </th>
                                        <th><?php echo the_sub_field('livraison'); ?> </th>
                                        <th><?php echo the_sub_field('mission'); ?> </th>
                                        <th><?php echo the_sub_field("localisation"); ?> </th>
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


          
                <?php get_footer(); ?>

        </div>
    </body>
</html>
