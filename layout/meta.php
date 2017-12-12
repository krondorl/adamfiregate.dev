<?php

  function meta_desc() {
    $page = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    $output = '';
    switch ($page) {
      case 'index':
          $output = 'Free deep and progressive house music from me, Adam Firegate. Download the pack now!';
          break;
      case 'more':
          $output = 'I\'m a European musician making deep and progressive house. Read my story and listen to my tracks here!';
          break;
      default:
          $output = 'I make deep and progressive house. Read more about my music project!';
          break;

    }
    return $output;
  }
?>
