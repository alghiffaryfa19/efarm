<x-farmer-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Start Screening') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" enctype="multipart/form-data" action="{{route('save_screening', $screening->id)}}" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <div class="upload-btn-wrapper">
                                <button class="btn upload-file font-weight-500">
                                    <span class="upload-btn">
                                        <i class="pb-2 material-icons d-block font-50">cloud_upload</i>
                                        <p id="choose-text-1">Choose Image of Crop leaf</p>
                                    </span>
                                    <span class="upload-select-button" id="blankFile-1">
                                        *Supports .png, .jpg, .jpeg, .jfif
                                    </span>
                                    <span class="success-1">
                                        <i class="material-icons text-success">check</i>
                                    </span>
                                </button>
                                <input type="file" name="uploadImage" id="uploadImage">
                            </div>

                        </div>
                        <div class="box">
                            <!-- Image Box which displays the Uploaded image -->
                            <img src="" alt="" id="image" width="224" height="224">
                        </div>
                        <div class="box box-result">
                            <!--  Simple div which shows the Model Loading Status  -->
                            <div class="init_status"></div>
                            <div>
                                <div>
                                    <x-input-label for="date" :value="__('Your Plant is infected with :')" />
                                    <x-text-input readonly id="description" name="description" type="text" class="block mt-1 w-full pred_class" />
                                </div>
                            </div>
                            {{-- <div class="accuracy">
                                <!--  Simple progress bar which indicates the accuracy for the predicted class -->
                                <div class="progress" id="progress">
                                    <div class="inner">

                                    </div>
                                  </div>
                            </div> --}}
                        </div>
                        <p style="padding : 10px;"> CONFIDENCE : <b><span class="confidence"></span></b> %</p>





                        <div class="flex gap-4 items-center">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-farmer-layout>
