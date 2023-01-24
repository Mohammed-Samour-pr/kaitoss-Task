@extends('controlPanel.theme.theme')
@section('css')
@endsection
@section('title')
    blog section
@endsection()
@section('breadcrumb', 'services section')
@section('breadcrumb-data')
    <li class="breadcrumb-item">
        <a href="" class="text-muted">
            blog section
        </a>
    </li>
@stop
@include('controlPanel.theme.layout.msgError')
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#Addservices">
                    <span class="svg-icon svg-icon-2">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                                  height="2" rx="1"
                                                                  transform="rotate(-90 11.364 20.364)"
                                                                  fill="currentColor"/>
															<rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                                  fill="currentColor"/>
														</svg>
													</span>
                    <!--end::Svg Icon-->ADD
                </button>
            </div>

        </div>
        <div class="card-body">
            <table class="table table-row-bordered gy-5">
                <thead>
                <tr class="fw-semibold fs-6 text-muted">
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blog as $s)
                    <tr>
                        <td>{{$s->title}}</td>
                        <td>{{$s->description}}</td>
                        <td><div class="col-lg-6">
                                <div class="fv-row mb-5">
                                    <img src="img_blog/{{$s->image ?? ''}}"
                                         width="250px">
                                </div>
                            </div></td>
                        <td>
                            <div class="d-flex gap-2">
                                <div class="edit">
                                    <button class="btn btn-sm btn-secondary waves-effect waves-light"
                                            data-bs-toggle="modal"
                                            data-bs-target="#Updateservices">Update
                                    </button>
                                </div>
                                <div class="remove">
                                    <button class="btn btn-sm btn-danger waves-effect waves-light"
                                            data-bs-toggle="modal"
                                            data-bs-target="#Deleteservices">Delete
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <div class="modal fade" id="Updateservices" data-backdrop="static" tabindex="-1" role="dialog"
                         aria-labelledby="staticBackdrop"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel ">Update Services</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="{{ route('blog.update','test')}}" method="post"
                                          enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <!--begin::Label-->
                                                        <label class="required fw-semibold fs-6 mb-2">Title :</label>
                                                        <!--end::Label-->
                                                        <input type="hidden" name="id" value="{{$s->id ?? ''}}">
                                                        <!--begin::Input-->
                                                        <textarea name="title" id="title"
                                                                  class="form-control form-control-solid mb-3 mb-lg-0">{{$s->title ?? ''}}</textarea>

                                                        <!--end::Input-->
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <!--begin::Label-->
                                                        <label class="required fw-semibold fs-6 mb-2">The description
                                                            :</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <textarea name="description" id="description"
                                                                  class="form-control form-control-solid mb-3 mb-lg-0">{{$s->description ?? ''}}</textarea>

                                                        <!--end::Input-->
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <div class="fv-row mb-5">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Image
                                                                :</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="file" name="image" id="image"
                                                                   class="form-control form-control-solid mb-3 mb-lg-0"
                                                                   placeholder="Picture "/>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>



                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-footer left">
                                            <button type="submit" class="btn btn-primary mr-2"
                                                    data-kt_update_minsectio_action="submit">
                                                Update
                                            </button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="Deleteservices" data-backdrop="static" tabindex="-1" role="dialog"
                         aria-labelledby="staticBackdrop"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel ">Delete Services</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="form" action="{{ route('blog.destroy','test')}}" method="post"
                                          enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @method('Delete')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <!--begin::Label-->
                                                        <label class="required fw-semibold fs-6 mb-2">Title :</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="hidden" name="id" value="{{$s->id ?? ''}}">
                                                        <input type="text" name="title" id="title"
                                                               value="{{$s->title ?? ''}}"
                                                               class="form-control form-control-solid mb-3 mb-lg-0"
                                                               placeholder="Heading of the main section "/>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer left">
                                            <button type="submit" class="btn btn-primary mr-2"
                                                    data-kt_update_minsectio_action="submit">
                                                Delete
                                            </button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="modal fade" id="Addservices" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel ">Update Services</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="card-body">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <div class="fv-row mb-5">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">Title :</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea name="title" id="title"
                                                  class="form-control form-control-solid mb-3 mb-lg-0">{{$aboutus->History ?? ''}}</textarea>

                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="fv-row mb-5">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2">The description :</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea name="description" id="description"
                                                  class="form-control form-control-solid mb-3 mb-lg-0">{{$aboutus->History ?? ''}}</textarea>

                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-5">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2">Image :</label>
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

                            </div>
                        </div>
                        <div class="card-footer left">
                            <button type="submit" class="btn btn-primary mr-2" data-kt_update_minsectio_action="submit">
                                Update
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>





@endsection

@section('js')


@endsection

@section('script')



@endsection
