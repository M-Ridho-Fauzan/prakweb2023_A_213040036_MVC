# prakweb2023_A_213040036_MVC
Tempat tugas
<h1>MVC</h1>
<small>Model View Controller</small>
DI sisni akan mengunakan konsep MVC mengunakan OOP

<h2>Pertemuan 1 - Pendahuluan</h2>
<h3>apa itu MVC?</h3>
Adalah Pola arsitektur pada perancangan perangkat lunak beriorentasi object.
<h3>Dan tujuan utama dari MVC</h3>
Adalah Untuk memisahkan antara <b>Tampilan, Data dan Proses.</b>
<b>Kenapa MVC?</b>
tehknik pemisahan dalam program agar:
<li>Organisasi dan Struktur Kode</li>
<li>Pemisahan Logic dan tampilan</li>
<li>Perawatan Kode</li>
<li>Implementasi konsep OOP Lebih terlihat</li>
<li>Di gunakan oleh banyak Web Application Framework</li>
Jadi Harapan nya agar saat masuk ke dalam framework jadi tidak kesulitan lagi
Dan di sini, PHP ini akan memisahkan 3 komponen yaitu
<b>Model, Controller, dan View</b>
Model = Data
Controler = Proses
View = Tampilan
<h2>Apa yang akan di buat?</h2>
susah di jelaskan, coba lihat chanel sandika ghalih tentang
<b>"Membuat Aplikasi MVC dengan PHP #1 Pendahuluan"</b>
link: <a href="https://youtu.be/tBKOb8Ib5nI?list=PLFIM0718LjIVEh_d-h5wAjsdv2W4SAtkx&t=253" target="_blank" rel="Link Pendahuluan 1">
  Klik di sini.
</a>
<br>
jadi saat di buka akan ke buka otomatis Controler nya
Menggunakan IP acces
jadi di sini kita akan memainkan Url dengan Ip.
<br>

<h2>Membuat Aplikasi MVC dengan PHP #2 Persiapan</h2>
Disini adalah penjelasan tentang Struktur Folder dan File2 apa saja yang akan di gunakan. 
Struktur folder nya:
<ul>
  <li>Public</li>
    <ul>
      <li>Css</li>
      <li>Js</li>
      <li>img</li>
    </ul>
  <li>App <small>(Ini tidak akan di akses oleh user)</small></li>
    <ul>
      <li>Core <small>(Di sini adalah inti dari MVC nya)<small></li>
      <li>Controller</li>
      <li>Views <small>(Antarmuka sajian controller)<small></li>
      <ul>
        <li>Home</li>
        <li>dll...</li>
      </ul>
    </ul>
</ul>
<hr>
Options -Indexes -> adalah file pemblock agar user tidak bisa memasuki folder yang tida ada file index nya.

Options -Multiviews adalah untuk menghindari kesahan ketika memanggil folder di dalam folder public ini.

<p>RewriteEngine On -> deklarasi menjalankan proses</p>
<p><code>RewriteCond %{REQUEST_FILENAME} !-d</code> -> jika ada reques tentang folder, maka akan di abaikan</p>
<p><code>RewriteCond %{REQUEST_FILENAME} !-f</code> -> jika ada reques tentang file, maka akan di abaikan</p>
<p><code>RewriteRule ^(.*)$ index.php?url=$1 [L]</code> -> adalah untuk menulis ulang URL yang ada di browser</p>
<p><code>^(.*)$</code> artinya :"ambil apapun di URL kecuali Enter"</p>
<p><code>index.php?url=$1</code> artinya :"dan kirimkan ke $1"</p>
<p><code>[L]</code> artinya :"jika rule terpenuhi, maka jangan jalankan yang lain".</p>
