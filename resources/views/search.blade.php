@extends('layouts.app')

@section('content')

    @livewire('search')


    {{--<button onclick="Livewire.emit('openModal', 'user-form')">Edit User</button>--}}

{{--<div class="container">--}}
    {{--<input class="typeahead form-control" type="text">--}}
{{--</div>--}}

{{--<script type="text/javascript" charset="utf8mb4">--}}
    {{--var path = "{{ route('autocomplete') }}";--}}
    {{--$('input.typeahead').typeahead({--}}
        {{--source:  function (query, process) {--}}
            {{--return $.get(path, { term: query }, function (data) {--}}
                {{--return process(data);--}}
            {{--});--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}


@endsection
