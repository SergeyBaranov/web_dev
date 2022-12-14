<?php
    require_once("calculator.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Sergey Baranov</title>
        <meta charset="utf-8">
        <!--Bootstrap css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--own css-->
        <link rel="stylesheet" href="./css/main_style.css">
        <!-- adding fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!--tailwind-->
        <!--<script src="https://cdn.tailwindcss.com"></script> -->
        <!-- <script src="js/window.js"></script> -->
        <!-- <script src="js/adaptiveMenu.js"></script> -->
        <script src="./js/outsender.js"></script> <!-- скрипт ajax запроса -->
        <!--Адаптивный viewport-->
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <header>
            <nav>
                <div class="container">
                    <div class="main_menu">
                        <div class="right_name"><a href="#">Sergey Baranov</a></div>
                        <div class="menu_burger">
                            <span></span>
                        </div>
                        <ul class="left_nav">
                            <li><a href="#" class="active">Обо мне</a></li>
                            <li><a href="#activity">Моя деятельность</a></li>
                            <li><a href="#calculator">Калькулятор</a></li>
                            <li><a href="#troubles">Сложности</a></li>
                            <li><a href="#feeling">Настроение</a></li>
                            <li><a href="#footer_content">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        
        <div class="main">
            <div class="container">
                <div class="row">
                    <div id="about">
                        <div class="name">
                            <h1>Меня Зовут Сергей</h1>
                            <div class="my_info">
                                <h6>И я хочу обучиться программированию, потому что мне это жутко интересно!</h6>
                                <h6>А еще я люблю музыку и погонять на велосипеде.</h6>
                            </div>
                        </div>
                        <div class="my_image"></div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div id="activity">
                        <div class="section_title">Моя деятельность</div>
                        <div class="section_content">
                            <div class="activity_method">
                                <div class="activity_number">1</div>
                                <div class="activity_info">
                                    <p>Работаю в сфере разработки дизайна интерфейсов, графики и web анимации </p>
                                </div>
                            </div>
                            <div class="activity_method">
                                <div class="activity_number">2</div>
                                <div class="activity_info">
                                    <p>Изучаю японский язык</p>
                                </div>
                            </div>
                            <div class="activity_method">
                                <div class="activity_number">3</div>
                                <div class="activity_info">
                                    <p>Изучаю ЗD графику. В частности Blender</p>
                                </div>
                            </div>
                            <div class="activity_method">
                                <div class="activity_number">4</div>
                                <div class="activity_info">
                                    <p>Люблю что-то делать своими руками. строить/ремонтировать</p>
                                </div>
                            </div>
                            <div class="activity_method">
                                <div class="activity_number">5</div>
                                <div class="activity_info">
                                    <p>Хожу в тренажерку</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ajax calculator starts -->
            <div class="section section_even">
                <div class="container">
                    <div id="calculator">
                        <div class="section_title">Калькулятор</div>
                            <div class="section_content">
                                <!--form starts-->
                                <form action="" method="post" class="simpleCalculator">
                                    <div class="input_group">
                                        <div class="input_item">
                                            <label for="number1" class="input_label">Введите первое число</label>
                                            <input required type="number" min="1" value="" name="number1" class="number1" id="number1" placeholder="Выберите первое число">
                                        </div>
                                        <div class="input_item">
                                            <label for="selectInput" class="input_label">Выберите операцию</label>
                                            <select class="operations" name="operation"> <!--список операнд-->
                                                <option value="">Выберите операцию</option>
                                                <option value="plus">Сложение</option>
                                                <option value="minus">Вычитание</option>
                                                <option value="multiplication">Умножение</option>
                                                <option value="division">Деление</option>
                                            </select>
                                        </div>
                                        <div class="input_item">
                                            <label for="number2" class="input_label">Введите второе число</label>
                                            <input required type="number" min="1" value="" name="number2" class="number2" id="number2" placeholder="Выберите второе число">
                                        </div>
                                        <div>
                                            <button onclick="getResult();" class="submit" type="submit" name="submit">Вычислить</button>
                                        </div>
                                    </div>
                                    <div class="calc_results">
                                        <h6>Ваш результат:</h6>
                                        <div class="final_result">
                                            <p class="error_field" name="error_field"></p>
                                            <p class="get_result" name="get_result"></p> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ajax calculator ends -->
            <!--calculator starts-->
            <div class="section section_even">
                <div class="container">
                    <div id="calculator">
                        <div class="section_title">Калькулятор</div>
                            <div class="section_content">
                                <!--form starts-->
                                <form action="" method="post" class="simpleCalculator">
                                    <div class="input_group">
                                        <div class="input_item">
                                            <label for="number1" class="input_label">Введите первое число</label>
                                            <input required type="number" min="1" value="" name="number1" class="number1" id="number1" placeholder="Выберите первое число">
                                        </div>
                                        <div class="input_item">
                                            <label for="selectInput" class="input_label">Выберите операцию</label>
                                            <select class="operations" name="operation"> <!--список операнд-->
                                                <option value="">Выберите операцию</option>
                                                <option value="plus">Сложение</option>
                                                <option value="minus">Вычитание</option>
                                                <option value="multiplication">Умножение</option>
                                                <option value="division">Деление</option>
                                            </select>
                                        </div>
                                        <div class="input_item">
                                            <label for="number2" class="input_label">Введите второе число</label>
                                            <input required type="number" min="1" value="" name="number2" class="number2" id="number2" placeholder="Выберите второе число">
                                        </div>
                                        <div>
                                            <!-- <button class="submit" type="submit" name="submit">Вычислить</button> -->
                                            <button onclick="getResult();" class="submit" type="submit" name="submit">Вычислить</button>
                                        </div>
                                    </div>
                                    <div class="calc_results">
                                        <h6>Ваш результат:</h6>
                                        <div class="final_result">
                                            <p class="error_field" name="error_field">
                                                <?php
                                                    if (!empty($error_result)) {
                                                        echo $error_result;
                                                    }
                                                ?>
                                            </p>
                                            <p class="get_result" name="get_result">
                                                
                                            <?php
                                                if (!empty($result)) {
                                                    echo $result;
                                                }
                                               
                                                if(count($results) > 0) {
                                                    foreach ($results as $result) { ?>
                                                        <div>
                                                            <span> Результат вычисления: </span> 
                                                            <?php 
                                                                echo $result["result"]
                                                            ?>
                                                        </div>
                                            <?php 
                                                    }
                                                } 
                                            ?>
                                            
                                            </p> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--calculator ands-->
            <div class="section">
                <div class="container">
                    <div id="troubles">
                        <div class="section_title">Сложности</div>
                        <div class="section_content">
                            <div class="activity_method">
                                <div class="activity_number">?</div>
                                <div class="activity_info">
                                    <p>Не получалось подключить картинку</p>
                                </div>
                            </div>
                            <div class="activity_method">
                                <div class="activity_number">?</div>
                                <div class="activity_info">
                                    <p>Не могу сделать форму калькулятора</p>
                                </div>
                            </div>
                            <div class="activity_method">
                                <div class="activity_number">?</div>
                                <div class="activity_info">
                                    <p>Отваливается CSS</p>
                                </div>
                            </div>
                            <div class="activity_method">
                                <div class="activity_number">?</div>
                                <div class="activity_info">
                                    <p>Отсутствовал контейнер</p>
                                </div>
                            </div>
                            <div class="activity_method">
                                <div class="activity_number">?</div>
                                <div class="activity_info">
                                    <p>Не получалось подрубить якорь</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section_even">
                <div class="container">
                    <div id="feeling">
                        <div class="section_title">Настроение</div>
                        <div class="section_content emoji_section">
                            <div class="section_image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div id="footer_content">
                    <div class="right_name"><a href="#">Sergey Baranov</a></div>
                    <div class="right_nav">
                        <a href="tel:+79278727956">+79278727956</a>
                        <a href="#" class="social"></a>
                        
                    </div>
                </div>
            </div>
        </footer>
        
    </body>
    
</html>
