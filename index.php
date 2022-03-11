<?php require "blocks/header.php" ?>

<!-- main -->

<section class="main">
    <div class="row">
        <div class="text-center main-block">
            <p class="main-title">Добро пожаловать в <span style="color: #009FE3">Novomed</span></p>
            <p class="main-detail">Уважаемые дамы и господа, дорогие друзья и коллеги!
                Мы выражаем вам наше глубокое почтение, и приглашаем вас начать успешное сотрудничество с NOVOMEDKZ</p>

            <a href="products.php" class="production-btn">Продукция</a>


        </div>
    </div>
</section>

<!-- main -->

<!-- facts -->

<section class="facts-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center facts-block">
                <img src="css/img/icons/hospital.png" alt="" class="facts-icon">
                <p>
                    Компания NOVOMEDKZ была основана в Нидерландах в 2013 году. Основатели нашей компании на протяжении многих лет поставляли медицинское оборудование и технологии в Центральной Азии, такие как Казахстан, Таджикистан, Узбекистан и Кыргызстан.
                </p>

                <hr class="facts-underline" style="height: 2px; color: #25336D;">
            </div>

            <div class="col-md-4 text-center facts-block">
                <img src="css/img/icons/bank.png" alt="" class="facts-icon">
                <p>У нас есть успешный опыт проведения тендеров, финансируемых KFW, IDB, OPEC, Фондом Агахана и Всемирным банком. Основное предприятие нашей компании находится в Роттердаме. За последние два года мы также создали ООО «NOVOMEDKZ» в Нур-Султане.</p>
                <hr class="facts-underline" style="height: 2px; color: #25336D;">
            </div>

            <div class="col-md-4 text-center facts-block">
                <img src="css/img/icons/crowd.png" alt="" class="facts-icon">
                <p>
                    Благодаря продуктивным усилиям наших опытных и высококвалифицированных сотрудников, а также постоянно расширяющейся клиентской базе и растущему числу наших поставщиков, c каждым годом качество и ассортимент предоставляемых услуг увеличивается
                </p>
                <hr class="facts-underline" style="height: 2px; color: #25336D;">
            </div>
        </div>
    </div>
</section>

<!-- facts -->

<!-- brands -->

<section class="brands">
    <div class="container">
        <div class="row text-center">
            <p><b>NOVOMEDKZ</b> - компания которая успешно выступает дистрибьютором таких производителей, как</p>
            <div>
                <a href="biolight.php"><img src="css/img/brands/biolight_logo.jpg" alt=""></a>
                <a href="hamilton.php"><img src="css/img/brands/hamilton_logo.jpg" alt=""></a>
                <a href="lowenstein.php"><img src="css/img/brands/lowenstein_logo.jpg" alt=""></a>
                <a href="medin.php"><img src="css/img/brands/medin_logo.jpg" alt=""></a>
                <a href="rvent.php"><img src="css/img/brands/rvent_logo.png" alt=""></a>
            </div>
            <p>и другие.</p>
        </div>
    </div>
</section>

<!-- brands -->

<!-- email form -->

<section class="email">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-5 text-center " class="email-form">
                <h4 class="sent-notification"></h4>
                <form id="emailSend" method="POST">
                    <h3 style="margin-bottom: 30px;">Напишите нам</h3>

                        <div>
                            <input type="text" id="name" name="name" placeholder="Имя">
                        </div>

                        <div>
                            <input type="text" id="email" name="email" placeholder="Email">
                        </div>

                        <div>
                            <textarea name="body" id="body" cols="30" rows="10" placeholder="Сообщение"></textarea>
                        </div>

                        <button type="button" onclick="sendEmail()">Отправить</button>
                </form>
            </div>

        </div>
    </div>
</section>


<!-- email form -->

<?php require "blocks/footer.php"?>