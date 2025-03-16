<x-layout>
  <x-slot name="title">Create Job</x-slot>
  <h1>{{$title}}</h1>
  <form action="/jobs" method="post">
    @csrf
    <input type="text" name="title" id="title">
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <button type="submit" class="btn bg-sky-500 hover:bg-sky-700">submit</button>
  </form>
</x-layout>
