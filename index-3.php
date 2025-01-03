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
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- css -->
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <!-- ads -->
  <div class="ads-wrapper">
    <div class="ads">
      <button id="close-ads-btn" class="close-ads-btn">
        <img src="./img/cross.png" alt="" class="w-10" />
      </button>
      <img src="./img/ads.png" alt="" class="ads-img w-[75vw] lg:w-[20vw]" />
    </div>
  </div>

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
    <form class="form w-full lg:w-[30rem]" method="POST" action="./process/register.php">
      <div class="header mb-7">
        <img src="./img/logo-2.png" alt="" class="w-36 mx-auto" />
        <p class="text-sm text-white">
          Pre-register now to be among the first to play our new casino game
          and receive exclusive bonuses at launch!
        </p>
      </div>

      <div class="form-field mb-4">
        <label for="" class="form-field-label"> Full Name: </label>
        <input type="text" id="full_name" name="full_name" class="form-field-input" required />
      </div>

      <div class="form-field mb-5">
        <label for="" class="form-field-label"> Phone Number: </label>
        <input type="text" id="phone_number" name="phone_number" class="form-field-input" required />
        <span class="form-field-error" id="phone_number_error">format should 09xxxxxxxxx</span>
      </div>

      <button class="btn w-full text-center mb-4">Pre-Register</button>

      <div class="form-field flex items-start gap-2">
        <input type="checkbox" name="agreement" id="agreement" required />
        <label class="form-field-label text-xs" style="text-align: left">
          By signing up, you agree to receive game money through the phone
          number entered during pre-registration.
        </label>
      </div>
    </form>
  </div>

  <main class="main grid gap-5 max-w-screen-xl mx-auto px-2 lg:grid-cols-2">
    <div class="sd-l hidden lg:block">
      <img
        src="./img/subject-roll.png"
        alt=""
        class="img md:object-contain" />
      <img src="./img/subject-roll-stars.png" alt="" />
    </div>

    <div class="sd-r mt-36">
      <img src="./img/logo.png" alt="" class="w-48 mx-auto lg:ms-[unset]" />
      <h1 class="title mb-2 text-center lg:text-left">
        Get <span class="text-highlight">100 Pesos</span> Just for
        Registering!
      </h1>
      <p class="text-center lg:text-left">
        Join the Best Casino Experience Today, Claim Your 200 Peso Bonus, and
        Start Winning Big! Play, Enjoy, and Explore Endless Excitement with
        Every Bet!
      </p>

      <div
        class="btn-group flex items-center flex-col gap-8 mt-10 lg:flex-row">
        <button class="btn w-full lg:w-fit" id="open-registration-btn">
          Register Now!
          <img src="./img/double arrow.png" alt="" />
        </button>

        <button
          id="open-live-btn"
          class="flex gap-3 items-center font-semibold"
          id="open-live-btn">
          <div class="btn-round">
            <img src="./img/video.png" alt="" />
          </div>
          Join live gaming
        </button>
      </div>
    </div>
  </main>

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

    const orb = document.querySelector("#open-registration-btn");
    const fw = document.querySelector(".form-wrapper");

    orb.addEventListener("click", () => {
      fw.classList.add("active");
    });

    fw.addEventListener("click", function(event) {
      if (event.target === this) {
        this.classList.remove("active");
      }
    });

    const cab = document.querySelector("#close-ads-btn");
    const ads = document.querySelector(".ads-wrapper");

    cab.addEventListener("click", () => {
      ads.style.display = "none";
    });
  </script>
</body>

</html>