@extends('layout')

@section('content')
    <style>
        .nav-link.animation-btn {
            background-color: #DDDDDD;
        }

        .education .nav-link.animation-btn {
            background-color: #F05454 !important;
        }

        .education-title {
            font-size: 24px;
            font-weight: 700;
            color: #DDDDDD;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .education-item,
        .resume-item {
            border-left: 2px solid #F05454;
            padding-left: 20px;
            margin-bottom: 20px;
        }

        .education-item h4,
        .resume-item h4 {
            font-size: 18px;
            font-weight: 600;
            color: #F05454;
            margin-top: 0;
        }

        .education-item h5,
        .resume-item h5 {
            font-size: 16px;
            font-weight: 600;
            color: #DDDDDD;
            margin-top: 5px;
        }

        .education-item p,
        .resume-item p {
            font-size: 14px;
            color: #DDDDDD;
            margin-top: 5px;
        }
    </style>


    <div class="row">
        <h3 class="education-title" style="color: #DDDDDD">Education</h3>
        <div class="education-item" style="color: #DDDDDD">
            <h4>SMAN 95 Jakarta Barat</h4>
            <h5>MIPA</h5>
            <p><em>2016 - 2019</em></p>
        </div>

        <div class="resume-item">
            <h4>Binus University</h4>
            <h5>Computer Science | Bachelor Degree</h5>
            <p><em>2019 - 2023</em></p>
        </div>
    </div>
@endsection
