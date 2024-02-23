@props(['disabled'=> false,'content'])
<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'input']) !!}>{{$content ?? $slot }}</textarea>