<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Личный кабинет</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/startpage.css" rel="stylesheet" />
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
{{--                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>--}}
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">Вход</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page header with logo and tagline-->
<header >
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder"></h1>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
{{--                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>--}}
                <div class="card-body">
                    <div class="small text-muted">{{date('d.m.Y', $news[0]->modified)}}</div>
                    <h2 class="card-title">{{$news[0]->name}}</h2>
                    {!!$news[0]->message!!}
{{--                    <a class="btn btn-primary" href="#!">Read more →</a>--}}
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
{{--                <div class="col-lg-6">--}}
                @foreach($news as $new)

                        <!-- Blog post-->
                        <div class="col-sm">
                            <div class="card-body">
                                <div class="small text-muted">{{date('d.m.Y', $new->modified)}}</div>
                                <h2 class="card-title h4">{{$new->name}}</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                @endforeach
{{--                    </div>--}}
            </div>
            <!-- Pagination-->
{{--            <nav aria-label="Pagination">--}}
{{--                <hr class="my-0" />--}}
{{--                <ul class="pagination justify-content-center my-4">--}}
{{--                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>--}}
{{--                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#!">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#!">3</a></li>--}}
{{--                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#!">15</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="..." aria-label="..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Искать</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Полезные ссылки</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled mb-0">
                                <li><a href="https://dekanat.bsu.edu.ru/">Сайт НИУ "БелГУ"</a></li>
                                <li><a href="https://dekanat.bsu.edu.ru/">ИнфоБелГУ: Учебный процесс</a></li>
                                <li><a href="https://pegas.bsu.edu.ru/">Система электронного обучения "Пегас"</a></li>
                                <li><a href="https://mfc.bsu.edu.ru/">Многофункциональный центр НИУ "БелГУ"</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Регламенты</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="py-1 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; NRU "BSU"</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
