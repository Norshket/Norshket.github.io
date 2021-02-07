<?php require_once 'templates/blocks/header.php'?>  
  <?php require_once 'templates/blocks/mob.php'?> 
  
    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Аренда бытовки</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Аренда бытовки</h1>
        </div>
      
       <?php
        $item_catal= $database ['item_catal'];
        foreach($item_catal as $key => $value){
          $item_title = $value ['title'];
          $item_price = $value ['price'];
          $item_size = $value['size'];
          include ('./templates/blocks/block-catalog.php');   
        } 
        ?>
        <div class="calculator">
          <div class="grid-container">
            <form class="calculator_form">
              <div class="calculator_top">
                <div class="calculator_heading heading">Калькулятор подбора бытовки</div>
                <div class="calculator_wrap">
                  <div class="calculator_block">
                    <select class="select">
                      <option></option>
                      <option value="storage">Бытовка склад</option>
                      <option value="office">Бытовка прорабская (офис)</option>
                      <option value="living">Бытовка жилая</option>
                      <option value="security">Бытовка пост охрана</option>
                    </select>
                  </div>
                  <div class="calculator_block">
                    <div class="calculator_input">
                      <label class="input"><span>Количество:</span>
                        <input class="number" type="text" name="count">
                      </label>
                    </div>
                    <div class="calculator_input">
                      <label class="input"><span>Срок аренды:<span>(мес)</span></span>
                        <input class="number" type="text" name="rent">
                      </label>
                    </div>
                  </div>
                  <div class="calculator_block pay">
                    <label class="radio">
                      <input type="radio" name="pay">
                      <div class="radio-text">Помесячная оплата</div>
                    </label>
                    <label class="radio">
                      <input type="radio" name="pay">
                      <div class="radio-text">Разовая оплата</div>
                    </label>
                  </div>
                  <div class="calculator_block delivery">
                    <label class="checkbox">
                      <input type="checkbox">
                      <div class="checkbox-text">Доставка</div>
                    </label>
                    <label>
                      <input class="number" type="text" disabled name="distance"><span>километров до объекта</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="calculator_bottom">
                <div class="calculator_price">Выберите тип оплаты
                  <!--span="35 000 Р/мес"-->
                </div>
                <div class="calculator_button"><a class="btn_pink" href="#" data-open="popup_order">Заказать</a></div>
              </div>
            </form>
          </div>
        </div>
        <div class="main_photogallery">
          <div class="grid-container">
            <div class="main_photogallery-heading heading">Фотогалерея</div>
            <div class="main_photogallery-slider slider-arrows slider-dots">
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
            </div>
          </div>
        </div>
        <div class="order_form-block">
          <div class="grid-container">
            <div class="order_form-heading">У нас Вы можете быстро оформить заказ бытовки</div>
            <form class="order_form" action="" method="">
              <div class="order_form-group">
                <label>
                  <input type="text" name="name">
                  <div class="placeholder-input">Ваше имя</div>
                </label>
                <label>
                  <input type="tel" name="phone" required>
                  <div class="placeholder-input">Ваш телефон<span>*</span></div>
                </label>
                <label>
                  <input type="text" name="message">
                  <div class="placeholder-input">Ваше сообщение</div>
                </label>
              </div>
              <div class="order_form-personal">
                <label class="checkbox">
                  <input type="checkbox">
                  <div class="personal-text checkbox-text">Даю согласие на обработку персональных данных.  <a href="/obrabotka-personalnyh-dannyh/"> Узнать подробности</a></div>
                </label>
              </div>
              <button class="btn_pink">Заказать<span class="show-for-mobile"> бытовку</span></button>
            </form>
          </div>
        </div>
        <?php require_once './templates/blocks/articles.php';?>
      </div>
    </main>
    <?php require_once './templates/blocks/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/foundation.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/jquery.fancybox.min.js"></script>
    <script src="/assets/js/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script async src="/assets/js/main.js"></script>
    <div class="popup_form order_popup reveal" id="popup_order" data-reveal>
      <button class="close-modal" data-close aria-label="Close modal" type="button"></button>
      <form action="" method="">
        <div class="heading">Заказ бытовок</div>
        <div class="order_form-group">
          <label>
            <input type="text">
            <div class="placeholder-input">Ваше имя</div>
          </label>
          <label>
            <input type="tel" required>
            <div class="placeholder-input">Ваш телефон<span>*</span></div>
            <div class="error-message">Пожалуйста, введите корректный номер телефона</div>
          </label>
          <label>
            <textarea></textarea>
            <div class="placeholder-input">Комментарий</div>
          </label>
        </div>
        <div class="order_form-personal">
          <label class="checkbox">
            <input type="checkbox" required>
            <div class="personal-text checkbox-text">Даю согласие на обработку персональных данных.  <a href="/obrabotka-personalnyh-dannyh/"> Узнать подробности</a></div>
          </label>
        </div>
        <button class="to-order btn_pink">Заказать</button>
      </form>
    </div>
  </body>
</html>