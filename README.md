WordPress eklentisi oluşturmak için en basit bloğu `create-block` komutuyla oluşturup bunu bir eklenti dosyasına taşıyabilirsiniz. İşte adım adım nasıl yapacağınız:

### 1. Eklenti Klasörü Oluşturun

WordPress kurulumunuzun `wp-content/plugins/` dizininde yeni bir klasör oluşturun. Örneğin, `my-simple-block`.



### 2. Eklenti Ana Dosyasını Oluşturun

`my-simple-block` klasörünün içine `my-simple-block.php` adında bir dosya oluşturun ve aşağıdaki kodları ekleyin:

```php
<?php
/**
 * Plugin Name: My Simple Block
 * Description: Basit bir blok örneği.
 * Version: 1.0.0
 * Author: Adınız
 * License: GPL2
 */

defined( 'ABSPATH' ) || exit;

function my_simple_block_register() {
    // Blok kaydetme
    register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'my_simple_block_register' );
```


### 3. `create-block` Komutuyla Basit Bir Blok Oluşturun

Terminal veya komut istemcisinde şu komutu çalıştırarak bir blok oluşturun:

```bash
npx @wordpress/create-block my-simple-block
```

Bu komut, `my-simple-block` adında bir klasör oluşturacak ve gerekli dosyaları içine yerleştirecektir.



### 4. Kaynak Dosya Yapısı

`my-simple-block` klasörü içinde oluşturulan blok dosyalarını, özellikle `build` klasörünü eklenti klasörüne taşıyın. Eklentinizin yapısı şöyle olmalı:

```
my-simple-block/
├── build/
│   ├── index.js
│   └── ... (diğer blok dosyaları)
├── my-simple-block.php
└── ... (diğer dosyalar)
```

### 5. Eklentiyi Kurma

WordPress yönetici paneline gidin, "Eklentiler" sekmesine tıklayın ve "My Simple Block" eklentisini bulun. Eklentiyi etkinleştirin.

### 6. Son Kontroller

Artık WordPress editöründe yeni oluşturduğunuz bloğu kullanabilirsiniz. "Blok Ekle" menüsünde bloğunuzu bulup içeriğinize ekleyebilirsiniz.

Bu şekilde basit bir WordPress bloğu eklentisi oluşturmuş oldunuz! Herhangi bir sorunuz varsa, sormaktan çekinmeyin.
