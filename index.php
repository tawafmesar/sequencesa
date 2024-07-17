

<!--  start connecting to database -->
<?php

include 'dbcon.php';

// check if user coming from http post request


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['order'])) { // check coming from login or signup form

        $username     = $_POST['name'];
        $phonee   = $_POST['phone'];
        $email      = $_POST['email'];
        $orderingg  = $_POST['ordering'];

    }else {

        // check the ordering form if valid or not befor sending info to database

          $formErrors = array();

          $username     = $_POST['name'];
          $phonee   = $_POST['phone'];
          $email      = $_POST['email'];
          $orderingg  = $_POST['ordering'];

          if (isset($username) ) {
            // filter the user name from any script
            $filteruser = filter_var($username,FILTER_SANITIZE_STRING);

              if (strlen($filteruser) < 4 ) {// check if the character of user name is larg

                $formErrors[] = 'الأسم يجيب ان يحتوي على اكثر من 4 احرف';

              }

              if (filter_var($username,FILTER_SANITIZE_STRING) != true){

                $formErrors[] = 'يجب ان يكون الاسم  نص فقط وان لا يحتوي على اي رموز';

            }



              if (!preg_match("~^[a-z0-9٠-٩\-+,()/'\s\p{Arabic}]{1,60}$~iu", $username)) {

                $formErrors[] = 'الأسم يجيب ان يحتوي على اكثر من 4 احرف';

              }
          }


        if (isset($phonee) ) {
            // filter the user name from any script
            $filterPhone = filter_var($phonee,FILTER_VALIDATE_INT);
            if (!preg_match ("/^[0-9]*$/", $filterPhone) ){
              $formErrors[] = 'الرقم الذي ادخلتة غير صحيح';
            }


        }


          if (isset($email) ) {
              // filter the user name from any script
              $filterEmail = filter_var($email,FILTER_SANITIZE_EMAIL);

              if (filter_var($filterEmail,FILTER_VALIDATE_EMAIL) != true){

                  $formErrors[] = 'البريد الالكتروني الذي ادخلتة غير مسموح';

              }

          }

          if (isset($orderingg) ) {
              // filter the user name from any script
              $filterOrdering = filter_var($orderingg,FILTER_SANITIZE_STRING);

              if (filter_var($orderingg,FILTER_SANITIZE_STRING) != true){

                  $formErrors[] = 'يجب ان يكون تفاصيل الطلب نص فقط وان لا يحتوي على اي رموز';

              }



              if (!preg_match("~^[a-z0-9٠-٩\-+,()/'\s\p{Arabic}]{1,60}$~iu", $orderingg)) {


                $formErrors[] = 'يجب ان يكون تفاصيل الطلب نص فقط وان لا يحتوي على اي رموز';

              }

          }



          // CHECK IF THERE IS NO ERROR PROCED THE ORDER ADD
          if (empty($formErrors)) {

                  //      $query = "INSERT orderr(name, phone, email  , ordering )
                  //                         VALUES(?, ?, ? , ?)";
                  //  $stmt = $con->prepare($query);
                //    $stmt->execute([$username, $phonee, $email , $orderingg]);

                  // insert order info into the datebase     VALUES(:zuser, :zpass , :zmail , :zname)");

                  $type= 'الرئيسية';
                  $stmt = $con->prepare("INSERT INTO
                                          orderr(name, phone, email  , ordering ,orderType)
                                          VALUES(:zuser, :zphone , :zmail  , :zordering , :ztype)");
                  $stmt->execute(array(


                        'zuser' => $username,
                        'zphone' => $phonee,
                        'zmail' => $email,
                        'zordering' => $orderingg,
                        'ztype' => $type


                  ));

                 // echo success message

$to = "altammamii2@gmail.com";
$subject = "Email Subject";

$message .=  'From : '. $type.',<br>';
$message .= 'Name    : '. $username.',<br>';
$message .=  'Phone : '. $phonee.',<br>';
$message .=  'Email : '. $email.',<br>';
$message .=  'Ordering : '. $orderingg.',<br>';


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'. $email .'>' . "\r\n";


mail($to,$subject,$message,$headers);


          ?>
            <script type="text/javascript">

            window.alert("The order have been sent");

            </script>
          <?php

        }
    }

}

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="imgs/logo.png" type="image/png">

    <title>SequenceSa</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" /><link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel='stylesheet' href='css/aos.css'>

    <style>


    </style>
  </head>
  <body>
    <!-- Start Header -->
    <div class="header fixed-top" id="header">
      <div class="container">
        <a href="index.php" class="logo"><img  src="imgs/seq.png"  alt=""></a>
        <ul class="main-nav">
          <li style="border-bottom: solid 5px #1ab7a4; "><a href="index.php#about">من نحن</a></li>
          <li style="border-bottom: solid 5px #fcb611; "><a href="index.php#services">خدماتنا</a></li>
          <li style="border-bottom: solid 5px #e93995; "><a href="index.php#clients">عملائنا</a></li>
          <li style="border-bottom: solid 5px #fff; "><a href="index.php#contact">تواصل معنا</a></li>
          <li id="flag" style="margin-right: 20px;"><a href="en/index.php">en &#x1F1EC;&#x1F1E7;</a></li>

        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Start Landing -->
    <div class="banner-image landing" style="    background-image: url(imgs/banner-img1.png);
    background-size: cover;">
      <div class="container">

        <div
          class=" w-100 vh-100 d-flex justify-content-center align-items-center">
          <div class="mid content text-center">
            <img id="logoo" src="imgs/logo.png" width="30%" style="width: 45%;" alt="">

    <h1 class="text-white">
      نتطلع لتطوير وتنمية مشاريع عملائنا وتحقيق أهدافهم ونجاح فعالياتهم
    </h1>
          </div>


        </div>
      </div>

      <a href="#services" class="go-down">
        <i class="fas fa-angle-double-down fa-2x"></i>
      </a>
    </div>
    <!-- End Landing -->

    <!-- Start Events -->
    <div class="events" id="about">
      <!-- <div class="dots dots-up"></div>
      <div class="dots dots-down"></div> -->
      <h2 class="main-title">من نحن</h2>
      <div class="container">
        <div class="info">

          <h2 class="title text-white">
