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
