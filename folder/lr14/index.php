<?php

class Page
{
    private string $name;
    private string $template;

    public function __construct()
    {
        $this->name = "page";
        $this->template = "
            <div class='page-content'>
                <h1>Добро пожаловать на сайт о Мальдивах!</h1>
                <p>Откройте для себя райские острова с белоснежными пляжами и кристально чистой водой.</p>
                <div class='welcome-image'>
                    <img src='https://avatars.mds.yandex.net/i?id=52032fd1a0d3a34c3108e1feb98d8c80_l-5243656-images-thumbs&n=13' alt='Мальдивы' style='width:100%;border-radius:10px;'>
                </div>
            </div>";
    }

    public function render(): void
    {
        echo $this->template;
    }
}

class BlogPage extends Page
{
    private string $name;
    private string $template;

    public function __construct()
    {
        parent::__construct();
        $this->name = "blog";
        $this->template = "
            <div class='blog-content'>
                <h1>Отдых на Мальдивах</h1>
                <p>Лучшие курорты и достопримечательности райских островов</p>

                <div class='cards'>
                    <div class='card'>
                        <img src='https://fs.tonkosti.ru/sized/c960x400/2f/tz/2ftze2f51br4osg00sswws0cs.jpg' alt='Курорт №1' class='card-image'>
                        <h3>Курорт №1</h3>
                        <p>Роскошные виллы над водой, белоснежные пляжи.</p>
                    </div>

            <div class='card'>
                <img src='https://avatars.mds.yandex.net/i?id=890d9c40dfcdbeb4404c04d11899f189af0767e4-12498607-images-thumbs&n=13' alt='Курорт №2' class='card-image'>
                <h3>Курорт №2</h3>
                <p>Дайвинг среди коралловых рифов, богатый подводный мир.</p>
            </div>

            <div class='card'>
                <img src='https://de87ve0y4m3tc.cloudfront.net/comohotels.com-2459770069/cms/cache/v2/632cc832d98d5.jpg/1120x590/fit/80/e26bfed2ec0dc49da13be0f7bbf6bec7.jpg' alt='Курорт №3' class='card-image'>
                <h3>Курорт №3</h3>
                <p>Романтический отдых для пар, уединённые острова.</p>
            </div>
        </div>
    </div>";
    }

    public function render(): void
    {
        echo $this->template;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<link rel="stylesheet" href="/style.css">
<head>
    <meta charset="UTF-8">
    <title>Trip</title>
    
</head>
<body>
    <div class="container">
        <header>
            <h1> Путешествие на Мальдивы </h1>
            <p style="color:white;font-size:1.2em;">Райские острова ждут вас!</p>
        </header>

       
        <div class="nav-buttons">
            <a href="index.php?page=page" class="btn">🏠 Главная страница</a>
            <a href="index.php?page=blog" class="btn">🏝️ Блог о Мальдивах</a>
        </div>

        <hr>

        <?php
       
        $pageType = $_GET['page'] ?? 'page'; 

        if ($pageType === 'page') {
            $page = new Page();
            $page->render();
        } elseif ($pageType === 'blog') {
            $blogPage = new BlogPage();
            $blogPage->render();
        } else {
            
            $defaultPage = new Page();
            $defaultPage->render();
        }
        ?>
    </div>
</body>
</html>


