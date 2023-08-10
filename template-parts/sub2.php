<?php /*Template Name: sub2*/
 get_header();

?>



<?php
// Check rows existexists.
if( have_rows('sub2_item') ): ?>
    <div class="sub-wrapper">
        <div class="sub">
            <div class="sub-title">
                <?php echo get_field('sub2_title');?>
            </div>           
            
            <div class="container">
                <div class="row justify-content-start align-items-end">
 
    <?php while( have_rows('sub2_item') ) : the_row();
    
        $image = get_sub_field('image');
        $title = get_sub_field('title');
    
    ?>



                    <div class="col-xl-4 col-sm-6">                                         
                        <figure>     
                            <img src="<?php echo $image['url'];?>" alt="" class="Image">                                                                                    
                            <figcaption><?php echo $title;?></figcaption>                            
                        </figure>                                      
                    </div>

    <?php endwhile;?>
            </div>
            </div>
        </div>
        
      </div>
    
<?php endif;?>

    
      
                    
                    

        
      <?php get_footer();?>