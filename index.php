<?php
  require_once('inc/header.php');
  $name = '';
  $email = '';
  $subject = '';
  $text = '';
?>

<?php
/*
   require_once("inc/db.php");
   session_start();

   if($_POST['submit']){

    $error = [];

    if(!$_POST['name']) $error[] = "Укажите имя";

    if(!preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $_POST['email'])) $error[] = "Укажите корректный E-mail";

    if(!$_POST['subject']) $error[] = "Укажите тему письма";

    if(count($error))
    {
      $_SESSION['message'] = "<p id='form-error'>" . implode('<br />', $error) . "</p>";
    }else
    {
      send_mail($_POST['email'], 'vadim123544@gmail.com',$_POST['subject'], $_POST['text']);

      $_SESSION['message'] = "<p id='form-success'>Ваше сообщение успешно отправлено</p>";

    }

   }
   */
?>

      <header>
          <div class="row">
            <div class="col-md-12">
          <div class="header-logo text-center wow bounceInUp" data-wow-delay="0s" data-wow-duration="2s">
            <h1>Welcome to<br /> Bright<br /> paints</h1>
            <h3>Exactly What You Need</h3>
            <a class="transition" href="#">Contact</a>
          </div>
            </div>
          </div>
          </header>
    <section>
      <div class="row">
        <div class="col-md-12 col-sm-12">
            <img class="img-responsive center-block img-rounded img_sec" src="img/2.jpg" alt="image"/>
        </div>
      </div>
      <div class="wow bounceInUp" data-wow-delay="0s" data-wow-duration="2s" data-wow-offset="50">
        <div class="row">
        	<div class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2 text-center">
          		<h3 class="text-center">Our Story</h3>
          	</div>  
        </div>
        <div class="row">
       	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
          <h1>About</h1>
        </div>
        </div>
        <div class="row">
        	<div class="col-md-10 col-md-offset-1 text-center">	
         	 <h5>Since being established in 2000, Bright paints has been known for an unparalleled commitment to customer <br />satisfaction. It’s this standard of excellence that has provided the impetus for us to grow into the business we <br />are today. For more information about the products and services we provide, reach out today.</h5>
         	</div>
        </div>
      </div>
    </section>
    <div class="section1">
          <div class="sec1">
            <div class="wrapper">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                  <p>Bright paints Services</p>
                </div>
              </div>
            </div>
          </div>
          <div class="sec1_1">
            <div class="row">
              <div class="col-md-6 text-center text_sec wow bounceInUp" data-wow-delay="0s" data-wow-duration="2s" data-wow-offset="50">
                <h3 class="section_h3">Customer Support</h3>
                <h4 class="section_h4">Next Level Service</h4>
                <a class="transition section_a" href="#">Get in touch</a>
              </div>
              <div class="col-md-6">
                <img class="img-responsive" src="img/photo1.jpg" alt="Photo1">
              </div>
          </div>
          </div>
          <div class="sec2">
          <div class="row">
               <div class="col-md-6 col-md-push-6 text-center text_sec wow bounceInUp" data-wow-delay="0s" data-wow-duration="2s" data-wow-offset="50">
                  <h3 class="section_h3">Delivery</h3>
                  <h4 class="section_h4">Here For You</h4>
                  <a class="transition section_a" href="#">Get in touch</a>
              </div>
              <div class="col-md-6 col-md-pull-6">
                <img class="img-responsive" src="img/photo1.jpg" alt="Photo1">
              </div>
          </div>
          </div>
           <div class="sec3">
            <div class="row">
              <div class="col-md-6 text-center text_sec wow bounceInUp" data-wow-delay="0s" data-wow-duration="2s" data-wow-offset="50">
                  <h3 class="section_h3">Customer Support</h3>
                  <h4 class="section_h4">Next Level Service</h4>
                  <a class="transition section_a" href="#">Get in touch</a>
              </div>
              <div class="col-md-6">
                <img class="img-responsive" src="img/photo1.jpg" alt="Photo1">
              </div>
            </div>
          </div>
          <div class="sec4">
           <div class="row">
              <div class="col-md-6">
                <div class="sec4_1 text-right">
                <img class="" src="img/3.jpg" alt="Photo1">
                </div>
              </div>
            <div class="col-md-6 text-center">
              <div class="sec4_2">
                <h3>Opening Hours</h3>
                <p>Come Visit</p>
                <p>Пн - пт: 9 до 6  Сб: з 10 до 6</p>
                <p>Нд: Закрито</p>
              </div>
            </div>
          </div>
          </div>
      </div>
      <div class="section2">
            <div id="itemscarousel" class="carousel slide" data-ride="false">
              <div class="carousel-inner">
                <div class="item active">
                  <div class="row">
                    <div class="col-md-4">
                      <a href="#"><img class="img-thumbnail" src="img/10.jpg" alt="photo1"></a>
                      <div class="carousel-caption">
                        <h3>Photo1</h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                       <a href="#"><img class="img-thumbnail" src="img/11.jpg" alt="photo1"></a>
                      <div class="carousel-caption">
                        <h3>Photo1</h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                       <a href="#"><img class="img-thumbnail" src="img/12.jpg" alt="photo1"></a>
                      <div class="carousel-caption">
                        <h3>Photo1</h3>
                      </div>
                    </div>
                  </div>
            </div>
              <div class="item">
                  <div class="row">
                    <div class="col-md-4">
                      <a href="#"><img class="img-thumbnail" src="img/13.jpg" alt="photo1"></a>
                      <div class="carousel-caption">
                        <h3>Photo1</h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                       <a href="#"><img class="img-thumbnail" src="img/14.jpg" alt="photo1"></a>
                      <div class="carousel-caption">
                        <h3>Photo1</h3>
                      </div>
                    </div>
                    <div class="col-md-4">
                       <a href="#"><img class="img-thumbnail" src="img/15.jpg" alt="photo1"></a>
                      <div class="carousel-caption">
                        <h3>Photo1</h3>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
             <a href="#itemscarousel" class="carousel-control left" data-slide="next"><span class="glyphicon glyphicon-chevron-left"></span>
             </a>
              <a href="#itemscarousel" class="carousel-control right" data-slide="prev"><span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>
      </div>
        <div class="section3">
        	<div class="row">
        		<div class="col-md-6 col-md-offset-3">
        			<h1 class="wow bounceInUp" data-wow-delay="0s" data-wow-duration="2s" data-wow-offset="50">Get in Touch</h1>
        			<img class="img-responsive" src="img/2.jpg" alt="Photo">
        			<p>tatjana19rjabokon@gmail.com<br />0938919595</p>

              <div id="results">
              </div>
        			<form id="form" method="post" action="">
        				<div class="form-group">
        					<div class="col-md-6">
        							<input type="text" class="form-control" width="50" placeholder="Name*" name="name" id="name"><br />
        							<input type="email" class="form-control" placeholder="Email*" name="email" id="email"><br />
        							<input type="text" class="form-control" name="subject" placeholder="Subject" id="subject"><br />	
        						<div class="form-group">
      								<textarea class="form-control" rows="3" id="text" name="text"></textarea>
    							</div>
        						<br />
        						<button class="btn btn-secondary" name="submit" id="submit" onclick="return post();">Send</button>
        					</div>
        				</div>
        			</form>
        		</div>
        	</div>
        </div>
<?php require_once('inc/footer.php'); ?>
  
