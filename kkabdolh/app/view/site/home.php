
  <!-- Intro Box -->
  <div id="intro" class="box">
    <!-- Images retrieved from https://vignette.wikia.nocookie.net/p__/images/c/ce/Aang.png/revision/latest?cb=20100122225629&path-prefix=protagonist -->
    <img src="<?= BASE_URL ?>/public/img/assets/Aang.png" alt="Image of Avatar Character" />
    <div>
      <h1>Avatar Family</h1>
      <h2>Who's related to whom?</h2>
      <p>
        This website is a dedicated fan website to connect all the characters in Avatar through parents, spouses, kids, siblings, and more!
      </p>
      <input type="text" placeholder="Search">
    </div>
    <img src="<?= BASE_URL ?>/public/img/assets/Aang.png" alt="Image of Avatar Character" />
  </div>

  <br />

  <?php if(!isset($_SESSION['email'])) { ?>
  <!-- Log in box -->
    <div id="login" class="box">
      <form method="POST" action="<?= BASE_URL ?>/process/">
        <p>
          Email:
        </p>
        <input type="email" name="email" />
        <p>
          Password:
        </p>
        <input type="password" name="password" />
        <input type="submit" name="login" value="Log In">
        <p>or</p>
        <a id="signup" href="#">Sign Up</a>
      </form>
    </div>
  <?php } else { ?>
    <div class="longAdCont">
      <img src="<?= BASE_URL ?>/public/img/assets/ad-placeholder-2.jpg" alt="Advertisement" />
    </div>
  <?php } ?>