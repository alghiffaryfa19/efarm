<x-owner-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Farmer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">



                <div class="p-6 text-gray-900">
                    <a href="{{route('farmer.create')}}" type="button" class="inline-flex gap-x-2 items-center px-4 py-3 text-sm font-semibold text-white bg-blue-600 rounded-lg border border-transparent hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-basic-modal">
                        Add Account
                      </a>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto -m-1.5">
                          <div class="inline-block p-1.5 min-w-full align-middle">
                            <div class="overflow-hidden">
                              <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                  <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Name</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Role</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Email</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-end">Edit</th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-end">Delete</th>
                                  </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @foreach ($farmer as $item)
                                    <tr>
                                        <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">{{$item->name}}</td>
                                         <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap">{{$item->role->name}}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap">{{$item->email}}</td>
                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                          <a href="{{route('farmer.edit', $item->id)}}" type="button" class="inline-flex gap-x-2 items-center text-sm font-semibold text-blue-600 rounded-lg border border-transparent hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                            <form action="{{route('farmer.destroy', $item->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex gap-x-2 items-center text-sm font-semibold text-blue-600 rounded-lg border border-transparent hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
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
                </div>
            </div>
        </div>
    </div>
</x-owner-layout>
