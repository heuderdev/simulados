@props(['link' => '','text'=> '', 'icon' => ''])

<a href="{{ route($link) }}" wire:navigate  class="relative  flex flex-col bg-base-300 rounded-lg justify-center items-center hover:bg-base-200 cursor-pointer py-12 border-t-2 border-triade-ciano">
    {{ $slot }}
    <x-svg class="w-14 h-14 fill-current text-analoga-rosa-claro" nome="{{$icon}}" />
    <div class="text-xs mt-2 font-bold">{{$text}}</div>  
    
    <div class="absolute bottom-0 right-0 w-5 h-5 border-b-2 border-r-2 border-triade-ciano rounded-br-lg"></div>

</a>