<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img src="../assets/images/logo/logo.png" alt="logo"></a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler--icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav mainmenu">
            <ul>
                <?php if (isset($user) && $user){ ?>
                <li><a href="/" class="default-btn reverse"><span>Главная</span></a></li>
                <li><a href="/?act=articles" class="default-btn reverse"><span>Просмотр статьи</span></a></li>
                <li><a href="" class="default-btn reverse"><span>Профиль</span></a>
                    <ul>
                        <li><a href="/?act=profile" class="default-btn reverse"><span>Просмотр данные</span></a></li>
                        <li><a href="/?act=register" class="default-btn reverse"><span>Регистрация</span></a></li>
                        <li><a href="/?act=login" class="default-btn reverse"><span>Авторизация</span></a></li>
                        <li><a href="/?act=logout" class="default-btn reverse"><span>Выйти</span></a></li>
                    </ul>
                </li>
                <?php }else { ?>
                    <li><a href="/" class="default-btn reverse"><span>Главная</span></a></li>
                    <li><a href="" class="default-btn reverse"><span>Профиль</span></a>
                    <ul>
                        <li><a href="/?act=login" class="default-btn reverse"><span>Авторизация</span></a></li>
                        <li><a href="/?act=register" class="default-btn reverse"><span>Регистрация</span></a></li>
                        <li><a href="/?act=logout" class="default-btn reverse"><span>Выйти</span></a></li>
                    </ul>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>
