<?php
/* Template Name: about_page */
$img = get_field('a_img');
$picture = $img['url'];
get_header(); ?>
      <div class="about-wrapper">
        <div class="about">
            <h2 class="about-title">
                <?php echo get_field('a_title')?>
            </h2>

            <img src="<?php echo $picture; ?>" alt="">
            <!-- <img src="images\-e1545639992966-1024x371.jpg" alt=""> -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 my-3">
                        <div class="item text-center">
                            <div class="item-title">
                                <em><?php echo get_field('a1_title')?></em>
                            </div>
                            <hr class="my-2">
                            <div class="item-content">
                                <p>
                                    <?php echo get_field('a1_text')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 my-3">
                        <div class="item text-center">
                            <div class="item-title">
                                <em><?php echo get_field('a2_title')?></em>
                            </div>
                            <hr class="my-2">
                            <div class="item-content">
                                <p>
                                    <?php echo get_field('a2_text')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 my-3">
                        <div class="item text-center ">
                            <div class="item-title">
                                <em><?php echo get_field('a3_title')?></em>
                            </div>
                            <hr class="my-2">
                            <div class="item-content">
                                <p>
                                   <?php echo get_field('a3_text')?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 my-3">
                        <div class="item text-center ">
                            <div class="item-title">
                                <em><?php echo get_field('a4_title')?></em>
                            </div>
                            <hr class="my-2">
                            <div class="item-content">
                                <p>
                                  <?php echo get_field('a4_text')?>
                                </p>
                            </div>
                        </div>
                    </div>                                    
                </div>
            </div>
            <div class="tree-wrapper">
              <div class="tree_box">
                <div class="tree">
                <ul>
                    <li>
                        <a href="#">董事會</a>
                        <ul>
                            <li>
                                <a href="">董事長</a>
                                <ul>
                                    <li><a href="#">職安部</a></li>
                                    <li><a href="#">總經理室</a>
                                        <ul>
                                            <li><a href="#">管理部</a>
                                                <ul>
                                                    <li><a href="#">會計課</a></li>
                                                    <li><a href="#">人事</a></li>
                                                </ul>                                           
                                            </li>
                                            <li><a href="#">業務部</a></li>
                                            <li><a href="#">技術部</a></li>
                                            <li><a href="#">生產部</a>
                                                <ul>
                                                    <li><a href="#">製造課</a></li>
                                                    <li><a href="#">生管課</a></li>
                                                </ul>                                           
                                            </li>
                                            <li><a href="#">工程部</a></li>
                                        </ul>
                                    
                                    </li>
                                    <li>
                                        <a href="#">稽核組長</a>
                                        <ul>
                                            <li><a href="#">內稽小組</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">品管小組</a>
                                       
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
              </div>
                
            </div>
        </div>
      </div>
<?php get_footer(); ?>

