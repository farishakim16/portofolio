@extends('layout')

@section('content')
    <style>
        .rounded-circle-container {
            width: 150px;
            /* Atur lebar container */
            height: 150px;
            /* Atur tinggi container */
            border-radius: 50%;
            /* Membuat container menjadi lingkaran */
            overflow: hidden;
            /* Mengatur overflow agar gambar tidak keluar dari lingkaran */
        }

        .rounded-circle-container img {
            width: 100%;
            /* Mengisi lebar container */
            height: 100%;
            /* Mengisi tinggi container */
            object-fit: cover;
            /* Mencegah gambar terpotong dan tetap dalam proporsi aspek */
        }

        .social-icons i {
            font-size: 30px;
            margin-right: 10px;
            width: 30px;
            transition: color 0.3s;
            /* Mengatur transisi warna */
        }

        .social-icons i {
            color: #DDDDDD
        }

        .social-icons i:hover {
            color: #F05454;
            /* Mengubah warna saat di hover */
        }
    </style>
    <div class="row justify-content-center align-items-center">
        <!-- Menggunakan justify-content-center dan align-items-center untuk posisi tengah secara horizontal dan vertikal -->
        <div class="col-lg-6 text-center"> <!-- Menambahkan kelas text-center untuk posisi teks di tengah -->
            <h2 class="hero_title" style="color: #DDDDDD">Faris Hakim</h2>
            <p class="hero_desc" style="color: #DDDDDD">
                As a fresh graduate from Binus University with a degree in Computer Science, I have gained extensive
                knowledge in programming and software design during my studies. I am deeply passionate about information
                technology and am eager to continue learning and growing in this field. Additionally, I have experience as
                an Android Developer.</p>
        </div>

        <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column" style="min-height: 200px;">
            <!-- Menambahkan align-items-center untuk posisi gambar di tengah secara vertikal -->
            <div class="rounded-circle-container mb-">
                <img src="{{ asset('Asset/Images/foto faris.png') }}" class="rounded-circle" alt="Foto Saya">
            </div>
            <div class="social-icons d-flex justify-content-center mt-3">
                <a href="https://www.instagram.com/faris_hakim/"><i class="fa-brands fa-instagram"
                        style="margin-right: 15px; width: 30px; font-size: 30px;"></i></a>
                <a href="https://www.linkedin.com/in/faris-hakim-16092021/"><i class="fa-brands fa-linkedin-in"
                        style="width: 30px; font-size: 30px;"></i></a>
            </div>
        </div>

    </div>
@endsection
