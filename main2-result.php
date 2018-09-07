<?php include('header-logged.php'); ?>

    <section class="main_page_wrap logged_user">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <div class="bbody">
                        <h1 class="page_title">Особистий кабінет держслужбовця для планування перевірок</h1>
                        <div class="icon_question"><a href="#" class="faq_link ">Як користуватися?</a></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <div class="main_right_block">
                        <article class="last_news">
                            <h3 class="last_news_title">Останні новини</h3>
                            <ul class="last_news_list">
                                <li>
                                    <span class="news_date">29.12.2017</span>
                                    <p class="last_news_text"><a href="#">Щодо внесення змін до Плану здійснення комплексних заходів державного нагляду на 2018 рік</a></p>
                                </li>
                            </ul>
                            <div class="bfoot">
                                <a href="#" class="">Дивитися всі новини</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="user_info_box">
                        <p class="user_name">Вітаємо, Олексій Вєсьолкін!</p>
                        <p class="user_position">Міністерство екології</p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="stat_list">
                        <div class="stat_box">
                            <span class="stat_num">29,850</span>
                            <span class="stat_text">затверджених <br>перевірок<span class="hidden-xs"> за 2018 р.</span></span>
                        </div>
                        <div class="stat_box">
                            <span class="stat_num">27,307</span>
                            <span class="stat_text">комплексних <br>перевірок <span class="hidden-xs">за 2018 р.</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="user_nav">
                        <li class="user_nav_box">
                            <div class="user_nav_icon"><span class="icon-folders"></span></div>
                            <div class="user_nav_content">
                                <h3 class="user_nav_title">Планування</h3>
                                <ul class="user_nav_links">
                                    <li><a href="#">Проекти планів</a></li>
                                    <li><a href="#">Затверджені</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="user_nav_box">
                            <div class="user_nav_icon"><span class="icon-folder_add"></span></div>
                            <div class="user_nav_content">
                                <h3 class="user_nav_title">Позапланові</h3>
                                <ul class="user_nav_links">
                                    <li><a href="#">Внести інформацію про перевірки</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="user_nav_box">
                            <div class="user_nav_icon"><span class="icon-group"></span></div>
                            <div class="user_nav_content">
                                <h3 class="user_nav_title">Адміністування</h3>
                                <ul class="user_nav_links">
                                    <li><a href="#">Співробітники</a></li>
                                    <li><a href="#">Контролюючі органи</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="user_nav_box">
                            <div class="user_nav_icon"><span class="icon-group"></span></div>
                            <div class="user_nav_content">
                                <h3 class="user_nav_title">Адміністування</h3>
                                <ul class="user_nav_links">
                                    <li><a href="#">Співробітники</a></li>
                                    <li><a href="#">Контролюючі органи</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--events-->
    <section class="events">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="events_block one_field">
                        <form action="#" class="form-inline">
                            <div class="form-group">
                                <label for="name_company">Назва компанії / ЄДРОПОУ / Ідентифікаційний код</label>
                                <input id="name_company" type="text" class="form-control" placeholder="Приклад: ТОВ «Укрсплав»">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Знайти заходи</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--main_result-->
    <section class="main_result">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="result_items_text">Показані <span>1-20</span> із <span>8 295</span> записів</p>

                    <table class="result_table visible-lg table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Найменування суб’єкта господарювання</th>
                            <th>Адреса суб’єкта <span class="icon-info info_icon" data-toggle="tooltip" data-placement="top" title="Місце провадження господарської діяльності суб'єкта господарювання"></span></th>
                            <th>Код суб’єкта<span class="icon-info info_icon" data-toggle="tooltip" data-placement="top" title="Ідентифікаційний код юридичної особи"></span></th>
                            <th>Предмет перевірки<span class="icon-info info_icon" data-toggle="tooltip" data-placement="top" title="Предмет здійснення заходу державного нагляду (контролю)"></span></th>
                            <th>Ступінь ризику</th>
                            <th class="result_table_action"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="#" target="_blank">ТОВ«ЕКОЛОГІЯ УКРАЇНА»</a></td>
                            <td>
                                <div class="text_wrap">
                                    <div>
                                        Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32. Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32. Дніпропетровська обл., с. Новоалек-
                                    сандрів-ка, вул. Криворізьке шосе, 32. Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32. Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32. Дніпропетровська обл., с.
                                    Новоалек- сандрів-ка, вул. Криворізьке шосе, 32. Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32.
                                    </div>
                                    <button class="show_text"></button>
                                </div>
                            </td>
                            <td>32312546</td>
                            <td>Дотримання вимог Ліцензійних умов провадження господарської діяльності</td>
                            <td>середній</td>
                            <td class="result_table_action">
                                <a href="#" class="table_action_btn icon-details"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="#" target="_blank">ТОВ«ЕКОЛОГІЯ УКРАЇНА»</a></td>
                            <td>Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32.</td>
                            <td>32312546</td>
                            <td>Дотримання вимог Ліцензійних умов провадження господарської діяльності</td>
                            <td>середній</td>
                            <td class="result_table_action">
                                <a href="#" class="table_action_btn icon-details"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="#" target="_blank">ТОВ«ЕКОЛОГІЯ УКРАЇНА»</a></td>
                            <td>Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32.</td>
                            <td>32312546</td>
                            <td>Дотримання вимог Ліцензійних умов провадження господарської діяльності</td>
                            <td>середній</td>
                            <td class="result_table_action">
                                <a href="#" class="table_action_btn icon-details"></a>
                            </td>
                        </tr>
                        </tbody>

                    </table>


                    <div class="result_table_mobile hidden-lg">
                        <div class="result_table_mobile_item">
                            <div class="collapse_btn">
                                <a href="#" target="_blank">ТОВ«ЕКОЛОГІЯ УКРАЇНА»</a>
                                <button class="open_result_table icon-angle-down"></button>
                            </div>
                            <div class="result_table_mobile_panel">
                                <div class="result_table_mobile_cell">
                                    <div class="result_table_caption">Місце провадження</div>
                                    Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32.
                                </div>
                                <div class="result_table_mobile_cell">
                                    <div class="result_table_caption">Ідентифікаційний код юридичної особи</div>
                                    32312546
                                </div>
                                <div class="result_table_mobile_cell">
                                    <div class="result_table_caption">Предмет здійснення заходу</div>
                                    Дотримання вимог Ліцензійних умов провадження господарської діяльності
                                </div>
                                <div class="result_table_mobile_cell">
                                    <div class="result_table_caption">Ступінь ризику</div>
                                    середній
                                </div>
                                <div class="result_table_mobile_cell">
                                    <a href="#" class="btn_link btn center-block">Перейти до перевірки</a>
                                </div>
                            </div>
                        </div>
                        <div class="result_table_mobile_item">
                            <div class="collapse_btn">
                                <a href="#" target="_blank">ТОВ«ЕКОЛОГІЯ УКРАЇНА»</a>
                                <button class="open_result_table icon-angle-down"></button>
                            </div>
                            <div class="result_table_mobile_panel">
                                <div class="result_table_mobile_cell">
                                    <div class="result_table_caption">Місце провадження</div>
                                    Дніпропетровська обл., с. Новоалек- сандрів-ка, вул. Криворізьке шосе, 32.
                                </div>
                                <div class="result_table_mobile_cell">
                                    <div class="result_table_caption">Ідентифікаційний код юридичної особи</div>
                                    32312546
                                </div>
                                <div class="result_table_mobile_cell">
                                    <div class="result_table_caption">Предмет здійснення заходу</div>
                                    Дотримання вимог Ліцензійних умов провадження господарської діяльності
                                </div>
                                <div class="result_table_mobile_cell">
                                    <div class="result_table_caption">Ступінь ризику</div>
                                    середній
                                </div>
                                <div class="result_table_mobile_cell">
                                    <a href="#" class="btn_link btn center-block">Перейти до перевірки</a>
                                </div>
                            </div>
                        </div>

                        <div class="result_table_mobile_more">
                            <a href="#" class="btn btn-primary center-block">Завантажити щє 10 компаній</a>
                        </div>

                    </div>

                </div>
                <div class="col-xs-12">
                    <div class="pagination_box">
                        <ul class="pagination">
                            <li class="prev disabled"><span><i class="icon-angle-left"></i></span></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><span>...</span></li>
                            <li><a href="#">10</a></li>
                            <li class="next"><a href="#" data-page="1"><i class="icon-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--sponsors-->
    <section class="sponsors">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <a href="http://drs.gov.ua/" target="_blank">
                        <img src="img/drs.png" srcset="img/drs@2x.png 2x,		 img/drs@3x.png 3x" alt="Державна регуляторна служба України" class="img-responsive">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-4">
                    <a href="http://me.gov.ua/" target="_blank">
                        <img src="img/sponsor2.png" srcset="img/sponsor2@2x.png 2x, img/sponsor2@3x.png 3x" alt="Міністерство економічного розвитку і торгівлі України" class="img-responsive center-block">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <a href="http://brdo.com.ua" target="_blank">
                        <img src="img/sponsor3.png" srcset="img/sponsor3@2x.png 2x, img/sponsor3@3x.png 3x" alt="Офіс ефективного регулювання" class="img-responsive pull-right">
                    </a>
                </div>
            </div>
        </div>
    </section>


<?php include('footer.php'); ?>