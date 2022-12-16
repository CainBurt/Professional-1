<?php

$context = Timber::context();

$context['block'] = $block;

$context['fields'] = get_fields();

$context['is_preview'] = $is_preview;

inline_style(get_stylesheet_directory_uri(  ) . '/includes/blocks/color-grid/colors.css');

Timber::render( './color-grid.twig', $context );