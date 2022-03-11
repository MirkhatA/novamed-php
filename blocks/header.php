<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Novomedf</title>
</head>


<body>

<!-- navbar -->

<div class="navbar-main">
    <img src="../css/img/icons/logo.svg" alt="logo" class="logo">
    <nav style="margin-bottom: 20px">
        <ul id="menuList">
            <li><a href="../index.php">Главная страница</a></li>
            <li><a href="../about-us.php">О нас</a></li>
            <li class="nav-item dropdown">
                <a style="color: #25336D;" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Продукция
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="products.php#first">Анестезиологическая рабочий станций</a></li>
                    <li><a class="dropdown-item" href="products.php#second">Модульные мониторы пациента</a></li>
                    <li><a class="dropdown-item" href="products.php#third">Откашливатели</a></li>
                    <li><a class="dropdown-item" href="products.php#fourth">Аппараты искусственной вентиляции легких</a></li>
                    <li><a class="dropdown-item" href="products.php#fifth">Сонная терапия</a></li>
                    <br>
                    <li><a class="dropdown-item" href="products.php#sixth">Диагностика сна</a></li>
                    <li><a class="dropdown-item" href="products.php#seventh">Aнализатор билирубина</a></li>
                    <li><a class="dropdown-item" href="products.php#eight">Расходники</a></li>
                </ul>
            </li>
            <li><a href="../brands.php">Фирмы</a></li>
            <li><a href="../contacts.php">Контакты</a></li>
        </ul>
    </nav>
    <img src="../css/img/icons/menu.png" alt="logo" class="burger-icon" onclick="togglemenu()">
</div>



<!-- navbar -->