<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости и события - Фитнес-клуб</title>
    <link rel="shortcut icon" href="img/99.png" />
    <style>
        body {
            font-family: 'Roboto', sans-serif; 
            margin: 0;
            background-color: #070707;
            color: #333;
        }
        h1 {
           text-align: center;
            color: #ffffff;
        }
        .news-item {
            margin-bottom: 30px;
        }
        .news-item h2 {
            text-align: center;
            color: #ffffff;
        }
        .news-item p {
            padding: 0 30px;
            text-align: center;
            color: #ffffff;
        }
        .event-item {
            text-align: center;
            margin-bottom: 30px;
        }
        .event-item h2 {
            text-align: center;
            color: #ffffff;
        }
        .event-item p {
            padding: 0 30px;
            text-align: center;
            color: #ffffff;
        }
   

            header {

color: #fff;

display: flex;
justify-content: space-between;
align-items: center;
background-color: #000000;
padding: 16px 0;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
border-bottom: 2px solid #1b1b1b;


}
nav ul {
   margin-top: 17px;
    list-style: none;
    display: flex;


}

nav ul li {
    margin-top: 6px;
    margin-right: 19px;
    margin-left: 30px;
   
    
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
    
}

nav ul li a:hover {
    color: #ddd;
}

.logo img {
    margin-left: 17px;
    margin-right: 8px;
  margin-top: 3px;
    width: 225PX;
    height: 30px;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 17px;
}
h1, h2, h3 {
    font-weight: 700;
    margin-bottom: 10px;
}

.logo{
    margin-bottom: px;
    margin-left: 20px;
    margin-right:297px
}

main {
display: flex;
flex-direction: column;
align-items: center;

}

a {
color: #007bff; 
text-decoration: none;

}

a:hover {
text-decoration: underline;
}
.container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 20px;
        }
  .container2 {
    text-align: center;
    height: 50px;
            max-width: 100%;
            border-top: 2px solid #1b1b1b;
            padding: 20px 0px;
            background-color: #000000;
            color: white;
        }





    .news-item{
        border-bottom: 2px solid #1b1b1b;
    }

    </style>
</head>
<body>
    <header>
        <div class="container"> 
            <nav>
                <div class="logo">
                <a href="main.php"><img src="img/26.png" alt="Power Gym Logo"></a> 
                </div>
                <ul>
                <li><a href="main.php">Главная</a></li>
                    <li><a href="news.php">Новости</a></li>
                    <li><a href="ysl.php">Услуги</a></li>
                    <li><a href="obor.php">Абонементы</a></li>
                    <li><a href="trener.php">Тренеры</a></li>
                    <li><a href="grafic.php">Расписание занятий</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
<main>
    <h1>Новости и события нашего фитнес-клуба</h1>
    
    <div class="news-item">
        <h2>Открытие нового зала для йоги</h2>
        <p>Мы рады сообщить, что в нашем фитнес-клубе открылся новый зал, специально оборудованный для занятий йогой. Приглашаем всех желающих на групповые и индивидуальные занятия с опытными инструкторами.</p>
        <p>Дата: 15 июня 2023</p>
    </div>
    <br>
    <br>
    <br>
    
    <div class="news-item">
        <h2>Новое оборудование в тренажерном зале</h2>
        <p>Мы обновили оборудование в нашем тренажерном зале. Теперь у нас есть новейшие кардио и силовые тренажеры ведущих мировых брендов. Приходите и оцените новые возможности для эффективных тренировок.</p>
        <p>Дата: 10 июня 2023</p>
    </div>
    <br>
    <br>
    <br>
    <div class="event-item">
        <h2>Мастер-класс по здоровому питанию</h2>
        <p>Приглашаем всех желающих на мастер-класс по здоровому питанию, который пройдет в нашем фитнес-клубе. Вы узнаете о принципах правильного питания, получите советы по составлению сбалансированного рациона и приготовлению полезных блюд.</p>
        <p>Дата: 25 июня 2023</p>
        <p>Время: 14:00 - 16:00</p>
    </div>
    <br>
    <br>
    <br>
    <div class="event-item">
        <h2>Соревнования по плаванию</h2>
        <p>Наш фитнес-клуб организует соревнования по плаванию для всех желающих. Участники будут соревноваться в различных дисциплинах. Приходите поддержать спортсменов и насладиться захватывающим зрелищем!</p>
        <p>Дата: 5 июля 2023</p>
        <p>Время: 10:00 - 14:00</p>
    </div>
</main>
</body>
    <div class="container2">
        <p>&copy; 2023 Power Gym. Все права защищены.</p>
    </div>

</html>