<? var_dump("here"); ?>

<header class="gallery-header">
    <nav class="navbar navbar-dark bg-dark">
        <a href="/" class="navbar-brand">
            <img src="/app/img/logo.svg" alt="Logo" width="250" class="d-inline-block align-top">
        </a>
        <div class="justify-content-md-center">
            <button class="button-style" data-toggle="modal" data-target="#exampleModal">Оставить заявку</button>
        </div>
    </nav>
</header>

<main class="gallery-main">

    <section class="gallery-list">
        <h1>Галерея</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="my-card">
                        <img src="/app/img/photos/design/1.jpg" alt="Проектирование">
                        <h3>Проектирование</h3>
                        <a href="design.html">Посмотреть альбом</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-card">
                        <img src="/app/img/photos/cottage-velednikovo/8.jpg" alt="Строительство домов и коттеджей">
                        <h3>Строительство домов и коттеджей</h3>
                        <a href="building.html">Посмотреть альбом</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-card">
                        <img src="/app/img/photos/cottage-velednikovo/13.jpg" alt="Обустройство участка">
                        <h3>Благоустройство участка</h3>
                        <a href="facade-decoration.html">Посмотреть альбом</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-card">
                        <img src="/app/img/photos/pools/1.jpg" alt="Проектирование и строительство бассейнов">
                        <h3>Проектирование и строительство бассейнов</h3>
                        <a href="pools.html">Посмотреть альбом</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-card">
                        <img src="/app/img/photos/cottage-velednikovo/10.jpg" alt="Внутренняя отделка и капитальный ремонт">
                        <h3>Внутренняя отделка и капитальный ремонт</h3>
                        <a href="repairs.html">Посмотреть альбом</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-card">
                        <img src="/app/img/photos/cottage/1.jpg" alt="Контроль качества работ строительства коттеджа">
                        <h3>Контроль качества работ строительства коттеджа</h3>
                        <a href="control-quality.html">Посмотреть альбом</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-card">
                        <img src="/app/img/photos/repair-for-fitness/2.jpg" alt="Ремонт помещения под размещение фитнес-клуба">
                        <h3>Ремонт помещения под размещение фитнес-клуба</h3>
                        <a href="repair-for-fitness.html">Посмотреть альбом</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Оставьте заявку</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="callback" method="post">
                    <div class="success"><span>Спасибо за заявку!</span></div>

                    <input type="hidden" name="project_name" value="GKSTS">
                    <input type="hidden" name="admin_email" value="gksts@yandex.ru">
                    <input type="hidden" name="form_subject" value="Заявка с сайта">

                    <input type="hidden" name="Страница" value="">

                    <div class="form-input name">
                        <input type="text" placeholder="Ваше имя" name="name" required>
                    </div>
                    <div class="form-input phone">
                        <input type="tel" placeholder="Телефон" name="phone" required>
                    </div>
                    <div class="form-input email">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-input-select">
                        <select name="service" id="service" required>
                            <option selected>Выберите услугу</option>
                            <option>Проектирование</option>
                            <option>Строительство дома или коттеджа</option>
                            <option>Обустройство участка</option>
                            <option>Проектирование и строительство бассейна</option>
                            <option>Составление сметы</option>
                            <option>Монтажные работы</option>
                            <option>Внутренняя отделка и капитальный ремонт</option>
                        </select>
                    </div>
                    <button class="button-style" type="submit">Отправить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
