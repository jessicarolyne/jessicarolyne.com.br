<?php
wp_enqueue_script('jquery');

function addStyleBootstrap(){
?>
    <link href="<?php bloginfo('template_url'); ?>/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
<?php
}
add_action('wp_head','addStyleBootstrap');

function addStyle(){
?>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>?ver=0.0.1" />
<?php
}
add_action('wp_head', 'addStyle');

function addScriptBootstrap(){
?>
    <script src="<?php bloginfo('template_url'); ?>/assets/bootstrap/bootstrap.min.js"></script>
<?php
}
add_action('wp-footer','addScriptBootstrap');