<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Soosmart</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/static/css/main.css?<?php echo date_timestamp_get(date_create()) ?>">
</head>
<body>
  <div class="container-wrapper">
    <?php get_header(); ?>

    <main>
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-3">
            asfasf
          </div> -->
          <div class="col-lg-12">
            <div class="main-hello-section">
              <div class="row">
                <div class="col-lg-6">
                  <a href="#" class="main-hello-block">
                    <img src="http://englishpnz.ru/sites/default/files/images/kursi/individ.jpg" class="main-hello-block__image" alt="img">
                    <h2 class="main-hello-block__title">
                      Индивидуальные занятия
                    </h2>
                    <h3 class="main-hello-block__subtitle">
                      Индивидуальные занятия
                    </h3>
                  </a>
                </div>
                <div class="col-lg-6">
                  <a href="#" class="main-hello-block">
                    <img src="http://learnthaireviews.com/wp-content/uploads/2014/05/learn-thai-language-group-or-private.jpg" class="main-hello-block__image" alt="img">
                    <h2 class="main-hello-block__title">
                      Групповые занятия
                    </h2>
                    <h3 class="main-hello-block__subtitle">
                      Групповые занятия
                    </h3>
                  </a>
                </div>
                <div class="col-lg-4">
                  <a href="#" class="main-hello-block">
                    <img src="http://kavkazplus.com/photos/online.JPG" class="main-hello-block__image" alt="img">
                    <h2 class="main-hello-block__title">
                      Онлайн решения
                    </h2>
                    <h3 class="main-hello-block__subtitle">
                      Онлайн решения
                    </h3>
                  </a>
                </div>
                <div class="col-lg-4">
                  <a href="#" class="main-hello-block">
                    <img src="http://new-ton.by/wp-content/uploads/2017/07/P1040273-750x375.jpg" class="main-hello-block__image" alt="img">
                    <h2 class="main-hello-block__title">
                      Наши преподаватели
                    </h2>
                    <h3 class="main-hello-block__subtitle">
                      Наши преподаватели
                    </h3>
                  </a>
                </div>
                <div class="col-lg-4">
                  <a href="#" class="main-hello-block">
                    <img src="http://www.don-ald.ru/wp-content/uploads/2015/12/1960-1969.jpg" class="main-hello-block__image" alt="img">
                    <h2 class="main-hello-block__title">
                      Офис в центре города
                    </h2>
                    <h3 class="main-hello-block__subtitle">
                      Офис в центре города
                    </h3>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </div>

  <?php get_footer(); ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>