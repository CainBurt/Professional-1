<?php
/**
 * Template Name: Spreadconnect Page
 */

 $context = Timber::get_context();
 $post = new TimberPost();
 $context['post'] = $post;
 inline_style(get_template_directory_uri(  ) . '/dist/styles/landing-page.css');
 inline_style(get_template_directory_uri(  ) . '/dist/styles/spreadconnect-page.css');
 Timber::render( array( 'page-spreadconnect.twig', 'page.twig' ), $context );