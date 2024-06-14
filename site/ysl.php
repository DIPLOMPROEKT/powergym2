  <html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги - PowerGym</title>
    <link rel="stylesheet" href="obor.css">
    <link rel="shortcut icon" href="img/99.png" /> 
    
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
 
   <style>
 h1 {
            text-align: center;
            color: #333;
        }
        .service {
            margin: 20px 0;
        }
        .service h2 {
            color: #333;
        }
        .service p {
            color: #666;
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
.container2 {
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
}
.services{
    display: inline-flex;
    margin-bottom: 150px;
    
}
.services2{
    display: inline-flex;
    margin-bottom: 150px;
}
.service1 {
    width: 300PX;
    text-align: center;
    align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            
}
.service1 img {
    width: 220px;
            height: 250px;
            margin-top: 0px;
 }
.service2 {
    width: 300PX;
    margin-top: 20px;
    text-align: center;
    margin-right: 50px;
    margin-left: 50px;
border: 1px solid #ccc;
border-radius: 5px;
padding: 20px;
box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease-in-out;

}
.service2 img {
    
            width: 250px;
            height: 200px;
            margin-top: 10px;
        }
.service3 {
    width: 300PX;
    text-align: center;
border: 1px solid #ccc;
border-radius: 5px;
padding: 20px;
box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease-in-out;

}
.service3 img {
    width: 220px;
            height: 250px;
            margin-top: 0px;
            margin-bottom: 15px;
        }
.service4 {
    width: 300PX;
    text-align: center;
border: 1px solid #ccc;
border-radius: 5px;
padding: 20px;
box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease-in-out;

}
.service4 img {
    width: 250px;
            height: 150px;
            margin-top: 30px;
        }
.service5 {
    width: 300PX;
    text-align: center;
    margin-right: 50px;
    margin-left: 50px;
border: 1px solid #ccc;
border-radius: 5px;
padding: 20px;
box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease-in-out;

}
.service5 img {
    width: 220px;
            height: 250px;
            margin-top: 0px;
       
        }
.service6 {
    width: 300PX;
text-align: center;
border: 1px solid #ccc;
border-radius: 5px;
padding: 20px;
box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
transition: all 0.3s ease-in-out;

}
.service6 img {
    width: 220px;
            height: 250px;
            margin-top: 0px;
        }



        .service img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }
        footer {
            background-color: #000000;
            color: white;
            padding: 20px 0;
            text-align: center; 
            border-top: 2px solid #1b1b1b;
        }


        .modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.4); 
}

.modal-content {
  color: #ffffff;
  background-color: #070707;
  margin: 15% auto; 
  padding: 20px;
  border: 1px solid #1b1b1b;
  border-radius: 10px;
  width: 700px;
  height: 400px;
  
}
#modalTitle{
  text-align: center;
  font-size: 35px;
}
#modalDescription{
  font-size: 20px;
}

