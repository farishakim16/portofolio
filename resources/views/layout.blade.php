<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
        }

        .bg {
            animation: slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #30475E 50%, #DDDDDD 50%);
            bottom: 0;
            left: -50%;
            opacity: .5;
            position: fixed;
            right: -50%;
            top: 0;
            z-index: -1;
        }

        .bg2 {
            animation-direction: alternate-reverse;
            animation-duration: 4s;
        }

        .bg3 {
            animation-duration: 5s;
        }

        .content {
            background-color: rgba(255, 255, 255, .8);
            border-radius: .25em;
            box-shadow: 0 0 .25em rgba(0, 0, 0, .25);
            box-sizing: border-box;
            left: 50%;
            padding: 10vmin;
            position: fixed;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            font-family: monospace;
        }

        @keyframes slide {
            0% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(25%);
            }
        }


        .nav-link.animation-btn:hover {
            background-color: #F05454 !important;
        }


        .animation-btn {
            padding: 10px;
            position: absolute;
            display: flex;
            background-color: #F05454;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            outline: none;
            border: 0;
            color: #fff;
            transition: width 0.5s ease-in-out;
        }

        .txt-btn-animation {
            max-width: 0;
            overflow: hidden;
            color: white;
            transition: max-width 1s ease-in-out, margin-left 0.5s ease-in-out;
            text-overflow: ellipsis;
            /* Menambahkan elipsis untuk teks yang melebihi lebar maksimum */
            white-space: nowrap;
            /* Tetap pertahankan white-space: nowrap; jika diperlukan */
        }


        .animation-btn:hover .txt-btn-animation {
            margin-left: 0.5rem;
            max-width: 50rem;
        }

        .animation-btn .txt-btn-animation {
            margin-left: 0;
            max-width: 0;
            transition: max-width 0.5s ease-in-out, margin-left 0.5s ease-in-out;
        }

        .navbar-nav {
            margin-bottom: 30px;
            /* Atur margin bottom sesuai kebutuhan */
        }

        .navbar-nav .nav-item {
            margin-block: 30px;
            /* Atur margin bott
            om sesuai kebutuhan */
        }
    </style>

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    {{--  --}}
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="shadow-lg card rounded-4" style="width: 80%;background-color: #222831;">
            <div class="card-body">
                <div class="d-flex">
                    <div class="col-md-3">
                        <div class="navbar" style="height: 500px;">
                            <nav class="navbar navbar-dark flex-column navbar-expand-lg">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse " id="navbarNav">
                                        <ul class="navbar-nav flex-column">
                                            <li class="nav-item text-center">
                                                <a class="nav-link d-flex justify-content-center align-items-center animation-btn"
                                                    style="border-radius: 50px" href="/home">
                                                    <i class="fa-solid fa-house-user"
                                                        style="color: #ffffff; font-size: 20px; width: 25px"></i>
                                                    <div class="txt-btn-animation">
                                                        <span>Home</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item text-center education">
                                                <a class="nav-link d-flex justify-content-center align-items-center  animation-btn"
                                                    style="border-radius: 50px; background-color: #DDDDDD"
                                                    href="education">
                                                    <i class="fa-solid fa-school"
                                                        style="color: #ffffff; font-size: 20px; width: 25px"></i>
                                                    <div class="txt-btn-animation">
                                                        <span>Education</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item text-center experience">
                                                <a class="nav-link d-flex justify-content-center align-items-center  animation-btn"
                                                    style="border-radius: 50px; background-color: #DDDDDD"
                                                    href="/experience">
                                                    <i class="fa-solid fa-briefcase"
                                                        style="color: #ffffff; font-size: 20px; width: 25px"></i>
                                                    <div class="txt-btn-animation">
                                                        <span>Experience</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item text-center">
                                                <a class="nav-link d-flex justify-content-center align-items-center  animation-btn"
                                                    style="border-radius: 50px; background-color: #DDDDDD"
                                                    href="#">
                                                    <i class="fa-regular fa-file"
                                                        style="color: #ffffff; font-size: 20px; width: 25px"></i>
                                                    <div class="txt-btn-animation">
                                                        <span>Portofolio</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                        </div>
                    </div>
                    <div class="col-md-9 my-auto">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>


        {{--  --}}


        <script>
            function resize() {
                if ($(window).width() < 992) {
                    $('.container').removeClass('vh-100').addClass(["mt-5", "pt-2"]);
                    $('.data').addClass(["d-flex", "align-items-center", "justify-content-center", "text-center"]);
                } else {
                    $('.container').addClass('vh-100').removeClass(["mt-5", "pt-2"]);
                    $('.data').removeClass(["d-flex", "align-items-center", "justify-content-center", "text-center"]);
                }
            }

            //check resize the web
            $(window).on('resize', function() {
                resize()
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>

</html>
