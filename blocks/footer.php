<!-- footer -->

<footer>
    <div class="container">
        <div class="row">
            <h6>Главный офис в Казахстане</h6>

            <p>NOVOMED KZ LLC</p>

            <div class="col">

                <p>
                    Phone: +7 7172 97-83-98
                </p>
            </div>

            <div class="col">
                <p>
                    E-mail: kz@novomed.nl <br>
                    Website: www.novomed.nlf
                </p>
            </div>

            <div class="justify-content-center">
                <p>Made by Mirkhat Asen</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript">
    function sendEmail() {
        var name = $("#name")
        var email = $("#email")
        var body = $("#body")

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(body)) {
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    body: body.val()
                }, success: function (response) {
                    $('#emailSend')[0].reset();
                    $('.sent-notification').text("Сообщение успешно отправлено!.");
                }
            });
        }
    }

    function isNotEmpty(caller) {
        if (caller.val()=="") {
            caller.css('border', '1px solid red');
            return false;
        }
        else {
            caller.css('border', '1px solid green');
            return true;
        }
    }
</script>

<script>
    var menuList = document.getElementById("menuList");

    menuList.style.maxHeight = "0px";

    function togglemenu() {
        if (menuList.style.maxHeight == "0px") {
            menuList.style.maxHeight = "330px"
            menuList.style.overflow = "visible"
        }
        else {
            menuList.style.maxHeight = "0px"
            menuList.style.overflow = "hidden"
        }
    }




    function openDetail(item1) {
        var item = document.getElementById(item1);


        if (item.style.display === "none") {
            console.log(1)
            item.style.display = "block"
        }
        else {
            item.style.display = "none"
        }
    }


    var item3 = document.getElementById("product-nav");

    item3.style.left = "-400px";

    function productMenu() {
        if (item3.style.left === "-400px") {
            item3.style.left = "0px";
        }
        else {
            item3.style.left = "-400px"
        }
    }
</script>
</body>
</html>