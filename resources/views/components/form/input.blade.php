@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded
border-purple-400 focus:border-purple-500 focus:ring-indigo-500 sm:text-sm']) !!}>