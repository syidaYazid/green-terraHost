<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add New Plant') }}
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

        <form method="POST" action="{{ url('plants/store') }}">
            @csrf

            <div>
                <x-jet-label for="plants_name" value="{{ __('Plant Name') }}" />
                <x-jet-input id="plants_name" class="block w-full mt-1" type="text" name="plants_name" :value="old('plants_name')" required autofocus autocomplete="plants_name" />
            </div>

            <div>
                <x-jet-label for="plants_price" value="{{ __('Price') }}" />
                <x-jet-input id="plants_price" class="block w-full mt-1" type="number" min="1" step="any" name="plants_price" :value="old('plants_price')" required autofocus autocomplete="plants_price" />
            </div>

            <div>
                <x-jet-label for="plants_desc" value="{{ __('Description') }}" />
                <textarea id="plants_desc" style="height:150px" class="block w-full mt-1" type="text" name="plants_desc" :value="old('plants_desc')" required autofocus autocomplete="plants_desc"></textarea>
            </div>
        
            <div>
                <x-jet-button class="ml-4">
                    {{ __('Submit') }}
                </x-jet-button>
            </div>
        </form>

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong>There were some problems with your input. <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

</x-app-layout>