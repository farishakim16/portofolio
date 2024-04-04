@extends('layout')

@section('content')
    <style>
        .nav-link.animation-btn {
            background-color: #DDDDDD;
        }

        .experience .nav-link.animation-btn {
            background-color: #F05454 !important;
        }

        .experience-title {
            font-size: 24px;
            font-weight: 700;
            color: #DDDDDD;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .experience-item,
        .resume-item {
            border-left: 2px solid #F05454;
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .experience-item h4,
        .resume-item h4 {
            font-size: 18px;
            font-weight: 600;
            color: #F05454;
            margin-top: 0;
        }

        .experience-item h5,
        .resume-item h5 {
            font-size: 16px;
            font-weight: 600;
            color: #DDDDDD;
            margin-top: 5px;
        }

        .experience-item p {
            font-size: 14px;
            color: #DDDDDD;
            margin-top: 5px;
        }

        .row {
            max-height: 60vh;
            /* Atur tinggi maksimum kartu */
            overflow-y: auto;
            /* Aktifkan scrolling vertikal jika konten melebihi ukuran kartu */

        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #DDDDDD;
            border-radius: 10px;

        }

        ::-webkit-scrollbar-thumb {
            background: #F05454;
            border-radius: 10px;
            /* Atur radius sesuai keinginan */

        }
    </style>


    <div class="row">
        <h3 class="experience-title" style="color: #DDDDDD">Experience</h3>
        <div class="experience-item" style="color: #DDDDDD">
            <h4>PT Dasa Teknologi Bersama</h4>
            <h5>Mobile Application Developer | Internship</h5>
            <p><em>Maret 2022 - Februari 2023</em></p>
            <li>Merancang tampilan UI/UX untuk aplikasi Android HRIS (Human Resource
                Information System) menggunakan Figma.</li>
            <li>Melakukan implementasi desain yang telah disiapkan dilakukan untuk
                mengembangkan aplikasi Android Joinprop menggunakan bahasa Java dan
                Android Studio. Konsistensi dan akurasi desain diperhatikan, sambil
                menambahkan fitur-fitur yang dibutuhkan, seperti pengambilan (GET) dan
                pengiriman (POST) data melalui API dengan format JSON. Proses ini mencakup
                interaksi langsung dengan backend server untuk memastikan aplikasi dapat
                berfungsi dalam mengambil dan mengirim informasi yang diperlukan.
            </li>
        </div>

        <div class="experience-item">
            <h4>PT Dasa Teknologi Bersama</h4>
            <h5>Mobile Application Developer | Contract Employees</h5>
            <p><em>Maret 2023 - November 2023</em></p>
            <p>Melakukan pengembangan aplikasi Android Joinprop menggunakan bahasa Java
                dan Android Studio, tanggung jawab saya adalah menambahkan fitur-fitur yang
                telah ditentukan, termasuk melakukan pengambilan (GET) dan pengiriman
                (POST) data melalui API dengan format JSON. Saya bertanggung jawab untuk
                memastikan integrasi yang mulus antara aplikasi dan backend server, sehingga
                aplikasi dapat berfungsi dengan baik dalam berinteraksi dengan data yang
                dibutuhkan.</p>

        </div>

        <div class="experience-item">
            <h4>PT Dasa Teknologi Bersama</h4>
            <h5>Mobile Application Developer | Fulltime</h5>
            <p><em>November 2023 - Sekarang</em></p>
            <p>Melakukan pengembangan aplikasi Android Joinprop menggunakan bahasa Java
                dan Android Studio, tanggung jawab saya adalah menambahkan fitur-fitur yang
                telah ditentukan, termasuk melakukan pengambilan (GET) dan pengiriman
                (POST) data melalui API dengan format JSON. Saya bertanggung jawab untuk
                memastikan integrasi yang mulus antara aplikasi dan backend server, sehingga
                aplikasi dapat berfungsi dengan baik dalam berinteraksi dengan data yang
                dibutuhkan.</p>
        </div>

        <div class="experience-item">
            <h4>PT Dasa Teknologi Bersama</h4>
            <h5>Quality Assurance | Fulltime</h5>
            <p><em>January 2023 - Sekarang</em></p>
            <p>Selain mengerjakan aplikasi Android JoinProp, saya juga bertanggung jawab untuk
                menguji aplikasi website JoinProp. Mulai dari menyusun panduan pengguna
                aplikasi hingga merancang proses UAT, saya memastikan kualitas aplikasi melalui
                pengujian yang teliti. Saya juga melakukan pengujian manual untuk menjamin
                kesesuaian aplikasi dengan kebutuhan pengguna. Dengan fokus pada pengujian,
                dan pengalaman pengguna.</p>
        </div>
    </div>
@endsection
