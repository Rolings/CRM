<div class="container container-xs-fix">
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <ul class="nav language">
                    <li class="active"><a href="#">ru</a></li>
                    <li><a href="#">ua</a></li>
                    <li><a href="#">en</a></li>
                </ul>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand pull-left" href="index.htm"><img src=" {{asset('front/image/logo.png')}}" alt="..." /></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="index.htm">Главная</a>
                    </li>
                    <li><a href="about.htm">О компании</a>
                        <ul class="nav-menu hidden-xs">
                            <li><a href="about.htm">О компании</a></li>
                            <li><a href="partners.htm">Партнеры</a></li>
                            <li><a href="clients.htm">Клиенты</a></li>
                            <li><a href="otzuvu.htm">Отзывы</a></li>
                            <li><a href="employees.htm">Сотрудники</a></li>
                            <li><a href="vakansiya.htm">Вакансии</a></li>
                            <li><a href="Contacts.htm">Контакты</a></li>
                        </ul>
                    </li>
                    <li><a href="services.htm">Услуги</a>
                        <ul class="nav-menu hidden-xs">
                            <li><a href="services.htm">Услуги 1</a></li>
                            <li><a href="services-2.htm">Услуги2</a></li>
                        </ul>
                    </li>
                    <li><a href="tovary.htm">Каталог</a>
                        <ul class="nav-menu hidden-xs" style="min-width: 170px;">
                            <li><a href="tovary.htm">Каталог продукции</a></li>
                            <li><a href="tovary-inside.htm">Страница товара</a></li>
                        </ul>
                    </li>
                    <li><a href="Partners.htm">Полезное</a>
                        <ul class="nav-menu hidden-xs" style="min-width: 160px;">
                            <li><a href="news.htm">Новости 1</a></li>
                            <li><a href="news-img.htm">Новости 2</a></li>
                            <li><a href="shares.htm">Акции</a></li>
                            <li><a href="FAQ.htm">FAQ 1</a></li>
                            <li><a href="FAQ-toggle.htm">FAQ 2</a></li>
                            <li><a href="tips.htm">Полезные советы</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.login') }}">Login</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>