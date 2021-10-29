<div>
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="float-right mt-5">
                {{--<input wire:model="search" class="form-control" type="text" placeholder="Search Users...">--}}
                <input wire:model="searchTerm" type="text" class = "form-control" placeholder="Search users..."/>
            </div>
        </div>
    </div>
    <div class="row">
{{--        @if ($users->count())--}}
            <table class="table">
                <thead>
                <tr>
                    <th>
                        <a wire:click.prevent="sortBy('Name')" role="button" href="#">
                            Name
                            @include('includes.sort-icon', ['field' => 'Name'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('CodePhysPerson')" role="button" href="#">
                            CodePhysPerson
                            @include('includes.sort-icon', ['field' => 'CodePhysPerson'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('Zathetka')" role="button" href="#">
                            Zathetka
                            @include('includes.sort-icon', ['field' => 'Zathetka'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('Kvalif')" role="button" href="#">
                            Kvalif
                            @include('includes.sort-icon', ['field' => 'Kvalif'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('Otdelenie')" role="button" href="#">
                            Otdelenie
                            @include('includes.sort-icon', ['field' => 'Otdelenie'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('Specyal')" role="button" href="#">
                            Specyal
                            @include('includes.sort-icon', ['field' => 'Specyal'])
                        </a>
                    </th>
                    <th>
                        <a wire:click.prevent="sortBy('FakultetName')" role="button" href="#">
                            FakultetName
                            @include('includes.sort-icon', ['field' => 'FakultetName'])
                        </a>
                    </th>
                    <th>
                        Delete
                    </th>
                    <th>
                        Edit
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->Name}}</td>
                        <td>{{$user->CodePhysPerson}}</td>
                        <td>{{$user->Zathetka}}</td>
                        <td>{{$user->Kvalif}}</td>
                        <td>{{$user->Otdelenie}}</td>
                        <td>{{$user->Specyal}}</td>
                        <td>{{$user->FakultetName}}</td>
                        <td>
                            <button class="btn btn-sm btn-danger" wire:click="$emit('deleteTriggered', {{ $user->CodePhysPerson }}, {{ $user->Zathetka }}, '{{ $user->Name }}')">
                                More
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-dark" wire:click="$emitTo('triggerCreate')">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        {{--@else--}}
            {{--<div class="alert alert-warning">--}}
                {{--Your query returned zero results.--}}
            {{--</div>--}}
        {{--@endif--}}
    </div>

    <div class="row">
        <div class="col">
{{--            {{ $users->links() }}--}}
        </div>
    </div>
</div>



{{--<div>--}}
    {{-- In work, do what you enjoy. --}}

    {{--<input wire:model="searchTerm" type="text" class = "form-control" placeholder="Search users..."/>--}}

    {{--<table class="table table-striped">--}}

        {{--<thead>--}}
        {{--<title>Выборка студентов из mdl_bsu_students</title>--}}
        {{--<caption>Выборка студентов из mdl_bsu_students</caption>--}}
        {{--<tr>--}}
            {{--<th>CodePhysPerson</th>--}}
            {{--<th>Zathetka</th>--}}
            {{--<th>Name</th>--}}
            {{--<th>Kvalif</th>--}}
            {{--<th>Otdelenie</th>--}}
            {{--<th>Specyal</th>--}}
            {{--<th>FakultetName</th>--}}
            {{--<th>Actions</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($users as $user)--}}
            {{--<tr>--}}
                {{--<td>{{$user->Name}}</td>--}}
                {{--<td>{{$user->CodePhysPerson}}</td>--}}
                {{--<td>{{$user->Zathetka}}</td>--}}
                {{--<td>{{$user->Kvalif}}</td>--}}
                {{--<td>{{$user->Otdelenie}}</td>--}}
                {{--<td>{{$user->Specyal}}</td>--}}
                {{--<td>{{$user->FakultetName}}</td>--}}
                {{--<td></td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}

{{--</div>--}}