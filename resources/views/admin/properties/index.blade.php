@extends('admin.admin')

@section('content')
    <h1>Les biens</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Surface</th>
                <th>Prix</th>
                <th>Ville</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>{{ $property->surface }}m2</td>
                    <td>{{ number_format($property->price, 0, ',', ' ') }}</td>
                    <td>{{ $property->city }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $properties->links() }}
@endsection
