<?php
function morse_wp_plugin_add_styles(){ ?>
<style>
    .morse-bg-primary{
        background-color: <?php echo get_theme_mod("morse-wp-color-primary")?>;
        color: #fff;
    }

    .morse-color-primary{
        color: <?php echo get_theme_mod("morse-wp-color-primary")?>;
    }

    .morse-bg-primary a{
        color: #fff;
    }
    
    .morse-bg-accent{
        background-color: <?php echo get_theme_mod("morse-wp-color-secondary")?>;
    }


    .morse-color-accent{
        color: <?php echo get_theme_mod("morse-wp-color-secondary")?>;
    }

    a{
        color: <?php echo get_theme_mod("morse-wp-color-link", "blue")?>;
    }

    .morse-font-body{
        font-family: <?php echo get_theme_mod("morse-wp-font-body", "Georgia"); ?>
    }

    .morse-font-heading{
        font-family: <?php echo get_theme_mod("morse-wp-font-heading", "Georgia"); ?>
    }

    .morse-font-accent{
        font-family: <?php echo get_theme_mod("morse-wp-font-accent", "sans-serif"); ?>
    }

    .morse-none{
        display: none;
    }
</style>
<?php
}
add_action("wp_head","morse_wp_plugin_add_styles");