.close-button {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close-button:hover,
.close-button:focus {
  color: #979797;
 
  cursor: pointer;
}
#btn p{
    font-size: 20px;
}
.btn {
  
            padding: 10px 20px;
            background-color: #070707; 
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        
        .btn:hover {
            background-color: #070707; 
            transform: translateY(-2px); 
        }
        
        .btn:active {
            background-color: #070707; 
            transform: translateY(1px); 
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
    
    
    
    
    
    
    
    
    <main class="container">
        <h1>Наши услуги</h1>
        <section class="services">
            <div class="service1">
                <img src="img/85.png" alt="Personal Training">
                <h2>Персональные тренировки</h2>
                <p class="description">Опытные тренеры помогут вам достичь ваших целей.</p>
                <button class="btn" onclick="openModal('modal1')">Подробнее</button>
            </div>
    
            <div class="service2">
                <img src="img/79.png" alt="Group Classes">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2>Групповые программы</h2>
                <p class="description">Занятия для всех уровней подготовки.</p>
                <button class="btn" onclick="openModal('modal2')">Подробнее</button>
            </div>
    
            <div class="service3">
                <img src="img/84.png" alt="Kids Fitness">
                <br>
                <br>
                <br>
                <h2>Trx</h2>
                <p class="description">Занятия для всех уровней подготовки.</p>
                <button class="btn" onclick="openModal('modal3')">Подробнее</button>
            </div>
        </section>
                                           <!-- первые 3 -->
            <section class="services2">
                <div class="service4">
                    <img src="img/76.png" alt="Personal Training">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    <h2>Силовые тренировки</h2>
                    
                    <p class="description">Занятия для всех уровней подготовки.</p>
                    <button class="btn" onclick="openModal('modal4')">Подробнее</button>
                </div>
        
                <div class="service5">
                    <img src="img/81.png" alt="Group Classes">
                    <h2>Йога</h2>
                    <p class="description">Занятия для всех уровней подготовки.</p>
                    <button class="btn" onclick="openModal('modal5')">Подробнее</button>
                </div>
        
                <div class="service6">
                    <img src="img/83.png" alt="Kids Fitness">
                    <h2>Zumba</h2>
                    <p class="description">Занятия для всех уровней подготовки.</p>
                    <button class="btn" onclick="openModal('modal6')">Подробнее</button>
                </div>
<!-- вторые 3 -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <span  onclick="closeModal('modal1')" class="close">&times;</span>
                    <p id="btn1" style="font-size: 20px; text-align: center;margin-top: 100px;">Достигать поставленных целей легче вместе с профессиональным наставником. Персональный тренер проведёт анкетирование, диагностику, составит индивидуальный план работы, поставит технику и будет контролировать динамику. Помимо персонального тренинга, в «Академии» представлены занятия в мини-группах – это отличный вариант для тех, кто хотел бы совместить индивидуальный подход и тренировку в хорошей компании.</p>
                </div>
            </div>
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <span onclick="closeModal('modal2')" class="close">&times;</span>
                    <p id="btn1" style="font-size: 20px; text-align: center;margin-top: 100px;">Групповые программы в фитнес-клубе представляют собой широкий спектр интенсивных занятий, нацеленных на улучшение физической формы и здоровья участников. Эти программы предназначены для людей разного возраста и уровня подготовки, и предполагают открытые или закрытые тренировки в группах.</p>
                </div>
            </div>
            <div id="modal3" class="modal">
                <div class="modal-content">
                    <span onclick="closeModal('modal3')" class="close">&times;</span>
                    <p id="btn1" style="font-size: 20px; text-align: center;margin-top: 100px;">Преимущества TRX: Развитие силы и выносливости, задействуя практически все группы мышц. Улучшение координации и баланса. Повышение гибкости и подвижности суставов. Снятие стресса и улучшение настроения. Возможность тренироваться в любом месте, где есть подвесная система TRX. Наши занятия TRX проводятся опытными тренерами, которые помогут вам освоить технику упражнений и подобрать оптимальную нагрузку.</p>
                </div>
            </div>
<!-- первые 3 -->
            <div id="modal4" class="modal">
                <div class="modal-content">
                    <span  onclick="closeModal('modal4')" class="close">&times;</span>
                    <p id="btn1" style="font-size: 20px; text-align: center;margin-top: 100px;">Силовая тренировка – это эффективный способ укрепить мышцы, сжечь калории и улучшить общее состояние организма. С силовой тренировкой вы: Увеличиваете мышечную массу и силу. Улучшаете обмен веществ и сжигаете больше калорий даже в состоянии покоя. Укрепляете кости и суставы. Повышаете уровень энергии и выносливости. Улучшаете осанку и уверенность в себе. Наши силовые тренировки проводятся под руководством опытных тренеров, которые помогут вам подобрать оптимальную программу и технику выполнения упражнений.</p>
                </div>
            </div>
            <div id="modal5" class="modal">
                <div class="modal-content">
                    <span onclick="closeModal('modal5')" class="close">&times;</span>
                    <p id="btn1" style="font-size: 20px; text-align: center;margin-top: 100px;">Она помогает: Укрепить мышцы и улучшить гибкость. Снять стресс и напряжение. Улучшить концентрацию и ясность ума. Повысить уровень энергии. Улучшить сон. Наши занятия йогой подходят для всех уровней подготовки, от новичков до опытных практиков.</p>
                </div>
            </div>
            <div id="modal6" class="modal">
                <div class="modal-content">
                    <span onclick="closeModal('modal6')" class="close">&times;</span>
                    <p id="btn1" style="font-size: 20px; text-align: center;margin-top: 100px;">Zumba - это зажигательная фитнес-программа, которая сочетает в себе элементы латиноамериканских танцев и аэробики. С Zumba вы: Сжигаете калории и тонизируете мышцы в ритме сальсы, меренги, самбы и других латиноамериканских стилей. Получаете заряд энергии и отличное настроение. Улучшаете координацию и чувство ритма. Заводите новых друзей в дружелюбной атмосфере. Zumba подходит для всех возрастов и уровней подготовки. Приходите и танцуйте в ритме жизни!</p>
                </div>
            </div>
            
            <script>
                function openModal(modalId) {
                    document.getElementById(modalId).style.display = 'block';
                }
            
                function closeModal(modalId) {
                    document.getElementById(modalId).style.display = 'none';
                }
            </script>
           
  </main>
  
   
  
 

            <footer>
                <div class="container2">
                    <p>&copy; 2023 Power Gym. Все права защищены.</p>
                </div>
            </footer> 
</body>
</html>