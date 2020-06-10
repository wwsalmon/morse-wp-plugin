<?php
function morse_wp_plugin_add_styles(){ ?>
<style>
    .morse-bg-primary{
        background-color: <?php echo get_theme_mod("morse-wp-color-primary")?>;
    }

    .morse-color-primary{
        color: <?php echo get_theme_mod("morse-wp-color-primary")?>;
    }
    
    .morse-bg-secondary{
        background-color: <?php echo get_theme_mod("morse-wp-color-secondary")?>;
    }

    .morse-color-secondary{
        color: <?php echo get_theme_mod("morse-wp-color-secondary")?>;
    }

    a{
        color: <?php echo get_theme_mod("morse-wp-color-link", "blue")?>;
    }
</style>
<?php
}
add_action("wp_head","morse_wp_plugin_add_styles");