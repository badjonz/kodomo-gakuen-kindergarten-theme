<?php get_header(); ?>
<div class="page-header">
        <div>
          <h2>給食</h2>
        </div>
    </div>

    <main>
      <section id="lunch-menu" class="lunch-menu">
        <div class="container">
          <header class="section-header">
            <h2>給<span class="text-color-4">食</span></h2>
            <hr class="heading-hr text-color-4" />
          </header>

          <img
            src="<?php echo get_theme_file_uri('./images/lunch-menu.jpg')?>"
            alt="lunch-menu"
            class="lunch-menu__img"
          />
        </div>
      </section>
    </main>

    <?php get_footer();

?>