<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerGym</title>
    <link rel="stylesheet" href="main.css"> 
    <link rel="shortcut icon" href="img/99.png" />
    
    
    <style>
        .container h1 {
          color: #fafafa; 
        }
    
        .container h2 {
          color: #ffffff; 
        }
    
        .container p {
          color: #ffffff; 
        }
    
        .features-grid .feature h3 {
          color: #ffffff; 
        }
    
        .features-grid .feature p {
          color: #ffffff; 
        }
    
        .form-container h1 {
          color: #f1f1f1; 
        }
    
        .form-group input[type="text"],
        .form-group input[type="tel"] {
          color: #acacac; 
        }
    
        .container h2 {
          color: #dddddd; 
        }
      </style>
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
  margin-top: 10px;
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
                  
                    
                    

                </li>
                </ul>
            </nav>
        </div>


    </header>
   
        </div>
        </div>

    <main>
        <section id="hero"> 
            <div class="container">
                <div class="hero-content">
                    <h1>PowerGym</h1>
                    <p>Премиальный фитнес-клуб, где созданы все условия для комфортных тренировок, отдыха, и поддержания своего тела и духа в отличной форме!

                        Современные фитнес-клубы для тех, кто ценит комфорт, качество и всегда стремится к большему.</p>
                    <p>Миссия нашего клуба - помочь вам достичь своей идеальной формы и улучшить качество своей жизни с помощью наших услуг и профессиональных тренеров.</p>
                  
                </div>
                
            </div>
        </section>
<br>
<br>
<br>
<br>
<br>
        <section id="features" class="container"> 
            <h2>Наши преимущества</h2>
            <div class="features-grid">
                <div class="feature1">
                    <img src="img/trener).jpg" alt="Иконка услуги">
                    <div class="feature1::after"></div>
                    <h2>Персональные тренировки</h2>
                   
                </div>
                <div class="feature2">
                    <img src="img/2.png" alt="Иконка услуги">
                    <div class="feature2::after"></div>
                    <h2>Современное оборудование</h2>
                    
                </div>
                <div class="feature3">
                    <img src="img/bas.jpg" alt="Иконка услуги">
                    <div class="feature3::after"></div>
                    <h2>Бассейн и зона отдыха</h2>
                   
                </div>

            </div>
            <div class="features-grid2">
            <div class="feature4">
                <img src="img/sov.jpg" alt="Иконка услуги" >
                <div class="feature4::after"></div>
                <h2>Групповые программы</h2>
                
            </div>
            <div class="feature5">
                <img src="img/trenazhor.jpg" alt="Иконка услуги">
                <div class="feature5::after"></div>
                <h2>Силовые тренировки</h2>
                
            </div>
            <div class="feature6">
                
                <img src="img/func.jpg" alt="Иконка услуги">
                <div class="feature6::after"></div>
                <h2>Функциональный тренинг</h2>
              
            </div>
            </div>
        </section>

        <section id="guest-visit" class="container">
    <div class="slova">
        <h1>Оформить гостевой визит</h1>
        <img src="img/tele.png" alt="Иконка">
    </div>
    <div class="form-container">
        <form id="guest-visit-form">
            <div class="form-group">
                <h1>ВАШЕ ФИО</h1>
                <input type="text" name="name" id="" class="" value="" placeholder="Иванов Иван Иванович" data-tilda-rule="name" style="color:#ffffff; border-bottom: 2px solid #ffffff;">
            </div>
            <div class="form-group">
                <input type="tel" class="" name="phone" value="" placeholder="+7 (999) 999-99-99" id="input" maxlength="15" data-phonemask-without-code="+7 (999) 999-99-99" style="color: rgb(255, 255, 255); border-bottom: 2px solid #ffffff;">
            </div>
            <div class="form-group">
                <input type="submit" value="Жду звонка" class="btn">
            </div>
        </form>
    </div>
</section>
<div id="response-message"></div>
        <section id="contacts" class="container">
            <h2>Контакты</h2>
            <p>Адрес: 123 Какая то улица, Ачинск</p> 
            <p>Телефон: +7 (123) 456-7890</p>
            <p>Электронная почта: info@powergym.com</p>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Power Gym. Все права защищены.</p>
        </div>
    </footer>
    <script>
 

const form = document.getElementById('guest-visit-form');
const responseMessage = document.getElementById('response-message');

// Add an event listener to the form submit event
form.addEventListener('submit', (e) => {
    e.preventDefault(); // Prevent the form from submitting normally

    // Get the form data
    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();

    // Send the form data to your PHP script
    xhr.open('POST', 'process_form.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            responseMessage.innerHTML = '';
            // Replace the entire form with a single image
            form.innerHTML = '<img src="img/success.png" alt="Success" style="width: 340px; height: 350px; object-fit: cover;">';
        } else {
            responseMessage.innerHTML = 'Ошибка отправки формы';
        }
    };
    xhr.send(formData);
});
function fetchUserData() {
    fetch('get_user_data.php')
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Заполняем форму личного кабинета данными пользователя
            document.getElementById('user-username').textContent = data.user.username; // Используйте правильные ключи для вашей базы данных
            document.getElementById('user-email').textContent = data.user.email;
            // Обновите дополнительные поля, если необходимо

            // Показываем форму личного кабинета
            userCabinetForm.style.display = 'block';
            // Скрываем модальное окно регистрации
            registrationModal.style.display = 'none';
        } else {
            console.error('Ошибка при получении данных пользователя:', data.message);
        }
    })
    .catch(error => {
        console.error('Ошибка при получении данных пользователя:', error);
    });
}
if (isUserLoggedIn) {
    fetchUserData();
}
</script>
</body>
</html>