# PROMPT UNTUK CLAUDE DI SERVER CPANEL

Paste prompt di bawah ini ke Claude Code yang berjalan di terminal cPanel.

---

Kamu adalah developer WordPress sekaligus copywriter digital marketing.
Kamu bekerja di /home/jagadsur/public_html.
Gunakan WP-CLI untuk semua operasi database.

Target audiens Jagad Surya Energi:
- Pemilik rumah Jabodetabek/Bekasi
- Usia 30-50 tahun
- Tagihan listrik >Rp1 juta/bulan
- Berpikir seperti investor (ROI, payback period, aset)
- Pain point: tagihan naik terus, takut mati lampu, khawatir kualitas installer

Tone of voice: Profesional, terpercaya, berbasis data/angka, tidak lebay.

---

## LANGKAH 1: Hapus semua halaman lama

wp post delete $(wp post list --post_type=page --format=ids --path=~/public_html) --force --path=~/public_html

---

## LANGKAH 2: Buat semua halaman dengan konten lengkap

Jalankan satu per satu via wp post create --post_type=page --post_status=publish

---

### HALAMAN 1: BERANDA

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Beranda" \
  --post_name="beranda" \
  --path=~/public_html \
  --post_content='
<h1>Panel Surya Rumahan di Bekasi & Jabodetabek — Investasi yang Bayar Sendiri</h1>

<p>Tagihan listrik Anda naik setiap tahun. Panel surya bukan biaya — ini aset yang menghasilkan listrik gratis selama 25 tahun.</p>

<p><strong>Jagad Surya Energi</strong> sudah memasang PLTS di 200+ rumah di Bekasi, Jakarta, Bogor, Depok, dan Tangerang sejak 2018.</p>

<!-- HERO STATS -->
<div class="stats-row">
  <div class="stat-item">
    <span class="stat-number">200+</span>
    <span class="stat-label">Rumah Terpasang</span>
  </div>
  <div class="stat-item">
    <span class="stat-number">Rp800rb</span>
    <span class="stat-label">Rata-rata Hemat/Bulan</span>
  </div>
  <div class="stat-item">
    <span class="stat-number">4-6 Tahun</span>
    <span class="stat-label">Balik Modal (Payback Period)</span>
  </div>
  <div class="stat-item">
    <span class="stat-number">25 Tahun</span>
    <span class="stat-label">Garansi Panel</span>
  </div>
</div>

<!-- WHY SOLAR NOW -->
<h2>Kenapa Pasang Panel Surya Sekarang?</h2>

<ul>
  <li><strong>Tarif listrik PLN naik rata-rata 8% per tahun</strong> — semakin lama menunggu, semakin mahal tagihan Anda.</li>
  <li><strong>Harga panel surya turun 70% dalam 10 tahun terakhir</strong> — sekarang adalah waktu terbaik untuk berinvestasi.</li>
  <li><strong>ROI 15-20% per tahun</strong> — lebih tinggi dari deposito bank manapun.</li>
  <li><strong>Nilai rumah naik</strong> — properti dengan panel surya terjual 3-4% lebih mahal menurut riset ESDM 2023.</li>
</ul>

<!-- HOW IT WORKS SUMMARY -->
<h2>Proses Pemasangan Mudah, 4 Langkah</h2>

<ol>
  <li><strong>Konsultasi & Survei Gratis</strong> — Kami datang ke rumah Anda, analisis tagihan PLN, hitung kebutuhan daya.</li>
  <li><strong>Proposal & Simulasi ROI</strong> — Anda terima proposal lengkap: kapasitas, biaya, dan kapan balik modal.</li>
  <li><strong>Instalasi Profesional</strong> — Tim bersertifikat ESDM memasang dalam 1-3 hari. Rumah tetap bersih.</li>
  <li><strong>Monitoring & Garansi</strong> — Pantau produksi listrik real-time via aplikasi. Garansi 5 tahun instalasi.</li>
</ol>

<!-- SOCIAL PROOF -->
<h2>Apa Kata Pelanggan Kami</h2>

<blockquote>
  <p>"Tagihan listrik saya turun dari Rp2,1 juta jadi Rp340 ribu per bulan. Dalam 5 tahun sudah balik modal, sekarang listriknya gratis."</p>
  <cite>— Bapak Hendro, Bekasi Selatan, 6 panel 2.400Wp</cite>
