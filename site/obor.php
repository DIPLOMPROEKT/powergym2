<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Абонементы - PowerGym</title>
    <link rel="stylesheet" href="obor.css">
    <link rel="shortcut icon" href="img/99.png" /> 
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var modal = $("#myModal");
            var btns = $(".membership-card .btn");
            var span = $(".close");

            btns.on("click", function() {
                var membershipType = $(this).closest(".membership-card").find("h3").text();
                $("#membershipType").val(membershipType);
                modal.show();
            });

            span.on("click", function() {
                modal.hide();
            });

            $(window).on("click", function(event) {
                if ($(event.target).is(modal)) {
                    modal.hide();
                }
            });

            $("#membershipForm").on("submit", function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "save_to_db.php",
                    data: formData,
                    success: function(response) {
                        alert(response);
                        modal.hide();
                    },
                    error: function(xhr, status, error) {
                        console.error('Ошибка:', error);
                    }
                });
            });
        });
    </script>
    <style>
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
  margin-top: 7px;
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
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 10px;
}

.logo{
    margin-bottom: 3px;
    margin-left: 20px;
    margin-right:297px
}

main {
display: flex;
flex-direction: column;
align-items: center;

}
body {
font-family: 'Roboto', sans-serif; 
margin: 0;
background-color: #070707;
color: #ffffff;
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
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Форма оформления абонемента</h2>
                <form id="membershipForm">
                    <input type="hidden" id="membershipType" name="membershipType" value="">
                    <input type="text" id="name" name="name" placeholder="Иванов Иван Иванович" required>
                    <input type="tel" id="phone" name="phone" placeholder="+7 (999) 999-99-99" required style="margin-top: 40px; width: 300px; padding: 20px; border: none; color: #ffffff; border-bottom: 2px solid #ffffff; background-color: #070707;">
                    <input type="submit" value="Оформить" class="btn" style="margin-top: 40px;">
                </form>
            </div>
        </div>

        <section id="memberships" class="memberships">
            <div class="container">
                <h2>Абонементы</h2>
                <div class="membership-cards">
                    <div class="membership-card">
                        <h3>Базовый</h3>
                        <ul>
                            <li>Посещение тренировочного зала</li>
                            <li>Уроки йоги и пилатеса</li>
                            <li>Доступ к сауне и джакузи</li>
                            <li>Скидки на глубоузл топливовозрастенных</li>
                        </ul>
                        <p class="price">от 15000 ₽ в месяц</p>
                        <input type="button" value="Оформить" class="btn">
                    </div>
                    <div class="membership-card">
                        <h3>Продвинутый</h3>
                        <ul>
                            <li>Все возможности базового абонемента</li>
                            <li>Уроки аэробока и балати</li>
                            <li>Скидки на личный тренер</li>
                            <li>Скидки на заказ питания</li>
                        </ul>
                        <p class="price">от 22000 ₽ в месяц</p>
                        <input type="button" value="Оформить" class="btn">
                    </div>
                    <div class="membership-card">
                        <h3>Весёлый</h3>
                        <ul>
                            <li>Все возможности продвинутого абонемента</li>
                            <li>Участие в специальных мероприятиях</li>
                            <li>Преимущества для семьи</li>
                            <li>Скидки на экскурсии по знаменитым спортивным клубам</li>
                        </ul>
                        <p class="price">от 30000 ₽ в месяц</p>
                        <input type="button" value="Оформить" class="btn">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Power Gym. Все права защищены.</p>
        </div>
    </footer>
</body>
</html>