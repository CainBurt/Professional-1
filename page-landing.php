<?php
/**
 * Template Name: Landing Page
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
inline_style(get_template_directory_uri(  ) . '/dist/styles/landing-page.css');
Timber::render( array( 'page-landing.twig', 'page.twig' ), $context );