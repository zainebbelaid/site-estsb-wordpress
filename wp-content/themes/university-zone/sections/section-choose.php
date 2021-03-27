<?php
/**
 * 
 * Why Choose Us Section
*/ 
          
$section_title = get_theme_mod( 'education_zone_choose_section_title' );
$post_one      = get_theme_mod( 'education_zone_why_choose_post_one' );
$post_two      = get_theme_mod( 'education_zone_why_choose_post_two' );
$post_three    = get_theme_mod( 'education_zone_why_choose_post_three' );
$post_four     = get_theme_mod( 'education_zone_why_choose_post_four' );

$choose_posts = array( $post_one, $post_two, $post_three, $post_four );
$choose_posts = array_diff( array_unique( $choose_posts ), array('') );

$args = array(
            'post__in'   => $choose_posts,
            'orderby'   => 'post__in'
        );
        
$qry = new WP_Query( $args );
?>

<div class="container">
    <?php education_zone_get_section_header( $section_title );

    if( $choose_posts && $qry->have_posts() ){ ?>
        <div class="row">
        <?php  
        while( $qry->have_posts() ){ 
            $qry->the_post(); ?>
            <div class="col">
                <div class="holder">
                    <div class="img-holder">
                        <?php 
                            if( has_post_thumbnail() ){
                                the_post_thumbnail(); 
                            } 
                        ?>
                    </div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                    <a class="btn-readmore" href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Learn More', 'university-zone' ); ?></a>
                </div>
            </div>
            <?php 
        }
        wp_reset_postdata(); 
        ?>
        </div>
        <?php 
    } 
    ?>
</div>
