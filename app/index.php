<header class="header" style="background-image: url(/app/img/top.jpg)">
    <div class="header-wrapper">
        <div class="container block-menu">

            <nav class="navbar navbar-expand-lg">
                <a href="/" class="navbar-brand"><img src="<?= MAIN_LOGO ?>" alt="<?= SITE_NAME ?>"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                    <ul class="navbar-nav mr-auto">
                        <img src="<?= MAIN_LOGO ?>>" alt="<?= SITE_NAME ?>">
                        <?php foreach ($mainMenu as $link => $name): ?>
                            <li class="nav-item">
                                <a class="nav-link header-a" href="<?= $link ?>"><?= $name ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <a class="header-phone" href="tel:<?= MAIN_PHONE_NUMBER ?>>"><?= MAIN_PHONE_NUMBER_PRINT ?></a>
                    <button class="button-style" data-toggle="modal" data-target="#exampleModal">Оставить заявку</button>
                </div>
            </nav>
        </div>
        <div class="container block-view">
            <div class="row">
                <div class="col-md-12">
                    <p class="first-p"><?= $mainBlock['name'] ?></p>
                    <h1><?= $mainBlock['title'] ?></h1>
                    <p class="description-p"><?= $mainBlock['description'] ?></p>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . "/app/conponents/button_callback.php" ?>
                </div>
            </div>
        </div>
        <div class="go"><a id="go" href="#services"><i class="fa fa-angle-down"></i></a></div>
    </div>
</header>

<main class="main">

    <section class="services" id="services" style="background-color: #F7F7F7">
        <h1 class="wow bounceInDown"><?= $servicesBlock['title'] ?></h1>
        <div class="container">
            <div class="row">
                <?php foreach ($servicesBlock['points'] as $point): ?>
                <div class="col-lg-3 wow <?= $point['classes'] ?>">
                    <div class="card">
                        <img src="<?= $point['img'] ?>" alt="<?= $point['name'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $point['name'] ?></h5>
                        </div>
                        <ul>
                            <?php foreach ($point['menu'] as $i => $value): ?>
                                <?php if (!is_numeric($i)): ?>
                                    <li>
                                        <?= $i ?>
                                        <ul>
                                            <?php foreach ($value as $second_value): ?>
                                                <li><?= $second_value ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php else: ?>
                                    <li><?= $value ?></li>
                                <? endif; ?>
                            <?php endforeach; ?>
                        </ul>
                        <?php if($point['link']): ?>
                            <div class="card-footer">
                                <a href="<?= $point['link'] ?>" class="button-style">Фото</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="stock" id="stock" style="background-color: #232328">
        <h1 class="wow zoomIn"><?= $stocksBlock['title'] ?></h1>
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-lg-6 col-md-12">
                    <img src="<?= $stocksBlock['img'] ?>" alt="<?= $stocksBlock['title'] ?>">
                </div>
                <div class="col-lg-6 col-md-12 stock-desc">
                    <p class="first-p"><?= $stocksBlock['text'] ?></p>
                    <div class="block-stock">
                        <h4><?= $stocksBlock['profit_title'] ?></h4>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="stock-accent"><?= $stocksBlock['profit'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . "/app/conponents/button_callback.php" ?>
                </div>
            </div>
        </div>
    </section>

    <section class="advantages" id="advantages">
        <div class="container">
            <div class="row">
                <div class="col-md-6 slogan" style="background-image: url(<?= $advantagesBlock['img'] ?>)">
                    <p><?= $advantagesBlock['title_left'] ?></p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h1><?= $advantagesBlock['title'] ?></h1>
                    <div class="advantages-list row">
                        <?php foreach ($advantagesBlock['tasks'] as $task): ?>
                            <div class="col-md-6 wow jackInTheBox">
                                <?= $task['icon'] ?>
                                <p class="primary"><?= $task['primary'] ?></p>
                                <p class="secondary"><?= $task['secondary'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . "/app/conponents/button_callback.php" ?>
                </div>
            </div>
        </div>
    </section>

    <section class="examples" id="examples" style="background-image: url(/app/img/background.jpg)">
        <h1><?= $examplesBlock['title'] ?></h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($examplesBlock['images'] as $src => $alt): ?>
                                <div class="swiper-slide">
                                    <img src="<?= $src ?>" alt="<?= $alt ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
                        <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p><?= $examplesBlock['description'] ?></p>
                    <a href="<?= $examplesBlock['link'] ?>" class="button-style">Галерея</a>
                </div>
            </div>
        </div>
    </section>

    <section class="stages" id="stages" style="background-color: #fff">
        <h1><?= $stagesBlock['title'] ?></h1>
        <div class="container">
            <div class="row">
                <?php foreach ($stagesBlock['stages'] as $stage): ?>
                    <div class="col-md-4 wow <?= $stage['classes'] ?>" <?php if ($stage['delay']): ?>data-wow-delay="<?= $stage['delay'] ?>"<?php endif; ?>>
                        <?= $stage['icon'] ?><i class="fa fa-long-arrow-right"></i>
                        <p class="stage-header"><?= $stage['header'] ?></p>
                        <p class="stage-description"><?= $stage['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="reviews" id="reviews" style="background-image: url(/app/img/bg-3.jpg)">
        <div class="reviews-wrapper">
            <h1><?= $reviewsBlock['title'] ?></h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($reviewsBlock['reviews'] as $review): ?>
                                    <div class="swiper-slide">
                                        <div class="review">
                                            <h3><?= $review['title'] ?></h3>
                                            <p class="grey"><?= $review['small_title'] ?></p>
                                            <div class="review-stars">
                                                <?php for ($i = 0; $i < $review['stars']; $i++): ?>
                                                    <i class="fa fa-star"></i>
                                                <?php endfor; ?>
                                            </div>
                                            <div class="review-text"><?= $review['text'] ?></div>
                                            <div class="review-link"><a href="<?= $review['full_link'] ?>" target="_blank">Просмотреть отзыв полностью</a></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"><i class="fa fa-quote-left"></i></div>
                            <div class="swiper-button-next"><i class="fa fa-quote-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts" style="background-image: url(/app/img/bg-contacts.jpeg)">
        <div class="container">
            <div class="row">
                <div class="col-md-5 contacts-left">
                    <h1>Контакты</h1>
                    <a class="contact-phone" href="tel:<?= MAIN_PHONE_NUMBER ?>"><?= MAIN_PHONE_NUMBER_PRINT ?></a>
                    <p class="company">ГК "Строй сервис"</p>
                    <p class="work-time">Время работы: <?= TIME_WORK ?></p>
                    <p class="contact-email">EMAIL: <a href="mailto:<?= MAIN_EMAIL ?>"><?= MAIN_EMAIL ?></a></p>
                    <a class="contacts-icon" href="<?= INSTAGRAM_LINK ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="col-md-7 contacts-right">
                    <h1>Остались вопросы?</h1>
                    <form class="callback" method="post">
                        <div class="success"><span>Спасибо за заявку!</span></div>

                        <div class="form-input form-name">
                            <input type="text" placeholder="Ваше имя" name="name" required>
                        </div>
                        <div class="form-input form-phone">
                            <input type="tel" placeholder="Ваш телефон" name="phone" required>
                        </div>
                        <button class="button-style" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>
