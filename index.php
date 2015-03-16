<!DOCTYPE html>
<? include 'inc/setting.php'; ob_start(); ?>
<html lang="ru-RU">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html" />
    <meta name="author" content="Омелян Константин" />
    <meta name="description" content="Создание: сайтов, блогов, итернет магазинов" />
    <meta name="keywords" content="Вёрстка, сайт под ключ, интернет магазин, лаболаторные работы" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/close.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" type="image/png" href="img/power-button-2.png" />
    <title>
        Портфолио | Web developer
    </title>
</head>

<body>
    <div id="conteiner">
        <header>
            <div class="wrap">
                <div class="headerTop">
                    <div class="logo">
                        <h1><a class="logo" href='index.php'>Omeljan Konstantin </a></h1>
                        <p>Web developer portfolio</p>
                    </div>
                    <!--end logo-->
                    <div class="menu">
                        <ul>
                            <li><a href='#zapad'>Мои работы</a>
                            </li>
                            <li><a id="open" href='#'>Связь со мной</a>
                            </li>
                            <li><a href='#'>Услуги</a>
                            </li>
                        </ul>
                    </div>
                    <!--end menu-->
                </div>
                <!--end header_top-->
                <div class="headerBottom">
                    <div class="intro-text">
                        <div class="intro-lead-in">Добро пожаловать на мой сайт!</div>
                        <div class="intro-heading">Мне приятно видеть вас здесь!</div>
                    </div>
                </div>
                <!--end header_bottom-->

            </div>
            <!--end wrap-->

        </header>
        <!--end header-->
        <main>
            <div class="wrap">
                <div id="contacts">
                    <form method="POST" id="feedback-form" action='<?= $_SERVER[' REQUEST_URI ']?>'>
                        <a id="close" href="#">Закрыть</a>
                        <p>Как к Вам обращаться:</p>
                        <br>
                        <input type="text" name="name" required placeholder="фамилия имя отчество" maxlength="40">
                        <p>Email для связи:
                            <p>
                                <input type="email" name="contact" required placeholder="адрес электронной почты" maxlength="40">
                                <p>Ваше сообщение:
                                    <p>
                                        <textarea name="message" required rows="5" maxlength="250"></textarea>
                                        <input type="submit" value="отправить">
                    </form>
                </div>
                <!--end contacts-->
                <div id="zapad" class="works">
                    <h3>Мои работы</h3>
                    <ul>
                        <li>
                            <a href="works/works_1/index.html" target="_blank">
                                <img src="img/site_1.png" alt="">
                            </a>
                            <h5>Блог </h5>
                            <p>Личный блог 2014 г</p>
                        </li>
                        <li>
                            <a href="works/works_2/index.html" target="_blank">
                                <img src="img/site_2.png" alt="">
                            </a>
                            <h5>Портфолио </h5>
                            <p>Портфолио фотографа 2014 г</p>
                        </li>
                        <li>
                            <a href="works/works_3/index.html" target="_blank">
                                <img src="img/site_3.png" alt="">
                            </a>
                            <h5>Портфолио </h5>
                            <p>Портфолио 2014 г</p>
                        </li>
                        <li>
                            <a href="works/works_4/index.html" target="_blank">
                                <img src="img/site_4.png" alt="">
                            </a>
                            <h5>Портфолио-Блог </h5>
                            <p>Личный блог 2014 г</p>
                        </li>
                        <li>
                            <a href="works/works_5/index.html" target="_blank">
                                <img src="img/site_5.png" alt="">
                            </a>
                            <h5>Фан сайт </h5>
                            <p>Фан сайт футбола 2013 г</p>
                        </li>
                        <li>
                            <a href="works/works_6/index.html" target="_blank">
                                <img src="img/site_6.png" alt="">
                            </a>
                            <h5>Одностраничный магазин </h5>
                            <p>Продаж продукции 2013 г</p>
                        </li>
                    </ul>
                </div>
                <!--end works-->
            </div>
            <!--end wrap-->
        </main>
        <!--end main-->
        <footer>
            <div class="footerTop">
                <div class="wrap">
                    <div class="services">
                        <h5>SERVICES</h5>
                        <h6>Веб-разработка </h6>
                        <p>Разрабатываю сайты на любой CMS, в зависимости от пожелания клиентов.</p>
                        <h6>Вёрстка</h6>
                        <p>Верстаю быстро и качественно, любой сложности макеты, без использования каких либо конструкторов.
                        </p>

                        <h6>Веб-приложения</h6>
                        <p>Сделаю веб-приложение на ваш сайт, любой сложности и любой концепции.</p>
                    </div>
                    <!--end services-->
                    <div class="tweets">
                        <h5>tweets</h5>	
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis arcu, vehicula ut dignissim a, lobortis non ante. about 3 hours ago</p>
                    </div>
                    <!--end tweets-->
                    <div class="contact">
                        <h5>contact</h5>
                        <p>Если вы хотите заказать проект, или у вас возникли какие то вопросы свяжитесь со мною и я отвечу вам в ближайшее время.</p>
                        <ul>
                            <li>
                                <img src="img/vk_2.png" alt="vkontakte" /><a href="http://vk.com/omeljan_konstantin" target="_blank">Vkontakte</a>
                            </li>
                            <li>
                                <img src="img/skype.png" alt="skype" /><a href="#">Skype: Sipatuj</a>
                            </li>
                            <li>
                                <img src="img/lg_2.png" alt="mail" /><a href='#'>Email</a>
                            </li>
                        </ul>
                    </div>
                    <!--end contact-->
                </div>
                <!--end wrap-->
            </div>
            <!--end footer_top-->
            <div class="footerBottom">
                <div class="wrap">
                    <p>Омелян Константин 2014 - <? echo date("Y");?></p>
                </div>
            </div>
            <!--end footer_bottom-->
        </footer>
        <!--footer-->
    </div>
    <!--end conteiner-->
</body>

</html>