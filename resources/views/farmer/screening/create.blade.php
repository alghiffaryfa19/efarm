@extends('layouts.new_farmer')
@section('title', 'Add Screening')
@section('contents')
    <!--begin::Toolbar-->
    <div class="py-5 toolbar pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="flex-wrap container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="my-1 text-white d-flex fw-bold fs-3">Add Screening</h1>
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
                                <form method="post" action="{{ route('screening.store') }}">
                                    @csrf
                                    <div class="card-body">

                                        <div class="mb-5 form-group">
                                            <label>Date <span class="text-danger">*</span></label>
                                            <input name="date_time" required type="datetime-local" class="form-control">

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelect1">Plant <span class="text-danger">*</span></label>
                                            <select class="form-control" required name="plant_id" id="plant_id">
                                                @foreach ($plants as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
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
