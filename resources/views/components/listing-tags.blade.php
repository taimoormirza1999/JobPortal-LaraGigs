@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
  @foreach($tags as $tag)
  <li class="flex align-items-center justify-center bg-black text-white rounded-full py-2  px-3 mr-2 text-xs hover:shadow-2xl">
    <a href="/?tag={{$tag}}">{{$tag}}</a>
  </li>
  @endforeach
</ul>
