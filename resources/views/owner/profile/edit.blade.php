@extends('layouts.new_owner')
@section('title', 'Profile')
@section('contents')
    <!--begin::Toolbar-->
    <div class="py-5 toolbar pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="flex-wrap container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="my-1 text-white d-flex fw-bold fs-3">Profile</h1>
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
                                <h3>Update your account's profile information and email address.</h3>
                                <form method="post" action="{{ route('owner.profile.update') }}">
                                    @csrf
                                    @method('patch')
                                    <div class="card-body">

                                        <div class="mb-5 form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input name="name" required type="text" value="{{old('name', $user->name)}}" class="form-control">

                                        </div>

                                        <div class="mb-5 form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input name="email" required type="email" value="{{old('email', $user->email)}}" class="form-control">

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
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">

                    <!--begin::Engage Widget 11-->
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="p-0 card-body d-flex">
                            <div class="p-20 pb-40 flex-grow-1 card-rounded bgi-no-repeat">
                                <h3>Update Password. Ensure your account is using a long, random password to stay secure.</h3>
                                <form method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">

                                        <div class="mb-5 form-group">
                                            <label>Current Password <span class="text-danger">*</span></label>
                                            <input name="current_password" required type="password" class="form-control">

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
