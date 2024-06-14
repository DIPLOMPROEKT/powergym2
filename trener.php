<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerGym - Тренеры</title>
    <link rel="stylesheet" href="trener.css"> 
    <link rel="shortcut icon" href="img/99.png" />
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
  margin-top: 5px;
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
    
    <div class="content">
        <h2>Наши тренеры</h2>
        <div class="trainer">
            <img src="img/yoga.jpg" alt="Тренер 2">
            <div class="trainer-info">
                <h3>Мария Сидорова</h3>
                <p>Специализация: Кардиотренировки и йога</p>
                <p>Опыт работы: 9 лет</p>
                <p>Контакты: <a href="mailto:maria@powergym.com">maria@powergym.com</a></p>
            </div>
        </div>
        <div class="trainer">
            <img src="img/1.jpg" alt="Тренер 1">
            <div class="trainer-info">
                <h3>Вячеслав Барух</h3>
                <p>Специализация: Фитнес и бодибилдинг</p>
                <p>Опыт работы: 14 лет</p>
                <p>Контакты: <a href="mailto:ivan@powergym.com">vyacheslav@powergym.com</a></p>
            </div>
        </div>
        
      
        
       
        
    </div>
    
    <footer>
        <div class="container">
            <p>&copy; 2023 Power Gym. Все права защищены.</p>
        </div>
    </footer>

</body>
</html>