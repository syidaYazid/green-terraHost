<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Plants') }}
        </h2>
    </x-slot>

<div class="container-fluid">
    <div class="row">
        <div class="pull-right">
            <x-jet-button class="btn btn-success"><a href="{{ route('plants.create') }}">Create New Plant</a></x-jet-button>
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
                    <form action="{{ route('plants.destroy', $plant->id) }}" method="post">
                        <a name="show" class="btn btn-primary" href="{{ route('plants.show', $plant->id) }}" role="button"> 
                            Show
                        </a>
                        <a name="edit" class="btn btn-success" href="{{ route('plants.edit', $plant->id) }}" role="button"> 
                            Edit
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!--{!! $plants->links() !!}-->
</div>
</x-app-layout>