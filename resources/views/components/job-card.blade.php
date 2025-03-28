@props(['job'])
<div class="rounded-lg shadow-md bg-white p-4">
  <div class="flex flex-col items-center space-between gap-4">
    <img src="/images/{{$job->company_logo}}" alt="{{$job->company_name}}" class="w-14">
    <div>
      <h2 class="text-xl font-semibold">{{$job->title}}</h2>
      <p class="text-sm text-gray-500">{{$job->job_type}}</p>
    </div>
    <p class="text-gray-700 text-lg mt-2">
      {{Str::limit($job->description, 100)}}
    </p>
    <ul class="my-4 bg-gray-100 p-4 rouded">
      <li class="mb-2"><strong>Salary:</strong> ${{number_format($job->salary)}}</li>
      <li class="mb-2">
        <strong>Location:</strong> {{$job->city}}, {{$job->state}}
        @if($job->remote)
        <span class="text-xs bg-green-500 text-white rounded-full px-2 py-ml-2">Remote</span>
        @else
        <span class="text-xs bg-red-500 text-white rounded-full px-2 py-ml-2">On-Site</span>
        @endif
      </li>
      <li class="mb-2">
        <strong>Tags:</strong> {{str_replace(',',', ',$job->tags)}}
      </li>
    </ul>
    <a href="{{route('jobs.show', $job->id)}}" 
    class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium 
    text-indigo-700 bg-indigo-100">Details</a>
  </div>
  
</div>
