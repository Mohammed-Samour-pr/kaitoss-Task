@extends('controlPanel.theme.theme')
@section('css')
@endsection
@section('title')
    setting section
@endsection()
@section('breadcrumb', 'About section')
@section('breadcrumb-data')
    <li class="breadcrumb-item">
        <a href="" class="text-muted">
            setting section
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
                    setting
                </h3>
            </div>

        </div>
        <div class="card-body">
            <form class="form" action="{{route('setting.update','test')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Email :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="email"
                                          class="form-control form-control-solid mb-3 mb-lg-0">{{$settings->email ?? ''}}</textarea>
                                <!--end::Input-->
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">The Phone :</label>
                                <!--end::Label-->
                                <!--begin::Input-->


                                <textarea name="phone"
                                          class="form-control form-control-solid mb-3 mb-lg-0"> {{$settings->phone ?? ''}}</textarea>
                                <!--end::Input-->
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">
                                    Address :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="address"
                                          class="form-control form-control-solid mb-3 mb-lg-0">{{$settings->Address ?? ''}}</textarea>
                                <!--end::Input-->
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Schedule :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="schedule"
                                          class="form-control form-control-solid mb-3 mb-lg-0">{{$settings->Schedule  ?? ''}}</textarea>
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
