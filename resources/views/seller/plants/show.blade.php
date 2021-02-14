<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Plant') }}
        </h2>
    </x-slot>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <x-jet-button class="btn btn-success"><a href="{{ route('plants.index') }}">Back</a></x-jet-button>
                </div>   
            </div>
        </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="hidden form-group">
                    <strong>{{ $plants->id }}</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ $plants->plants_name }}</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    {{ $plants->plants_price }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descriptions:</strong>
                    {{ $plants->plants_desc }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
