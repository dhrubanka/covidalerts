<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">

    <title>CovidAlerts</title>
  </head>
  <body>

    <!-- Navbar Start-Region-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a href="#" class="navbar-brand"> <img id="logo" src="/img/CovidAlertLogo.png" alt="covid-alert-logo"> CovidAlert</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarMobileToggle" aria-controls="navBarMobileToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navBarMobileToggle">
                    <ul class="navbar-nav text-center ms-auto">
                        <li>
                            <a href="#" class="nav-link active">HOME</a>
                        </li>

                        <li>
                            <a href="#" class="nav-link">PLASMA DONATION</a>
                        </li>

                        <li>
                            <a href="#" class="nav-link">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Navbar End-Region -->


    <!-- Modal Start-Region -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="modal fade" id="district-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">Select District</div>
                            <div class="modal-body">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Dibrugarh</option>
                                    <option value="1">Dibrugarh</option>
                                    <option value="2">Tinsukia</option>
                                    <option value="3">Kamrup Metropolitan</option>
                                    <option value="4">Kamrup Rural</option>
                                    <option value="5">Nalbari</option>
                                    <option value="6">Jorhat</option>
                                    <option value="7">Nagaon</option>
                                    <option value="8">Sonitpur</option>
                                    <option value="9">Cachar</option>
                                  </select>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-dismiss="modal">Get Link</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-Region -->

    <section class="banner">
        <div class="container banner-text">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Get Notified in the blink of an eye!</h1>
                    <p>Having trouble scheduling your vaccination appointment???
                    <br>Don't Worry..
                    <br>Our Telegram bot will keep you in the loop.</p>
                    <br>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#district-modal"><button class="joinButton">Join Channel</button></a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  </body>
</html>





