<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="description" content="Telegram notification bot">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="CovidAlerts">
    <meta itemprop="description" content="Telegram notification bot">
    <meta itemprop="image" content="https://covidalerts.online/img/seoalerts.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://covidalerts.online">
    <meta property="og:type" content="website">
    <meta property="og:title" content="CovidAlerts">
    <meta property="og:description" content="Telegram notification bot">
    <meta property="og:image" content="https://covidalerts.online/img/seoalerts.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CovidAlerts">
    <meta name="twitter:description" content="Telegram notification bot">
    <meta name="twitter:image" content="https://covidalerts.online/img/seoalerts.png">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/alerts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <title>Covid Alerts | Alerts Page</title>
  </head>
  <body>

    <!-- Navbar Start-Region-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a href="#" class="navbar-brand"> <img id="logo" src="/img/CovidAlertLogo.png" alt="covid-alert-logo"> CovidAlerts</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarMobileToggle" aria-controls="navBarMobileToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navBarMobileToggle">
                    <ul class="navbar-nav text-center ms-auto">
                        <li>
                            <a href="/" class="nav-link">HOME</a>
                        </li>

                        <li>
                            <a href="/about" class="nav-link">ABOUT</a>
                        </li>

                        <li>
                            <a href="/contact" class="nav-link">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Navbar End-Region -->

    <!-- Alert Card Start-Region -->
    <section class="alerts" >
        <div class="container banner-text animated slideInDown">

                <div id="card-container" class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-margin">
                                <div class="card-header no-border">
                                    <!-- <h5 class="card-title">MOM</h5> -->
                                </div>
                                <div class="card-body pt-0">
                                    <div class="card-body-widget">
                                        <div class="card-title-wrapper">
                                            <div class="card-icon">
                                                <!-- <span class="widget-49-date-day">09</span>
                                                <span class="widget-49-date-month">apr</span> -->
                                                <img src="/img/TelegramIcon.png" alt="telegram_icon" style="width: 50px; height: 50px;">
                                            </div>
                                            <div class="card-info">
                                                <span class="info-title">All age groups </span>
                                                <span class="info-update">More Districts to be added soon</span>
                                            </div>
                                        </div>
                                        <ul class="card-ul-list" style="list-style-type: none; padding: 10px;">
                                            <li class="card-list"><span>
                                                <select class="form-select" aria-label="Default select example" onchange="setUnderLink(this.value)">
                                                    <option selected value="">Select your district </option>
                                                    <option value="https://telegram.me/kamrupmetroCA18">Kamrup Metropolitan</option>
                                                    <option value="https://telegram.me/dibrugarhCA18">Dibrugarh</option>
                                                    <option value="https://telegram.me/jorhatCA18">Jorhat</option>
                                                    <option value="https://telegram.me/sivasagarCA18">Sivasagar</option>
                                                    <option value="https://telegram.me/dhemajiCA18 ">Dhemaji</option>
                                                    <option value="https://telegram.me/sonitpurCA18">Sonitpur</option>
                                                    <option value="https://telegram.me/kamrupruralCA18">Kamrup Rural</option>
                                                    <option value="https://telegram.me/joinchat/OoiD68jRRFRlNzFl">Lakhimpur</option>
                                                    <option value="https://telegram.me/joinchat/b6MR0phezg1mMjI1">Tinsukia</option>
                                                    <option value="https://telegram.me/joinchat/kz7X17M6-jJhZDc1">Golaghat</option>
                                                    <option value="https://telegram.me/joinchat/IX4JwRFMcEhjYTBl">Majuli</option>
                                                    <option value="https://telegram.me/nalbariCA18">Nalbari</option>
                                                    <option value="https://telegram.me/nagaonCA18">Nagaon</option>
                                                    <option value="https://telegram.me/darrangCA18">Darrang</option>
                                                    <option value="https://telegram.me/joinchat/HPf5iO88t_83YmI1">Udalguri</option>
                                                    <option value="https://telegram.me/joinchat/obpgn4hLIyg4ZGM1">Cachar</option>
                                                    <option value="https://telegram.me/joinchat/fEQ_S3r81TZjZDQ9">Chirang</option>
                                                    <option value="https://telegram.me/joinchat/H8MczgjAlylkMTFl">Biswanath</option>
                                                    <option value="https://telegram.me/joinchat/r4GJ3ZhSfhNjNDg9">Baksa</option>
                                                  </select>
                                            </span></li>
                                        </ul>
                                        <div class="card-button">
                                            <a id="underButton" href="#" class="btn btn-sm border btn-flash-border-primary">OPEN LINK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card card-margin">
                                        <div class="card-header no-border">
                                            <!-- <h5 class="card-title" style="color: black;">Above 45 Channels</h5> -->
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="card-body-widget">
                                                <div class="card-title-wrapper">
                                                    <div class="card-icon">
                                                        <img src="/img/TelegramIcon.png" alt="telegram_icon" style="width: 50px; height: 50px;">
                                                    </div>
                                                    <div class="card-info">
                                                        <span class="info-title">Above 45 Channels (Coming Soon)</span>
                                                        <span class="info-update">Coming soon</span>
                                                    </div>
                                                </div>
                                                <ul class="card-ul-list" style="list-style-type: none; padding: 10px;">
                                                    <li class="card-list"><span>
                                                        <select class="form-select" aria-label="Default select example" onchange="setAboveLink(this.value)" >
                                                            <option selected value="">Select your district</option>


                                                          </select>
                                                    </span></li>
                                                </ul>
                                                <div class="card-button">
                                                    <a id="aboveButton" href="#" class="btn btn-sm border btn-flash-border-primary">OPEN LINK</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
            </div>
        </div>
    </section>
    <!-- Alert Card End-Region -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        //Form-Select onChange Functions
        //--------------------------------------------------------------------

        function setUnderLink(channelLink){
            document.getElementById("underButton").href = channelLink;

            if(channelLink == ""){
                document.getElementById("underButton").target = "";
                document.getElementById("underButton").href = "#";
            }
            else {
                document.getElementById("underButton").target = "_blank";
            }
        }

        function setAboveLink(channelLink){
            document.getElementById("aboveButton").href = channelLink;

            if(channelLink == ""){
                document.getElementById("aboveButton").target = "";
                document.getElementById("aboveButton").href = "#";
            }
            else {
                document.getElementById("aboveButton").target = "_blank";
            }
        }
        //--------------------------------------------------------------------
    </script>

  </body>
</html>





