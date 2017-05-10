<?php
/**
 * Partial: partials/partial-head
 *
 * @author    Stephen Scaff
 * @package   jumpoff/partials/partial-head
 * @version   1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
<!DOCTYPE html>
<html lang="en">

<!--
                Hey Code Peeker....
                            _                            
                         .-" `.                          
                         ;:":  ""--..                    
                .-+. ,gpd$L\:._      ""-._               
               /  //;$SS$$$$SS$$t--.      "-._           
             .'  `.//SS$P^"""TS$$S. "-.       "-,        
           .'    _ "-S^"      TS$$Sb   "-.       `.      
         .'    .':S$Y      _.. SS$$Sb-'   "-.      ;     
       .'    .'  SS$;,=-.  ._.`:S$$SS;       j     ;     
     .'    .'   :SS$$.-'        SS$$SS\     /     /      
   .'     /     SS$$S;    -     SS$$SS ;   /     /       
 .'      /   ._dSS$$SS   .--.  :SS$$$S\;  /     /        
/       /     :SS$$SS$b. `--'  $$SS$$S ) /     /         
\      :      ;SS$$SS$$SS.___.'$$SS$$Sb /     /          
 \      "-.   SS$$SS$$$SS      $$SS$$SS';    /           
  `.       "-dSS$$SS$$SS:;     :$$SSSP      /            
    `.              "^S^':     '^TSS'      /             
      "-.      `.     ::-.   _ .-"\\      /              
         "-.  -._\    ;;           \\  : :               
            "-.   \  ::             \\ ; ;               
               $.  `.;;       ,      \\;:                
              dS$\  / '-._    :  _.-"" \;                
           `-:S$^$t'      ""--:""       ;                
              TP :$$ ;        ::        :                
                d$S$_:        ;-\       ;                
               :$SS$; `.____.'   `.___.j                 
               $$SS$$                  ;                 
              / T$S$$;  ;      ;    ; :                  
             :   `TS$$  :      :    : ;                  
                   `T$         :     :                   
                     ;         ;     ;                   
                    /                ;                   
                  .'                 :                   
                 /      :           ;:                   
                /       ;     c     ::                   
               :`.      ;           : ;                  
               ;  "-.   :           ; :                  
              :_     "-.            .' ;                 
              ; "-.     ""--..__..-"   :                 
             :     `.                _.-;                
             ;       `.           .-"   ;                
             ;         `.       .'      ;                
             ;           \     /        :                
             ;            \   /         :                
             ;             \_/          :                
             ;             ::           :                
             ;             :;           ;                
             :             :;           ;                
              ;            ;;          :                 
              |            ;;          |                 
              :           : ;          ;                 
               ;          : ;         :                  
               :          ; :         |                  
                ;         ; :         ;                  
                :         ; :        :                   
                 ;        ; :        |                   
                 :        ; :        ;                   
                  ;       : :       :                    
                  : ;   : :  ;  ;   |                    
                   ;:   ; ;  :  :   :                    
                   : \    ;   \      "-.                 
                   :      ;    \        \                
                   ;      :     \      .d$b              
                  db.___.d$b     \__.g$$$$$b             
                  $$$$$$$$$$     :$$$$$$$$$$b            
                  $$$$$$$$$$      T$$$$$$$$$$;           
                  :$$$$$$$$$       T$$$$$$$$$$           
                   $$$$$$$$$        `T$$$$$$$$b          
                   $$$$$$$$;          T$$$$$$$$;         
                   :$$$$$$$            T$$$$$$$$         
                   :$$$$$$$             T$$$$$$$;        
                    $$$$$$$              T$$$$$$$        
                    $$$$$$$               T$$$$$$;       
                    $$$$$$$                T$$$$$$       
                    :$$$$$;                 T$$$$$b      
                    :$$$$$;                  T$$$S$b.    
                    :$$$$S;                   SSS$$$$bp. 
                    :$$$$S;                   :S$$$$$S$$;
                    $S$$SS;                    S$$$$$$SP 
                   :$SSSSS;                    :$$$$$$S  
                   $$$$$$$;                     $$$$$$$  
                   $$$$$$$$                     :$$SS$$  
                   $$$$$$$$                      SSS$$$  
                   $$$$$$$$                      :$$$$;  
                   :$$$$SS;                       `^^'   
                    TSSSSP                               
                     `^^'

Site built by @StephenScaff for his homie Chuan

-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->

<?php
// Meta/OG variables
$meta_title = get_post_meta( get_the_ID(), 'seo_title', true ) ? get_post_meta( get_the_ID(), 'seo_title', true ) : wp_title('|', false, 'right') . get_bloginfo('name');
$meta_author = "Chaun Osburn";
$meta_site_name = get_bloginfo('name') .' - '. get_bloginfo('description');
$meta_description = get_post_meta( get_the_ID(), 'seo_description', true ) ? get_post_meta( get_the_ID(), 'seo_description', true ) : "Chaun Osburn is a designer. He makes things. Sometimes for the web. Sometimes not.";

?>

<!-- Title and Meta-->
<title><?php echo $meta_title ?></title>
<meta name="author" content="<?php echo $meta_author ?>">
<meta name="description" content="<?php echo $meta_description ?>">

<!-- Facebook Open Graph Meta-->
<meta property="og:title" content="<?php echo $meta_title ?>">
<meta property="og:url" content="<?php echo the_permalink() ?>">
<meta property="og:site_name" content="<?php echo $meta_site_name ?>">
<meta property="og:description" content="<?php echo $meta_description ?>">
<meta property="og:image" content="<?php jumpoff_img(); ?>/favs/screen.jpg">
<!-- Twitter Meta -->
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="<?php wp_title('|', true, 'right'); bloginfo('name'); ?>"/>
<meta name="twitter:url" content="<?php echo the_permalink() ?>">
<meta name="twitter:site" content="@zooind"/>
<meta name="twitter:creator" content="https://twitter.com/zooind">
<meta name="twitter:domain" content="http://madebychaun.com"/>
<meta name="twitter:image" content="<?php jumpoff_img(); ?>/favs/screen.jpg" />

<!-- Mobile -->
<meta name="viewport" content="width=device-width, initial-scale = 1, maximum-scale=1" />       

<!-- Favs -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php jumpoff_img(); ?>/favs/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php jumpoff_img(); ?>/favs/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php jumpoff_img(); ?>/favs/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php jumpoff_img(); ?>/favs/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php jumpoff_img(); ?>/favs/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php jumpoff_img(); ?>/favs/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php jumpoff_img(); ?>/favs/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php jumpoff_img(); ?>/favs/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php jumpoff_img(); ?>/favs/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php jumpoff_img(); ?>/favs/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php jumpoff_img(); ?>/favs/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php jumpoff_img(); ?>/favs/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php jumpoff_img(); ?>/favs/favicon-16x16.png">

<!-- Feed -->  
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-56068275-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script
<!-- CSS & Js -->
<?php wp_head(); ?>

</head>







