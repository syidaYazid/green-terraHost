<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Shop Page') }}
        </h2>
    </x-slot>

<div class="container-fluid">
    <div class="row">
        <div class="pull-right">
            <x-jet-button class="btn btn-success"><a href="{{ route('dashboard') }}">Back</a></x-jet-button>
        </div>   
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plants as $plant)
            <tr>
                <td>{{ $plant->id }}</td>
                <td>{{ $plant->plants_name }}</td>
                <td>{{ $plant->plants_price }}</td>
                <td>{{ $plant->plants_desc }}</td>
                <td>
                    <a name="show" class="btn btn-primary" href="{{ route('shop.show', $plant->id) }}" role="button"> 
                        Show
                    </a>
                    <a name="show" class="btn btn-success" href="{{ route('shop.cart', $plant->id) }}" role="button"> 
                        Add to Cart
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>