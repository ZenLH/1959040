<?php
    $sitename = basename($_SERVER['SCRIPT_NAME'], ".php");
    $navLinks = ["home", "about", "resume"];
    function output_nav($navLinks){
        $output ="";
        foreach ($navLinks as $link) {
            $href = $link == 'home' ? 'index': $link;
            $output .="<li><a href='{$href}.php'>".ucfirst($link)."</a></li>";
        }
        echo $output;
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Chang</title>
    <title>My Selfy Site</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
    <link href="style-<?php echo $sitename ?>.css" type="text/css" rel="stylesheet"></link>
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="index.php">
          <img src="images/logo.png" alt="Chang's logo">
        </a>
      </div>
      <div class="main-nav">
        <nav>
          <ul>
          <?php
                output_nav($navLinks);
                ?>
          </ul>
        </nav>
      </div>
    </header> <!--End of begin-->