
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title> <?php if (!empty ($data['title'])){echo $data ['title'];} else{echo 'такого заголвка нет';}?></title>
    <!--   -->
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=f461f187-b614-45c4-988e-6b214fceb781&amp;lang=ru_RU" type="text/javascript"></script></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
    <link rel="stylesheet" href="/assets/css/screen.css">
  </head>
  <body>
    <header class="site_header">
      <div class="header_top">
        <div class="grid-container">
          <div class="grid-x">
            <div class="header_address"><i class="icon-address"></i>ул. Молодогвардейская, д. 58, стр.13, офис 28.
              Мы работаем: Пн - Пт с <?php echo"$time"?>
            </div>
            <div class="header_contacts"><a class="mail" href="mailto:5084145@mail.ru"><i class="icon-mail"></i>5084145@mail.ru</a>
              <div class="header_phones"><a class="phone" href="tel:+74957985563">+7 (495) 798-55-63</a><a class="phone" href="tel:+74956418568">+7 (495) 641-85-68</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="grid-container">
          <div class="grid-x">
            <div class="header_logo"><a href="index.php">
                <div class="logo">Бытовки-Сервис.ru</div>
                <div class="logo_text">Аренда бытовок и блок контейнеров с 2008 г.</div></a></div>
            <div class="header_menu">
              <ul class="menu">
                <li><a href="/catalog.php">Аренда бытовки</a>
                  <ul class="submenu">
                    <li><a href="#">Аренда бытовок в Видном</a></li>
                    <li><a href="#">Аренда бытовок в Домодедово</a></li>
                    <li><a href="#">Аренда бытовок в Видном</a></li>
                    <li><a href="#">Аренда бытовок в Домодедово</a></li>
                    <li><a href="#">Аренда бытовок в Видном</a></li>
                    <li><a href="#">Аренда бытовок в Домодедово</a></li>
                    <li><a href="#">Аренда бытовок в Видном</a></li>
                    <li><a href="#">Аренда бытовок в Домодедово</a></li>
                  </ul>
                </li>
                <li><a href="price.php">Цены</a></li>
                <li><a href="delivery.php">Доставка</a></li>
                <li><a href="photogallery.php">Фотогалерея</a></li>
                <li><a href="contacts.php">Контакты</a></li>
              </ul>
              <div class="header-search"><a class="search_btn" href="#"><i class="icon-search"></i></a>
                <form class="search_form" method="" action="">
                  <div class="search-widget">
                    <input type="text" placeholder="Поиск">
                    <button class="search_btn-close" type="reset"><i class="icon-close"></i></button>
                  </div>
                </form>
                <div class="search-result">
                  <div class="search-bytovka">
                    <div class="search-bytovka-img"><a href="#"><img src="../assets/img/search1.png"></a></div>
                    <div class="search-bytovka-body"><a class="search-bytovka-title" href="/bytovka.php">Бытовка прорабская (офис)</a>
                      <div class="search-bytovka-gabarits">2400 Х 6000</div>
                    </div>
                  </div>
                  <ul class="search-ul">
                    <li>прорабская <span>бытовка</span></li>
                    <li><span>Бытовка</span>душевая</li>
                    <li><span>бытовка для</span>зимнего проживания</li>
                    <li><span>бытовка</span>склад</li>
                    <li><span>бытовка для</span>строителей</li>
                    <li><span>бытовка для</span>рабочих</li>
                    <li><span>бытовка</span>на шосси</li>
                    <li>вагон<span> бытовка</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>