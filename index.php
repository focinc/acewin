<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acewin Pre-registration</title>

  <!-- css / tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/output.css" />

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- main preview -->
  <div id="prvw-mn" class="preview">
    <div class="preview-container px-3">
      <iframe
        class="w-full h-full"
        src="https://www.youtube.com/embed/qQJIqOZh5Ms"
        title="Gameplay Interactive Live Casino Trailer"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen></iframe>

      <button id="btn-cls-prvw-mn" class="btn-play">
        <img src="./image/btn-close.png" alt="play button" />
      </button>
    </div>
  </div>

  <!-- slot game preview -->
  <div id="prvw-slt-gms" class="preview">
    <div class="preview-container px-3">
      <iframe
        class="w-full h-full"
        src="https://www.youtube.com/embed/qQJIqOZh5Ms"
        title="Gameplay Interactive Live Casino Trailer"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen></iframe>

      <button id="btn-cls-prvw-slt" class="btn-play">
        <img src="./image/btn-close.png" alt="play button" />
      </button>
    </div>
  </div>

  <!-- poker game preview -->
  <div id="prvw-pkr-gms" class="preview">
    <div class="preview-container px-3">
      <iframe
        class="w-full h-full"
        src="https://www.youtube.com/embed/qQJIqOZh5Ms"
        title="Gameplay Interactive Live Casino Trailer"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen></iframe>

      <button id="btn-cls-prvw-pkr" class="btn-play">
        <img src="./image/btn-close.png" alt="play button" />
      </button>
    </div>
  </div>

  <!-- wheel of fortune preview -->
  <div id="prvw-wof-gms" class="preview">
    <div class="preview-container px-3">
      <iframe
        class="w-full h-full"
        src="https://www.youtube.com/embed/qQJIqOZh5Ms"
        title="Gameplay Interactive Live Casino Trailer"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen></iframe>

      <button id="btn-cls-prvw-wof" class="btn-play">
        <img src="./image/btn-close.png" alt="play button" />
      </button>
    </div>
  </div>

  <!-- pregis form -->
  <div id="prgs-frm" class="pregis px-3">
    <div class="pregis-container">
      <!-- image -->
      <div class="image-wrapper">
        <div class="header mb-14 lg:px-5 lg:pt-5">
          <h2 class="title glow-text-white">Pre-registration</h2>
          <p class="sub-title">
            Join now and grab your 100 pesos welcome bonus just for signing
            up!
          </p>
        </div>

        <div class="image">
          <img src="./image/pregis-casino.png" alt="casino" />
        </div>
      </div>

      <!-- form -->
      <div class="form-wrapper p-7">
        <button id="btn-cls-prgs" class="btn-play">
          <img src="./image/btn-close.png" alt="play button" />
        </button>

        <div class="header text-center mb-14">
          <h2 class="title">Pre-registration</h2>
          <p class="sub-title">
            Join now and grab your 100 pesos welcome bonus just for signing
            up!
          </p>
        </div>
        <form class="form" method="POST" action="./process/register.php">
          <div class="form-field mb-7">
            <label for="" class="form-field-label mb-2">Full Name</label>
            <input
              type="text"
              name="fllnm"
              id="fllnm"
              class="form-field-input"
              required />
          </div>

          <div class="form-field mb-7">
            <label for="" class="form-field-label mb-2">Contact Number</label>
            <input
              type="text"
              name="ctctnmb"
              id="ctctnmb"
              class="form-field-input"
              required />
          </div>

          <div class="form-field flex items-start gap-2 mb-3">
            <input
              type="checkbox"
              name="chckb1"
              id="chckb1"
              class="form-field-check mt-[1px]" />
            <label for="" class="form-field-label">I am 18 year of age</label>
          </div>

          <div class="form-field flex items-start gap-2 mb-10">
            <input
              type="checkbox"
              name="chckb2"
              id="chckb2"
              class="form-field-check mt-[1px]" />
            <label for="" class="form-field-label">I agree to collecting and using my personal information.</label>
          </div>

          <button id="btn-regis" class="btn-regis mx-auto block">
            <img src="./image/btn-regis.png" alt="pregis button" />
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- error handler -->
  <div id="stsmdl" class="modal px-3 active">
    <div class="card">
      <!-- <button><img src="./image/icon-close.png" alt="close" /></button> -->

      <div class="icon">
        <img src="./image/icon-close.png" alt="close" />
      </div>

      <div class="body text-center mb-4">
        <h3 class="title mb-2">Contact Number Already Exists</h3>
        <p class="content">
          The contact number you entered is already registered in our system.
          Please use a different contact number or log in to your account.
        </p>
      </div>

      <button id="btn-stsmdl" class="btn">Close</button>
    </div>
  </div>

  <main>
    <!-- hero -->
    <section class="hero">
      <div class="bgl">
        <img
          src="./image/hero-background-roullete.png"
          alt="background"
          class="img" />
      </div>
      <div class="bgr">
        <img
          src="./image/hero-background-roullete.png"
          alt="background"
          class="img" />
      </div>

      <div class="hero-container max-w-screen-xl mx-auto px-2">
        <div class="hero-content flex flex-col items-center">
          <a href="#" class="logo mb-2"><img src="./image/logo.png" alt="logo" class="w-56" /></a>
          <h3 class="glow-text-white text text-center mb-14">
            Ace the Game <br />
            Win Big
          </h3>

          <button id="btn-opn-prvw-mn" class="btn-play mb-14">
            <img src="./image/btn-video.png" alt="play button" />
          </button>

          <button id="btn-prgs" class="mb-4 text-[12px]">
            <img src="./image/btn-pregis.png" alt="pregis button" />
          </button>

          <p
            class="text-center px-2 mb-8 md:px-24 lg:px-[15rem] xl:px-[24rem]">
            Pre-register today to secure exciting rewards and bonuses as a
            thank you for being one of our first participants!
          </p>

          <div class="btn-group flex gap-3">
            <a href="#"><img src="./image/btn-google-play.png" alt="download app" /></a>
            <a href="#"><img src="./image/btn-play-store.png" alt="download app" /></a>
          </div>
        </div>
      </div>
    </section>

    <!-- registration features -->
    <section class="feature">
      <div
        class="feature-container max-w-screen-xl mx-auto py-32 px-2 md:px-4">
        <div class="header text-center mb-20">
          <h1 class="title glow-text-white uppercase">
            Pre-registration <br />
            Event
          </h1>
          <p class="sub-title">
            Pre-register Now for Exclusive Casino Rewards!
          </p>
        </div>

        <div
          class="feature-items flex flex-col lg:flex-row lg:justify-around lg:gap-14">
          <div class="feature-item flex items-center mb-20 lg:flex-col">
            <div class="feature-item-img a">
              <img
                src="./image/pregis-coins.png"
                alt="feature image"
                class="img" />
            </div>

            <p class="feature-item-text text-right px-2 lg:text-center">
              Sign up now and receive a
              <span class="text-hl-accent-2 font-bold">100 pesos</span>
              welcome bonus upon registration!
            </p>
          </div>

          <div class="feature-item flex items-center mb-20 lg:flex-col">
            <div class="feature-item-img b order-2">
              <img
                src="./image/pregis-bag-of-coins.png"
                alt="feature image"
                class="img" />
            </div>

            <p
              class="feature-item-text text-left px-2 lg:text-center lg:order-2">
              Recharge for the first time and
              <span class="text-hl-accent-2 font-bold">accumulate 5%</span> of
              the amount.
            </p>
          </div>
        </div>

        <div
          class="reminder text-center md:px-36 lg:px-[20rem] xl:px-[28rem]">
          <h3 class="title uppercase text-red-500">Reminder</h3>
          <p class="sub-title">
            The maximum amount that is available to be provided is 10,000
            pesos.
          </p>
        </div>
      </div>
    </section>

    <!-- about us -->
    <section class="about">
      <div>
        <div class="about-container max-w-screen-xl mx-auto pt-16 mb-4 px-2">
          <div class="header text-center mb-4">
            <div class="logo">
              <img src="./image/logo.png" alt="logo" class="w-24 mx-auto" />
            </div>
            <h2 class="title uppercase">About Us</h2>
          </div>

          <p class="text-center mb-2 lg:px-24">
            Acewin is an online casino platform that offers a wide range of
            games, including slots, table games, and live dealer experiences.
            Known for its user-friendly interface and secure payment options,
            it provides a fun and thrilling gambling experience for players.
          </p>

          <p class="text-center mb-14 lg:px-24">
            Acewin also features various promotions and rewards, ensuring that
            both new and returning players enjoy exciting opportunities to
            win.
          </p>

          <div class="image px-4">
            <img src="./image/au-roulette.png" alt="subject" class="w-full" />
          </div>
        </div>
      </div>
    </section>

    <!-- categories -->
    <section class="category">
      <div class="bg-line">
        <img src="./image/catg-background-line.png" alt="" />
      </div>
      <div class="category-container max-w-screen-xl mx-auto px-5">
        <div class="category-items flex flex-col gap-32 lg:flex-row">
          <div
            class="group-a flex justify-center items-center lg:justify-start">
            <div class="category-item">
              <div
                class="header text-right mb-10 ms-auto sm:w-[60%] lg:w-[100%] xl:w-[70%]">
                <h3 class="title glow-text-accent uppercase">Poker Games</h3>
                <p class="sub-title">
                  A thrilling blend of skill, strategy, and luck where every
                  hand is a new chance to outsmart your opponents and claim
                  the pot!
                </p>
              </div>

              <div class="image flex items-center sm:ml-[15%] lg:ml-[-15%]">
                <div class="btn-text lg:order-2">
                  <button
                    id="btn-opn-prvw-pkr"
                    class="btn-play flex items-center">
                    <img src="./image/btn-video.png" alt="play button" />
                  </button>
                  Preview
                </div>

                <div class="image-wrapper">
                  <img
                    src="./image/catg-poker-games.png"
                    alt="category image" />
                </div>
              </div>
            </div>
          </div>

          <div
            class="group-b flex justify-center items-center flex-col gap-32 lg:justify-end">
            <div class="category-item">
              <div
                class="header mb-10 sm:w-[60%] lg:ms-auto lg:w-[100%] xl:w-[70%] xl:ms-0">
                <h3 class="title glow-text-accent uppercase">Slot Games</h3>
                <p class="sub-title">
                  Spin the reels and chase the excitement! With every turn,
                  you’re one spin away from big wins and endless fun.
                </p>
              </div>

              <div class="image flex items-center ml-[-70%] sm:ml-[-5%]">
                <div class="btn-text order-2 lg:order-1">
                  <button
                    id="btn-opn-prvw-slt"
                    class="btn-play flex items-center">
                    <img src="./image/btn-video.png" alt="play button" />
                  </button>
                  Preview
                </div>

                <div class="image-wrapper lg:order-2">
                  <img
                    src="./image/catg-slot-games.png"
                    alt="category image" />
                </div>
              </div>
            </div>

            <div class="category-item">
              <div
                class="header text-right mb-10 ms-auto sm:w-[60%] lg:w-[100%] xl:text-left xl:w-[70%] xl:ms-0">
                <h3 class="title glow-text-accent uppercase">
                  Wheel of fortune
                </h3>
                <p class="sub-title">
                  The wheel of fortune! Bet on your lucky number, color, or
                  combo, and watch the ball spin for the chance to hit it big.
                </p>
              </div>

              <div class="image flex items-center sm:ml-[13%]">
                <div class="btn-text">
                  <button
                    id="btn-opn-prvw-wof"
                    class="btn-play flex items-center">
                    <img src="./image/btn-video.png" alt="play button" />
                  </button>
                  Preview
                </div>

                <div class="image-wrapper">
                  <img
                    src="./image/catg-wheel-of-fortune.png"
                    alt="category image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div
      class="footer-container flex flex-col items-center justify-center pt-16 pb-2 px-2">
      <img src="./image/logo.png" alt="logo" class="w-24 mb-5" />

      <div class="footer-soc-meds flex gap-4 mb-5">
        <a href="#"><img src="./image/icon-twitter.png" alt="socmed" class="w-8" /></a>
        <a href="#"><img src="./image/icon-facebook.png" alt="socmed" class="w-8" /></a>
        <a href="#"><img src="./image/icon-discord.png" alt="socmed" class="w-8" /></a>
        <a href="#"><img src="./image/icon-play.png" alt="socmed" class="w-8" /></a>
        <a href="#"><img src="./image/icon-youtube.png" alt="socmed" class="w-8" /></a>
        <a href="#"><img src="./image/icon-link.png" alt="socmed" class="w-8" /></a>
      </div>

      <span class="footer-line mb-5"></span>

      <p class="text-xs">© 2025 Acewin. All Rights Reserved.</p>
    </div>
  </footer>
</body>

<script src="./js/script.js"></script>

</html>