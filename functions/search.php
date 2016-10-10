<?php

function bst_search_form( $form ) {
    $form = '<form class="form-inline search-form" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
	<div class="input-group"><input class="form-control" type="text" value="' . get_search_query() . '" placeholder="Search..." name="s" id="s" />
	<span class="input-group-btn"><button type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'bstv2') .'" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button></span></div> 
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'bst_search_form' );