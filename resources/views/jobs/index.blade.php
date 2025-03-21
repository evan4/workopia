<x-layout>
  <x-slot name="title">Jobs list</x-slot>
  <h1>{{$title}}</h1>
  <ul>
    @if ($jobs)
      @foreach ($jobs as $job)
      <li>
        <a href="{{route('jobs.show', $job->id)}}">{{$job->title}}</a>
      </li>
      @endforeach
    @else
        <p>No Jobs</p>
    @endif
  </ul>
</x-layout>
