<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FAQ</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="../assets/css/dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

<body
  class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
  <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

  <?php include "./util/sideNav.php" ?>

  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <?php include "./util/navBar.php" ?>

    <div class="w-full px-6 py-6 mx-auto">
      <!-- content -->

      <div class="flex flex-wrap -mx-3">
        <div class="max-w-full px-3 lg:w-full lg:flex-none">
          <div class="flex flex-wrap -mx-3">


            <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
              <div
                class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <div class="flex flex-wrap -mx-3">
                    <div class="flex items-center flex-none w-full max-w-full px-3 underline">
                      <h5 class="mb-0 dark:text-white">How to Book Flight Tickets Online?</h5>
                    </div>
                    <div class="flex items-center flex-none w-full max-w-full px-3">
                      <p>Following are the effortless steps to book your airline ticket:</p> <br>
                    </div>
                    <div class="flex items-center flex-none w-full max-w-full px-3">
                      <ol type="1">
                        <li>Go to the flights menu.</li>
                        <li>Enter your travel details.</li>
                        <li>Select your desired airline.</li>
                        <li>Provide your contact details.</li>
                        <li>Check out your purchase.</li>
                      </ol>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap -mx-3">
        <div class="max-w-full px-3 lg:w-full lg:flex-none">
          <div class="flex flex-wrap -mx-3">


            <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
              <div
                class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <div class="flex flex-wrap -mx-3">
                    <div class="flex items-center flex-none w-full max-w-full px-3">
                      <h3 class="mb-0 dark:text-white">Frequently Asked Questions.</h3>
                    </div>
                    
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include "./util/foot.php" ?>
    </div>
  </main>

</body>

</html>