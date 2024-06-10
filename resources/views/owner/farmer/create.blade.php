@extends('layouts.new_owner')
@section('title', 'Add Account')
@section('contents')
    <!--begin::Toolbar-->
    <div class="py-5 toolbar pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="flex-wrap container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="my-1 text-white d-flex fw-bold fs-3">Add Account</h1>
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
                                <form method="post" action="{{ route('farmer.store') }}">
                                    @csrf
                                    <div class="card-body">

                                        <div class="mb-5 form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input name="name" required type="text" class="form-control">

                                        </div>

                                        <div class="mb-5 form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input name="email" required type="email" class="form-control">

                                        </div>


                                        <div class="form-group">
                                            <label for="exampleSelect1">Role <span class="text-danger">*</span></label>
                                            <select class="form-control" required name="role_id" id="role_id">
                                                <option value="1">Owner</option>
                                 <option value="2">Farmer</option>
                                            </select>
                                        </div>

                                        <div class="mb-5 form-group">
                                            <label>New Password <span class="text-danger">*</span></label>
                                            <input name="password" required type="password" class="form-control">

                                        </div>

                                        <div class="mb-5 form-group">
                                            <label>Confirm Password <span class="text-danger">*</span></label>
                                            <input name="password_confirmation" required type="password" class="form-control">

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
