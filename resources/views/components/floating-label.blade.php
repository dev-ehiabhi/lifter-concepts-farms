@props([
    'disabled' => false,
    'required' => false,
    'autofocus' => false,
    'autocomplete' => '',
    'label' => '',
    'type' => '',
    'name' => ''
    ])

{{-- <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label> --}}

<div class="relative z-0 mb-6 w-full group">
    <input name="{{ $name }}" 
        type="{{ $type }}" 
        autocomplete="{{ $autocomplete }}" 
        {{ $disabled ? 'disabled' : '' }} 
        {{ $required ? 'required' : '' }}  
        {{ $autofocus ? 'autofocus' : '' }}  
        {!! $attributes->merge(['class'=>'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer']) !!} 
        placeholder=" " />
    <label for="floating" {{ $attributes->merge(['class'=>'absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6']) }}>
        {{ $label ?? $slot }}
    </label>
</div>