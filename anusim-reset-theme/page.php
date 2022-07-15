
<?php

get_header();
while (have_posts()) {
    the_post(); ?>
    <main>
    <div style="background: url(<?php echo get_theme_file_uri('/build/images/ocean.jpg') ?>);" class="hero__section">
        <div class="hero-content">
            <h1><?php the_title(); ?></h1>
            <p>More about this page</p>
        </div>

        <?php 
        $parentPageID = wp_get_post_parent_ID(get_the_ID());
        if( $parentPageID) { ?>
             <div class="buttons">
            <button><a href="<?php echo the_permalink($parentPageID) ?>">Back to <?php echo get_the_title($parentPageID) ?></a></button>
            <button class="btn-2"><?php the_title(); ?></button>
        </div>
      <?php  }
        ?>
        
    </div>
    <div class="interior-page-content">
        <div class="description">
           <?php the_content(); ?>
        </div>
        <?php
        $testArray = get_pages(array(
         'child_of' => get_the_ID()
        ));
        if($parentPageID OR $testArray) { ?>
           <div class="child-pages">
            <h1><a href="<?php echo get_permalink($parentPageID); ?>"><?php echo get_the_title($parentPageID); ?></a></h1>
            <ul>
                <!-- <li><a href="#">Our History</a></li>
                <li><a href="#">Our Goals</a></li>
                <li><a href="#">Our Aim</a></li> -->
                <?php 
                if($parentPageID){
                    $findChildrenOf = $parentPageID;
                }else{
                    $findChildrenOf = get_the_ID();
                }
                wp_list_pages(array(
                    'title_li' => NULL,
                    'child_of' => $findChildrenOf
                ));
                
                 ?>
            </ul>
           </div>

           <?php } ?>
    </div>
</main>


<?php }
get_footer();

?>