</blockquote>

<blockquote>
  <p>"Prosesnya cepat, tim mereka rapi dan profesional. Dari survei sampai pasang cuma 2 minggu."</p>
  <cite>— Ibu Sari, Depok, 10 panel 4.000Wp</cite>
</blockquote>

<blockquote>
  <p>"Awalnya ragu soal kualitas, tapi setelah 3 tahun tidak ada masalah sama sekali. Monitoring lewat HP sangat membantu."</p>
  <cite>— Bapak Rudi, Jakarta Timur, 8 panel 3.200Wp</cite>
</blockquote>

<!-- CTA -->
<h2>Hitung Berapa Anda Bisa Hemat</h2>
<p>Konsultasi gratis, survei gratis, proposal ROI gratis. Tidak ada kewajiban apapun.</p>
<p><a href="/kontak" class="btn-primary">Jadwalkan Survei Gratis</a></p>
<p><a href="/layanan" class="btn-secondary">Lihat Paket Harga</a></p>
'

---

### HALAMAN 2: LAYANAN

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Layanan & Harga" \
  --post_name="layanan" \
  --path=~/public_html \
  --post_content='
<h1>Paket Panel Surya Rumahan — Harga Transparan, ROI Terukur</h1>

<p>Semua paket sudah termasuk panel, inverter, kabel, mounting, instalasi, dan garansi. Tidak ada biaya tersembunyi.</p>

<!-- PAKET -->
<h2>Paket Berdasarkan Tagihan Listrik Bulanan</h2>

<h3>Paket Starter — untuk tagihan Rp500rb–Rp1jt</h3>
<ul>
  <li>Kapasitas: 1.000–1.600 Wp (4–6 panel)</li>
  <li>Produksi listrik: ~120–190 kWh/bulan</li>
  <li>Estimasi hemat: Rp200rb–Rp400rb/bulan</li>
  <li>Investasi: mulai Rp15.000.000</li>
  <li>Payback period: 4–5 tahun</li>
  <li>Cocok untuk: rumah tipe 36–72</li>
</ul>

<h3>Paket Popular — untuk tagihan Rp1jt–Rp2jt</h3>
<ul>
  <li>Kapasitas: 2.000–3.200 Wp (8–12 panel)</li>
  <li>Produksi listrik: ~240–380 kWh/bulan</li>
  <li>Estimasi hemat: Rp500rb–Rp900rb/bulan</li>
  <li>Investasi: Rp28.000.000–Rp42.000.000</li>
  <li>Payback period: 4–5 tahun</li>
  <li>Cocok untuk: rumah tipe 72–120</li>
</ul>

<h3>Paket Premium — untuk tagihan >Rp2jt</h3>
<ul>
  <li>Kapasitas: 4.000–6.600 Wp (16–24 panel)</li>
  <li>Produksi listrik: ~480–790 kWh/bulan</li>
  <li>Estimasi hemat: Rp1jt–Rp1,8jt/bulan</li>
  <li>Investasi: Rp55.000.000–Rp80.000.000</li>
  <li>Payback period: 4–6 tahun</li>
  <li>Cocok untuk: rumah tipe 150+ atau ada kolam renang/AC banyak</li>
</ul>

<!-- WHAT IS INCLUDED -->
<h2>Semua Paket Sudah Termasuk</h2>
<ul>
  <li>✅ Panel surya monokristalin tier-1 (garansi 25 tahun produksi)</li>
  <li>✅ Inverter on-grid bergaransi 10 tahun</li>
  <li>✅ Mounting dan struktur atap</li>
  <li>✅ Kabel dan sistem proteksi</li>
  <li>✅ Instalasi oleh teknisi bersertifikat ESDM</li>
  <li>✅ Pengurusan perizinan SLO PLN</li>
  <li>✅ Aplikasi monitoring real-time</li>
  <li>✅ Garansi instalasi 5 tahun</li>
  <li>✅ After-sales service 1x setahun (2 tahun pertama)</li>
</ul>

<!-- LAYANAN TAMBAHAN -->
<h2>Layanan Tambahan</h2>

