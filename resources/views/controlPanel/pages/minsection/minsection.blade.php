@extends('controlPanel.theme.theme')
@section('css')
@endsection
@section('title')
    Main section
@endsection()
@section('breadcrumb', 'Main section')
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
                    Main section
                </h3>
            </div>

        </div>
        <div class="card-body">
            <form class="form" action="\update" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Heading of the main section :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="title" id="title" value="{{$minsection->title ?? ''}}"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="Heading of the main section "/>
                                <!--end::Input-->
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">The description :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="description" id="description"
                                       value="{{$minsection->description ?? ''}}"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="The description "/>
                                <!--end::Input-->
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <div class="fv-row mb-5">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-2">Picture :</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="file" name="image" id="image"
                                           class="form-control form-control-solid mb-3 mb-lg-0"
                                           placeholder="Picture "/>
                                    <!--end::Input-->
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="fv-row mb-5">
                                    <img src="img_minsection/{{$minsection->image ?? ''}}" width="250px">
                                </div>
                            </div>


                        </div>


                        <div class="col-lg-12">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">video link :</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="video_link" id="video_link"
                                       value="{{$minsection->video_link ?? ''}}"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="video link "/>
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


            <!--begin::Wrapper-->
            <div class="d-flex flex-stack mb-5">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-2">...</span>
                    <input type="text" data-kt-docs-table-filter="search"
                           class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers"/>
                </div>
                <!--end::Search-->

                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip"
                            title="Coming Soon">
                        <span class="svg-icon svg-icon-2">...</span>
                        Filter
                    </button>
                    <!--end::Filter-->

                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" title="Coming Soon">
                        <span class="svg-icon svg-icon-2">...</span>
                        Add Customer
                    </button>
                    <!--end::Add customer-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                    </div>

                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
                        Selection Action
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Datatable-->
            <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                   data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
                        </div>
                    </th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Company</th>
                    <th>Payment Method</th>
                    <th>Created Date</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                </tbody>
            </table>
            <!--end::Datatable-->
        </div>
    </div>
@endsection

@section('js')


@endsection

@section('script')



@endsection
