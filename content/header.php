<header class="flex">
    <div class="icon" onclick="location.href = '/index.php'"><img src="/images/video-game.png"></div>
    <button class="mobile-nav-toggle" aria-controls="navigation" aria-expanded="false">
        <span class="sr-only">Меню</span>
    </button>
    <nav>
        <ul id="navigation" class="navigation flex" data-visible="false">
            <?php
                if($_SESSION["login"] == "admin"){
                    echo(
                        "<li class='admin'>
                            <a href='/content/admin/adminPanel.php'>АДМИН ПАНЕЛЬ</a>
                        </li>"
                    );
                }
            ?>
            <li class="news">
                <a href="/content/newsPage/news.php">НОВОСТИ</a>
            </li>
            <?php
                if($_SESSION["login"] != NULL){
                    echo(
                        "<li class='personal-area'>
                            <a href='/content/personalPage/personalArea.php'>ЛИЧНЫЙ КАБИНЕТ</a>
                        </li>"
                    );
                }
                if($_SESSION["login"] == NULL){
                    echo(
                        "<li class='log-in'>
                            <a href='/content/registration/registration.php'>РЕГИСТРАЦИЯ / ВХОД</a>
                        </li>"
                    );
                }
                else{
                    echo(
                        "<li class='log-in'>
                            <a href='/content/registration/out.php'>ВЫХОД</a>
                        </li>"
                    );
                }
            ?>
        </ul>
    </nav>
</header>