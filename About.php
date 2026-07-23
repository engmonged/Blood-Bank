<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico">

<title>بنك الدم بوابة الحياة</title>
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap RTL theme -->
<link href="css/bootstrap-rtl.min.css" rel="stylesheet">
<!-- Bootstrap theme -->
<link href="css/bootstrap-theme.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/rtl.css" rel="stylesheet">
<link href="css/style-rtl.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body role="document" width="90%">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top"  role="navigation " style="background-color: #b84d45;">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><img src="Images/logo.png" width="100" height="32"></a>
		</div>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.html"><i class="fa fa-home"></i> الرئيسية</a></li>
			<li><a href="samples.php">عينات الدم</a></li><!-- عينات الدم والمتوفرة في الموقع و أماكنها-->
			<li><a href="hospitals.php">مستشفيات ومعامل</a></li>
			<li><a href="checkresults.php">نتائج الفحص</a></li>
			<li><a href="advsearch"><i class="fa fa-search"></i> بحث متقدم</a></li>  
			<li><a href="About.php">من نحن</a></li>
			<li><a href="contactus.php"><i class="fa fa-envelope-o"></i> اتصل بنا</a></li>

				<ul class="nav navbar-nav navbar-left">			
					<li class="dropdown">
					<a href="#" class=""dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">دخول<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="register.php"> تسجيل متبرع</a></li>
						<li><a href="login.php"> دخول متبرع أو مفحوص</a></li>
						<li class="divider"></li>
						<li><a href="register.php">تسجيل موظفين</a></li>
						<li><a href="login.php">دخول الموظفين </a></li>
						<li><a href="logout.php">تسجيل الخروج </a></li>
						</ul>
					</li>
				</ul>
		</ul>
	</div><!--/.nav-collapse -->
  </div>
 </div>
  <div class="row col-lg-12" style="background-color:#b84d45;"><img src="Images/bg2.JPG" width="1400" height="600"></div>
    <div class="container theme-showcase" role="main" >
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="page-header" height="50px">
<div class="searh_block">
	<div class="container" >
	<div class="row">
   <form method="post" action="searchresult.php" name="frmsearch" id="frmsearch">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
	<h3 class="title text-center">ابحث عن متبرعين بالدم </h3>
	<div class="search_form_home input-group input-group-lg">
	<div class="input-group-btn search_form_home_option">
	<button id="dropdownHomeSearchHead" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
	أوجد متبرع
	</button>
	<button id="dropdownHomeUserSearchHead" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="display: none;">
	
	</button>
	
	</div><input type="text" class="form-control search_form_home_text" id="txtSearchMain" placeholder="مثال : متبرع من الرياض من الطائف من جدة " onkeydown=" InputFieldKeydown(event, 'Home'); "><input type="text" class="form-control search_form_home_text" id="txtUserSearchMain" style="display: none;" onkeydown=" InputFieldKeydown(event, 'Home'); ">
	<div class="input-group-btn search_form_home_submit">
	<button type="submit" class="btn btn-default pull-right"><i class="fa fa-search fa-lg"></i></button></div></div></div>
	</form>
	</div>
</div>      
</div>
      <div class="row" style="padding-top:580px;"  >

        <div class="col-sm-3">
		
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">موضوعات</h3>
            </div>
            <div class="panel-body">
			<li class="item"><a href="index.php">الرئيسية</a></li>
			<li class="item"><a href="samples.php">عينات الدم</a></li>
			<li class="item"><a href="hospitals.php">مستشفيات</a></li>
			<li class="item"><a href="checkresults.php">الفحوصات</a></li>
			<li class="item"><a href="About.php">من نحن</a></li>
			<li class="item"><a href="contactus.php">اتصل بنا</a></li>
			<li class="item"><a href="news.php">أخبار جديدة</a></li>
			</div>
          </div>
      
        </div><!-- /.col-sm-4 -->
<div class="col-sm-9">
	<div class="panel panel-success">
		<div class="panel-heading">
		<h3 class="panel-title"> المشروع</h3>
		</div>
		<div class="panel-body">
		<div class="list-group">
          <h3>أعضاء الفريق</h3>
<ul>          
		  <li><i class="fa fa-graduation-cap"></i> صقر السبيعي</li>
           <li><i class="fa fa-graduation-cap"></i> صقر السبيعي</li>
          
</ul>
          <h3>التعريف بالمشروع</h3>
