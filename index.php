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
                <p>Компания NOVOMEDKZ была основана в Нидерландах в 2013 году. Основатели нашей компании на протяжении многих лет поставляли медицинское оборудование и технологии в Центральной Азии, такие как Казахстан, Таджикистан, Узбекистан и Кыргызстан. </p>
                <hr class="facts-underline" style="height: 2px; color: #25336D;">
            </div>

            <div class="col-md-4 text-center facts-block">
                <img src="css/img/icons/bank.png" alt="" class="facts-icon">
                <p>У нас есть успешный опыт проведения тендеров, финансируемых KFW, IDB, OPEC, Фондом Агахана и Всемирным банком. Основное предприятие нашей компании находится в Роттердаме. За последние два года мы также создали ООО «NOVOMEDKZ» в Нур-Султане.</p>
                <hr class="facts-underline" style="height: 2px; color: #25336D;">
            </div>

            <div class="col-md-4 text-center facts-block">
                <img src="css/img/icons/crowd.png" alt="" class="facts-icon">
                <p>Благодаря продуктивным усилиям наших опытных и высококвалифицированных сотрудников, а также постоянно расширяющейся клиентской базе и растущему числу наших поставщиков, к концу 2017 года оборот компании превысит 3 миллиона евро.</p>
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
                <img src="css/img/brands/biolight_logo.jpg" alt="">
                <img src="css/img/brands/hamilton_logo.jpg" alt="">
                <img src="css/img/brands/lowenstein_logo.jpg" alt="">
                <img src="css/img/brands/medin_logo.jpg" alt="">
                <img src="css/img/brands/rvent_logo.png" alt="">
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
            <div class="col-md-5 text-center" class="email-form">
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

            <div class="col-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.1243866644327!2d71.42681228718834!3d51.08563712358501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424586a6ac32c4c5%3A0x49797c2b62d4e48f!2sZhiloy%20Kompleks%20%22Venskiy%20Kvartal%22!5e0!3m2!1sen!2skz!4v1639466919340!5m2!1sen!2skz" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>


<!-- email form -->

<?php require "blocks/footer.php"?>