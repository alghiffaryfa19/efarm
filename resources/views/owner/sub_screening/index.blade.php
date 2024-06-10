@extends('layouts.new_owner')
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
                                <a href="{{route('start_screening.owner', $screening->id)}}" type="button" class="mb-3 btn btn-success">
                                    Start Screening
                                  </a>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Photo
                                                </th>
                                                <th>
                                                    Desc
                                                </th>
                                                <th>
                                                    Desc
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sub_screening as $item)
                                                <tr>
                                                    <td>
                                                        <img src="{{asset('uploads/'.$item->photo)}}" class="img-fluid">
                                                    </td>
                                                    <td>
                                                        {{$item->disease->name}}
                                                    </td>
                                                    <td>
                                                        {{$item->disease->id_name}}
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
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
                                <h4>Rekomendasi Pengobatan</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Disease
                                                </th>
                                                <th>
                                                    Penyakit
                                                </th>
                                                <th>
                                                    Rekomendasi
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ds as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->id_name}}</td>
                                                <td>
                                                    <ul>
                                                        @foreach ($item->recommendations as $rc)
                                                        <li>
                                                            {{$rc->recommendation}}
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>
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
