<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Домой</p>
    </a>
</li>

<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Учеба
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">

        {{--<a href="{{ route('marksheet.index') }}" class="nav-link">--}}
        {{--<i class="nav-icon fas fas fa-theater-masks"></i>--}}
        {{--<p>Students</p>--}}
        {{--</a>--}}
        <li class="nav-item">
            <a href="{{ route('search') }}" class="nav-link">
                <i class="nav-icon fas fas fa-search"></i>
                <p>Поиск студента</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('Student') }}" class="nav-link">
                <i class="nav-icon fas fa-calendar"></i>
                <p>Расписание занятий</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-fire"></i>
                <p>СЭО Пегас</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-globe"></i>
                <p>Учебный план</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cc-discover"></i>
                <p>Элективные дисциплины по ФК</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-bookmark"></i>
                <p>Зачетная книжка</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-globe"></i>
                <p>Выпускная квалификационная работа</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-thumb-tack"></i>
                <p>Дисциплины по выбору</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-briefcase"></i>
                <p>Отчет по практике</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-paperclip"></i>
                <p>Курсовое проектирование</p>
            </a>
        </li>
    </ul>
</li>



