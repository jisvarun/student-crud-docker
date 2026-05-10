<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hostel Campus - Coming Soon</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    body{
      font-family:'Poppins',sans-serif;
      min-height:100vh;
      background:linear-gradient(135deg,#0f172a,#111827,#1e293b);
      color:#fff;
      display:flex;
      align-items:center;
      justify-content:center;
      overflow:hidden;
      position:relative;
    }

    .blur{
      position:absolute;
      border-radius:50%;
      filter:blur(90px);
      opacity:0.4;
    }

    .blur1{
      width:300px;
      height:300px;
      background:#06b6d4;
      top:-100px;
      left:-80px;
    }

    .blur2{
      width:350px;
      height:350px;
      background:#8b5cf6;
      bottom:-120px;
      right:-120px;
    }

    .container{
      width:90%;
      max-width:700px;
      padding:60px 40px;
      text-align:center;
      background:rgba(255,255,255,0.08);
      backdrop-filter:blur(14px);
      border:1px solid rgba(255,255,255,0.1);
      border-radius:25px;
      box-shadow:0 15px 40px rgba(0,0,0,0.35);
      position:relative;
      z-index:2;
    }

    .logo{
      font-size:42px;
      font-weight:700;
      margin-bottom:10px;
      letter-spacing:1px;
    }

    .logo span{
      color:#38bdf8;
    }

    .tagline{
      color:#cbd5e1;
      font-size:15px;
      margin-bottom:35px;
    }

    h1{
      font-size:52px;
      line-height:1.2;
      margin-bottom:20px;
    }

    p{
      font-size:18px;
      color:#d1d5db;
      margin-bottom:40px;
      line-height:1.8;
    }

    .countdown{
      display:flex;
      justify-content:center;
      gap:20px;
      flex-wrap:wrap;
      margin-bottom:40px;
    }

    .time-box{
      width:120px;
      padding:20px;
      border-radius:18px;
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.08);
    }

    .time-box h2{
      font-size:40px;
      margin-bottom:5px;
    }

    .time-box span{
      font-size:13px;
      color:#94a3b8;
      text-transform:uppercase;
      letter-spacing:1px;
    }

    .btn{
      display:inline-block;
      padding:16px 34px;
      background:#0ea5e9;
      color:white;
      text-decoration:none;
      border-radius:50px;
      font-weight:600;
      transition:0.3s;
    }

    .btn:hover{
      background:#0284c7;
      transform:translateY(-2px);
    }

    .footer{
      margin-top:35px;
      color:#94a3b8;
      font-size:14px;
    }

    @media(max-width:768px){

      .container{
        padding:40px 25px;
      }

      h1{
        font-size:38px;
      }

      p{
        font-size:16px;
      }

      .time-box{
        width:90px;
        padding:15px;
      }

      .time-box h2{
        font-size:30px;
      }
    }
  </style>
</head>
<body>

<div class="blur blur1"></div>
<div class="blur blur2"></div>

<div class="container">

  <div class="logo">
    Hostel <span>Campus</span>
  </div>

  <div class="tagline">
    Smart Hostel & College Management Platform
  </div>

  <h1>We’re Launching Soon 🚀</h1>

  <p>
    We are building a modern digital platform for hostel and campus management.
    Stay tuned for an amazing experience.
  </p>

  <div class="countdown">

    <div class="time-box">
      <h2 id="days">00</h2>
      <span>Days</span>
    </div>

    <div class="time-box">
      <h2 id="hours">00</h2>
      <span>Hours</span>
    </div>

    <div class="time-box">
      <h2 id="minutes">00</h2>
      <span>Minutes</span>
    </div>

    <div class="time-box">
      <h2 id="seconds">00</h2>
      <span>Seconds</span>
    </div>

  </div>

  <a href="#" class="btn">
    Contact Us
  </a>

  <div class="footer">
    © <?php echo date("Y"); ?> Hostel Campus. All Rights Reserved.
  </div>

</div>

<script>

  // Launch Date
  const launchDate = new Date("July 1, 2026 00:00:00").getTime();

  const countdown = setInterval(() => {

    const now = new Date().getTime();
    const distance = launchDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if(distance < 0){
      clearInterval(countdown);
      document.querySelector(".countdown").innerHTML =
        "<h2>Website Launched 🎉</h2>";
    }

  },1000);

</script>

</body>
</html>