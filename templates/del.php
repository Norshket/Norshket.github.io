<?php require_once 'templates/blocks/header.php'?>
  <?php require_once 'templates/blocks/mob.php'?>   
    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Доставка</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Доставка</h1>
        </div>
        <div class="grid-container">
          <div class="seo_text"><img class="content-img" src="/assets/img/delivery.png" alt="" title="">
            <p>Для того, чтобы избавить своих клиентов от лишних проблем наша компания предлагает такие услуги как: доставка бытовок и блок-контейнеров.</p>
            <p>Доставка бытовок включает в себя не только транспортировку, но и погрузочно-разгрузочные работы, а также их установку. Перевозка бытовок производится в собранном виде при помощи манипулятора. Это значительно сокращает расходы, так как избавляет от необходимости использования грузоподъемной техники.</p>
            <p>Стоимость услуги до 50 км от склада (г. Химки, МО) на сегодняшний день составляет 6 500 рублей. Перевозка бытовок на более дальнее расстояние осуществляется по прейскуранту 50 рублей за каждый дополнительный километр.</p>
            <p>Все разрешения на перевозку бытовок наша компания получает самостоятельно. Вам нужно сделать только заказ и указать начальную и конечную точку перевозки. Остальные формальности наша компания берет на себя. Необходимо учитывать, чтобы на месте погрузки и выгрузки бытовок был свободный подъезд манипулятора.</p>
            <p>Звоните по телефонам:<span class="tel">+7 (495) 789-55-63</span>,<span class="tel">+7 (495) 641-85-68 </span>, и наши консультанты подберут для вас наиболее выгодные условия сотрудничества.</p>
          </div>
        </div>
        <?php require_once './templates/blocks/del_calc.php'?>
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
        <?php require_once './templates/blocks/form.php'?>
        <?php  require_once './templates/blocks/articles.php'?>
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