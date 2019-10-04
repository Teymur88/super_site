<?php
    $title = "Super site";
    include "site/head.php"
?> 
    
       <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/img/bender.png" height="150" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/img/bender.png" height="150" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/img/bender.png" height="150" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

                <article>
          <!-- Заголовок статьи -->
          <header>
            <h1>Тема статьи</h1>
            <p>
              <time datetime="2015-10-09">
                Дата публикации
              </time>
            </p>
          </header>
          <!-- Основное содержимое статьи -->
          <p>...</p>
          <!-- Секция статьи, содержащая комментарии -->
          <section>
            <!-- Заголовок секции, содержащей комментарии -->
            <h1>Комментарии</h1>
            <!-- 1 комментарий к статье -->
            <article>
              <!--Футер 1 комментария-->
              <footer>
                <p>Автор комментария</p>
                <p>
                  <time datetime="2015-10-10">
                    Дата комментария
                  </time>
                </p>
              </footer>
              <!-- Содержимое 1 комментария -->
              <p>
                Текст комментария...
             </p>
            </article>
            <!--2 комментарий к статье-->
            <article>
              <!--Футер 2 комментария-->
              <footer>
                <p>Автор комментария</p>
                <p>
                  <time  datetime="2015-10-11">
                    Текст комментария
                  </time>
                </p>
              </footer>
              <!-- Содержимое 2 комментария -->
              <p>
                Содержимое комментария...
             </p>
            </article>
         </section>
        </article>

        <div class="container-fluid">
        <article>
          <!-- Заголовок статьи -->
          <header>
            <h1>Тема статьи</h1>
            <p>
              <time datetime="2015-10-09">
                Дата публикации
              </time>
            </p>
          </header>
          <!-- Основное содержимое статьи -->
          <p>...</p>
          <!-- Секция статьи, содержащая комментарии -->
          <section>
            <!-- Заголовок секции, содержащей комментарии -->
            <h1>Комментарии</h1>
            <!-- 1 комментарий к статье -->
            <article>
              <!--Футер 1 комментария-->
              <footer>
                <p>Автор комментария</p>
                <p>
                  <time datetime="2015-10-10">
                    Дата комментария
                  </time>
                </p>
              </footer>
              <!-- Содержимое 1 комментария -->
              <p>
                Текст комментария...
             </p>
            </article>
            <!--2 комментарий к статье-->
            <article>
              <!--Футер 2 комментария-->
              <footer>
                <p>Автор комментария</p>
                <p>
                  <time  datetime="2015-10-11">
                    Текст комментария
                  </time>
                </p>
              </footer>
              <!-- Содержимое 2 комментария -->
              <p>
                Содержимое комментария...
             </p>
            </article>
         </section>
        </article>  
        </div>
        <!-- FOOTER.begin -->
        <footer class="bd-footer text-muted" style="position: relative; left: 0; bottom: 0; background:#ecf4ef; width: 100%;">
          <div class="container-fluid p-3 p-md-10">
            <div class="footer"></div>
            <div class="row">
              <div class="nav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                </div>
            </div>
          </div>
        </footer>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>