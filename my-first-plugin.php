   <?php
   /*
   Plugin Name: My First Plugin
   Description: A plugin that includes My First Block.
   Version: 1.0
   Author: Your Name
   */

   // Register the block script and styles
   function my_first_block_register_block() {
       wp_register_script(
           'my-first-block-editor-script',
           plugins_url( 'my-first-block/build/index.js', __FILE__ ),
           array( 'wp-blocks', 'wp-element', 'wp-editor' )
       );

       wp_register_style(
           'my-first-block-editor-style',
           plugins_url( 'my-first-block/build/index.css', __FILE__ ),
           array( 'wp-edit-blocks' )
       );

       wp_register_style(
           'my-first-block-style',
           plugins_url( 'my-first-block/build/style-index.css', __FILE__ ),
           array()
       );

       register_block_type( 'create-block/my-first-block', array(
           'editor_script' => 'my-first-block-editor-script',
           'editor_style'  => 'my-first-block-editor-style',
           'style'         => 'my-first-block-style',
       ) );
   }
   add_action( 'init', 'my_first_block_register_block' );
   