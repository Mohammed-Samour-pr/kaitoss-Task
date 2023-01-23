@section('actions')
    <div class="d-flex align-items-center">
        <!--begin::Daterange-->
          @yield('toolAction')
        <span  class="btn btn-light btn-sm font-weight-bold mr-2" id="kt_dashboard_date" data-toggle="tooltip" title="" data-placement="top">
            <span class="text-muted font-weight-bold mr-2" id="kt_dashboard_date_title">التاريخ :</span>
            <span class="text-primary font-weight-bold" id="kt_dashboard_date_date">{{\carbon\Carbon::now('Asia/Hebron')->format('d-m-Y')}}</span>
        </span >
        <!--begin::Actions-->
        <a href="#" onclick="window.print();" title="طباعة" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">
            <i class="flaticon2-fax text-muted"></i>
        </a>
{{--        <a href="#" class="btn btn-light btn-hover-primary btn-sm btn-icon mr-2">--}}
{{--            <i class="flaticon2-settings text-muted"></i>--}}
{{--        </a>--}}
        @yield('action')
        <!--end::Actions-->
    </div>
@endsection
