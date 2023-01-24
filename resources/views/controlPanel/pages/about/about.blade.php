@extends('controlPanel.theme.theme')
@section('css')
@endsection
@section('title')
    About section
@endsection()
@section('breadcrumb', 'About section')
@section('breadcrumb-data')
    <li class="breadcrumb-item">
        <a href="" class="text-muted">
            Main section
        </a>
    </li>
@stop
@include('controlPanel.theme.layout.msgError')
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-chat-1 text-primary"></i>
            </span>
                <h3 class="card-label">
                    About
                </h3>
            </div>

        </div>
        <div class="card-body">
            <form class="form" action="\updateaboutus" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Who We Are :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="about_us" id="about_us"
                                          class="form-control form-control-solid mb-3 mb-lg-0">{{$aboutus->about_us ?? ''}}</textarea>

                                <!--end::Input-->
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">The Vision :</label>
                                <!--end::Label-->
                                <!--begin::Input-->


                                <textarea name="Vision" id="Vision"
                                          class="form-control form-control-solid mb-3 mb-lg-0"> {{$aboutus->Vision ?? ''}}</textarea>
                                <!--end::Input-->
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">History :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="History" id="History"
                                          class="form-control form-control-solid mb-3 mb-lg-0">{{$aboutus->History ?? ''}}</textarea>
                                <!--end::Input-->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer left">
                    <button type="submit" class="btn btn-primary mr-2" data-kt_update_minsectio_action="submit">Update
                    </button>
                </div>
            </form>


            <!--end::Datatable-->
        </div>
    </div>
@endsection

@section('js')


@endsection

@section('script')



@endsection
