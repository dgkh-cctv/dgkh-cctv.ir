
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>
<!--[if lt IE 10]>
<div style="height:30px;background-color:red;color:white;text-align:center">مرورگر شما قديمي است و ممکن است نتوانيد به درستي اين صفحه را مشاهده کنيد. لطفا از يک مرورگر به روز استفاده نماييد</div>
<![endif]-->



<title>بخش مدیریت وب سایت</title>




<script>
//gopage("commmain.php");


function gopage(pageadd) { 
window.mainframe.document.body.innerHTML =  "لطفا کمی صبر کنید ...";
window.mainframe.document.location.href = pageadd ;

$('#frameweb').reveal({
     animation: 'fade',                   //fade, fadeAndPop, none
     animationspeed: 500,                       //how fast animtions are
     closeonbackgroundclick: false,              //if you click background will modal close?
     dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
});
}

function reloadsite() {
window.rf.reloadme();
}
</script>







 <link rel="stylesheet" href="/css/bfont.css">

		<link rel="stylesheet" href="css/demo.css">
	
	


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/sky-mega-menu.css">
		
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-mega-menu-ie8.css">
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->








<div id="frameweb" class="reveal-modal xlarge" style="top:65px">
<iframe id="mainframe" name="mainframe" border="0" frameborder="0" height="500" marginheight="0" marginwidth="0" src="setting.php" width="800"></iframe>
<a class="close-reveal-modal" onmouseup="reloadsite()">&#215;</a>
</div>



		<div class="body">		
			<!-- mega menu -->
			<ul class="sky-mega-menu sky-mega-menu-response-to-icons sky-mega-menu-anim-slide">
				<!-- home -->
				<li>
					<a href="main.php"  ><i class="fa fa-single fa-home"></i></a>
				</li>
				<!--/ home -->
				
				<!-- about -->
				<li aria-haspopup="true">
					<a href="#"  onclick="gopage('sitesetting.php?nogfx=1')" ><i class="fa fa-pencil-square-o"></i>تنظيمات اصلي سايت</a>
				
				</li>
				<!--/ about -->
				
				<!-- news -->
				<li aria-haspopup="true">
					<a href="#" ><i class="fa fa-tasks"></i>منوها/صفحه ها</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"   onclick="gopage('addpg.php?nogfx=1')" ><i class="fa fa-file-o"></i>افزودن صفحه/منو جدید</a></li>
							<li><a  href="#"  onclick="gopage('pglist.php?nogfx=1')" ><i class="fa fa-list-alt"></i>مدیریت منوها و صفحه ها</a></li>
													</ul>
					</div>
				</li>
				<!--/ news -->
				
				<!-- portfolio -->
				<li aria-haspopup="true">
					<a href="#">
					<i class="fa fa-globe"></i>اخبار</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"  onclick="gopage('addn.php')" ><i class="fa fa-plus"></i>افزودن خبر/اطلاعیه</a></li>
							<li><a href="#"  onclick="gopage('viewn.php')" ><i class="fa fa-scissors"></i>ویرایش/حذف خبرها و اطلاعیه ها</a></li>
							<li><a href="#"  onclick="gopage('commmain.php')" ><i class="fa fa-check-square-o"></i>تائید نظرات کاربران</a></li>
						</ul>
					</div>
				</li class="right">
				<!--/ portfolio -->

			<!-- slider -->
				<li aria-haspopup="true">
					<a href="#" >
					<i class="fa fa-picture-o"></i>اسلاید شو</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"  onclick="gopage('slideradd.php')" ><i class="fa fa-plus"></i>افزودن تصویر به اسلاید شو</a></li>
							<li><a href="#"  onclick="gopage('sliderlist.php')" ><i class="fa fa-scissors"></i>ویرایش/حذف تصاویر اسلایدشو</a></li>
						</ul>
					</div>
				</li class="right">
				<!--/ slider -->
				
				
							<!-- galery -->
				<li aria-haspopup="true">
					<a href="#" >
					<i class="fa fa-picture-o"></i>گالری تصاویر</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"  onclick="gopage('galleryadd.php')" ><i class="fa fa-plus"></i>افزودن تصویر به گالری</a></li>
							<li><a href="#"  onclick="gopage('galleryList.php')" ><i class="fa fa-scissors"></i>ویرایش/حذف تصاویر گالری</a></li>
						</ul>
					</div>
				</li class="right">
				<!--/ galery -->
											
											
											<!--foroshgah -->
				<li aria-haspopup="true">
					<a href="#" >
					<i class="fa fa-credit-card"></i>فروشگاه</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"  onclick="gopage('addpr.php')" ><i class="fa fa-plus"></i>افزودن محصول</a></li>
							<li><a href="#"  onclick="gopage('prlist.php')" ><i class="fa fa-list"></i>لیست محصولات</a></li>
							<li><a href="#"  onclick="gopage('paymentlist.php?r=1')" ><i class="fa fa-usd"></i>گزارش فروش</a></li>
						</ul>
					</div>
				</li class="right">
				<!--/foroshgah -->
				
				
											<!--nazarsanji -->
				<li aria-haspopup="true">
					<a href="#" >
					<i class="fa fa-question"></i>نظر سنجی</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"  onclick="gopage('addp.php')" ><i class="fa fa-plus"></i>افزودن پرسش نظر سنجی</a></li>
							<li><a href="#"  onclick="gopage('plist.php?searchin=id')" ><i class="fa fa-scissors"></i>ویرایش/حذف پرسش های نظر سنجی</a></li>
						</ul>
					</div>
				</li class="right">
				<!--/nazarsanji -->
				
				
				<!-- khabarname -->
				<li aria-haspopup="true">
					<a href="#">
					<i class="fa fa-user"></i>اعضا</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"  onclick="gopage('userlist.php')" ><i class="fa fa-user"></i>لیست کاربران/مشتریان</a></li>
							<li><a href="#"  onclick="gopage('newsletterlist.php')" ><i class="fa fa-user"></i>لیست خبرنامه</a></li>
						</ul>
					</div>
				</li class="right">

				
				
				<!--/ khabarname -->
				

				      <!--email -->
				<li aria-haspopup="true">
					<a href="#">
					<i class="fa fa-envelope-o"></i>ایمیل ها</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"  onclick="gopage('newmail.php')" ><i class="fa fa-plus"></i>افزودن ایمیل</a></li>
							<li><a href="#"  onclick="gopage('mail.php')" ><i class="fa fa-scissors"></i>ویرایش/حذف ایمیل ها</a></li>
						</ul>
					</div>
				</li class="right">
				<!--/email -->

				

				
				
                                         <!--karbar -->
				<li aria-haspopup="true">
					<a href="#" >
					<i class="fa fa-bars"></i>کاربر</a>
					<div class="grid-container3">
						<ul>
							<li><a href="#"  onclick="gopage('changepass.php')" ><i class="fa fa-lock"></i>تغییر رمز</a></li>
							<li><a href="logout.php"   ><i class="fa fa-power-off"></i>خروج</a></li>
						</ul>
					</div>
				</li class="right">
				<!--/karbar -->

