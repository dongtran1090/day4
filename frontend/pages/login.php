<!DOCTYPE html>
<html lang="en">
    <?php
       session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo shop</title>

    <?php
       include_once (__DIR__. '/../layouts/style.php'); ?>

</head>
<body>
    <?php
       include_once (__DIR__. '/../layouts/partials/header.php'); ?>
     <main class="form-signin w-100 m-auto">
  <form>
    <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" fdprocessedid="1ecm1i">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" fdprocessedid="dwm3ak">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
      <label class="form-check-label" for="checkDefault">
        Remember me
      </label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit" fdprocessedid="ntx2z">Sign in</button>
    <div class="form-floatding">
        Don't have an account? <a href="/demo/frontend/pages/register.php">Register</a>
    </div>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2025</p>
  </form>
</main>


    <?php
       include_once (__DIR__. '/../layouts/partials/footer.php'); ?>

      <?php
       include_once (__DIR__. '/../layouts/scripts.php'); ?>
    
</body>
</html>