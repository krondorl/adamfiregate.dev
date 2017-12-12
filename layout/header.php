<?php include_once 'meta.php'; ?>
<!DOCTYPE html>
<html lang="en" id="top">
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="preconnect" href="//i.ytimg.com" crossorigin>
  <link rel="preconnect" href="//s.ytimg.com" crossorigin>
  <link rel="preconnect" href="//www.youtube.com" crossorigin>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo meta_desc(); ?>"/>
  <title>Adam Firegate — European electronic musician</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
    }
    body {
      color: purple;
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 1.35rem;
      line-height: 1.5;
    }
    h2 {
      margin: 3rem 0 1rem;
    }
    p {
      margin: 0 0 1.5rem;
    }
    hr {
      background: none;
      border: 2px solid purple;
      height: 0;
    }
    .group:after {
      content: "";
      display: table;
      clear: both;
    }
    .profile-pic {
      clear: both;
      display: block;
      float: none;
      margin: 0 1rem 1rem 0;
      max-width: 80%;
    }
    .head-link-to-cover {
      font-size: 1.5rem;
      font-weight: bold;
      line-height: 1.5;
      text-decoration: none;
    }
    .head-link-to-cover * {
      display: inline-block;
      vertical-align: middle;
    }
    .head-link-to-cover span {
      margin-left: 1rem;
    }
    @media (min-width: 560px) {
      .profile-pic {
        float: left;
        max-width: 40%;
      }
      .head-link-to-cover {
        font-size: 3rem;
        line-height: 2;
      }
    }
    .center {
      text-align: center;
    }
    .left {
      text-align: left;
    }
    .header-bg {
      margin: 0 auto;
      height: 12rem;
    }
    .main {
      margin: 4rem auto 0;
      max-width: 750px;
      padding: 0 .7rem;
    }
    a:link {
      color: purple;
    }
    a:hover,
    a:focus {
      outline: 2px dotted purple;
    }
    a:active {
      background: purple;
      color: white;
    }
    input {
      font-family: 'Source Sans Pro', sans-serif;
      font-size: 1rem;
    }
    [type=email] {
      border: 2px solid purple;
      padding: 1rem;
    }
    .submit,
    .submit:link {
      background: purple;
      border: 0;
      color: white;
      display: inline-block;
      font-weight: bold;
      letter-spacing: .1rem;
      margin-left: 1rem;
      padding: 1rem;
      text-decoration: none;
    }
    .logo {
      max-width: 12rem;
    }
    .logo-more {
      max-width: 7rem;
    }
    .more {
      background: url('/img/main-bg.svg') 50% 0;
    }
    .jump-top {
      display: block;
      text-align: right;
    }
  </style>
</head>