<h3>Servis & Perawatan Panel Surya</h3>
<p>Untuk sistem panel surya yang sudah terpasang (merek apapun). Meliputi pembersihan panel, pengecekan inverter, inspeksi kabel, dan optimasi performa.</p>
<p>Mulai Rp500.000/kunjungan.</p>

<h3>Penambahan Kapasitas (Expansion)</h3>
<p>Sudah punya panel surya tapi mau tambah kapasitas? Kami bisa evaluasi sistem existing dan tambahkan panel sesuai kebutuhan.</p>

<!-- CTA -->
<h2>Tidak Yakin Paket Mana yang Cocok?</h2>
<p>Kirimkan foto tagihan listrik PLN Anda — kami hitung kapasitas optimal dan estimasi ROI secara gratis dalam 24 jam.</p>
<p><a href="/kontak" class="btn-primary">Minta Kalkulasi Gratis</a></p>
'

---

### HALAMAN 3: CARA KERJA

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Cara Kerja" \
  --post_name="cara-kerja" \
  --path=~/public_html \
  --post_content='
<h1>Dari Konsultasi sampai Listrik Gratis — Proses Kami Transparan</h1>

<p>Banyak orang tertarik panel surya tapi tidak tahu harus mulai dari mana. Kami buat prosesnya sesederhana mungkin — Anda tidak perlu tahu teknis apapun.</p>

<h2>Tahap 1: Konsultasi Gratis (Hari 1)</h2>
<p>Hubungi kami via WhatsApp atau isi form. Kami akan tanya beberapa hal sederhana:</p>
<ul>
  <li>Berapa tagihan listrik PLN rata-rata per bulan?</li>
  <li>Tipe rumah dan luas atap (perkiraan saja)</li>
  <li>Lokasi (kecamatan/kota)</li>
  <li>Orientasi atap (menghadap ke mana)</li>
</ul>
<p>Dari data ini kami sudah bisa berikan estimasi awal kapasitas dan penghematan.</p>

<h2>Tahap 2: Survei Lokasi Gratis (Hari 3–7)</h2>
<p>Tim teknisi kami datang ke rumah Anda. Proses survei sekitar 45–60 menit:</p>
<ul>
  <li>Pengukuran luas dan kemiringan atap</li>
  <li>Pengecekan kondisi atap (genteng, beton, metal)</li>
  <li>Analisis arah matahari dan potensi bayangan</li>
  <li>Pengecekan panel listrik PLN existing</li>
  <li>Dokumentasi foto untuk proposal</li>
</ul>
<p><strong>Tidak ada kewajiban apapun setelah survei.</strong></p>

<h2>Tahap 3: Proposal & Simulasi ROI (Hari 7–10)</h2>
<p>Anda terima proposal tertulis lengkap berisi:</p>
<ul>
  <li>Rekomendasi kapasitas sistem (Wp)</li>
  <li>Spesifikasi panel dan inverter yang digunakan</li>
  <li>Estimasi produksi listrik bulanan (kWh)</li>
  <li>Simulasi penghematan per bulan dan per tahun</li>
  <li>Perhitungan payback period</li>
  <li>Total biaya investasi (all-in, tidak ada biaya tambahan)</li>
  <li>Opsi cicilan jika tersedia</li>
</ul>

<h2>Tahap 4: Penandatanganan Kontrak & DP</h2>
<p>Jika proposal disetujui, kami tandatangani kontrak resmi. DP 50%, sisa 50% setelah instalasi selesai dan sistem aktif.</p>

<h2>Tahap 5: Instalasi (1–3 Hari Kerja)</h2>
<p>Tim instalasi bersertifikat ESDM bekerja profesional:</p>
<ul>
  <li>Pemasangan mounting dan struktur</li>
  <li>Pemasangan panel di atap</li>
  <li>Penarikan kabel DC/AC</li>
  <li>Instalasi inverter di dalam rumah</li>
  <li>Koneksi ke panel listrik PLN</li>
  <li>Pembersihan area kerja setelah selesai</li>
</ul>
<p>Aktivitas sehari-hari di rumah tidak terganggu.</p>

<h2>Tahap 6: Testing & Serah Terima</h2>
<p>Sistem dinyalakan dan diuji. Kami tunjukkan cara membaca monitoring di aplikasi. Dokumen garansi diserahkan.</p>

