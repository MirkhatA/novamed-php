<?php require "blocks/header.php" ?>

<section class="contacts">
    <div class="container">
        <div class="row text-center">
            <h3 style="margin-bottom: 30px;">Напишите нам</h3>
            <div class="col-md-3 text-start">

                <p>
                    Phone: +7 7172 97-83-98
                </p>
                <p>
                    E-mail: kz@novomed.nl
                    Website: www.novomed.nl
                </p>
                <p>
                    Registration
                </p>
                <p>
                    Date of registration: 04.12.2014
                </p>
            </div>

            <div class="col-md-9 col">
                <div class="about-email">
                    <h4 class="sent-notification"></h4>

                    <form id="emailSend" method="POST">
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


    </div>
</section>



<?php require "blocks/footer.php"?>

