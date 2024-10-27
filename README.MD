Öncelikle, WordPress'te bir blok oluşturmak için `create-block` komutunu kullanarak bir blok oluşturacağız. Ardından, bu bloğu bir WordPress eklentisi içinde çalıştıracağız. İşte adımlar:

1. `create-block` komutuyla bloğu oluştur:
   ```sh
   npx @wordpress/create-block my-first-block
   ```

2. Bu komut, `my-first-block` adlı bir klasör oluşturacak ve içinde gerekli dosyalar olacak. Bu klasörün içindeki dosyaları ve klasör yapısını inceleyin.

3. Şimdi, eklentiyi oluşturmak için yeni bir klasör oluşturun. Örneğin, `my-first-plugin` adında bir klasör oluşturun.

4. Eklenti klasörünüzün içinde bir PHP dosyası oluşturun ve adını `my-first-plugin.php` verin. Bu dosya, eklentinin ana dosyası olacak:
   ```php
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
   ```

5. `my-first-block` klasörünü `my-first-plugin` klasörünün içine taşıyın.

Klasör yapınız şu şekilde olmalıdır:

```
my-first-plugin/
│
├── my-first-block/
│   ├── build/
│   ├── src/
│   ├── block.json
│   ├── package.json
│   ├── README.md
│   └── etc...
│
└── my-first-plugin.php
```

6. Eklentinizi WordPress yönetici panelindeki "Eklentiler" bölümünden etkinleştirin.

Bu adımlar, `create-block` komutuyla oluşturulan bir bloğu içeren bir WordPress eklentisinin nasıl oluşturulacağını açıklar. Bloğunuz ve eklentiniz artık WordPress sitenizde çalışmalıdır.