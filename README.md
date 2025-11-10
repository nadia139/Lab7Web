# Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

<img width="832" height="850" alt="Screenshot 2025-11-10 144742" src="https://github.com/user-attachments/assets/d8d433cf-7a5d-4ffc-b10a-af226520b327" />

Aplikasi web sederhana untuk menginput data biodata dan menampilkan perhitungan umur serta gaji berdasarkan pekerjaan.
Fitur:
Form input biodata (nama, tanggal lahir, pekerjaan)
Perhitungan umur otomatis dari tanggal lahir
Penentuan gaji otomatis berdasarkan pekerjaan
Tampilan responsif dengan design modern
Data persistance (data tetap tersimpan setelah submit)
Daftar Gaji Berdasarkan Pekerjaan
Pekerjaan	Gaji per Bulan
Software Engineer	Rp 15.000.000
Data Analyst	Rp 12.000.000
Web Developer	Rp 10.000.000
System Administrator	Rp 11.000.000
UI/UX Designer	Rp 9.000.000
Cara Penggunaan:
Isi form dengan nama, tanggal lahir, dan pilih pekerjaan
Klik tombol "Kirim"
Lihat hasil biodata + umur + gaji otomatis

# Laporan Praktikum
Input: 


<img width="558" height="448" alt="Screenshot 2025-11-10 134518" src="https://github.com/user-attachments/assets/5b3164cb-4b7a-47eb-a63c-3d7b9714404e" />

# Penjelasan:
Line 1-8: Struktur HTML dasar dengan judul "Belajar PHP Dasar"
Line 9-11: Embed code PHP menggunakan <?php ?> dengan perintah echo untuk menampilkan teks
Line 10: echo "Hello World"; - menampilkan string "Hello World"

Output:


<img width="483" height="170" alt="Screenshot 2025-11-10 134523" src="https://github.com/user-attachments/assets/f8741fa9-291e-4126-aca5-4fad8fd41430" />



Input: 


<img width="458" height="244" alt="Screenshot 2025-11-10 134823" src="https://github.com/user-attachments/assets/62456f32-097a-491a-8c7c-6bf95abf2ec4" />

# Penjelasan:
Line 1: Heading HTML "Menggunakan Variable"
Line 3: $nim = "312410258"; - deklarasi variable $nim dengan nilai string
Line 4: $nama = 'Nadia'; - deklarasi variable $nama dengan nilai string
Line 5: echo "NIM : ". $nim . "<br>"; - concatenation string dengan operator .
Line 6: echo "Nama : $nama"; - variable interpolation dalam double quotes

Output:


<img width="538" height="182" alt="Screenshot 2025-11-10 134830" src="https://github.com/user-attachments/assets/ad7f9c7a-439a-4fbe-a5f1-f99bcb391b7e" />


Input:


<img width="534" height="171" alt="Screenshot 2025-11-10 135957" src="https://github.com/user-attachments/assets/05f1fc5b-0c67-4086-99ed-2bae9356bbaa" />

# Penjelasan:
Line 1: Heading HTML "Predefine Variable"
Line 3: echo 'Selamat Datang Nadia'; - menampilkan string langsung
Kode ini sudah dimodifikasi dari versi asli yang menggunakan $_GET['nama']


Output: 


<img width="446" height="150" alt="Screenshot 2025-11-10 140003" src="https://github.com/user-attachments/assets/1eecf3ad-ca27-42f1-b82b-3cd542635190" />


Input:


<img width="692" height="613" alt="Screenshot 2025-11-10 140108" src="https://github.com/user-attachments/assets/132a19d1-7578-4f00-8c00-29f1f6aec4ec" />

# Penjelasan:
Line 8: Heading "Form Input"
Line 9-13: Form HTML dengan method POST
method="post" - data dikirim via POST (tidak tampil di URL)
name="nama" - nama field input
type="submit" - tombol untuk mengirim form
Line 14-16: PHP untuk menangani form submission
$_POST['nama'] - mengakses data yang dikirim via POST
echo 'Selamat Datang '. $_POST['nama']; - menampilkan pesan welcome


Output:


Setelah mengisi form dengan "Nadia Aulina Safari" dan klik Kirim:
<img width="530" height="192" alt="Screenshot 2025-11-10 140117" src="https://github.com/user-attachments/assets/51635b67-1b5e-4d14-8b37-1078d7c33d97" />









