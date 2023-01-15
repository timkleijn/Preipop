<?php

function preipop_theme_support()
{
	add_theme_support("title-tag");
}

add_action("after_setup_theme", "preipop_theme_support");

function preipop_register_styles()
{
	wp_enqueue_style("preipop-style", get_template_directory_uri() . "/style.css", "0.1", "all");
}

add_action("wp_enqueue_scripts", "preipop_register_styles");
