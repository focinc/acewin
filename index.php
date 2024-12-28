<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acewin Pre-registration</title>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- tailwindcss -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->

  <!-- css -->
  <link rel="stylesheet" href="./output.css" />
</head>

<body>
  <!-- ads -->
  <!-- <div class="ads-wrapper hidden">
      <div class="ads">
        <button id="close-ads-btn" class="close-ads-btn">
          <img src="./img/cross.png" alt="" class="w-10" />
        </button>
        <img src="./img/ads.png" alt="" class="ads-img w-[75vw] lg:w-[20vw]" />
      </div>
    </div> -->

  <!-- live video -->
  <div class="live-video-wrapper px-3">
    <div class="live-video w-full lg:w-[50vw]">
      <iframe
        class="w-full h-full"
        src="https://www.youtube.com/embed/_RsoxLtVHSg"
        title="MAX PAIN MONDAY!! Sashimi, Coco, Ronnie &amp; Raver - Commentary by David Tuchman"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen></iframe>
    </div>
  </div>

  <!-- form -->
  <div class="form-wrapper px-3">
    <div class="form-container">
      <!-- <div class="image">
          <img src="./img/ads.png" alt="" />
        </div> -->

      <form
        class="form w-full lg:w-[30rem]"
        method="POST"
        action="./process/register.php">
        <!--  method="POST" action="./process/register.php" -->
        <div class="header mb-7">
          <img src="./img/logo-2.png" alt="" class="w-36 mx-auto" />
          <p class="text-sm text-white">
            Pre-register now to be among the first to play our new casino game
            and receive exclusive bonuses at launch!
          </p>
        </div>

        <div class="form-field mb-4">
          <label for="" class="form-field-label"> Full Name: </label>
          <input
            type="text"
            id="full_name"
            name="full_name"
            class="form-field-input"
            required />
        </div>

        <div class="form-field mb-5">
          <label for="" class="form-field-label"> Phone Number: </label>
          <input
            type="text"
            id="phone_number"
            name="phone_number"
            class="form-field-input"
            required />
          <span class="form-field-error" id="phone_number_error">format should 09xxxxxxxxx</span>
        </div>

        <button class="btn w-full text-center mb-4">Pre-Register</button>

        <div class="form-field flex items-start gap-2 mb-2">
          <input type="checkbox" name="agreement" id="agreement" required />
          <label class="form-field-label text-xs" style="text-align: left">
            I am over 18 year old.
          </label>
        </div>
        <div class="form-field flex items-start gap-2">
          <input type="checkbox" name="agreement" id="agreement" required />
          <label class="form-field-label text-xs" style="text-align: left">
            I agree to collecting and using my personal information.
          </label>
        </div>
      </form>
    </div>
  </div>

  <main class="main">
    <!-- hero -->
    <section class="hero">
      <div
        class="hero-container max-w-screen-xl mx-auto grid gap-5 px-2 py-5 place-center">
        <div class="hero-r">
          <div class="logo">
            <img
              src="./img/assets/logo.png"
              alt=""
              class="mx-auto lg:ms-[unset]" />
          </div>
          <h1 class="title mb-14 text-center">Ace the Game, Win Big</h1>

          <button class="btn-reg mx-auto block" id="open-registration-btn">
            <img src="./img/assets/btn-pre-register.png" alt="" />
          </button>

          <div
            class="btn-group flex items-center justify-center gap-3 mt-10 mb-14">
            <button class="" id="open-registration-btn">
              <img src="./img/assets/appstore.png" alt="" />
            </button>
            <button class="" id="open-registration-btn">
              <img src="./img/assets/googleplay.png" alt="" />
            </button>
          </div>

          <button
            id="open-live-btn"
            class="flex gap-3 items-center font-semibold mx-auto"
            id="open-live-btn">
            <div class="btn-round">
              <img src="./img/video.png" alt="" class="ps-[3px]" />
            </div>
            Join live gaming
          </button>
        </div>

        <!-- <div class="scroll-down flex flex-col items-center">
            <p class="mb-1">SCROLL DOWN</p>
            <img src="./img/assets/double-arrow-down.png" alt="" class="w-3" />
          </div> -->
      </div>
    </section>

    <!-- pre register event -->
    <section class="pregis-event px-3">
      <div class="pregis-event-container max-w-screen-xl mx-auto">
        <div class="header mb-10">
          <h2 class="title mb-2">Pre-registration event</h2>
          <p>Pre-register Now for Exclusive Casino Rewards!</p>
        </div>

        <div
          class="chart flex flex-col justify-center lg:gap-14 lg:flex-row lg:mb-14 lg:px-[15rem]">
          <div
            class="chart-item flex items-center justify-start gap-6 lg:flex-col lg:justify-start">
            <div class="chart-item-image">
              <img
                src="./img/assets/cash-1.png"
                alt=""
                class="h-full w-full object-contain" />
            </div>

            <p class="lg:text-center">
              Sign up now and get a
              <span class="text-highlight">100 pesos</span> welcome bonus upon
              registration.
            </p>
          </div>

          <span class="chart-separator"></span>

          <div
            class="chart-item flex items-center justify-start gap-6 lg:flex-col lg:justify-start">
            <div class="chart-item-image">
              <img
                src="./img/assets/cash-2.png"
                alt=""
                class="h-full w-full object-contain" />
            </div>

            <p class="lg:text-center">
              Recharge for the first time and
              <span class="text-highlight">accumulate 5%</span> of the
              recharge amount.
            </p>
          </div>
        </div>

        <div class="mb-14 lg:text-center text-xs ">
          <h4 class="title-note mb-1">Note:</h4>

          <p>
            The maximum amount that is available to be provided is 10,000 pesos.
          </p>
        </div>

        <button class="btn-reg" id="open-registration-btn">
          <img src="./img/assets/btn-pre-register.png" alt="" />
        </button>
      </div>
    </section>

    <!-- background -->
    <section class="about">
      <div class="about-container">
        <div
          class="about-container-div max-w-screen-xl mx-auto lg:grid lg:grid-cols-2">
          <div class="order-2">
            <h2 class="title">About Us</h2>

            <p class="mb-14">
              Acewin is an online casino platform that offers a wide range of
              games, including slots, table games, and live dealer
              experiences. Known for its user-friendly interface and secure
              payment options, it provides a fun and thrilling gambling
              experience for players. Acewin also features various promotions
              and rewards, ensuring that both new and returning players enjoy
              exciting opportunities to win.
            </p>
          </div>

          <div class="image lg:order-1">
            <img src="./img/assets/casino men.png" alt="" class="w-full" />
          </div>
        </div>
      </div>
    </section>

    <!-- recommended games -->
    <section class="rec px-2">
      <div class="rec-container max-w-screen-xl mx-auto">
        <h2 class="title text-center mb-14">
          Experience the most casino games
        </h2>

        <div class="catg-item">
          <h3 id="catg-title" class="catg-item-title">Slot Games</h3>
          <p id="catg-desc" class="catg-desc">
            Spin the reels and chase the excitement! With every turn, you’re
            one spin away from big wins and endless fun.
          </p>

          <div class="flex justify-center gap-5 mt-7 mb-5">
            <button class="btn" id="btn-catg-slot">
              <img
                src="./img/assets/jackpot.png"
                alt=""
                class="w-8"
                style="filter: invert(1)" />
            </button>
            <button class="btn" id="btn-catg-poker">
              <img
                src="./img/assets/poker-cards.png"
                alt=""
                class="w-8"
                style="filter: invert(1)" />
            </button>
            <button class="btn" id="btn-catg-dice">
              <img
                src="./img/assets/casino.png"
                alt=""
                class="w-8"
                style="filter: invert(1)" />
            </button>
          </div>

          <div class="h-64 w-full lg:w-[50vw] mx-auto">
            <video id="catg-video" class="w-full h-full" autoplay muted loop>
              <source
                src="./img/assets/casino game trailer.mp4"
                type="video/mp4" />
            </video>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer px-2 pt-14 pb-3">
    <div class="footer-container max-w-screen-xl mx-auto">
      <div class="flex gap-5 justify-center">
        <a href="#"><img src="./img//assets/soc-sns.png" alt="" class="w-7" /></a>
        <a href="#"><img src="./img//assets/soc-discord.png" alt="" class="w-7" /></a>
        <a href="#"><img src="./img//assets/soc-youtube.png" alt="" class="w-7" /></a>
        <a href="#"><img src="./img//assets/soc-facebook.png" alt="" class="w-7" /></a>
        <a href="#"><img src="./img//assets/soc-twitter.png" alt="" class="w-7" /></a>
        <a href="#"><img src="./img//assets/soc-link.png" alt="" class="w-7" /></a>
      </div>

      <span class="footer-separator mt-5 mb-7"></span>

      <a href="https://blockwin.fun/acewin/" class="w-24 mx-auto block mb-2"><img src="./img/assets/logo.png" alt="" class="" /></a>

      <p class="text-xs text-center">© 2025 Acewin. All Rights Reserved.</p>
    </div>
  </footer>

  <script>
    const olb = document.querySelector("#open-live-btn");
    const lvw = document.querySelector(".live-video-wrapper");

    olb.addEventListener("click", () => {
      lvw.classList.add("active");
    });

    lvw.addEventListener("click", function(event) {
      if (event.target === this) {
        this.classList.remove("active");
      }
    });

    const orbs = document.querySelectorAll(".btn-reg");
    const fw = document.querySelector(".form-wrapper");

    orbs.forEach((orb) => {
      orb.addEventListener("click", () => {
        fw.classList.add("active");
      });
    });

    fw.addEventListener("click", function(event) {
      if (event.target === this) {
        this.classList.remove("active");
      }
    });

    const bcs = document.querySelector("#btn-catg-slot");
    const bcp = document.querySelector("#btn-catg-poker");
    const bcd = document.querySelector("#btn-catg-dice");
    const cv = document.querySelector("#catg-video");
    const ct = document.querySelector("#catg-title");
    const cd = document.querySelector("#catg-desc");

    bcs.addEventListener("click", function(event) {
      ct.innerHTML = "Slot";
      cd.innerHTML =
        " Spin the reels and chase the excitement! With every turn, you’re one spin away from big wins and endless fun.";
    });

    bcp.addEventListener("click", function(event) {
      ct.innerHTML = "Poker";
      cd.innerHTML =
        "A thrilling blend of skill, strategy, and luck where every hand is a new chance to outsmart your opponents and claim the pot!";

      cv.src = "./img/assets/casino game trailer 2.mp4";
    });

    bcd.addEventListener("click", function(event) {
      ct.innerHTML = "Rollete";
      cd.innerHTML =
        "The wheel of fortune! Bet on your lucky number, color, or combo, and watch the ball spin for the chance to hit it big.";
      cv.src = "./img/assets/casino game trailer 3.mp4";
    });

    //   const cab = document.querySelector("#close-ads-btn");
    //   const ads = document.querySelector(".ads-wrapper");

    //   cab.addEventListener("click", () => {
    //     ads.style.display = "none";
    //   });
  </script>
</body>

</html>