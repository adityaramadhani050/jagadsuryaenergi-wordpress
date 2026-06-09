# Panduan Deploy — Jagad Surya Energi WordPress

## File yang Dibuat

```
themes/kadence-child/
  ├── style.css        → wp-content/themes/kadence-child/style.css
  └── functions.php    → wp-content/themes/kadence-child/functions.php

mu-plugins/
  └── jagad-seo-schema.php → wp-content/mu-plugins/jagad-seo-schema.php
```

## Langkah Deploy via cPanel Terminal

```bash
# 1. Buat folder child theme
mkdir -p ~/public_html/wp-content/themes/kadence-child

# 2. Copy file child theme (dari File Manager atau SCP)
# Upload style.css dan functions.php ke folder tersebut

# 3. Buat folder mu-plugins jika belum ada
mkdir -p ~/public_html/wp-content/mu-plugins

# 4. Upload jagad-seo-schema.php ke mu-plugins

# 5. Aktifkan child theme via WP-CLI
wp theme activate kadence-child --path=~/public_html
```

## Yang Perlu Disesuaikan di jagad-seo-schema.php

Cari dan ganti nilai placeholder berikut:
- `+62-xxx-xxxx-xxxx` → nomor telepon asli
- `info@jagadsuryaenergi.com` → email asli
- `streetAddress` → alamat lengkap
- `postalCode` → kode pos
- URL logo → path logo asli di server
- URL layanan → sesuaikan slug halaman yang ada
- Instagram URL → URL akun Instagram asli
