<?php get_header(); ?>
    <section id="content">
        <div class="container">
            <section class="">
                <h1><?php the_title();?></h1>
                <?php if(have_posts()):while(have_posts()):the_post();?>
                <?php the_content(); ?>
                <?php endwhile;  else:?>
                <?php endif;?>
                <?php wp_reset_query(); ?>            
            </section>
        </div>
    </section>  
<?php get_footer(); ?>