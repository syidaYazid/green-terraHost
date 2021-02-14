<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
    
        <div class="row">
            <div class="pull-right">
                <x-jet-button class="btn btn-success"><a href="{{ route('plants.index') }}">Back</a></x-jet-button>
            </div>   
        </div>


        <form action="{{ url('plants/update') }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <x-jet-label class="hidden" for="plants_name" value="{{ $plants->id }}" />
            </div>

            <div>
                <x-jet-label for="plants_name" value="{{ __('Plant Name') }}" />
                <x-jet-input id="plants_name" class="block w-full mt-1" type="text" name="plants_name" :value="{{ $plants->plants_name }}" required autofocus autocomplete="plants_name" />
            </div>

            <div>
                <x-jet-label for="plants_price" value="{{ __('Price') }}" />
                <x-jet-input id="plants_price" class="block w-full mt-1" type="number" min="1" step="any" name="plants_price" :value="{{ $plants->plants_price }}" required autofocus autocomplete="plants_price" />
            </div>

            <div>
                <x-jet-label for="plants_price" value="{{ __('Price') }}" />
                <textarea class="form-control" style="height:150px" name="detail" required autofocus autocomplete="plants_desc" >{{ $plants->plants_desc }}</textarea>
            </div>

            <div>
                <x-jet-button class="ml-4">
                    {{ __('Submit') }}
                </x-jet-button>
            </div>
    
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
</x-app-layout>
  
        