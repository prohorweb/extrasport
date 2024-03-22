<?php 

    function custom_pagination( \WP_Query $wp_query = null, $echo = true, $params = [] ) {
    if ( null === $wp_query ) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
        $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/
    $total_pages = $wp_query->max_num_pages;
    $pages = paginate_links( array_merge( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'       => '?paged=%#%',
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'total'        => $total_pages,
            'type'         => 'array',
            'show_all'     => false,
            'end_size'     => 3,
            'mid_size'     => 1,
            'prev_next'    => false,
            'add_args'     => $add_args,
            'add_fragment' => ''
        ], $params )
    );

    if ( is_array( $pages ) ) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        //Disable Previous button if the current page is the first one
   

        $pagination = '<ul class="pagination justify-content-center">';
        foreach ( $pages as $page ) {
            $pagination .= '<li class="page-item" > ' . str_replace('page-numbers', 'page-link ' . (strpos($page, 'current') !== false ? 'is-current' : '') . '"', $page) . '</li>';
        }

        $pagination .= '</ul>';

        if ( $echo ) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); 