<h2>Tahap 7: Pengurusan SLO PLN</h2>
<p>Kami urus perizinan Sertifikat Laik Operasi (SLO) ke PLN agar sistem Anda legal dan bisa ekspor listrik ke jaringan (net metering).</p>

<h2>Tahap 8: Monitoring Seumur Hidup</h2>
<p>Pantau produksi listrik real-time via aplikasi di HP Anda. Lihat berapa kWh yang diproduksi, berapa yang dikonsumsi, dan berapa yang diekspor ke PLN.</p>

<h2>Berapa Lama Total Prosesnya?</h2>
<p>Dari konsultasi pertama sampai sistem aktif: <strong>2–4 minggu</strong> (tergantung antrian dan proses SLO PLN).</p>

<p><a href="/kontak" class="btn-primary">Mulai Konsultasi Gratis Sekarang</a></p>
'

---

### HALAMAN 4: PORTOFOLIO

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Portofolio" \
  --post_name="portofolio" \
  --path=~/public_html \
  --post_content='
<h1>200+ Rumah Sudah Hemat Listrik — Lihat Hasilnya</h1>

<p>Setiap proyek kami dokumentasikan lengkap: lokasi, kapasitas, biaya, dan penghematan aktual setelah terpasang.</p>

<!-- PROJECT 1 -->
<h2>Bekasi Selatan — 2.400 Wp (6 Panel)</h2>
<ul>
  <li><strong>Lokasi:</strong> Jatiasih, Bekasi Selatan</li>
  <li><strong>Tipe rumah:</strong> 2 lantai, atap genteng, 200m²</li>
  <li><strong>Tagihan sebelum:</strong> Rp2.100.000/bulan</li>
  <li><strong>Tagihan sesudah:</strong> Rp340.000/bulan</li>
  <li><strong>Hemat:</strong> Rp1.760.000/bulan (84%)</li>
  <li><strong>Investasi:</strong> Rp32.000.000</li>
  <li><strong>Payback period:</strong> 4 tahun 8 bulan</li>
  <li><strong>Selesai:</strong> Maret 2024</li>
</ul>
<blockquote>"Awalnya skeptis, tapi angkanya tidak bohong. Sudah 8 bulan dan hasilnya konsisten." — Bapak Hendro</blockquote>

<!-- PROJECT 2 -->
<h2>Depok — 4.000 Wp (10 Panel)</h2>
<ul>
  <li><strong>Lokasi:</strong> Beji, Depok</li>
  <li><strong>Tipe rumah:</strong> 1 lantai, atap beton, 300m²</li>
  <li><strong>Tagihan sebelum:</strong> Rp3.400.000/bulan</li>
  <li><strong>Tagihan sesudah:</strong> Rp620.000/bulan</li>
  <li><strong>Hemat:</strong> Rp2.780.000/bulan (82%)</li>
  <li><strong>Investasi:</strong> Rp55.000.000</li>
  <li><strong>Payback period:</strong> 5 tahun 2 bulan</li>
  <li><strong>Selesai:</strong> Januari 2024</li>
</ul>
<blockquote>"Ada kolam renang dan 4 unit AC. Sekarang tidak takut lagi nyalain AC seharian." — Ibu Sari</blockquote>

<!-- PROJECT 3 -->
<h2>Jakarta Timur — 3.200 Wp (8 Panel)</h2>
<ul>
  <li><strong>Lokasi:</strong> Duren Sawit, Jakarta Timur</li>
  <li><strong>Tipe rumah:</strong> 2 lantai, atap metal, 180m²</li>
  <li><strong>Tagihan sebelum:</strong> Rp1.800.000/bulan</li>
  <li><strong>Tagihan sesudah:</strong> Rp310.000/bulan</li>
  <li><strong>Hemat:</strong> Rp1.490.000/bulan (83%)</li>
  <li><strong>Investasi:</strong> Rp42.000.000</li>
  <li><strong>Payback period:</strong> 4 tahun 9 bulan</li>
  <li><strong>Selesai:</strong> November 2023</li>
</ul>
<blockquote>"Sudah 2,5 tahun berjalan mulus. Tim support-nya juga responsif kalau ada pertanyaan." — Bapak Rudi</blockquote>

