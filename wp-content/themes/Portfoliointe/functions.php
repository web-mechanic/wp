<?php 

add_action( 'widgets_init', 'portfolio_sidebars' );
add_action('after_setup_theme', 'portfolio_setup');
add_action('init','create_post_type');
add_filter('excerpt_length', 'new_excerpt_length');
add_filter('the_excerpt', 'excerpt_read_more_link');
remove_filter('the_content','wpautop');
remove_filter('the_excerpt','wpautop');
add_action('init', 'build_taxonomies');


/*config du menu*/


function my_wp_nav_menu_args( $args = '' )
{
    $args['container'] = false;
    return $args;
} // function

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

/*fin de la config*/

if(!function_exists(portfolio_sidebars)){
    function portfolio_sidebars(){
        register_sidebar( array(
		'id' => 'primary',
                'name' => __( 'Primary' ),
		'description' => __( 'Une description de la sidebar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
                'id' => 'secondary',
		'name' => __( 'Secondary' ),
		'description' => __( 'A short description of the sidebar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    }

}

if(!function_exists(portfolio_setup)){
    function portfolio_setup(){
        add_theme_support('post-thumbnails');
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'taille-perso', 300, 300, false);
     add_image_size( 'blogimg', 574, 313, true);
     add_image_size( 'slider', 939, 299, true);
    
     // on vérifie que la fonction existe, puis on crée la nouvelle taille d'image. Le dernier paramètre à true indique qu'il faut rogner l'image pour qu'elle s'adapte aux dimensions
}

add_filter('image_size_names_choose', 'my_image_sizes'); // le filtre qui permet d'ajouter la nouvelle taille au gestionnaire de médias
function my_image_sizes($sizes) {
        $addsizes = array(
                "taille-perso"=>__("taille-perso"),
                "featured" => __( "Featured"),
                "blogimg" => __("Blogimg"),
                "slider" => __("Slider") // on indique ici le nom de la nouvelle image (défini dans add_image_size), et le texte qui doit apparaître pour la sélection
                );
        $newsizes = array_merge($sizes, $addsizes);
        return $newsizes;
}




        register_nav_menu('header-menu',__('Header Menu','titi'));
    }
    
}
if(!function_exists(new_excerpt_length)){
function new_excerpt_length($length) {
global $post;
return 100;
}

}





if(!function_exists('create_post_type')){
    function create_post_type(){
        register_post_type('works',
                array(
                    'labels' => array(
                        'name' => __('works'),
                        
                        ),
                    'supports' => array('title','editor','thumbnail','post-formats','excerpt'),
                    'public' => true, 
                    'has_archive' => true,

                    )
                );
        register_post_type('cv',
                array(
                    'labels' => array(
                        'name' => __('curiculum'),
                        'singular_name' => __('cv')
                        ),
                    'supports' => array('title','editor','thumbnail','post-formats'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );
         register_post_type('contact',
                array(
                    'labels' => array(
                        'name' => __('contact'),
                        'singular_name' => __('me contacter')
                        ),
                    'supports' => array('title','editor','thumbnail','post-formats'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );
          register_post_type('accroche',
                array(
                    'labels' => array(
                        'name' => __('accroche'),                        
                        ),
                    'supports' => array('editor'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );

                    register_post_type('slider',
                array(
                    'labels' => array(
                        'name' => __('slider'),                        
                        ),
                    'supports' => array('title','editor','thumbnail','excerpt'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );

                    register_post_type('blogart',
                array(
                    'labels' => array(
                        'name' => __('blog'),                        
                        ),
                    'supports' => array('title','editor','thumbnail','excerpt','comments'),
                    'public' => true, 
                    'has_archive' => true
                    )
                );

                    register_post_type('sfeed',
                    array(
                    'labels' => array(
                    'name' => __('Logo'),

                    ),
                    'supports' => array('title','editor','thumbnail','post-formats','custom-fields'),
                    'public' => true, 
                    'has_archive' => true
                    )
                    ); 
        }
}

   function excerpt_read_more_link($output) {
 global $post;
 return $output . '<div class="moresec"> <a class=readMore href="'. get_permalink($post->ID) . '">Read more</a> </div>';
}
if(! function_exists('build_taxonomies')){
function build_taxonomies(){
register_taxonomy('techniques', 'works', array
    ('label' => 'Techniques utilisées',
     'hierarchical' => true,
      'query_var' => true, 
      'rewrite' => array('slug'=>'techniques'),

      ));

register_taxonomy('tags', 'blogart', array
    ('label' => 'tag',
     'hierarchical' => true,
      'query_var' => true, 
      'rewrite' => array('slug'=>'tags'),
      ));
}
}

//***Fil d'arianne
//Récupérer les catégories parentes
function myget_category_parents($id, $link = false,$separator = '/',$nicename = false,$visited = array()) {
  $chain = '';$parent = &get_category($id);
    if (is_wp_error($parent))return $parent;
    if ($nicename)$name = $parent->name;
    else $name = $parent->cat_name;
    if ($parent->parent && ($parent->parent != $parent->term_id ) && !in_array($parent->parent, $visited)) {
        $visited[] = $parent->parent;$chain .= myget_category_parents( $parent->parent, $link, $separator, $nicename, $visited );}
    if ($link) $chain .= '<span typeof="v:Breadcrumb"><a href="' . get_category_link( $parent->term_id ) . '" title="Voir tous les articles de '.$parent->cat_name.'" rel="v:url" property="v:title">'.$name.'</a></span>' . $separator;
    else $chain .= $name.$separator;
    return $chain;}

//Le rendu
function mybread() {
  // variables gloables
  global $wp_query;$ped=get_query_var('paged');$rendu = '<div xmlns:v="http://rdf.data-vocabulary.org/#">';  
  $debutlien = ' <span typeof="v:Breadcrumb"><a title="'. get_bloginfo('name') .'" id="breadh" href="'.home_url().'" rel="v:url" property="v:title">'. get_bloginfo('name') .'</a></span>';
  $debut = '<span id="breadex">Vous &ecirc;tes ici :</span> <span typeof="v:Breadcrumb">Accueil de '. get_bloginfo('name') .'</span>';

  // si l'utilisateur a défini une page comme page d'accueil
  if ( is_front_page() ) {$rendu .= $debut;}

  // dans le cas contraire
  else {

    // on teste si une page a été définie comme devant afficher une liste d'article 
    if( get_option('show_on_front') == 'page') {
      $url = urldecode(substr($_SERVER['REQUEST_URI'], 1));
      $uri = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
      $posts_page_id = get_option( 'page_for_posts');
      $posts_page_url = get_page_uri($posts_page_id);  
      $pos = strpos($uri,$posts_page_url);
      if($pos !== false) {
        $rendu .= $debutlien.' &raquo; <span typeof="v:Breadcrumb">Les articles</span>';
      }
      else {$rendu .= $debutlien;} 
    }

    //Si c'est l'accueil
    elseif ( is_home()) {$rendu .= $debut;}

    //pour tout le reste
    else {$rendu .= $debutlien;}

    // les catégories
    if ( is_category() ) {
      $cat_obj = $wp_query->get_queried_object();$thisCat = $cat_obj->term_id;$thisCat = get_category($thisCat);$parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) $rendu .= " &raquo; ".myget_category_parents($parentCat, true, " &raquo; ", true);
      if ($thisCat->parent == 0) {$rendu .= " &raquo; ";}
      if ( $ped <= 1 ) {$rendu .= single_cat_title("", false);}
      elseif ( $ped > 1 ) {
        $rendu .= '<span typeof="v:Breadcrumb"><a href="' . get_category_link( $thisCat ) . '" title="Voir tous les articles de '.single_cat_title("", false).'" rel="v:url" property="v:title">'.single_cat_title("", false).'</a></span>';}}

    // les auteurs
    elseif ( is_author()){
      global $author;$user_info = get_userdata($author);$rendu .= " &raquo; Articles de l'auteur ".$user_info->display_name."</span>";}  

    // les mots clés
    elseif ( is_tag()){
      $tag=single_tag_title("",FALSE);$rendu .= " &raquo; Articles sur le th&egrave;me <span>".$tag."</span>";}
      elseif ( is_date() ) {
          if ( is_day() ) {
              global $wp_locale;
              $rendu .= '<span typeof="v:Breadcrumb"><a href="'.get_month_link( get_query_var('year'), get_query_var('monthnum') ).'" rel="v:url" property="v:title">'.$wp_locale->get_month( get_query_var('monthnum') ).' '.get_query_var('year').'</a></span> ';
              $rendu .= " &raquo; Archives pour ".get_the_date();}
      else if ( is_month() ) {
              $rendu .= " &raquo; Archives pour ".single_month_title(' ',false);}
      else if ( is_year() ) {
              $rendu .= " &raquo; Archives pour ".get_query_var('year');}}

    //les archives hors catégories
    elseif ( is_archive() && !is_category()){
          $posttype = get_post_type();
      $tata = get_post_type_object( $posttype );
      $var = '';
      $the_tax = get_taxonomy( get_query_var( 'taxonomy' ) );
      $titrearchive = $tata->labels->menu_name;
      if (!empty($the_tax)){$var = $the_tax->labels->name.' ';}
          if (empty($the_tax)){$var = $titrearchive;}
      $rendu .= ' &raquo; Archives sur "'.$var.'"';}

    // La recherche
    elseif ( is_search()) {
      $rendu .= " &raquo; R&eacute;sultats de votre recherche <span>&raquo; ".get_search_query()."</span>";}

    // la page 404
    elseif ( is_404()){
      $rendu .= " &raquo; 404 Page non trouv&eacute;e";}

    //Un article
    elseif ( is_single()){
      $category = get_the_category();
      $category_id = get_cat_ID( $category[0]->cat_name );
      if ($category_id != 0) {
        $rendu .= " &raquo; ".myget_category_parents($category_id,TRUE,' &raquo; ')."<span>".the_title('','',FALSE)."</span>";}
      elseif ($category_id == 0) {
        $post_type = get_post_type();
        $tata = get_post_type_object( $post_type );
        $titrearchive = $tata->labels->menu_name;
        $urlarchive = get_post_type_archive_link( $post_type );
        $rendu .= ' &raquo; <span typeof="v:Breadcrumb"><a class="breadl" href="'.$urlarchive.'" title="'.$titrearchive.'" rel="v:url" property="v:title">'.$titrearchive.'</a></span> &raquo; <span>'.the_title('','',FALSE).'</span>';}}

    //Une page
    elseif ( is_page()) {
      $post = $wp_query->get_queried_object();
      if ( $post->post_parent == 0 ){$rendu .= " &raquo; ".the_title('','',FALSE)."";}
      elseif ( $post->post_parent != 0 ) {
        $title = the_title('','',FALSE);$ancestors = array_reverse(get_post_ancestors($post->ID));array_push($ancestors, $post->ID);
        foreach ( $ancestors as $ancestor ){
          if( $ancestor != end($ancestors) ){$rendu .= '&raquo; <span typeof="v:Breadcrumb"><a href="'. get_permalink($ancestor) .'" rel="v:url" property="v:title">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></span>';}
          else {$rendu .= ' &raquo; '.strip_tags(apply_filters('single_post_title',get_the_title($ancestor))).'';}}}}
    if ( $ped >= 1 ) {$rendu .= ' (Page '.$ped.')';}
  }
  $rendu .= '</div>';
  echo $rendu;}

/*disqus comments*/

function default_comments_on( $data ) {
    if( $data['post_type'] == 'blog' ) {
        $data['comment_status'] = 1;
    }

    return $data;
}
add_filter( 'wp_insert_post_data', 'default_comments_on' );