<li aria-haspopup="true">
					<a href="#" > 
					<i class="fa fa-life-ring"></i>پشتیبانی</a>
					<div class="grid-container3">
						<ul> 
							<li><a  href="#"  onclick="gopage('getssl.php')" ><i class="fa fa-lock"></i>درخواست گواهینامه ssl</a></li>

							<li><a href="http://domainuser.ir" target="_blank" ><i class="fa fa-info"></i>پرتال راهنمای کاربران</a></li>
							<li><a href="http://domainuser.ir/videos" target="_blank" ><i class="fa fa-play-circle-o "></i>آموزش های ویدئویی </a></li>
							<li><a href="http://onlinegraphist.ir" target="_blank" ><i class="fa fa-paint-brush"></i>درخواست طراحی لوگو،بنر و اسلاید</a></li>
							<li><a href="https://portal.domainuser.ir/new.php?id=32" target="_blank" ><i class="fa fa-paint-brush"></i>درخواست طراحی اولیه سایت</a></li>

							<li><a href="support.php" target="_blank" ><i class="fa fa-pencil-square-o"></i>ثبت درخواست پشتیبانی</a></li>
							<li><a href="support.php?id=28" target="_blank" ><i class="fa fa-globe"></i>درخواست انتقال نام دامنه</a></li>

							<li><a href="https://portal.domainuser.ir" target="_blank" ><i class="fa fa-search"></i>پیگیری درخواست های پشتیبانی</a></li>

						</ul>
					</div>
				</li class="right">




						</ul>
			<!--/ mega menu -->
			
		</div>





<div style="width:100%; height:30px; font-weight:bold;background-color:#FFFFCC;text-align:right;">



<div style="width: 300px;height:30px; font-size:15pt;direction:rtl;float:right;vertical-align:middle;color:#996633;padding-right:40px;">
بخش مدیریت وب سایت
</div>

<div style="font-size:9pt; width:300px;height:30px; direction:rtl;float:right;vertical-align:middle;padding-top:5px">
	<a style="text-decoration:none" href="#"  onclick="gopage('getssl.php')" style="color: #3044BC">تبدیل سایت به https</a>
</div>




<div style="width: 170px;height:30px;font-size:9pt;direction:rtl;float:right;vertical-align:middle;padding-top:5px" > اعتبار :



 <span style="color: #FF0000">16 روز&nbsp;&nbsp;&nbsp;  
	<a style="text-decoration:none" href="#"  onclick="gopage('extend.php')" style="color: #3044BC">تمدید خدمات</a></span></div>

</div>


<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" href="../css/reveal.css">
<script type="text/javascript" src="../js/jquery.reveal.js"></script>



<iframe scrolling="auto" id="rf" name="rf" frameborder="0" allowtransparency="true" src="../" style="-webkit-box-sizing: border-box; width:100%; height:100%"></iframe>



