@props(['bgClass' => 'bg-yellow-900', 'hoverClass' => 'hover:bg-yellow-700', 'textClass' => 'text-white', 
'icon' => null, 'url' => '/', 'mobile' => false, 'menuItem' => 0])
@if($mobile)
<a href="{{$url}}" 
class="rounded-md block {{$bgClass}} {{$hoverClass}} px-3 py-2 text-sm font-medium transition duration-300 
{{$textClass}}" 
role="menuitem" tabindex="-1" id="user-menu-item-{{$menuItem}}">
  @if($icon)
  <i class="fa-solid fa-{{$icon}} mr-1"></i>
  @endif
  {{$slot}}
</a>
@else
<a href="{{$url}}" 
class="rounded-md {{$bgClass}} {{$hoverClass}} px-3 py-2 text-sm font-medium transition duration-300 {{$textClass}}">
@if($icon)
  <i class="fa-solid fa-{{$icon}} mr-1"></i>
@endif
  {{$slot}}
</a>
@endif
