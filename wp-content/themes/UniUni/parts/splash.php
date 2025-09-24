
<div id="splash">
 <div id="splash_logo">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo02.svg" alt="UniUni(ゆにゆに)" class="fadeUp">
 </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
  <script type="text/javascript">
  //同じ日付で2回目以降ならローディング画面非表示の設定

  var splash_text = $.cookie('accessdate'); //キーが入っていれば年月日を取得
  var myD = new Date();//日付データを取得
  var myYear = String(myD.getFullYear());//年
  var myMonth = String(myD.getMonth() + 1);//月
  var myDate = String(myD.getDate());//日

  if (splash_text != myYear + myMonth + myDate) {//cookieデータとアクセスした日付を比較↓
          $("#splash").css("display", "block");//１回目はローディングを表示
          setTimeout(function () {
              $("#splash_logo").fadeIn(1000, function () {//1000ミリ秒（1秒）かけてロゴがフェードイン
                  setTimeout(function () {
              $("#splash_logo").fadeOut(1000);//1000ミリ秒（1秒）かけてロゴがフェードアウト
                  }, 1000);//1000ミリ秒（1秒）後に処理を実行
          setTimeout(function () {
              $("#splash").fadeOut(1000, function () {//1000ミリ秒（1秒）かけて画面がフェードアウト
              var myD = new Date();
              var myYear = String(myD.getFullYear());
              var myMonth = String(myD.getMonth() + 1);
              var myDate = String(myD.getDate());
              $.cookie('accessdate', myYear + myMonth + myDate); //accessdateキーで年月日を記録
          });
          }, 1700);//1700ミリ秒（1.7秒）後に処理を実行
      });
  }, 1000);//1000ミリ秒（1秒）後に処理を実行
  }else {
      $("#splash").css("display", "none");//同日2回目のアクセスでローディング画面非表示
  }
  </script>
