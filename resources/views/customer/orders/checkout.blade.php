<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Checkout Page') }}
        </h2>
    </x-slot>

<div class="container-fluid">
    <div class="row">
        <div class="pull-right">
            <x-jet-button class="btn btn-success"><a href="{{ route('dashboard') }}">Back</a></x-jet-button>
        </div>   
    </div>
</div>
</x-app-layout>