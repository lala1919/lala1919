<?php require('_top.php') ?>
<?php require ('_conn.php'); ?>

    <!-- Add your site or app content here -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-6">

          <!-- * 갖고 있는 코드들의 리스트 표시 -->
          <?php 
          $sqlload = "SELECT * FROM `codeMemo`";
          $result = mysqli_query($conn, $sqlload);
          $sqlpythonload = "SELECT * FROM `python`";
          $resultpython = mysqli_query($conn, $sqlpythonload);
          /* foreach :배열의 처음부터 끝까지 순차적으로 불러옴. 
          foreach ([배열명] as [값 변수]){ [소스 코드]; } */
          foreach($result as $v) {
          ?>
          
          <h2 class="template-example">
            <?=$v['title'];?><br>
            <button type="submit" class="btn btn-primary" onclick="location.href='_delete.php?no=<?=$v['no'];?>';">DELETE</button>
            <button type="submit" class="btn btn-primary" onclick="copyCode('#<?=$v['no'];?>')">COPY</button>
          </h2>
          <h4>Type: <?=$v['type'];?></h4>

          <div class="resume-item pb-0">
            <p><em><?=$v['content'];?></pre></em></p>
          </div>
          
          <?php
          }
          ?>
        </div>

        <div class="col-xs-12 col-md-6">  

          <div class="template-example">
            <h2 class="template-title-example">List</h2>
            <div class="row">
              <div class="col-md-6">
                <h3 class="template-title-example">Python</h3>
                <ul>
                <?php 
                foreach($resultpython as $v){
                ?>
                  <li><?=$v['title'];?></li>
                <?php
                }
                ?>
                </ul>
              </div>
              <div class="col-md-6">
                <h3 class="template-title-example">Java</h3>
                <ul>
                <?php 

                foreach($result as $v){
                ?>
                  <li><?=$v['title'];?></li>
                <?php
                }
                ?>
                </ul>
              </div>
              <div class="col-md-6">
                <h3 class="template-title-example">Java script</h3>
                <ul>
                <?php 

                foreach($result as $v){
                ?>
                  <li><?=$v['title'];?></li>
                <?php
                }
                ?>
                </ul>
              </div>
              <div class="col-md-6">
                <h3 class="template-title-example">ETC</h3>
                <ul>
                <?php 
                foreach($result as $v){
                ?>
                  <li><?=$v['title'];?></li>
                <?php
                }
                ?>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="template-example">
            <h2 class="template-title-example">글쓰기</h2>
              <form action="_write.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" class="form-control" name="title" id="title" data-rule="minlen:4" placeholder="Title" />
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
                  <textarea class="form-control" name="content" rows="3" data-rule="required" placeholder="code입력"></textarea>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">등록하기</button>
                </div>
              </from>
          </div>




        </div>
      </div>


    </div>

    <?php require('_footer.php') ?>

    <script>
      function copyCode(no) {
        alert('복사완료!');
        let $temp = $("<textarea>");
        $("body").append($temp);
        $temp.val($(no).text()).select();//내용 전체 선택
        document.execCommand("copy"); //복사
        $temp.remove(); //선택영역 초기화
      }
    </script>
   <script type="text/javascript" src="./main.0cf8b554.js"></script>
  </body>
  
</html>