<html>



<head>
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    <div class="mui-container">
        <div id="header">
            <span>Хоп-хоп</span>
            <span>Мужчина</span>
            <span>Женщина</span>
            <div class="xoo-wsc-cart-trigger">Trigger Side Cart</div>
            <!-- <?php $ajax_cart_en = 'yes' === get_option('woocommerce_enable_ajax_add_to_cart');
                    if ($ajax_cart_en) {
                        echo 'ajax is enabled';
                    } ?> -->

        </div>
        <section id="checkout">
        <div class="mui-container">
            <span class="close">X</span>
            <form class="mui-form">
                <legend>Детали заказа</legend>
                <div class="fields">
                    <div class="row">
                        <div class="mui-textfield">
                            <input type="text" placeholder="Input 1">
                            <label>Имя</label>
                        </div>

                        <div class="mui-textfield">
                            <input type="text" placeholder="Input 2">
                            <label>Фамилия</label>
                        </div>
                    </div>
                    <div class="mui-select">
                        <select>
                            <option>ЛНР/ДНР/РФ</option>
                            <option>ЛНР</option>
                            <option>ДНР</option>
                            <option>РФ</option>
                        </select>
                        <label>Страна/регион</label>
                    </div>

                    <div class="mui-textfield">
                        <input type="text" placeholder="Input 2">
                        <label>Адрес</label>
                    </div>
                    <div class="mui-textfield">
                        <input type="text" placeholder="Input 2">
                        <label>Населённый пункт</label>
                    </div>
                    <div class="mui-textfield">
                        <input type="text" placeholder="Input 2">
                        <label>Область</label>
                    </div>
                    <div class="mui-textfield">
                        <input type="text" placeholder="Input 2">
                        <label>Индекс</label>
                    </div>
                    <div class="mui-textfield">
                        <input type="text" placeholder="Input 2">
                        <label>Телефон</label>
                    </div>
                    <div class="mui-textfield">
                        <input type="text" placeholder="Input 2">
                        <label>Email</label>
                    </div>
                    <div class="mui-textfield">
                        <textarea placeholder="Textarea"></textarea>
                        <label>Коменатрии к заказу</label>
                    </div>
                    <div class="cart_content">
                        <h3>Ваш заказ</h3>
                        <ul>
                            <li>
                                <span>Пончо / размер L / цвет чёрный</span>
                                <span>xl</span>
                                <span>5000</span>
                            </li>
                            <li>
                                <span>Пончо / размер L / цвет чёрный</span>
                                <span>xl</span>
                                <span>5000</span>
                            </li>
                        </ul>
                    </div>
                    <div class="price_total">
                        <h3>ИТОГ:</h3><span>10000</span>
                    </div>
                    <div class="delivery">
                        <h3>Доставка</h3><span>Доставка согласно тариуф "Транспортной
                            компании/почты" и в тоговою
                            стоимость на сайте не включена</span>
                    </div>
                    <button type="submit" class="mui-btn mui-btn--raised">Заказать</button>
                </div>

            </form>
        </div>
        </div>

    </section>