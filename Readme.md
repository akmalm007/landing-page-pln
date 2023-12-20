# Starting the Project
Pertama clone repositori ke komputer dengan

```git clone https://github.com/akmalm007/landing-page-pln.git```  

Setelah itu masuk ke direktori dengan perintah CD di terminal lalu ketik perintah berikut menginstall depedencies dan .env di project file

Perintah untuk menginstall depedencies dengan composer

`composer install`  
  
 melakukan copy pada .env.example ke file .env agar bisa dipakai
  
`cp .env.example .env`    
  
  melakukan generate unique key pada project   
    
`php artisan key:generate`  



## Tahapan Development dan Deployment
untuk tahap development sekarang masih cukup sederhana dari tampilan dan model logic sedang dibuat dan untuk UI masih sekedar ada saja mengikuti apa yang sudah ada di Canva, kemudian untuk tahap pengembangan selanjutnya adalah pertama memulai dari model logic yang bisa membuat sebuah berita atau blog dari UPDL nantinya, kemudian menambah fitur untuk menambahkan akademik semisal dari diklat ditambah nantinya kemudian menampilkan fasilitas-fasilitas ada secara detail.  
Setelah itu untuk tahap deployment masih dipikirkan antara menggunakan PaaS atau IaaS saya ingin menggunakan Google Cloud agar memiliki kontrol untuk project dan service yang ingin dipakai tetapi ada batasan karena beberapa service memerlukan credit dan free trial saya sudah habis

## CI/CD?
setelah project telah up and running di cloud dan telah bisa diakses oleh user akan dibuat CI nya di Github Action atau Cloud Build agar tetapi bisa termaintain dan menambah fitur baru nantinya.

## Pembagian Tugas
Tugas Tugas akan dibagi sebagai berikut

Akmal 

- Mengerjakan Model dan Controller pada backend pada project.
- Melakukan tahap Deployment nantinya.
- membuat CI/CD setelah website berada di Cloud

Adnan 

- Tahap Desaining di Canva dan Figma 
- mengerjakan Views pada frontend dengan blade template engine, *bisa menambahkan JS framework seperti Vue atau React jika bisa* 

Daffa

- Sebagai QA menjalankan test dan memperiksa apakah ada Bug atau tidak
- melakukan user review pada user yang telah mencobanya

