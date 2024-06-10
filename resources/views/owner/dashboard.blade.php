@extends('layouts.new_owner')
@section('title','Dashboard')
@section('contents')
<!--begin::Toolbar-->
<div class="py-5 toolbar pb-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="flex-wrap container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="my-1 text-white d-flex fw-bold fs-3">Dashboard</h1>
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
                        <div class="p-20 pb-40 flex-grow-1 card-rounded bgi-no-repeat" style="background-position: calc(100% + 0.5rem) bottom; background-size: 50% auto; background-image: url({{asset('assets/media/svg/humans/custom-10.svg')}})">

                            <h2 class="pb-5 text-dark font-weight-bolder">Selamat Datang, {{auth()->user()->name}}</h2>

                            <p class="pb-5 text-dark-50 font-size-h5">
                                Sistem berbasis website yang dikembangkan untuk mempercepat dan meningkatkan akurasi dalam deteksi penyakit pada daun tanaman. Tujuannya juga mencakup bantuan kepada petani dalam mengatur komoditas pertanian mereka dan memudahkan pengelolaan waktu dalam aktivitas bisnis mereka, terutama terkait dengan pengendalian penyakit tanaman.
                            </p>


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
