<?php 
/*

  Template Name: home page

*/
get_header();?>
      

      <div class="heading d-flex justify-content-center align-items-center">
        <div class="img_text" data-aos="slide-right">
          <p class="para1">經營理念 / <span class="para2" >永續經營、誠懇踏實、信用公道、服務客戶</span> </p>
          <p class="para1">品質政策 / <span class="para2"> 訓練堅實、標準嚴守、品質保證、服務貫徹</span> </p>
        </div>
        <div class="custom-shape-divider-bottom-1690861496">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
          </svg>
</div>
        
      </div>


      <div class="video_section_wrapper">
        <div class="video_section">
          <div class="video_left" data-aos='slide-right'>
            <div class="video_intr">
              <?php the_field('video_intro'); ?>
            </div>
          </div>
          <div class="video_right">
            <div class="video_content">
              <div class="v_title"><?php echo get_field('video_title1')?></div>
              <div class="v_text">
                <?php echo get_field('video_text1')?>
              </div>
            </div>
            <div class="video_content">
              <div class="v_title"><?php echo get_field('video_title2')?></div>
              <div class="v_text">
                <?php echo get_field('video_text2')?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="info_wrapper">
        <div class="info_section">
          <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-xl-6">
              <div class="info_content">
                <div class="info_title"><?php echo get_field("info_title")?></div>
                  <ul class="info_text">
                    <li>
                      <p data-aos="slide-right">
                        <?php echo get_field("t1")?>
                      </p>
                    </li>
                    <li>
                      <p data-aos="slide-right"><?php echo get_field("t2")?></p>
                    </li>
                  </ul>
              </div>
            </div>

            <div class="col-xl-6">
              <div class="info_img">
                <img src="https://www.karos.com.tw/wp-content/uploads/2023/02/bigstock-Watercolor-Geographical-Map-Of-239570401_2-1024x642.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <script>
        $(document).ready(function(){
          $('.owl-carousel').owlCarousel({
                loop:true,
                margin:30,
                nav:false,
                dotsEach: true,
                autoplay: true,
                autoWidth: true,
                slideBy: 1,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:5
                    }
                }
            })
        });
      </script>

      <div class="slider_wrapper">
        <div class="slider">
          <div class="slider_title"><?php echo get_field('slide')?></div>
          <div class="owl-carousel owl-theme">
            <?php if( have_rows('slide_partner') ): ?>
            <?php while( have_rows('slide_partner') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                ?>

                <div class="item">
                	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </div>

            <?php endwhile; ?>
    	<?php endif; ?>
          </div>
        </div>
      </div>
      
<?php get_footer();?>