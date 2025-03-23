<x-layout>
  <x-slot name="title">Jobs list</x-slot>
  <h1 class="text-2xl">{{$title}}</h1>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    @if ($jobs)
      @foreach ($jobs as $job)
        <x-job-card :job="$job"/>
      @endforeach
    @else
        <p>No Jobs</p>
    @endif
  </div>
    
</x-layout>
