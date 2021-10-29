@extends('layouts.app')

@section('content')

    @livewire('search')




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


    <!-- add this -->
    <div class="modal" tabindex="-1" role="dialog" id="user-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <livewire:user-form>
                </div>
            </div>
        </div>
    </div>
@endsection