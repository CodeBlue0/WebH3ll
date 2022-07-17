<?php session_start();
error_reporting(E_ALL^E_WARNING); ?>

<header class="d-flex flex-wrap align-items-center py-3 border-bottom mb-4">
    <a href="/main.php" class="d-flex align-items-center justify-content-end col-md-2 mb-2 text-dark text-decoration-none">
      <p class="fs-1 fw-bold text-black my-2 mx-3">WeBHell</p>
    </a>
    <div class="col-md-1"></div>
    <div class="flex-grow-1">
      <ul class="nav col-12 col-md-5 mb-2 justify-content-between mb-md-0">
        <li><a href="main.php" class="nav-link px-3 link-secondary"><h5>Home</h5></a></li>
        <li><a href="service.php" class="nav-link px-3 link-dark"><h5>Service</h5></a></li>
        <li><a href="community.php" class="nav-link px-3 link-dark"><h5>Community</h5></a></li>
      </ul>
    </div>
    <?php if(!$_SESSION['islogin']) { ?>
      <div class="col-md-2 justify-content-start">
      <button type="button" class="btn btn-outline-primary me-2" onClick="location.href='loginmain.php'">로그인</button>
      <button type="button" class="btn btn-primary" onClick="location.href='join.php'">회원가입</button>
      </div>
    <?php } else { ?>
      <div class="col-md-2 justify-content-start">
      <button type="button" class="btn btn-outline-primary me-2" onClick="location.href='logout.php'">로그아웃</button>
      </div>
    <?php } ?>
</header>