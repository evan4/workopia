@props(['active' => false, 'url' => '/', 'icon' => null, 'mobile' => false, 'menuItem' => 0])
@if($mobile)
<a href="{{$url}}" class="block rounded-md bg-gray-500 px-3 py-2 text-base font-medium text-white 
{{ $active ? 'bg-gray-900' : ''}}"role="menuitem" 
tabindex="-1" id="user-menu-item-{{$menuItem}}">
  @if($icon)
  <i class="fa-solid fa-{{$icon}} mr-1"></i>
  @endif
  {{$slot}}
</a>
@else
<a href="{{$url}}" class="rounded-md {{ $active ? 'bg-gray-900' : ''}} px-3 py-2 text-sm font-medium text-white">
  @if($icon)
  <i class="fa-solid fa-{{$icon}} mr-1"></i>
  @endif
    {{$slot}}
</a>
@endif
