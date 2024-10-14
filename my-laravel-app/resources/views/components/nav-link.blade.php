@props(['active' => false])
<a 
    style="{{$active ? 'color: blue' : 'color: white'}}"
    class="nav-link btn btn-outline-primary me-2"
    aria-current="{{$active ? 'page' : false}}"
    {{$attributes}}>
    {{$slot}}
</a>