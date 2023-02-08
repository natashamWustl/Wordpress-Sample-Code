<?php 
// Start the Loop.
while ( have_posts() ) :
    the_post();
 ?>   
    <div>
        <?php the_post_thumbnail('large'); ?>
        <?php the_content(); ?>
    </div>
    <div>
        <h2><?php the_title(); ?></h2>
            <p><?php get_field('endowed_position') ? the_field('endowed_position') : the_field('brown_current_role') ?></p>
            <?php if(get_field('brown_custom_title')): ?>
                <p><?php the_field('brown_custom_title');  ?></p>
            <?php endif; ?>

            <?php if(get_field('degree') || get_field('institution')): ?>
                <p><i><?php the_field('degree');  ?>, <?php the_field('institution');  ?></i></p>
            <?php endif; ?>
            
            <p>Office Phone: <?php get_field('office_phone') ? the_field('office_phone') : '--' ?></p>
            <p>Email: <a href="mailto:<?php the_field('email_address');  ?>"><?php the_field('email_address');  ?></a></p>
            
            <?php
            $cv_file = get_field('cv_upload');
            if( $cv_file ): ?>
                <p><a href="<?php echo esc_url($cv_file['url']); ?>">Download CV</a></p>
            <?php endif; ?>

            <?php if(get_field('personal_website')): ?>
                <p><a href="<?php echo esc_url(get_field('personal_website')); ?>"> Website</a></p>
            <?php endif; ?>
            
        <h3>Areas of Focus:</h3>
        <?php 
        $interestArray = array(get_field('research_interests_1'), get_field('research_interests_2'), get_field('research_interests_3'), get_field('research_interests_4'), get_field('research_interests_5'));
        foreach ($interestArray as $interest) { ?>
            <p><?php echo esc_attr( $interest ); ?></p>
        <?php } ?>
    </div>
    <div>
        <h2>Featured Publications</h2>
        <?php 
        $publicationsArray = array(get_field('brown_publication_1'), get_field('brown_publication_2'), get_field('brown_publication_3'));
        foreach ($publicationsArray as $publication) { ?>
            <?php if($publication['link'])  { ?>
                <p><a href="<?php echo esc_url( $publication['link'] ); ?>"><?php echo esc_html( $publication['publication_title'] ); ?></a><br/>
            <?php } else { ?>
                <p><?php echo esc_html( $publication['publication_title'] ); ?><br/>
            <?php } ?>
            <?php echo esc_attr( $publication['journal'] ); ?><br/>
            <?php echo esc_attr( $publication['publication_date'] ); ?></p>
        <?php } ?>
    </div>

    


<?php
endwhile; // End the loop.
?>