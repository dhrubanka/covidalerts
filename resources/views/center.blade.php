<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="description" content="Assam Active Covid Center List">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="CovidAlerts">
    <meta itemprop="description" content="Telegram notification bot">
    <meta itemprop="image" content="https://covidalerts.online/img/center.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://covidalerts.online">
    <meta property="og:type" content="website">
    <meta property="og:title" content="CovidAlerts">
    <meta property="og:description" content="Telegram notification bot">
    <meta property="og:image" content="https://covidalerts.online/img/center.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CovidAlerts">
    <meta name="twitter:description" content="Telegram notification bot">
    <meta name="twitter:image" content="https://covidalerts.online/img/center.png">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/alerts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" />

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <title>Covid Alerts | Centers Page</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3220759980765359"
        crossorigin="anonymous"></script>
</head>

<body>

    <!-- Navbar Start-Region-->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a href="/" class="navbar-brand"> <img id="logo" src="/img/CovidAlertLogo.png" alt="covid-alert-logo">
                    CovidAlerts</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navBarMobileToggle" aria-controls="navBarMobileToggle" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="" role="button"><i class="fa fa-bars" aria-hidden="true"
                            style="color:#e6e6ff"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navBarMobileToggle">
                    <ul class="navbar-nav text-center ms-auto">
                        <li>
                            <a href="/" class="nav-link">HOME</a>
                        </li>
                        <li>
                            <a href="/alerts" class="nav-link">CHANNELS</a>
                        </li>
                        <li>
                            <a href="/centers" class="nav-link">CENTERS</a>
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
    <section class="alerts">
        <div class="container banner-text animated slideInDown">

            <div id="card-container" class="container">
                <div class="row">
                    <div class="col-lg-9">
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
                                            <img src="/img/TelegramIcon.png" alt="telegram_icon"
                                                style="width: 50px; height: 50px;">
                                        </div>
                                        <div class="card-info">
                                            <span class="info-title">Get List of Active Centers for your District</span>
                                            <span class="info-update">Center list are gathered from the COWIN API, may
                                                be helpful in finding Offline Centers</span>
                                        </div>
                                    </div>
                                    <ul class="card-ul-list" style="list-style-type: none; padding: 10px;">
                                        <li class="card-list"><span>
                                                <select id="centerdropdown" class="form-select"
                                                    aria-label="Default select example"
                                                    onchange="setUnderLink(this.value)">
                                                    <option selected value="">Select your district </option>
                                                    @foreach ($districts as $district)
                                                        <option value="{{ $district->district_id }}">
                                                            {{ $district->district_name }}</option>
                                                    @endforeach

                                                </select>
                                            </span></li>
                                    </ul>
                                    <div class="card-button">
                                        <button id="search" type="submit"
                                            class="btn btn-sm border btn-flash-border-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3220759980765359"
                                                        crossorigin="anonymous"></script>
                            <!-- centersAd -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3220759980765359"
                                data-ad-slot="6934726514" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div id="tobeattached">

                                <!-- <h5 class="card-title" style="color: black;">Above 45 Channels</h5> -->

                            </div>
                        </div>
                    </div>


    </section>
    <!-- Alert Card End-Region -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#search").click(function(e) {
                var id = $('#centerdropdown').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "https://covidalerts.online/list/" + id,
                    dataType: "json",
                    success: function(result, status, xhr) {
                        $('#tobeattached').empty();
                        var items = '<div style="margin:1em;"> Total ' + result.length +
                            ' centers are available.. </div>';
                        $('#tobeattached').append(items);
                        for (var key in result) {
                            var out = '<div class="card card-margin">';
                            out = ' <div class="card-body pt-0">';
                            out = '<div class="card-body-widget">';
                            out = '  <div class="card-title-wrapper" >">';
                            out = ' <div class="card-info" style="padding: 1em">';
                            out += '<h4 id="centername" class="info-title">CENTER : &nbsp' +
                                result[key].name + ' </h4>';
                            out += ' <h6 class="info-title mb-2">Date : &nbsp' + result[key]
                                .sessions[0].date + ' </h6>';
                            out += ' <h6 class="info-title mb-2">Vaccine :&nbsp' + result[key]
                                .sessions[0].vaccine + ' </h6>';
                            out += ' <h6 class="info-title mb-2">Age :&nbsp' + result[key]
                                .sessions[0].min_age_limit + ' </h6>';
                            out += ' <h6 class="info-title mb-2">Fee :&nbsp' + result[key]
                                .fee_type + ' </h6>';
                            out += ' <h6 class="info-title mb-2">PIN :&nbsp' + result[key]
                                .pincode + ' </h6>';
                            out += ' <p class="info-title ">Address :&nbsp' + result[key]
                                .address + ' </p>';
                            out += '</div>';
                            out += '</div>';
                            out += '</div>';
                            out += '</div>';
                            out += '</div>';
                            $('#tobeattached').append(out);


                        }
                    }
                });
            });
        });
    </script>
    <script>
        //Form-Select onChange Functions
        //--------------------------------------------------------------------

        function setUnderLink(channelLink) {
            document.getElementById("underButton").href = channelLink;

            if (channelLink == "") {
                document.getElementById("underButton").target = "";
                document.getElementById("underButton").href = "#";
            } else {
                document.getElementById("underButton").target = "_blank";
            }
        }

        function setAboveLink(channelLink) {
            document.getElementById("aboveButton").href = channelLink;

            if (channelLink == "") {
                document.getElementById("aboveButton").target = "";
                document.getElementById("aboveButton").href = "#";
            } else {
                document.getElementById("aboveButton").target = "_blank";
            }
        }
        //--------------------------------------------------------------------
    </script>

</body>

</html>
