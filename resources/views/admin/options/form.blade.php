@extends('admin.admin')

@section('title', $option->exists ? 'Editer une option' : 'Créer une option')

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="POST"
        class="gap-3">
        @csrf
        @method($option->exists ? 'put' : 'post')


        @include('shared.input', [
            'label' => 'Nom',
            'name' => 'name',
            'value' => $option->name,
        ])

        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-primary">
                @if ($option->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>
    </form>

@endsection
