<x-layout>
  <x-slot name="title">Jobs list</x-slot>
  <h1>{{$title}}</h1>
  <ul>
    @if ($jobs)
      @foreach ($jobs as $job)
      <li>{{$job}}</li>
      @endforeach
    @else
        <p>No Jobs</p>
    @endif
  </ul>
</x-layout>
