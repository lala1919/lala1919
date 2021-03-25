<?php require('_top.php') ?>


    <!-- Add your site or app content here -->
    <div class="hero-full-container background-image-container white-text-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>CODE MEMO 3</h1>
            <p>코드메모 연습용 3번째.</p>
            <br>
            <a href="./components.php" class="btn btn-default btn-lg" title="">GO GO!</a>
          </div>
        </div>
      </div>
    </div>

    <div class="section-container">
      <div class="container">
        <div class="row">      
            <div class="col-xs-12">

              <div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">
                  
                  <div class="carousel-inner" role="listbox">

                      <div class="item active">
                          <img class="img-responsive" src="./assets/images/img-06.jpg" alt="First slide">

                          <div class="carousel-caption card-shadow reveal">
                            <?php 
                            $sqlload = "SELECT * FROM `codeMemo`";
                            $result = mysqli_query($conn, $sqlload); 
                            foreach($result as $v){
                            ?>
                            <h3><?=$v['title'];?></h3>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                              <i class="togglebtn" onclick="login()">Login</i>
                              <span class="sr-only">로그인</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                              <i class="togglebtn" onclick="register()">Register</i>
                              <span class="sr-only">회원가입</span>
                            </a>
                            
                            <p>
                            <?=$v['content'];?>

                            </p>
                            <a href="./components.php" class="btn btn-primary" title="">
                              메모하러가기
                            </a>
                            <?php
                            }
                            ?>
                          </div>
                      </div>
                      <div class="item">
                          <img class="img-responsive" src="./assets/images/img-07.jpg" alt="First slide">
                          <div class="carousel-caption card-shadow reveal">

                            <h3>Title2</h3>
                              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="togglebtn" onclick="login()">Login</i>
                                <span class="sr-only">로그인</span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="togglebtn" onclick="register()">Register</i>
                                <span class="sr-only">회우너가입</span>
                              </a>
                              <p>
                                type
                              </p>
                              
                              <p>
                                여기에 내용 들어갈거고... 사실여러개 번갈아가면서 볼수있으면 좋은데 그게 과연가능할지.

                              </p>
                            <a href="./components.php" class="btn btn-primary" title="">
                              메모하러가기
                            </a>
                          </div>
                      </div>
                  </div>
                
              </div>

            
            </div>
            
          </div>  
        
      </div>
    </div>


  
  
    <div class="section-container contact-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <div class="section-container-spacer">
              <h2 class="text-center">Write code</h2>
              <p class="text-center">여기에 코드를 입력.</p>
            </div>
            <div class="card-container">
              <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="_write.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="type" id="type">
                          <option>select</option>
                          <option value="Python">Python</option>
                          <option value="Javascript">Javascript</option>
                          <option value="Java">Java</option>
                          <option value="Etc">Etc</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="content" rows="3" placeholder="write code here"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function (event) {
        navbarFixedTopAnimation();
      });
    </script>
    
    <?php require('_footer.php') ?>


    <script type="text/javascript" src="./main.0cf8b554.js"></script>
    <script>
            const x = document.getElementById("login");
            const y = document.getElementById("register");
            const z = document.getElementById("btn");
            
            
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
        </script>
    
  </body>

</html>