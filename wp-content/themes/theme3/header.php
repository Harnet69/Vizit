<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? bloginfo('name');wp_title();?></title>
<? wp_head();?>
</head>

<body>
<div class="karkas">
	<div class="header">
    	<a href="<?= home_url();?>"><img class="logo" src="<? bloginfo('template_url');?>/images/logo.png" alt="Extendet" /></a>
        <p class="head-contakt">
        	<img src="<? bloginfo('template_url');?>/images/head-mail.png" alt="" /><a href="mailto:<? bloginfo('admin_email');?>"><? bloginfo('admin_email');?></a> &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <img src="<? bloginfo('template_url');?>/images/head-phone.png" alt="" /> <?= esc_attr(get_option('my_tel'));?>
        </p>
        <div class="head-soc">
				<? if (!dynamic_sidebar('icon')){echo "<p style='color:white'>Текстовое поле для социконок</p>";}?>
        	<!--<a href="#"><img src="<? bloginfo('template_url');?>/images/head-soc1.png" alt="" /></a>
            <a href="#"><img src="<? bloginfo('template_url');?>/images/head-soc2.png" alt="" /></a>
            <a href="#"><img src="<? bloginfo('template_url');?>/images/head-soc3.png" alt="" /></a>
            <a href="#"><img src="<? bloginfo('template_url');?>/images/head-soc4.png" alt="" /></a>
            <a href="#"><img src="<? bloginfo('template_url');?>/images/head-soc5.png" alt="" /></a>
            <a href="#"><img src="<? bloginfo('template_url');?>/images/head-soc6.png" alt="" /></a>
            <a href="#"><img src="<? bloginfo('template_url');?>/images/head-soc7.png" alt="" /></a>-->
        </div>
        <div class="menu">
        	<ul>
            	<li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">The Team</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Our Videos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="search">
            	<form action="">
                	<input class="search-txt" type="text" name="search" value="Поиск" onfocus="if(this.value=='Поиск')this.value=''" onblur="if(this.value=='')this.value='Поиск'" />
                    <input type="image" src="<? bloginfo('template_url');?>/images/search-bg.png" />
                </form>
            </div>
        </div>
    </div>