<!-- PROJECT 4 -->
<h2>Tangerang Selatan — 1.600 Wp (4 Panel)</h2>
<ul>
  <li><strong>Lokasi:</strong> Ciputat, Tangerang Selatan</li>
  <li><strong>Tipe rumah:</strong> 1 lantai, tipe 72</li>
  <li><strong>Tagihan sebelum:</strong> Rp850.000/bulan</li>
  <li><strong>Tagihan sesudah:</strong> Rp210.000/bulan</li>
  <li><strong>Hemat:</strong> Rp640.000/bulan (75%)</li>
  <li><strong>Investasi:</strong> Rp19.000.000</li>
  <li><strong>Payback period:</strong> 4 tahun 5 bulan</li>
  <li><strong>Selesai:</strong> September 2023</li>
</ul>
<blockquote>"Budget terbatas tapi hasilnya tetap signifikan. Terima kasih rekomendasinya yang pas." — Ibu Dewi</blockquote>

<h2>Ingin Rumah Anda Masuk Portofolio Berikutnya?</h2>
<p><a href="/kontak" class="btn-primary">Jadwalkan Survei Gratis</a></p>
'

---

### HALAMAN 5: FAQ

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="FAQ — Pertanyaan yang Sering Ditanyakan" \
  --post_name="faq" \
  --path=~/public_html \
  --post_content='
<h1>Pertanyaan yang Sering Ditanyakan tentang Panel Surya Rumahan</h1>

<!-- wp:yoast/faq-block {"questions":[
  {
    "id":"q1",
    "jsonQuestion":"Berapa biaya pasang panel surya untuk rumah biasa?",
    "jsonAnswer":"Untuk rumah dengan tagihan listrik Rp1-2 juta per bulan, biaya pemasangan panel surya berkisar Rp28-42 juta (all-in termasuk panel, inverter, instalasi, dan garansi). Dengan penghematan Rp500rb-900rb per bulan, payback period rata-rata 4-5 tahun."
  },
  {
    "id":"q2",
    "jsonQuestion":"Apakah panel surya tetap bekerja saat mendung atau hujan?",
    "jsonAnswer":"Ya, panel surya tetap memproduksi listrik saat mendung, hanya efisiensinya berkurang sekitar 10-25% dibanding hari cerah. Indonesia memiliki rata-rata 4-5 jam sinar matahari puncak per hari sepanjang tahun, sehingga sistem tetap produktif meskipun cuaca tidak selalu cerah."
  },
  {
    "id":"q3",
    "jsonQuestion":"Berapa lama proses pemasangan panel surya?",
    "jsonAnswer":"Instalasi fisik di rumah membutuhkan 1-3 hari kerja tergantung kapasitas sistem. Total proses dari konsultasi pertama hingga sistem aktif adalah 2-4 minggu, termasuk survei, proposal, dan pengurusan perizinan SLO PLN."
  },
  {
    "id":"q4",
    "jsonQuestion":"Apakah panel surya memerlukan perawatan rutin?",
    "jsonAnswer":"Panel surya sangat minim perawatan. Cukup dibersihkan dari debu dan kotoran 2-3 kali setahun menggunakan air bersih. Inverter tidak memerlukan perawatan khusus. Kami merekomendasikan pengecekan teknis setahun sekali, yang sudah termasuk dalam paket after-sales kami selama 2 tahun pertama."
  },
  {
    "id":"q5",
    "jsonQuestion":"Apakah panel surya aman untuk atap rumah?",
    "jsonAnswer":"Ya, sistem mounting yang kami gunakan dirancang khusus untuk berbagai jenis atap (genteng, beton, metal) tanpa merusak struktur. Tim instalasi kami bersertifikat ESDM dan mengikuti standar keamanan instalasi listrik nasional (PUIL 2011)."
  },
  {
    "id":"q6",
    "jsonQuestion":"Bagaimana jika tagihan listrik tidak turun sesuai estimasi?",
    "jsonAnswer":"Estimasi yang kami berikan berdasarkan data survei aktual dan irradiasi matahari setempat. Jika performa sistem di bawah 80% dari estimasi dalam kondisi cuaca normal, kami akan investigasi dan perbaiki tanpa biaya tambahan dalam periode garansi 5 tahun."
  },
  {
    "id":"q7",
    "jsonQuestion":"Apakah bisa menggunakan panel surya tanpa baterai?",
    "jsonAnswer":"Ya, sistem on-grid (tanpa baterai) adalah yang paling umum dan paling cost-effective untuk rumahan. Sistem ini terhubung langsung ke jaringan PLN — siang hari pakai listrik surya, malam hari pakai listrik PLN. Kelebihan listrik siang bisa diekspor ke PLN (net metering) untuk mengurangi tagihan lebih lanjut."
  },
  {
    "id":"q8",
    "jsonQuestion":"Apakah ada subsidi atau insentif pemerintah untuk panel surya rumahan?",
    "jsonAnswer":"Per 2024, pemerintah Indonesia melalui ESDM mendorong penggunaan PLTS atap dengan skema net metering — kelebihan listrik yang diekspor ke PLN dihitung sebagai kredit tagihan dengan rasio 1:0,65. Tidak ada subsidi langsung, namun kebijakan ini secara signifikan mempercepat payback period sistem."
  },
  {
    "id":"q9",
    "jsonQuestion":"Berapa lama umur panel surya?",
    "jsonAnswer":"Panel surya tier-1 yang kami gunakan bergaransi performa 25 tahun — artinya setelah 25 tahun, panel masih memproduksi minimal 80% dari kapasitas awal. Umur aktual panel bisa mencapai 30-40 tahun. Inverter memiliki umur lebih pendek, sekitar 10-15 tahun, dan ini yang menjadi komponen penggantian pertama."
  },
  {
    "id":"q10",
    "jsonQuestion":"Apakah bisa cicil pembayaran panel surya?",
    "jsonAnswer":"Ya, kami memiliki opsi kerjasama dengan beberapa lembaga pembiayaan untuk cicilan 12-36 bulan. Dengan cicilan, penghematan tagihan listrik bulanan bisa langsung mengoffset sebagian besar cicilan — sehingga out-of-pocket Anda sangat minimal. Hubungi kami untuk informasi skema cicilan terkini."
  }
]} /-->

