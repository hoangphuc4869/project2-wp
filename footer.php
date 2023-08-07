<div class="footer_wrapper" id="fter">
        <div class="footer">
          <div class="footer_top">
            <div class="container">
              <div class="row">
                <div class="col-xl-4">
                  <div class="left">
                    <div class="title" ><?php echo get_field('title_footer','option'); ?></div>
                    <div class="left_text">
                      <?php echo get_field('p1','option')?>
                    </div>
                    <?php echo get_field('gg_map', 'option')?>
                    <p>
                     <?php echo get_field('p2', 'option')?>
                    </p>
                    <p>
                      <?php echo get_field('p3', 'option')?>
                    </p>
                  </div>
                </div>

                <div class="col-xl-4">
                  <div class="mid">
                    <p>
                      <?php echo get_field('p4','option')?>
                    </p>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="right">
                    <div class="contact" ><?php echo get_field('p5','option')?></div>
                    <?php echo do_shortcode('[contact-form-7 id="38c01ad" title="Contact form 1"]')?>
                </div>
              </div>
            </div>
          </div>
              </div>
            </div>
          </div>
        <div class="footer_bot1">
          <div class="footer_bot">
            <p>Copyright © 2018 karos All rights reserved.</p>
          </div>
        </div>
        </div>
      </div>
      
        
      </div>
       <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
      ></script>
    </div>
  </body>
</html>