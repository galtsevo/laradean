@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="card-header">
            <nav role='navigation' class="transformer-tabs">
                <ul class="nav nav-tabs" id="myTab" style="margin-bottom: 20px;">
                    <li class="nav-item ">
{{--                        <a class="nav-link " href="{{ route('Student') }}" data-toggle="tab">Расписание занятий студентов</a>--}}
                        <a class="nav-link " href="{{ route('Student') }}">Расписание занятий студентов</a>
                    </li>
                    <li class="nav-item active">
{{--                        <a class="nav-link active" href="{{ route('Teacher') }}" data-toggle="tab">Расписание преподавателей</a>--}}
                        <a class="nav-link active" href="{{ route('Teacher') }}">Расписание преподавателей</a>
                    </li>
                    <li class="nav-item">
{{--                        <a class="nav-link" href="{{ route('room') }}" data-toggle="tab">Расписание занятий в аудиториях</a>--}}
                        <a class="nav-link" href="{{ route('room') }}">Расписание занятий в аудиториях</a>
                    </li>
                </ul>
           </nav>
            @livewire('schedule-teacher')
        </div>
    </div>


            <div class="container" style="margin-top: 25px;">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="d-sm-none"> <!-- Для мобильных-->
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li id="week" data-val="prevWeek" class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-arrow-circle-left"></i>
                                        </a>
                                    </li>
                                    <li id="week" data-val="thisWeek" class="page-item">
                                        <a class="page-link" href="#">Текущая неделя</a>
                                    </li>
                                    <li id="week" data-val="nextWeek" class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="d-none d-sm-inline-block d-md-none">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li id="week" data-val="prevWeek" class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-arrow-circle-left"></i>Пред. неделя
                                        </a>
                                    </li>
                                    <li id="week" data-val="thisWeek" class="page-item">
                                        <a class="page-link" href="#">Текущая неделя</a>
                                    </li>
                                    <li id="week" data-val="nextWeek" class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-arrow-circle-right"></i>След. неделя
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="stbl">

                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        @livewireScripts--}}

{{--        </body>--}}

{{--        <footer class="container">--}}
{{--            <span class="transformer-tabs">--}}
{{--                <a href="http://www.bsu.edu.ru/bsu/structure/detail.php?ID=2263">Ресурс департамента образовательной политики</a>--}}
{{--                <br>Разработка и техническая поддержка: E-mail:--}}
{{--                <a href="mailto:DekanatAdm@bsu.edu.ru?subject=ИнфоБелГУ 2013">DekanatAdm@bsu.edu.ru</a>--}}
{{--            </span>--}}
{{--            </div>--}}
{{--        </footer>--}}


{{--        </html>--}}


@endsection


