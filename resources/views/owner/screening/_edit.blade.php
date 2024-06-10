<x-farmer-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Screening') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('screening.update', $screening->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="date" :value="__('Date')" />
                            <x-text-input id="date" name="date_time" value="{{$screening->date_time}}" type="datetime-local" class="block mt-1 w-full" />
                        </div>

                        <div>
                            <x-input-label for="plant" :value="__('Plant')" />
                            <select class="block mt-1 w-full" name="plant_id" id="plant_id">
                                @foreach ($plants as $item)
                                <option @if ($item->id == $screening->plant_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="flex gap-4 items-center">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-farmer-layout>
