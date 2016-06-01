<?php

// Bootstrap pagination function by AMIT SONKHIYA
function wp_bs_pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2) + 1;  
 
     global $paged;
     
     if(empty($paged)) $paged = 1;
     
     if($pages == '')
     {
         global $wp_query; 
		 $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
        echo '<nav><ul class="pagination">'
        //.'<li class="disabled hidden-xs"><span><span aria-hidden="true">Page '.$paged.' of '.$pages.'</span></span></li>'
        ;

         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."' aria-label='First'>&laquo;<span class='hidden-xs'> First</span></a></li>";

         if($paged > 1 && $showitems < $pages) echo "<li>" . previous_posts_link( '&laquo;' ) ."</li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li class=\"active\"><span>".$i." <span class=\"sr-only\">(current)</span></span>
    </li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li>" . next_posts_link( '&raquo;' ) . "</li>";  

         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."' aria-label='Last'><span class='hidden-xs'>Last </span>&raquo;</a></li>";

         echo "</ul></nav>";
     }
    
     
}

next_posts_link( '' , 0 ); 
previous_posts_link( '' , 0 ); ?>