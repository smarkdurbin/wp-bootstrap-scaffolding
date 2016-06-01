<?php
    if ( has_post_thumbnail() ) {
        
    $image_type = '';
    
    $image_full =   wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_type .'full')[0];
    $image_xl   =   wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_type .'xl')[0];
    $image_lg   =   wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_type .'lg')[0];
    $image_md   =   wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_type .'md')[0];
    $image_sm   =   wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_type .'sm')[0];
    $image_xs   =   wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_type .'xs')[0];
        
?>
    <!--Post Thumbnail-->
    <img src="<?php echo $image_md ?>" sizes="contain 100vh 100vw"  srcset=" <?php echo $image_xs; ?> 750w, <?php echo $image_sm; ?> 960w, <?php echo $image_md; ?> 1200w, <?php echo $image_lg; ?> 1500w, <?php echo $image_xl; ?> 2000w" class="img-responsive h-center ">
<?php
    }
?>