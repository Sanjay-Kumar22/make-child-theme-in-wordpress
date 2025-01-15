Steps to Create a Child Theme for Astra in WordPress
step 1 : Create a New Folder for Your Child Theme

        Navigate to the wp-content/themes/ directory of your WordPress installation.
        Create a new folder for your child theme. For example, if your parent theme is Astra, you could name your child theme folder astra-child.
step 2 : - Create a style.css File

        Inside your child theme folder (astra-child), create a file named style.css.
        Add the following header information to the style.css file:
        css
        Copy code
        /*
        Theme Name:   Astra Child
        Theme URI:    https://example.com/astra-child
        Description:  A child theme for the Astra theme
        Author:       Your Name
        Author URI:   https://example.com
        Template:     astra
        Version:      1.0.0
        */
step 3 : - Enqueue the Parent Theme's Styles

            In your child theme folder, create a file named functions.php.
            Add the following code to enqueue the parent theme’s stylesheet:
            php
            Copy code
            <?php
            function astra_child_enqueue_styles() {
                // Enqueue the parent theme's stylesheet
                wp_enqueue_style( 'astra-style', get_template_directory_uri() . '/style.css' );
                // Enqueue the child theme's stylesheet
                wp_enqueue_style( 'astra-child-style', get_stylesheet_uri(), array('astra-style') );
            }
            add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );

step 4 : - Customize Your Child Theme

        Now you can add custom styles, templates, and functions to the child theme. Any changes you make here will override or extend the functionality of the parent Astra theme.
step 5 : - Activate the Child Theme

        Go to the WordPress dashboard (Appearance > Themes).
        Find the newly created child theme (Astra Child) in the list and click Activate.



Notes : Make sure in child theme file ( style.css) version and template should be same of the parent theme .       