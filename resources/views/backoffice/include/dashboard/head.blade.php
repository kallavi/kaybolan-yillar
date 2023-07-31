<!--begin::Head-->

<head>
    <title>İstanbul'un Kaybolan Yılları - Yönetim Paneli</title>
    <meta charset="utf-8" />
    <meta name="description" content="İstanbul'un Kaybolan Yılları - Yönetim Paneli " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset ('apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset ('apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset ('apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset ('apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset ('apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset ('apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset ('apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset ('android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset ('favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset ('manifest.json')}}">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('backoffice/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backoffice/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('backoffice/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backoffice/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!--end::Global Stylesheets Bundle-->

    <style>
        .upload-container {
            position: relative;
            margin-bottom: 3rem;
        }

        .upload-container input {
            border: 1px solid #92b0b3;
            background: #f1f1f1;
            outline: 2px dashed #009ef7;
            outline-offset: -10px;
            padding:  6rem 3rem 6rem 3rem;
            text-align: center !important;
            width: -webkit-fill-available;
          
        }

        .upload-container input:hover {
            background: #ddd;
        }

        .upload-container:before {
            position: absolute;
            bottom: 3rem;
            left: 4rem;
            content: " Resimlerinizi bu alana sürükleyip bırakabilirsiniz ";
            color: #009ef7;
            font-weight: 900;
            font-size: 1.2rem;
            
        }

        .upload-btn {
            margin-left: 300px;
            padding: 7px 20px;
        }
    </style>
</head>
<!--end::Head-->
