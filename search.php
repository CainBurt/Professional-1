<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$templates = array( 'search.twig', 'archive.twig', 'index.twig' );
$context = Timber::get_context();

$context['title'] = 'Search results for '. get_search_query();
$context['query'] = get_search_query();
$context['posts'] = Timber::get_posts();
$menu = new TimberMenu('menu');
inline_style(get_template_directory_uri(  ) . '/dist/styles/search-page.css');
$context['post'] = new Timber\Post($menu->get_field('search_page'));

Timber::render( $templates, $context );
