<?php

$context = Timber::context();

$context['block'] = $block;

$context['fields'] = get_fields();

$context['is_preview'] = $is_preview;

inline_style(get_stylesheet_directory_uri(  ) . '/includes/blocks/color-stack/colors.css');

Timber::render( './color-stack.twig', $context );