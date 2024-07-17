

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

                  $type= '  إدارة وتنظيم الفعاليات ';
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

                $succesMsg = 'تم إرسال طلبك سيتم التواصل معك في اقرب وقت ';
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
      .banner-image {
        background-image: url('imgs/banner-img1.png');
        background-size: cover;
      }
      #flag:hover a
      {
        background-color:  #201c50;
      }
      #flag:hover a::before
      {
        height: 0;
        width: 0;

        background-color:  #201c50;
      }
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

    <!-- Start Events -->
    <div class="events" style="margin-top:70px;" >
      <!-- <div class="dots dots-up"></div>
      <div class="dots dots-down"></div> -->
<h1 class="org" data-aos="zoom-in-down">

  إدارة وتنظيم الفعاليات
</h3>
      <div class="container">
        <div class="info">

          <p class="title text-white" style=" line-height: 1.5;" data-aos="zoom-in-up" style="text-align:center;">
            نسعى بالشراكة مع عملائنا ان نصنع من فعالياتك حدث خاص تجذب
            انتباه الجميع ونلفت الانظار من حيث ابتكار الفكرة وجاذبية التصميم
            وجودة التنفيذ وبراعة التنظيم وانتشار اوسع.
            نقوم بدعم ورعاية وتنظيم المؤتمرات وخلق الافكار الابداعية من قبل ادارة
            تطوير الفعاليات التي تتيح للمجتمع وجعل من الفعالية اسم لحدث مستقبلي

            متجدد تكون ملك لصاحبها بمشاركة الجميع من جهات حكومية وجامعات
            وجهات خاصة وافراد ومن اهم الخدمات التي نقدمها
            طرح افكار لفعالياتكم وادارتها وتنظيمها والتسويق لها.

        </p>
        </div>

      </div>
    </div>
    <!-- End Events -->




        <div class="submit"  id="contact" >
          <h2 class="main-title">قدم طلبك الأن</h2>
          <div class="container" >
          <form class="order"   up="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
            <input required data-aos="zoom-in" name="name" type="text" class="feedback-input"  style=" border:2px solid #1ab7a4;" placeholder="الأســم" />
            <input required data-aos="zoom-in-down" name="phone" type="text" class="feedback-input" style=" border:2px solid #fcb611;" placeholder="رقم الجوال" />
            <input   data-aos="zoom-in-up" name="email" type="text" class="feedback-input" style=" border:2px solid #e93995;" placeholder="البريد الألكتروني" />
            <textarea required data-aos="zoom-in"  name="ordering" class="feedback-input" style=" border:2px solid #f2f2f2;" placeholder="تفاصيل الطلب"></textarea>
            <input
                data-aos="fade-up"type="submit" value="ارسال طاليك"/>
          </form>

        </div>

    <!-- Start Footer -->
    <div class="footer" style="    direction: ltr;">
      <div class="container">



        <main class="gridfoot">
          <div class="boxfoot">
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
