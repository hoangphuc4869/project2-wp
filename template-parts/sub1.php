<?php /*Template Name: sub1*/
 get_header();

?>


      
    
      

<?php

// Check rows existexists.
if( have_rows('sub1_item') ):  ?>
    <div class="sub-wrapper">
        <div class="sub">
            <div class="sub-title">
                <?php echo get_field('sub1_title');?>
            </div>           
            
            <div class="container">
                <div class="row justify-content-start align-items-end">

     <!-- Loop through rows. -->
    <?php while( have_rows('sub1_item') ) : the_row();

            $image = get_sub_field('image');
            $title = get_sub_field('title') ;

    ?>
                    <div class="col-xl-6">                                         
                        <figure>     
                            <img src="<?php echo $image['url'] ?>;" alt="" class="Image">                                                                  
                            <figcaption><?php echo $title;?></figcaption>                            
                        </figure>                                      
                    </div>
       
    <?php endwhile; ?>

              </div>
            </div>
        </div>
      </div>
<?php endif; ?>





















                    
                   
      
      <?php get_footer();?>