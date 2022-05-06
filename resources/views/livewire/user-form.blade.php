
<x-modal form-action="update">
    <x-slot name="title">
        Hello World
    </x-slot>

    <x-slot name="content">
        Hi! 👋 {{ $counter }}
    </x-slot>

    <x-slot name="buttons">
        <button type="submit">Start counting</button>
    </x-slot>


</x-modal>

{{--<div style="margin-bottom:30rem">--}}
    {{--<button class="px-4 py-2 font-bold text-white bg-blue-500 rounded">Отправить</button>--}}

{{--</div>--}}