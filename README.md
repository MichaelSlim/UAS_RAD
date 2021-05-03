Aplikasi yang dirancang merupakan suatu aplikasi yang meminta data dari dalam database, database yang dipakai merupakan data yang telah diinput kedalam MySQL.
Aplikasi yang diperlukan untuk menjalankan code tersebut
1. XAMPP
2. PhpMyAdmin untuk menjalankan MySQL
3. Postman.com
4. Aplikasi coding seperti Visual Studio Code untuk mengedit code atau melihat code

Cara menjalankan aplikasi : 
1. Download aplikasi XAMPP 
2. Jalankan aplikasi XAMPP.
3. Download zip
4. Taruh file tersebut dan ekstrak ke dalam folder tersebut di kedalam htdocs 

Cara menjalankan fitur
Buka Google Chrome dan ketik locallhost/Nama_Folder/Get.php.

Post, Put, Delete :
Jalankan aplikasi Postman.com

Post
Atur bentuk method menjadi POST (disebelah field "Link") dan input locallhost/Nama/Post.php
Lalu ke bagian Body, input semua attributnya ke dalam column Key.
Input data yang ingin anda isi ke dalam column Values.
Lalu tekan Send.
Data yang sudah sukses dimasukkan akan masuk ke dalam MySQL PHPMYADMIN.

Put
Atur bentuk method menjadi POST (disebelah field "Link") dan input  locallhost/Nama/Put.php
Lalu ke bagian Params, input attribut ID ke dalam column Key dan ID Data yang anda ingin ubah pada column Value.
Setelah itu, pergi ke bagian Body, lalu input atribut yang ingin anda ubah di bagian column Key beserta data yang anda ingin ubah di column Value.
Lalu tekan Send.
Data akan diupdate dan telah diubah di dalam MySQL PHPMYADMIN sesuai dengan ID yang ditentukan.

Delete
Atur bentuk method menjadi Delete (disebelah field "Link") dan input  locallhost/Nama/Delete.php 
Lalu ke bagian Params, input attribut ID ke dalam column Key dan ID Data yang anda ingin hapus pada column Value.
Lalu tekan Send.
Data akan dihapus dari MySQL PHPMYADMIN sesuai dengan ID yang ditentukan.


