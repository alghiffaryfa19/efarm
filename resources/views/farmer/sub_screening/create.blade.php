@extends('layouts.new_farmer')
@section('title', 'Start Screening')
@section('contents')
    <!--begin::Toolbar-->
    <div class="py-5 toolbar pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="flex-wrap container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="my-1 text-white d-flex fw-bold fs-3">Start Screening</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->

                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">

                    <!--begin::Engage Widget 11-->
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="p-0 card-body d-flex">
                            <div class="p-20 pb-40 flex-grow-1 card-rounded bgi-no-repeat">
                                <form method="post" enctype="multipart/form-data" action="{{ route('save_screening', $screening->id) }}">
                                    @csrf
                                    <div class="card-body">

                                        <div class="mb-5 form-group">
                                            <div class="upload-btn-wrapper">
                                                <label for="exampleSelect1">Upload a picture of the diesase leave : </label>
                                                <span class="upload-select-button" id="blankFile-1">
                                                    *Supports .png, .jpg, .jpeg, .jfif
                                                </span>
                                                <input type="file" name="uploadImage" class="form-control" id="uploadImage">
                                                <span class="success-1">
                                                    Check
                                                </span>
                                            </div>

                                        </div>

                                        <div class="form-group box">
                                            <img src="" alt="" id="image" width="224" height="224">
                                        </div>

                                        <div class="form-group box box-result">
                                            <div class="init_status"></div>
                                            <div>
                                                <div>
                                                    <label for="exampleSelect1">Your plant is infected with : </label>
                                                    <input type="text" required class="form-control pred_class" readonly id="description" name="description">

                                                </div>
                                            </div>
                                            <div class="inner">

                                            </div>
                                            <p style="padding : 10px;"> CONFIDENCE : <b><span class="confidence"></span></b> %</p>
                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="mr-2 btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end::Engage Widget 11-->
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->

        </div>
        <!--end::Post-->
    </div>
    <!--end::Container-->
@endsection
