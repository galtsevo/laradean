@extends('layouts.app')

<link href="{{ mix('css/teacherLoad.css') }}" rel="stylesheet">

@section('content')
    <div class="container">
        <div class="selections">
            <p>Выберите учебный год:</p>
            <select id="yid">
                <option selected>Выберите...</option>
                <option value="22">21/22</option>
                <option value="23">22/23</option>
                <option value="24">23/24</option>
                <option value="25">24/25</option>
                <option value="26">25/26</option>
            </select>
        </div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="{{ mix('js/search2.js') }}" defer></script>