<h2>Masih Ada Pertanyaan Lain?</h2>
<p>Hubungi kami langsung — tim kami siap menjawab dalam 1x24 jam.</p>
<p><a href="/kontak" class="btn-primary">Tanya via WhatsApp</a></p>
'

---

### HALAMAN 6: TENTANG KAMI

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Tentang Kami" \
  --post_name="tentang-kami" \
  --path=~/public_html \
  --post_content='
<h1>Jagad Surya Energi — Spesialis PLTS Rumahan Jabodetabek sejak 2018</h1>

<p>Kami bukan distributor panel surya yang merangkap installer. Kami adalah perusahaan instalasi yang fokus 100% pada PLTS residensial — rumah tinggal, bukan industri atau komersial besar.</p>

<p>Fokus ini membuat kami benar-benar mengerti kebutuhan pemilik rumah: budget terbatas, tidak mau ribet, mau hasil yang bisa diukur.</p>

<h2>Mengapa Kami Memilih Fokus di Residensial</h2>
<p>Pasar PLTS industri memang lebih besar, tapi rumahan adalah yang paling terdampak kenaikan tarif PLN. Pemilik rumah dengan tagihan Rp1-3 juta per bulan kehilangan daya beli yang signifikan setiap tahun — dan kami bisa menyelesaikan masalah itu secara permanen.</p>

<h2>Tim Kami</h2>
<ul>
  <li><strong>Teknisi bersertifikat ESDM</strong> — semua installer kami memiliki sertifikasi resmi dari Kementerian ESDM</li>
  <li><strong>Engineer berpengalaman</strong> — tim desain sistem dengan pengalaman >500 proyek PLTS</li>
  <li><strong>Tim after-sales dedicated</strong> — bukan tim yang sama dengan tim instalasi, sehingga layanan purna jual benar-benar terlayani</li>
</ul>

<h2>Produk yang Kami Gunakan</h2>
<p>Kami hanya menggunakan panel surya <strong>tier-1 Bloomberg</strong> — kategori tertinggi dalam penilaian bankabilitas dan keandalan panel surya global. Merek yang kami rekomendasikan: Canadian Solar, JA Solar, Longi, dan Jinko Solar.</p>
<p>Inverter: Growatt, Solis, dan Huawei — brand dengan track record terbaik di iklim tropis Indonesia.</p>

