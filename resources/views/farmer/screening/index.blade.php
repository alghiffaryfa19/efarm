@extends('layouts.new_farmer')
@section('title', 'Screening')
@section('contents')
    <!--begin::Toolbar-->
    <div class="py-5 toolbar pb-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="flex-wrap container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="my-1 text-white d-flex fw-bold fs-3">Screening</h1>
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
                                <a href="{{route('screening.create')}}" type="button" class="mb-3 btn btn-success">
                                    Add Screening
                                  </a>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Plant
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                                <th>
                                                    Screening
                                                </th>
                                                {{-- <th>
                                                    Edit
                                                </th> --}}
                                                <th>
                                                    Delete
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($screening as $item)
                                                <tr>
                                                    <td>
                                                        {{$item->plant->name}}
                                                    </td>
                                                    <td>
                                                        {{$item->date_time}}
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="{{route('sub_screening', $item->id)}}">Sub Screening</a>
                                                    </td>
                                                    {{-- <td>
                                                        <a class="btn btn-info" href="{{route('screening.edit', $item->id)}}">Edit</a>
                                                    </td> --}}
                                                    <td>
                                                        <form action="{{route('screening.destroy', $item->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
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
