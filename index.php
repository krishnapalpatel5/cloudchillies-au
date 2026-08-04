<?php
 
$request = $_SERVER['REQUEST_URI'];
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$origin = $protocol . '://' . $host;
$base_url = $origin . '/';
 
// Check if we are on localhost and process the router accordingly
if (strpos($host, 'localhost') !== false) {
    // adjust this if your project folder has a different name
    $base_url = $origin . '/cloudchillies-au/';
    // Remove the /cloudchillies-au/ prefix from the router for localhost
    $router = str_replace('/cloudchillies-au', '', $request);
} else {
    // Production - use the request as is
    $router = $request;
}
 
// Remove any query parameters for routing
$router = strtok($router, '?');
 
// Remove CC-2025 if present
$router = str_replace('/CC-2025', '', $router);
 
$pattern = "/\/success-stories\/([A-Za-z0-9-]+)/";
 
$currentPage = $_SERVER['REQUEST_URI'];
 
// Remove ".php" from the end of the URL
$lastSegment = basename($currentPage);
$pattern = "/\/success-stories\/([A-Za-z0-9-]+)/";
 
 
$currentPageWithoutPhp = preg_replace('/\.php$/', '', $lastSegment);
$currentnav ='';
if($currentPageWithoutPhp == "service-offerings" || $currentPageWithoutPhp == "salesforce-integrations"|| $currentPageWithoutPhp =='remote-sales-team')
    $currentnav = "service";
else if($currentPageWithoutPhp =='ai')
$currentnav = 'ai';
else if($currentPageWithoutPhp == 'success-stories'||preg_match($pattern, $router, $matches))
$currentnav = 'success stories';
else if($currentPageWithoutPhp == 'about-us')
$currentnav ='aboutus';
else if($currentPageWithoutPhp == 'salesforce')
    $currentnav ='Salesforce';
else if($currentPageWithoutPhp == 'snowflake')
    $currentnav ='Snowflake';
else if($currentPageWithoutPhp == 'contact')
    $currentnav ='contact';
// Debug output for localhost
if (strpos($host, 'localhost') !== false) {
    echo "<script>console.log('Debug - Original Request: " . $request . "');</script>";
    echo "<script>console.log('Debug - Router after processing: " . $router . "');</script>";
}
 
if(!empty($_GET['url'])){
    $router = "/".$_GET['url'];
    if (strpos($host, 'localhost') !== false) {
        echo "<script>console.log('Debug - Router from GET url: " . $router . "');</script>";
    }
}
 
$addHomeInUrl = ""; // or "/home/" in production
 
// include("./" . $addHomeInUrl . "header.php");
 
 
echo "<script>console.log('PHP says: ".$router  . "');</script>";
 
switch($router){
 
case '/home':include("./" . $addHomeInUrl . 'home.php');
break;
 
case '/home-new':include('./home-new.php');
break;
 
case
'/?utm_source=google&utm_medium=cpc&utm_campaign=usa-lend360-july2025&utm_term=lend360&utm_content=186149021887&gad_source=5&gad_campaignid=22794902779&gclid=EAIaIQobChMIo6Vcw-PSjgMVH1FHAR1BVg55EAAYASAAEgLWU_D_BwE':include('home.php');
break;
 
 
case '/salesforce':include("./" . $addHomeInUrl . 'pages/salesforce.php');
break;
case '/snowflake':include("./" . $addHomeInUrl . 'pages/snowflake.php');
break;
 
case '/ai':include("./" . $addHomeInUrl . 'pages/ai.php');
break;
 
case '/about-us':include("./" . $addHomeInUrl . 'pages/about-us.php');
break;
 
case '/privacy-policy':include("./" . $addHomeInUrl . 'pages/privacy-policy.php');
break;
 
case '/contact':include("./" . $addHomeInUrl . 'pages/contact.php');
break;
 
case '/success-stories':include("./" . $addHomeInUrl . 'pages/blog.php');
break;
 
 
 
case (preg_match($pattern, $router, $matches) ? true : false):
$storiesRoutes = str_replace('/success-stories', '', $router);
include("./" . $addHomeInUrl . "/component/contact-modal.php");
break;
 
case '/' :include("./" . $addHomeInUrl . 'home.php');
break;
 
default :include ("./" . $addHomeInUrl . "home.php");
}
include("./" . $addHomeInUrl . "footer2.php");
include("./" . $addHomeInUrl . "component/contact-modal.php");
 
 
 
?>