<p>نشكر كل من ساهم ولو بكلمة أفادتنا في هذا المشروع ونخص بالشكر الاستاذ الدكتور /______ المشرف على توجيه لنا ، ونأمل أن يستفيد المواطنين والقاديمين إلى المملكة والمقيمين بها من هذا العمل في إيجاد عينات دم مناسبة لهم بالموقع والله ولى العون والتوفيق.</p>
		<h3>المخلص</h3>
لا شك ان الحوادث المرورية تلقي بأعبائها على كاهل المجتمع و تخلق أكبر مشكلة ألا وهي الحاجة إلى الدم لإسعاف المرضى و المصابين ، وليست الحوادث المرورية هي التي بحاجة إلى الدم فقط بل  حوادث الأعمال الخطرة مثل أعمال المقاولات وغيرها ، بل إن الحاجة إلى الدم تتخطي حدود المرض و الاصابة لتصل إلى الجامعات و المختبرات الدوائية وشركات انتاج الدواء و طلاب كليات الطب وغيرهم ممن قد يكون له صلة طبية بالدم سواء باحث علمي أو مريض أو غير ذلك .
يمكننا تعريف بنك الدم الالكتروني بأنه " نظام لتخزين بيانات عينات الدم و بيانات الفحوصات الطبية التي أجريت عليها بهدف إمداد طالبي هذه العينات بما يساعدهم على اختيار الانسب لهم من تلك العينات و يقوم بإعلام المفحوصين بما لديهم من مشكلات صحية ". و من خلال ذلك يتبين الحاجة إلى صلاحيات تمنح للأشخاص المتعاملين مع البنك الالكتروني تحددها إدارة الموقع أو البنك .
نستطيع تحديد خطوات التعامل مع بنك الدم الالكتروني كالتالي : 
</p>
<p>
1-	تسجيل الدخول إلى الموقع كزائر و إمداد البنك ببياناته الشخصية وبينات عينة دمه أو استيراد تلك البيانات من موقع آخر أو مستشفى .</p>
2-	زيارة أقرب فرع من فروع بنك الدم أو مستشفى أو مستوصف ويتسلم موقع بنك الدم الالكتروني الفحوصات بدلا عنك.</p>
3-	منح الصلاحيات في الوصول .<p>
أ‌)	صلاحيات خاصة الأطباء
ب‌)	صلاحيات المفحوصين أو المرضى أو المتبرعين  .<p>
ت‌)	صلاحيات خاصة بإدارة الموقع .<p>
ث‌)	صلاحيات خاصة بأصحاب مستشفيات .<p>
4-	 نشر البيانات و نتائج الفحوص بشكل آلى إلى المشتركين في النظام .<p>

		</p>
          </div>
		</div>
		
	</div>
		</div>


  <div class="page-header">
      <h1>نحن</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <ul class="list-group">
            <li class="list-group-item"><h3>ما هو بنك الدم </h3>
			بنك هو علامة تجارية مسجلة لطلاب جامعة _____ بالخرمة، يهدف إلى تقديم تكنولوجيا المعلومات ، القائمة على تطبيقات الويب، ، كما يهدف إلى توفير خدمات الدم ، للمصابين والمرضى، والباحين عن الدم كطلاب العلم وغيرهم دون أية عمولات أو مقابل مادي .بل يهدف إلى الربط بينهم.</ul>

        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
     
         <div class="list-group">
            <a href="#" class="list-group-item active">
            <h3>عينات نادرة</h3> 
            </a>
            <a href="#" class="list-group-item">O + النسبة 40 %</a>
 <a href="#" class="list-group-item">O - النسبة 7% </a>
 <a href="#" class="list-group-item">A + النسبة 34%</a>
 <a href="#" class="list-group-item">A - النسبة 6% </a>
 <a href="#" class="list-group-item">B + النسبة 8%</a>
 <a href="#" class="list-group-item">B - النسبة 1%</a>
 <a href="#" class="list-group-item">AB + النسبة 3%</a>
 <a href="#" class="list-group-item">AB - النسبة 1% </a>
          
          </div>
        </div><!-- /.col-sm-4 -->
 <div class="col-sm-4">
          <div class="list-group">
             <a href="#" class="list-group-item active">
            <h3>أخبار جديدة</h3> 
            </a>
            <a href="http://aawsat.com/home/article/622276/%D9%81%D8%AD%D8%B5-%D8%AF%D9%85-%D8%AC%D8%AF%D9%8A%D8%AF-%D9%84%D9%84%D9%83%D8%B4%D9%81-%D8%A7%D9%84%D9%85%D8%A8%D9%83%D8%B1-%D8%B9%D9%86-%D8%B3%D8%B1%D8%B7%D8%A7%D9%86-%D8%A7%D9%84%D9%82%D9%88%D9%84%D9%88%D9%86-%D9%88%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%82%D9%8A%D9%85" class="list-group-item">فحص دم جديد للكشف المبكر عن سرطان القولون والمستقيم</a>
            <a href="https://ar-ar.facebook.com/MltqyMrdAlfsamFyAljzayr/posts/706618496073595" class="list-group-item">فحص دم جديد للكشف عن مرض الذهان  </a>
            <a href="https://arabic.rt.com/news/816435-%D8%B9%D9%84%D9%85%D8%A7%D8%A1-%D8%B1%D9%88%D8%B3%D8%B7%D8%B1%D9%8A%D9%8A%D9%82%D8%A9-%D8%AC%D8%AF%D9%8A%D8%AF%D8%A9-%D9%84%D8%AA%D8%B4%D8%AE%D9%8A%D8%B5-%D9%85%D8%A8%D9%83%D9%84-%D9%84%D9%84%D8%B3%D8%B1%D8%B7%D8%A7%D9%86-%D8%B7%D8%B1%D9%8A%D9%82-%D9%81%D8%AD%D8%B5-%D8%A7%D9%84%D8%AF%D9%85/" class="list-group-item">علماء روس يطورون تقنية جديدة لتشخيص مبكر للسرطان عن طريق فحص الدم</a>
            <a href="https://news.webteb.com/%D9%81%D8%AD%D8%B5-%D8%AF%D9%85-%D8%AC%D8%AF%D9%8A%D8%AF-%D9%88%D8%A7%D9%85%D8%B1%D8%A7%D8%B6-%D8%A7%D9%84%D9%82%D9%84%D8%A8_32040" class="list-group-item">فحص دم جديد يحدد سبب الإصابة بأمراض القلب الوراثية</a>
			<a href="http://www.bbc.com/arabic/scienceandtech/2015/08/150827_blood_test_cancer"  class="list-group-item">فحص دم جديد يمكنه الإنذار بانتكاس مرضى السرطان</a>
			<a href="http://www.medicalnewstoday.com/categories/blood"  class="list-group-item">أخبار تحاليل الدم بالانجليزي</a>
			<a href="http://www.medpagetoday.com/specialty"  class="list-group-item">أخبار طبية أجنبية </a>

        </div><!-- /.col-sm-4 -->
      </div>


    </div> <!-- /container -->
  <div id="footerTemplate" class="row">

