<?php
function convertToWebpSrc($src){
  $src_webp = $src . '.webp';
  return str_replace('uploads', 'uploads-webpc/uploads', $src_webp);
}



//Use
  $about_img_id = carbon_get_post_meta( $page_id, 'about_img');
  $about_img_src = wp_get_attachment_image_url( $about_img_id, 'product' ); 
  $about_img_src_webp = convertToWebpSrc($about_img_src); 
?>

<picture>
  <source type="image/webp" srcset="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-srcset="<?php echo $about_img_src_webp ?>">
  <img class="section-about__img lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="<?php echo $top_img_src ?>" alt="">
</picture>
