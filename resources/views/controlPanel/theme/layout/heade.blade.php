<!DOCTYPE html>
<!--begin::********************************* Head ********************************-->
<html direction="ltr" dir="ltr" style="direction: ltr">
<!--begin::Head-->
<head>
    <title>@yield('page_Title')</title>
    <meta name="description" content="@yield('page_Description_Tag','description')" />
    <meta name="keywords" content="@yield('page_Keyword_Tag','keyword')" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />

    <!--begin::Shortcut icon-->
    <link rel="shortcut icon" href="{{ url('assets/logo/mohicon.png')}}" />

    <!--end::Shortcut icon-->

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
{{--     <link href="{{url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />--}}
{{--     <link href="{{url('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" /> --}}
    @yield('css')
    <!--end::Page Vendor Stylesheets-->
    <!--end::Global Stylesheets Bundle-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--end::********************************* Head ********************************-->
