<?php get_header(); 
    
?>


    <div class="page-header">
        <div>
          <h2>保育方針</h2>
        </div>
    </div>

    
    <section id="blog">
      <div class="container">
        <header class="section-header">
          <h2>お知らせ<span class="text-color-4">・ニューズ</span></h2>
          <hr class="heading-hr text-color-4" />
        </header>
        <?php while(have_posts()){
        the_post();    
        $blocks = parse_blocks(get_the_content()); // This will parse the post content into blocks
        foreach($blocks as $block) {
          if($block['blockName'] == 'core/image') { // This will check if the block is an image block
            $image_html = render_block($block); // This will render the image block into HTML
            break; // This will stop the loop after finding the first image block
          }
        }
        ?>
        <div class="blogs section-margin">
          <div>
            <h2 class="blog-title">
              <span class="text-color-4"><?php the_title() ?></span>
            </h2>
            <ul>
              <li>
                <span class="text-color-4"><i class="fas fa-user"></i></span>
                <?php the_author_posts_link(); ?>
              </li>
              <li>
                <span class="text-color-4"
                  ><i class="far fa-calendar-alt"></i
                ></span>
                <?php the_time('Y') ?>年 <?php the_time('m') ?>月 <?php the_time('d') ?>日
              </li>
            </ul>
            <p>
              <?php the_excerpt(); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn">続きを読む</a>
          </div>
          <div>
            <?php echo $image_html; // This will display the image from the image block ?>
          </div>
        </div>
        <?php } ?>
        
      </div>
    </section>
      
      




<?php get_footer();

?>