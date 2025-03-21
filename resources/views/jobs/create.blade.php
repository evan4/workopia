<x-layout>
  <x-slot name="title">Create Job</x-slot>
  <h1>{{$title}}</h1>
  <form action="/jobs" method="post">
    @csrf
    <div class="sm:col-span-4">
      <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
      <div class="mt-2">
        <div 
        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
          <input type="text" name="title" id="title" value="{{old('title')}}"
          class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Title" />
        </div>
        @error('title')
          <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
        @enderror
      </div>
    </div>

    <div class="col-span-full">
      <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
      <div class="mt-2">
        <textarea name="description" id="description" rows="3" value="{{old('description')}}"
        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
      </div>
      @error('description')
        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
      @enderror
    </div>

    <div class="col-span-full">
      <button type="submit" class="rounded-md bg-blue-500 px-4 py-2 text-sm font-semibold text-white opacity-100 focus:outline-none mt-2">submit</button>
    </div>
  </form>
</x-layout>
