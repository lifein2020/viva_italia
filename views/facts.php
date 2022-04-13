<?
$title = "Интересные факты об Италии";

$style = "
 .nav-link:hover {
    background-color: #D9C1B8;
    color: #401B13;
  }

 .container {
    width: 80%;
    padding: 10px;  
    margin-bottom: 3rem;
    margin-top: 3rem;
    background: #F3F3F5; 
    box-shadow: 0.4em 0.4em 5px 5px rgba(122,122,122,0.5);
 }

 .nav-item {
    font-size: 110% 
  }
  
  h2 {
    font-size: 150%;
    pading: 30px 20px;
    text-align: center;
    font-weight: bold;
    font-family: 'Crimson Text', serif;
  }

  h1 {
    color: red; 
    font-size: 210%; 
    text-align: center;
    padding-top: 20px;
    font-family: 'Crimson Text', serif; 
  }

  h6 {
    text-align: right;
  }

  .letter {
    color: green; /*цвет символов */ 
    font-size: 300%; /* Размер шрифта в процентах */ 
    position: relative; /* Относительное позиционирование */ 
    font-family: 'Crimson Text', serif; 
    
  .p {
    color: green;
    font-size: 90px;
    padding: 10px 30px;
    font-family: 'Crimson Text', serif;
  }
";

$content = "
  <div class=\"container\">
    <h6>Интересные факты</h6>
    <div class=\"row justify-content-center mt-5\">    
      <div class=\"col-11\">
        <h2>Италия одна из самых популярных стран для туристов. Это уникальная и очень завораживающая страна. Но что мы знаем о ней? На самом деле, не так уж и много.<br>Именно для вас собраны самые интересные факты об Италии!</h2>
      </div>
      <!--<div class=\"col-3\">
        <img src=\"https://image.freepik.com/free-vector/italian-monuments-background-design_1234-26.jpg\" width=\"180px\" height=\"180px\" alt=\"\">
      </div>-->
    </div>
    <div class=\"row justify-content-center mt-5\">
      <div class=\"col-11\">    
        <h1>№1</h1>
        <p align=\"justify\"><span class=\"letter\">Б</span>ольшая часть Италии была частью Древней Греции. Город Сиракузы, на Сицилии, когда-то был самым крупным городом Древней Греции. Римляне называли Сицилию и часть Италии «Великой Грецией», так как там проживало достаточно большое количество греков.</p>
        <h1>№2</h1>
        <p align=\"justify\"><span class=\"letter\">C</span>апиенца является одним из самых старых университетов в мире. Университет расположен в Риме и был основан католической церковью в 1303 году нашей эры. Его часто называют La Sapienza, что с итальянского переводится как «мудрость». Он также является одним из крупнейших университетов в мире, где обучается около 150 000 студентов</span></p>
        <h1>№3</h1>
        <p align=\"justify\"><span class=\"letter\">В</span> Италии очень сильно ценится семья. В отличие от Америки, где каждый совершеннолетний ребенок пытается побыстрее съехать от родителей, в этом государстве дети могут жить со своими родителями и до 30-40 лет. Полноценные семьи включающие бабушек, родителей и детей с их детьми, это распространенная практика в этой стране.</span></p>
        <h1>№4</h1>
        <p align=\"justify\"><span class=\"letter\">C</span>амым популярным видом спорта в этой стране является футбол. Знаменитый стадион Сан-Сиро (Джузеппе Меацца), расположенный в Милане, вмещает 85 000 зрителей. Италия выиграла Чемпионат мира по футболу 4 раза (в 1934, 1938, 1982 и 2006 годах).</span></p>
        <h1>№5</h1>
        <p align=\"justify\"><span class=\"letter\">Н</span>и в одной другой европейской стране нет такого количества действующих вулканов, как в Италии. В этом государстве есть три активных вулкана: Этна (расположен на восточном побережье Сицилии), Стромболи (маленький вулканический остров с действующим вулканом) и самый известный Везувий (расположен на юге страны, недалеко от Неаполя).</span></p>
        <h1>№6</h1>
        <p align=\"justify\"><span class=\"letter\">Т</span>о, что в Италии любят макароны ни для кого не секрет. Но мало кто знает, что в среднем, каждый житель этой страны съедает до 25 кг макарон в год. Но при этом стоит отметить, что вопреки распространенному мнению, макароны придумали не итальянцы. Их привезли в Италию арабские торговцы в 13 веке.</span></p>
        <h1>№7</h1>
        <p align=\"justify\"><span class=\"letter\">Е</span>жедневно в фонтан Треви, в Риме, туристы и местные жители бросают монетки. Согласно легенде, каждый кто бросит туда монетку, вскоре вернется в Рим снова. Годовой оборот монеток в фонтане достигает 1.4 миллиона евро. Все эти деньги собирает государство и отдает в благотворительные фонды.</span></p>
        <h1>№8</h1>
        <p align=\"justify\"><span class=\"letter\">С</span>амой высокой горой в этой стране является Монте Бьянко, более известная как Монблан. Высота этой горы достигает 4807 метров.</span></p>
        <h1>№9</h1>
        <p align=\"justify\"><span class=\"letter\">С</span>амой длинной рекой в этом государстве является река По, расположенная в северной части страны. Протяженность этой реки составляет 652 км. Самым же большим озером в Италии является озеро Гарда. Его глубина доходит до 346 метров, а площадь составляет 370 км2.</span></p>
        <h1>№10</h1>
        <p align=\"justify\"><span class=\"letter\">И</span>талия принимала Олимпийские игры трижды. Зимние Олимпийские игры 1956 года провели в Кортина-д’Ампеццо. Причем открытие игр произошло с курьезом, так как конькобежец Гидо Кароли, который нес огонь, упал и он погас. Второй раз Италия принимала летние Олимпийские игры в 1960 году в Риме. И последние зимние ОИ провели в Турине, в 2006 году.</span></p>
      </div>
    </div>
  </div>
  ";

$scripts = " 
";