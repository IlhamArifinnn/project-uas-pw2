@extends('admin.layouts.app')

@section('content')
<div class="grid grid-cols-12 gap-5">
    <div class="col-span-12">
        <h4 class="mb-5 mb-sm-0 text-lg font-semibold grow text-gray-800 dark:text-gray-100">Update Parkings</h4>

        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body">
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <form action="{{ route('admin.parkings.update', $parking->id) }}" method="post">
                            @csrf
                            @method('patch')

                            <div class="mb-4">
                                <label for="area_id" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">Area</label>
                                <select id="area_id" name="area_id" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100">
                                    <option selected disabled>pilih area</option>
                                    @forelse ($areas as $area)
                                    <option @selected($area->id === $parking->area_id) value="{{ $area->id }}">{{ $area->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @error('area_id')
                                <p class="text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="name" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">name</label>
                                <input id="name" name="name" type="text" value="{{ $parking->name }}" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100">
                                @error('name')
                                <p class="text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="capacity" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">capacity</label>
                                <input id="capacity" name="capacity" type="number" value="{{ $parking->capacity }}" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100">
                                @error('capacity')
                                <p class="text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="desc" class="block font-medium text-gray-700 dark:text-gray-100 mb-2">desc</label>
                                <input id="desc" name="desc" type="text" value="{{ $parking->desc }}" class="w-full rounded border-gray-100 placeholder:text-sm focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100">
                                @error('desc')
                                <p class="text-red-600 mt-2">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="btn py-2 px-5 text-15 text-white bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600 dark:border-transparent">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
