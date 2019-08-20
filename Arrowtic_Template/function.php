<?php
function getTemplateUrl() {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';
    $filenamepattern = '/'.basename(__FILE__).'/';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].'/Arrowtic_Template';
}
function getTemplatePath() {
  return $_SERVER['DOCUMENT_ROOT'] . "/Arrowtic_Template";
}
function checkPageUrl() {
  $tmp = $_SERVER['REQUEST_URI'];
  $actual_link = str_replace('/Arrowtic_Template', "", $tmp);
  switch ($actual_link) {
    case '/views/index.php':

    case '/views/blog/blog.php':
    case '/views/blog/blog-left-details.php':
    case '/views/blog/blog-right-details.php':
    case '/views/blog/blog-left-sidebar.php':
    case '/views/blog/blog-right-sidebar.php':

    case '/views/home/home1.php':
    case '/views/home/home2.php':
    case '/views/home/home3.php':
    case '/views/home/home4.php':
    case '/views/home/home5.php':

    case '/views/pages/page-about-us.php':
    case '/views/pages/page-our-clients.php':
    case '/views/pages/page-our-offer.php':
    case '/views/pages/page-our-team.php':
    case '/views/pages/page-pricing.php':
    case '/views/pages/page-our-services.php':

    case '/views/portfolio/portfolio-details.php':
    case '/views/portfolio/portfolio-four-columns-wide.php':
    case '/views/portfolio/portfolio-four-columns.php':
    case '/views/portfolio/portfolio-gallery.php':
    case '/views/portfolio/portfolio-mansonry.php':
    case '/views/portfolio/portfolio-standard.php':
    case '/views/portfolio/portfolio-three-columns-wide.php':
    case '/views/portfolio/portfolio-three-columns.php':

    case '/views/shop.php':
    case 'views/contact-us.php':

    case '/views/404.php':
      return 1;
      break;
    default:
      return 0;
      break;
  }
}
if(checkPageUrl()) {
  $actual_link = "http://{$_SERVER['HTTP_HOST']}/views/404.php";
  header($actual_link);
}
$fileName = "Page default";
$fileTitle = "Page title";
?>
