<div>
    <img class="banner" src="<?php echo base_url(); ?>assets/images/Banner.png" alt="Banner">
</div>

<div class="container iseng">
    <div class="row">
        <div class="col-sm-5 text-center">
            <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Home">
        </div>
    <div class="col-sm-7 text-center">
        <p style="text-align:justify; font-style: italic; font-family: 'Times New Roman', Times, serif; font-weight: bold; font-size: 30px;">
            “Dan orang akan datang dari timur dan barat dan dari utara dan selatan dan mereka duduk makan di dalam Kerajaan Allah”. Lukas 13 : 29.
        </p>
    </div>
  </div>
</div>

<div class="bgimg-3 blend-blue">
    <div class="caption3">
        <p class="" style="background-color:transparent;font-size:30px;color: #fff;">
            Ibadah Minggu</p>
        <hr class="underline">
        <p class="" style="background-color:transparent;font-size:25px;color: #f7f7f7;">
        Pukul 08:00 dan 18:00 WIB </p>
        <p class="" style="background-color:transparent;font-size:25px;color: #f7f7f7;">
        Jl. Petunia Kav. 415 A</p>
    </div>
</div>

<div style="position:relative;">
    <div style="background-color:white;text-align:center;padding:50px 0;text-align: justify;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
          <!-- Upcoming Event -->
                    <div class="text-center">
                         <h3>Upcoming Event</h3>
                    </div>
                        <!--<hr class="underline">
                            <p style="font-size:30px;">MEGA BAZAAR</p>
                                <span style="font-size:20px;">GPIB "BAHTERA IMAN"
                                <br>Jl. Petunia Kav. 415A Bukit Nusa Indah
                                <br>Sabtu, 13 Oktober 2018. Pkl: 09:00 wib
                                </span>-->
            </div>
        <div class="col-sm-6">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>              
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="<?php echo base_url(); ?>assets/images/donor_darah.JPG" alt="">
              </div>
              <div class="item">
                <img src="<?php echo base_url(); ?>assets/images/back_ground.JPG" alt="">
              </div>
              <div class="item">
                <img src="<?php echo base_url(); ?>assets/images/mountain.jpg" alt="">
              </div>

              <!--<div class="item">
              <img src="<?php //echo base_url(); ?>assets/images/daniel_fasting.jpg" alt="">
              </div>

              <div class="item">
              <img src="<?php //echo base_url(); ?>assets/images/sunday_service.png" alt="">
              </div>-->
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bgimg-4 blend-green">
  <div class="caption3">
    <div class="container">
      <!-- Daily Verse -->
      <div class="text-center" style='color: #fff;'><h1>Daily Verse</h1></div><hr class="underline">
      <?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://labs.bible.org/api/?passage=votd&type=json");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {  echo "cURL Error #:" . $err;}
        else {
        $json=json_decode($output,true);
        $test = "<pre>".json_encode($json, JSON_PRETTY_PRINT)."</pre>";
        $bookname = $json[0]['bookname'];
        $chapter = $json[0]['chapter'];
        $verse = $json[0]['verse'];
        $text = $json[0]['text'];
        }

        echo "<span style='color: #fff;font-size:30px;'>".$text."</span> <a href='http://netbible.com/net-bible-preface'>&copy;NET</a>";
        echo "<p style='color: #fff;text-align:right'>".$bookname." ".$chapter." : ".$verse."</br>";
        echo "Provided by <a href='https://bible.org/'>bible.org</a></p>"
      ?>
    </div>
  </div>
</div>
