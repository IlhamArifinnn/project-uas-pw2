@extends('admin.layouts.app')

@section('content')
<div class="grid grid-cols-12">
    <div class="col-span-12">
        <h4 class="mb-5 mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">parkings</h4>

        <div class="my-5">
            <a href="{{ route('admin.parkings.create') }}" class="btn py-2 px-5 text-15 text-green-500 bg-green-50 border-green-50 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-500/30 active:text-white active:bg-green-600 active:border-green-600 dark:border-transparent">
                create
            </a>
        </div>

        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 dark:text-gray-100 uppercase bg-gray-50/50 dark:bg-zinc-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    no.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    area
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    capacity
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    desc
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($parkings as $parking)
                            <tr class="bg-white border-b border-gray-50 hover:bg-gray-50/50 dark:bg-zinc-700/50 dark:border-zinc-600">
                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                    {{ $parking->area->name }}
                                </td>
                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                    {{ $parking->name }}
                                </td>
                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                    {{ $parking->capacity }}
                                </td>
                                <td class="px-6 py-4 dark:text-zinc-100/80">
                                    {{ $parking->desc }}
                                </td>
                                <td class="flex gap-3 px-6 py-4">
                                    <a href="{{ route('admin.parkings.edit', ['parking' => $parking->id]) }}" class="btn py-1.5 px-4 text-13 text-sky-500 bg-sky-50 border-sky-50 hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 focus:ring focus:ring-sky-500/30 active:text-white active:bg-sky-600 active:border-sky-600 dark:border-transparent">
                                        edit
                                    </a>
                                    <form id="delete-{{ $parking->id }}" action="{{ route('admin.parkings.destroy', ['parking' => $parking->id]) }}" method="post" class="hidden">
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <button type="submit" form="delete-{{ $parking->id }}" onclick="return confirm('are you sure?')" class="btn py-1.5 px-4 text-13 text-red-500 bg-red-50 border-red-50 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:text-white active:bg-red-600 active:border-red-600 dark:border-transparent">
                                        delete
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr class="bg-white border-b border-gray-50 dark:bg-zinc-700/50 dark:border-zinc-600">
                                <td colspan="8" class="px-6 py-4 text-center dark:text-zinc-100/80">
                                    no data!
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
