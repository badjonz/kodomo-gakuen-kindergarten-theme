<?php get_header();

while(have_posts()){
    the_post();?>

    <div class="page-header">
        <div>
          <h2><?php the_title(); ?></h2>
        </div>
    </div>

    <section id="single-post">
      <div class="container single-content">
        <article>
          <!-- <img src="./images/birthday party.jpg" alt="" /> -->
          <header class="section-header">
          <h2><span class="text-color-1"><?php the_title(); ?></span></h2>
          <hr class="heading-hr text-color-1" />
        </header>

          <p>
            <?php the_content(); ?>
          </p>

          <!-- <h2>Heading 2</h2> -->
          <!-- <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore
            atque adipisci voluptates cupiditate repudiandae officiis, explicabo
            culpa cum est, officia libero, beatae sapiente. Id aspernatur
            corporis, similique sunt explicabo blanditiis!
          </p>

          <h3>Heading 3</h3>

          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam
            aperiam totam iusto! Facere ullam cupiditate fugit commodi, eius
            aperiam eveniet!
          </p>

          <img src="./images/birthday party.jpg" alt="" /> -->
        </article>

        <!-- <aside>
          <div class="aside-content">
            <h3>Latest Posts</h3>
            <ul>
              <li><a href="#">Christmas Party 2019</a></li>
              <li><a href="#">Christmas Party 2019</a></li>
              <li><a href="#">Christmas Party 2019</a></li>
              <li><a href="#">Christmas Party 2019</a></li>
              <li><a href="#">Christmas Party 2019</a></li>
            </ul>
          </div>
        </aside> -->

        <aside>
  <div class="aside-content">
    <h3>Latest Posts</h3>
    <ul>
      <?php
      // Get the current post ID
      $current_post_id = get_the_ID();

      // Create a new query object with some parameters
      $the_query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 5, // Change this to the number of posts you want to display
        'post__not_in' => array( $current_post_id ) // Exclude the current post ID
      ) );

      // Check if the query has any posts
      if ( $the_query->have_posts() ) {

        // Start the loop
        while ( $the_query->have_posts() ) {
          $the_query->the_post();

          // Display the post title and link
          ?>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php
        }

        // Restore the original post data
        wp_reset_postdata();
      }
      ?>
    </ul>
  </div>
</aside>


        <div class="back-to-blog--phone">
          <a href="<?php echo site_url('/blog') ?>">Back to blog</a>
        </div>
      </div>
    </section>

<?php }


 get_footer();

?>