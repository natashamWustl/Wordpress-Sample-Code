<?php 
// Start the Loop.
while ( have_posts() ) :
    the_post();
 ?>   
    <div>
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
    </div>
    <div>
        <h2><?php the_title(); ?></h2>
            <p><?php the_field('endowed_position'); ?></p>
            <p><?php the_field('brown_current_role'); ?></p>
            <p><i><?php the_field('degree');  ?>, <?php the_field('institution');  ?></i></p>
            <p>Office Phone: <?php the_field('office_phone');  ?></p>
            <p>Email: <a href="mailto:<?php the_field('email_address');  ?>"><?php the_field('email_address');  ?></a></p>
            <?php
            $cv_file = get_field('cv_upload');
            if( $cv_file ): ?>
                <p><a href="<?php echo $cv_file['url']; ?>">Download CV</a></p>
            <?php endif; ?>
            <p><a href="<?php get_field('personal_website'); ?>"> <?php get_field('personal_website'); ?> Website</a></p>
        <h3>Areas of Focus:</h3>
            <p><?php the_field('research_interests_1'); ?></p>
            <p><?php the_field('research_interests_2'); ?></p>
            <p><?php the_field('research_interests_3'); ?></p>
            <p><?php the_field('research_interests_4'); ?></p>
            <p><?php the_field('research_interests_5'); ?></p>
    </div>
    <div>
        <h2>Featured Publications</h2>
        <?php
        $brown_publication_1 = get_field('brown_publication_1');
        if( $brown_publication_1 ): ?>
            <p><a href="<?php echo esc_url( $brown_publication_1['link'] ); ?>"><?php echo esc_html( $brown_publication_1['publication_title'] ); ?></a></p>
            <p><?php echo esc_attr( $brown_publication_1['journal'] ); ?></p>
            <p><?php echo esc_attr( $brown_publication_1['publication_date'] ); ?></p>
        <?php endif; ?>
        <?php

        $brown_publication_2 = get_field('brown_publication_2');
        if( $brown_publication_2 ): ?>
            <p><a href="<?php echo esc_url( $brown_publication_2['link'] ); ?>"><?php echo esc_html( $brown_publication_2['publication_title'] ); ?></a></p>
            <p><?php echo esc_attr( $brown_publication_2['journal'] ); ?></p>
            <p><?php echo esc_attr( $brown_publication_2['publication_date'] ); ?></p>
        <?php endif; ?>
    </div>


<?php
endwhile; // End the loop.
?>