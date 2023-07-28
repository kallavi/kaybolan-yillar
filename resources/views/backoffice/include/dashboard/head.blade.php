<!--begin::Head-->

<head>
    <title>İstanbul'un Kaybolan Yılları - Yönetim Paneli</title>
    <meta charset="utf-8" />
    <meta name="description" content="İstanbul'un Kaybolan Yılları - Yönetim Paneli " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('backoffice/assets/media/logos/favicon.ico') }}" />
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
