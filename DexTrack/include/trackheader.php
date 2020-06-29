<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #FFFFFF;

    }

    .topnav a {
      float: left;
      display: block;
      color: #062854;
      text-align: center;
      padding-right: 20px;
      padding-top: 14px;
      padding-bottom: 14px;
      text-decoration: none;
      font-size: 17px;
      font-weight: bold;

    }

    .topnav a:nth-child(7) {
      padding-top: 12px;
    }

    .topnav .icon {
      display: none;
      color: #062854;
    }

    .navlink {
      float: right;
    }

    .setbtn {
      color: #FFFFFF;
      background-color: #062854;
      font-size: 16px;
      font-weight: bold;
      border: #062854 2px solid;
      border-radius: 20px;
      padding: 2px 7px;

    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:last-child) {
        display: none;
      }

      .topnav a.icon {
        float: left;
        display: block;
        padding-left: 16px;

      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        left: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: center;
        border-bottom: 1px solid #062854;
        margin-left: 20px;
        margin-right: 20px;
      }

      .navlink {
        float: none;
      }

      .topnav a:nth-child(7) {
        border: 0px;
      }

      .setbtn {
        margin-left: 10px;
        width: 100%;
        padding: 7px 0px;

      }
    }
  </style>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <div class="navlink">

      <a href="https://www.dexconnect.org/">Home</a>
      <a href="">DexTrack</a>
      <a href="https://www.dexconnect.org/about">About</a>
      <a href="https://www.dexconnect.org/vision">Vision</a>
      <a href="https://www.dexconnect.org/impact">Impact</a>
      <a href="https://www.dexconnect.org/faqs">FAQs</a>
      <a href="https://www.dexconnect.org/signup" class="btnlink"><button type="submit" class="setbtn" name="submit">
          Sign Up
        </button>
      </a>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>

    </div>
  </div>



  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

</body>

</html>