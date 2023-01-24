@extends('controlPanel.theme.theme')
@section('css')
@endsection
@section('title')
    Dashboard
@endsection()
@section('breadcrumb', ' Dashboard')
@section('breadcrumb-data')
    <li class="breadcrumb-item">
        <a href="" class="text-muted">
            Dashboard
        </a>
    </li>
@stop
@section('action')
    @include('controlPanel.tools.exportFiles')
@endsection
@include('controlPanel.tools.actions')

@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-chat-1 text-primary"></i>
            </span>
                <h3 class="card-label">
                    Overview

                </h3>
            </div>
            <div class="card-toolbar">

            </div>
        </div>
        <div class="card-body">


        </div>
        <div class="card-footer d-flex justify-content-end">

        </div>
    </div>
@endsection

@section('js')
@endsection

@section('script')


@endsection
