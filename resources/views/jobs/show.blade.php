<x-layout>
  <x-slot name="title">Job</x-slot>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <section class="md:col-span-3">
      <div class="rouded-lg shadow-md bg-white p-3">
        <div class="flex justify-between items-center">
          <a href="{{route('jobs.index')}}" class="block text-blue-700">
            <i class="fa fa-arrow-alt-circle-left"></i> Back To Listings
          </a>
          <div class="flex space-x-3 ml-4">
            <a href="" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rouded">Edit</a>
            <form method="POST">
              <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rouded">Delete</button>
            </form>
          </div>
        </div>
        <div class="p-4">
          <h2 class="text-xl font-semibold">{{$job->title}}</h2>
          <p class="text-gray-700 text-lg mt-2">{{$job->description}}</p>
          <ul class="my-4 bg-gray-100 p-4">
            <li class="mb-2">
              <strong>Job Type:</strong> {{$job->job_type}}
            </li>
            <li class="mb-2">
              <strong>Remote:</strong> {{$job->remote ? 'Yes' : 'No'}}
            </li>
            <li class="mb-2">
              <strong>Salary:</strong> ${{number_format($job->salary)}}
            </li>
            <li class="mb-2">
              <strong>Location:</strong> {{$job->city}}, {{$job->state}}
            </li>
            <li class="mb-2">
              <strong>Tags:</strong> {{str_replace(',',', ',$job->tags)}}
            </li>
          </ul>
        </div>
      </div>
      <div class="container mx-auto p-4">
        <h2 class="text-xl font-semibold mb-4">Job Details</h2>
        <div class="rounded-lg shadow-md bg-white p-4">
          <h3 class="text-lg font-semibold mb-2 text-blue-500">Job Requirements</h3>
          <p>{{$job->requirements}}</p>
          <h3 class="text-lg font-semibold mb-2 text-blue-500">Benefits</h3>
          <p>{{$job->benefits}}</p>
        </div>
        <p class="my-5">Put "Job Application" as the subject of your email</p>
        <a href="mailto:{{$job->contact_email}}" class="block 2-full text-center px-5 py-2.5 shadow-sm runded border 
        text-base font-medium cursor-pointer text-indigo-700 bg-indigo-100 hover:bg-indigo-200">Apply Now</a>
      </div>
      <div class="bg-white p-6 rounded-lg shodow-md mt-6">
        <div id="map"></div>
      </div>
    </section>
    <aside class="bg-white p-3 rounded-lg shodow-md">
      <h3 class="text-xl text-center mb-4 font-bold">Company Info</h3>
      <img src="/images/{{$job->company_logo}}" alt="{{$job->company_name}}" class="w-full rouded-lg mb-4 m-auto">
      <h4 class="text-lg font-bold">{{$job->company_name}}</h4>
      <p class="text-gray-700 text-lg my-3">{{Str::limit($job->description, 100)}}</p>
      <a href="{{$job->company_website}}" target="_blank" class="text-blue-500">Visit Website</a>
      <a href="" class="mt-10 bg-blue-500 hover:bg-blue-500 text-white font-bold w-full py2 px-4 rounded-full flex items-center justify-center">
        <i class="fa fa-bookmark mr-3"></i> Bookmark
      </a>
    </aside>
  </div>
</x-layout>