نطمح ان تصبح شركة SEQUENCE الأميز في مجال إقامة المؤتمرات و المعارض و الإحتفالات لتكون خيار العميل الأول إبتداء من الفكرة والتصميم وصولاَ إلى التنفيذ لأجل خلق حدث إستثنائي يدوم في الأذهان طويلاَ
          </h2>
        </div>

      </div>
    </div>
    <!-- End Events -->


    <!-- Start Work Steps -->
    <div class="work-steps"  id="services">
      <h2 class="main-title" >خدماتنا</h2>
      <div class="container" style="    direction: ltr;" >
        <div class="image-container" data-aos="zoom-in-down">
          <img src="imgs/box1.jpg" alt="" width="100%" class="image" />
        </div>
        <div class="info" data-aos="zoom-in-up">
          <div class="box">
            <div class="text">
              <h2 class="org">
                تنظيم المعارض والمؤتمرات
              </h3>
              <p>
نصمم وننفذ أجنحة المعارض والمؤتمرات , نوفر شاشات العرض الضخمة , وأنظمة الصوت ,أنظمة الإضاءة , الخدمات اللوجستية للفعاليات والمؤتمرات ,نعمل كفريق تطوير أعمال على تغيير أهم النتائج لعملائنا ونقوم بتغيير خطة العمل حسب تغيير السوق والفعاليات المقدمة
                  <a class="btnn" href="exp.php">المزيد</a>
              </p>
            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="work-steps2" id="work-steps2">
      <div class="container" style="    direction: rtl;" >
        <div class="image-container" data-aos="zoom-in-up">
          <img src="imgs/box2.png" alt="" width="100%" class="image" />
        </div>
        <div class="info" data-aos="zoom-in-down">
          <div class="box">
            <div class="text">
              <h2 class="org">
                إدارة وتنظيم الفعاليات
              </h3>
              <p>
طرح أفكار لفعالياتكم وإدارتها وتنظيمها والتسويق لها وجعل من الفعالية اسم لحدث مستقبلي متجدد ملك لصاحبها بمشاركة من الجهات الحكومية وجامعات وجهات خاصة وافراد
           <a class="btnn" href="event.php">المزيد</a>
              </p>
            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="work-steps" id="work-steps">
      <div class="container" style="    direction: ltr;" >
        <div class="image-container" data-aos="zoom-in-down" >
          <img src="imgs/box3.jpg" alt="" width="100%" class="image" />
        </div>
        <div class="info">
          <div class="box" data-aos="zoom-in-up">
            <div class="text">
              <h2 class="org">
                إدارة الحشود

              </h3>
              <p>