<!-- Start of /templates/footer.-->

 <div class="container margin10x"><a onclick="$(window).scrollTop(0);" class="btn btn-default hidden-lg hidden-md hidden-sm full-width full-xs"><i class="fa fa-arrow-up"></i> Back To Top</a>
 </div>
 <footer id="footer">
 <section class="container">
 <div class="col-lg-9 col-md-8 col-sm-9">
	 <ul class="nav_footer col-lg-12 active">
		<li><a href="index.php">الرئيسية</a></li>
		<li><a href="about.php">من نحن</a></li>
		<li><a href="contactus.php" onclick="return globaljs.navigate(this, event);" id="Footer_Terms_Button">شروط الاستخدام</a></li>
		<li><a href="contactus.php" onclick="return globaljs.navigate(this, event);" id="Footer_Help_Button">مركز المساعدة والدعم</a></li>
		<li><a href="contactus.php" onclick="return globaljs.navigate(this, event);" id="Footer_Contact_Button">اتصل بنا</a></li>
	 </ul>
 <p class="col-lg-12 rights">© 2016, مجموعة الخرمة .  </p>
 </div>
<ul class="col-lg-3 col-md-4 col-sm-3 social">
	<p>تابعنا: </p> 
		<li><a href="#" target="_blank" class="soical_icon" id="Footer_Facebook_Button"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#" target="_blank" class="soical_icon" id="Footer_Twitter_Button"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#" target="_blank" class="soical_icon" id="Footer_Google_Button"><i class="fa fa-google"></i></a></li>
		<li><a href="#" target="_blank" class="soical_icon" id="Footer_Instagram_Button"><i class="fa fa-instagram"></i></a></li>   
		<li><a href="#" target="_blank" class="soical_icon" id="Footer_Youtuve_Button"><i class="fa fa-youtube"></i></a></li>
	</ul>
</section>
</footer>
<script> /* AbuOuf JS */ $( document ).ready(function() { /* footer nav on mobile */ $("footer .nav_footer").click( function(){ $(this).toggleClass("active"); }); /* header menu queik update */ $("header .navbar-toggle").click( function(){ $(this).toggleClass("xBtn"); }); }); </script></div>
 
 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
