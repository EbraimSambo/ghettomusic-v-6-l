@props(['error'])
@if(!is_null($error))
    @error($error)
        <p {{ $attributes->merge(['class' => 'danger']) }}> {{$message}} </p>
    @enderror    
@endif