توفر فريق عمل قوي وخبراء في إدارة الحشود يعملون معاَ وفق خطط محكمة نقوم فيها كذلك بإدارة عمليات الحركة المرورية ومنطقة التسجيل والتذاكر وايضاَ نحافظ على السلامة والصحة المهنية في الفعاليات
    <a class="btnn" href="cro.php">المزيد</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End Work Steps -->

    <div class="clients" id="clients">
      <h2 class="main-title">عملائنا</h2>

      <div class="container" >

        <main class="grid">
          <div class="boxcl" data-aos="zoom-in-up">
             <img src="imgs/MinistryOfSport.png" alt="Ministry Of Sport logo">
          </div>
          <div class="boxcl" data-aos="zoom-in-down">
             <img src="imgs/saudi.png" alt="saudi olompi">
          </div>
          <div class="boxcl" data-aos="zoom-in-up">
             <img src="imgs/SocialDevelopmentBank.png" alt="Social Development Bank logo">
          </div>
          <div class="boxcl" data-aos="zoom-in-down">
             <img src="imgs/ArabianCentres.png" alt="Arabian Centres 3">
          </div>

          <div class="boxcl" data-aos="zoom-in-up">
             <img src="imgs/RiyadhFront.png" alt="Social Development Bank logo">
          </div>
          <div class="boxcl" data-aos="zoom-in-down">
             <img src="imgs/MinistryOfLnterior.png" alt="Arabian Centres 3">
          </div>

          <div class="boxcl" data-aos="zoom-in-up">

             <img src="imgs/TheFinancialAcademy.png" alt="Social Development Bank logo">

          </div>
          <div class="boxcl" data-aos="zoom-in-down">
             <img src="imgs/ministoryOfHajjAndUmrah.png" alt="Arabian Centres 3">
          </div>

          <div class="boxcl" data-aos="zoom-in-up">

            <img src="imgs/SaudiRedCrescentAuthority.png" alt="Social Development Bank logo">

          </div>
          <div class="boxcl" data-aos="zoom-in-down">
             <img src="imgs/HeritageCommission.png" alt="Arabian Centres 3">
          </div>

          <div class="boxcl" data-aos="zoom-in-up">
             <img src="imgs/gasSolutions.png" alt="Arabian Centres 3">
          </div>

        </main>
      </div>

    </div>

        <div class="steps">
          <h2 class="main-title">مراحل إدارة الفعاليات</h2>

          <div class="container" >
                  <main class="gridsteps">
                    <div class="boxsteps" >
                    <img src="imgs/1.gif" style="margin-top:15px;" width="55%" alt="Comprehension stage">
                    <h1 style="margin-top:10px;">
                      مرحلة الفهم
                     </h1>

                   </div>
                    <div class="boxsteps">
                      <img src="imgs/2.gif"  style="margin-top:20px;" width="54%" alt="Planning stage">
                      <h1 style="margin-top:10px;">
                        مرحلة التخطيط
                       </h1>
                    </div >

                    <div class="boxsteps" >
                      <img src="imgs/3.gif" style="margin-top:30px;" width="50%" alt="  Implementation stage">
                      <h1 style="margin-top:10px;">
                          مرحلة التنفيذ
                      </h1>
                    </div>

                      <div class="boxsteps">
                        <img src="imgs/4.gif" width="57%" alt="  Observation stage">
                      <h1>
                        مرحلة المراقبة
                      </h1>
                    </div>
                  </main>
          </div>
        </div>



        <div class="submit"  id="contact" >
          <h2 class="main-title">تواصل معنا</h2>
          <div class="container" >
          <form class="order"   up="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
            <input required data-aos="zoom-in" name="name" type="text" class="feedback-input"  style=" border:2px solid #1ab7a4;" placeholder="الأســم" />
            <input required data-aos="zoom-in-down" name="phone" type="text" class="feedback-input" style=" border:2px solid #fcb611;" placeholder="رقم الجوال" />
            <input   data-aos="zoom-in-up" name="email" type="text" class="feedback-input" style=" border:2px solid #e93995;" placeholder="البريد الألكتروني" />
            <textarea required data-aos="zoom-in"  name="ordering" class="feedback-input" style=" border:2px solid #f2f2f2;" placeholder="تفاصيل الطلب"></textarea>
            <input
                data-aos="fade-up"type="submit" value="إرسال طلبك"/>
          </form>
          <div id="sfff" class="the-errors text-center ">


            <?php

              if (! empty($formErrors)) {


                foreach ($formErrors as $error) {

                    echo '<div class="msg alert alert-danger" style="margin-bottom: -1rem;padding:10px;" >' . $error . '</div>' .  '<br/>';

                }

              }

                ?>
          </div>


        </div>

    <!-- Start Footer -->
    <div class="footer" style="    direction: ltr;">
      <div class="container">



        <main class="gridfoot" >
          <div class="boxfoot" >
            <a href="mailto:info@sequencesa.com" target="_blank" rel="noopener noreferrer">
            <h1 style="color:#fff; font-size:20px;">
               <i class="fa fa-envelope"></i> :

                 info@sequencesa.com
                </h1>
            </a>
                    </div>

          <div class="boxfoot">

            <a href="https://wa.me/+966592345687">

              <h1 style="color:#fff; font-size:20px;">
                <i class="fab fa-whatsapp"></i> :
                +966592345687
              </h1>
            </a>

          </div>

          <div class="boxfoot">
            <a href="https://instagram.com/sequencessa?igshid=YmMyMTA2M2Y=">
              <h1 style="color:#fff; font-size:20px;">
                <i class="fab fa-instagram"></i> :
                @Sequencessa
              </h1>
            </a>

          </div>

        </main>


      </div>
       <p class="copyright" >&copy; 2023 SequenceSa. All Rights Reserved.</p>
    </div>
    <!-- End Footer -->
    <script src="js/main.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src='js/aos.js'>
</script>
<script  src="js/script.js"></script>
  </body>
</html>