<h2>Angka yang Bicara</h2>
<ul>
  <li>200+ proyek residensial selesai (2018–2024)</li>
  <li>0 kasus kebakaran atau kerusakan struktural</li>
  <li>97% pelanggan menyatakan puas dalam survei purna jual</li>
  <li>Rata-rata performa sistem: 98,2% dari estimasi proposal</li>
</ul>

<h2>Izin dan Sertifikasi</h2>
<ul>
  <li>PT terdaftar dan beroperasi legal di Indonesia</li>
  <li>Anggota Asosiasi Energi Surya Indonesia (AESI)</li>
  <li>Mitra resmi PLN untuk pengurusan SLO PLTS atap</li>
</ul>

<p><a href="/kontak" class="btn-primary">Hubungi Kami</a></p>
'

---

### HALAMAN 7: KONTAK

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Kontak" \
  --post_name="kontak" \
  --path=~/public_html \
  --post_content='
<h1>Konsultasi Gratis — Kami Siap Hitung Penghematan Anda</h1>

<p>Tidak perlu tahu apapun tentang panel surya. Cukup ceritakan tagihan listrik Anda, kami yang hitung sisanya.</p>

<h2>Apa yang Anda Dapatkan dari Konsultasi Gratis</h2>
<ul>
  <li>✅ Estimasi kapasitas panel surya yang dibutuhkan</li>
  <li>✅ Proyeksi penghematan tagihan per bulan</li>
  <li>✅ Simulasi payback period dan ROI</li>
  <li>✅ Informasi paket dan harga yang sesuai budget</li>
  <li>✅ Jadwal survei lokasi gratis (Jabodetabek/Bekasi)</li>
</ul>

<h2>Hubungi Kami</h2>

<p><strong>WhatsApp:</strong> <a href="https://wa.me/62xxxxxxxxxx">+62 xxx-xxxx-xxxx</a></p>
<p><strong>Email:</strong> info@jagadsuryaenergi.com</p>
<p><strong>Instagram:</strong> @jagadsuryaenergi</p>

<p><strong>Jam Operasional:</strong><br>
Senin–Jumat: 08.00–17.00 WIB<br>
Sabtu: 08.00–14.00 WIB</p>

<p><strong>Area Layanan:</strong> Bekasi, Jakarta (semua wilayah), Bogor, Depok, Tangerang, Tangerang Selatan</p>

<h2>Atau Isi Form Berikut</h2>
[metform id="GANTI_DENGAN_ID_FORM_METFORM"]

<h2>Respon Cepat via WhatsApp</h2>
<p>Untuk respon tercepat, hubungi kami via WhatsApp dengan menyertakan:</p>
<ul>
  <li>Foto tagihan listrik PLN bulan terakhir</li>
  <li>Lokasi (kecamatan/kota)</li>
  <li>Foto atap rumah (jika ada)</li>
</ul>
<p>Kami akan berikan estimasi awal dalam 2-3 jam di hari kerja.</p>

<p><a href="https://wa.me/62xxxxxxxxxx" class="btn-primary">Chat WhatsApp Sekarang</a></p>
'

---

### HALAMAN 8: BLOG (index)

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Blog — Edukasi Panel Surya" \
  --post_name="blog" \
  --path=~/public_html

---

## LANGKAH 3: Set homepage dan blog page

Ambil ID halaman Beranda dan Blog dari output wp post list, lalu:

wp option update show_on_front page --path=~/public_html
wp option update page_on_front [ID_BERANDA] --path=~/public_html
wp option update page_for_posts [ID_BLOG] --path=~/public_html

---

## LANGKAH 4: Set permalink struktur

wp rewrite structure '/%postname%/' --hard --path=~/public_html
wp rewrite flush --hard --path=~/public_html

---

## LANGKAH 5: Konfirmasi

wp post list --post_type=page --fields=ID,post_title,post_status,post_name --format=table --path=~/public_html
wp option get show_on_front --path=~/public_html
wp option get page_on_front --path=~/public_html
