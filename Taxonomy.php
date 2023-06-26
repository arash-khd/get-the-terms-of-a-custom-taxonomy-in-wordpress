<?php

$terms = get_terms("category", array('orderby' => 'count', 'order' => 'DESC','hide_empty'=>0 , 'number'=> 10));

foreach($terms As $term) {?>

    <li><a href="<?php echo get_term_link( $term->slug, $term->taxonomy ); ?>"><?php echo $term->name; ?><span><?php echo $term->count; ?></span></a></li>
  
 
<?php }   ?>
