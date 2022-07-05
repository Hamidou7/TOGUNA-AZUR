@extends('layouts.master')

@section("contenu")

<div class="container-fluid mt-1 navbar-custom">
    <div class="row">
        <div class="col-sm-4">
            <div class="card mt-1" style="width: 18rem;">
                <img src="images/image.webp" class="card-img-top  opacity-75" alt="...">
                <div class="card-body">
                    <p class="card-text">Bienvenue! <strong> Togouna Azur </strong>. Notre objectif : La
                        réussite de vos vacances! Pour cela notre équipe se tient à votre disposition.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class="card-text texte">Bienvenue! <strong> Togouna Azur </strong>. Notre objectif : La
                            réussite de vos vacances! Pour cela notre équipe se tient à votre disposition.</p>
                    </div>
                    <div class="carousel-item">
                        <p class="card-text texte">Bienvenue! <strong> Togouna Azur </strong>. Notre objectif : La
                            réussite de vos vacances! Pour cela notre équipe se tient à votre disposition.</p>
                    </div>
                    <div class="carousel-item">
                        <p class="card-text texte">Bienvenue! <strong> Togouna Azur </strong>. Notre objectif : La
                            réussite de vos vacances! Pour cela notre équipe se tient à votre disposition.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-5 mt-1">
            <img src="images/back.png" alt="" width="458px">
        </div>
    </div>
</div>
<div class="pt-1 navbar-custom">
    <!-- weather widget start -->
    <div id="m-booked-custom-widget-13530">
        <div class="weather-customize" style="width:226px;">
            <div class="booked-weather-custom-160 mod" style="width:286px;" id="width1">
                <div class="booked-weather-custom-160-date">Météo, 28 Juin</div>
                <div class="booked-weather-custom-160-main"> <a target="_blank"
                        href="https://hotelmix.fr/weather/bamako-9506" class="booked-weather-custom-160-city">
                        Météo à Bamako </a>
                    <div class="booked-weather-custom-160-degree booked-weather-custom-C wmd18"><span><span
                                class="plus">+</span>29</span></div>
                    <div class="booked-weather-custom-details">
                        <p><span>Max: <strong><span class="plus">+</span>32<sup>°</sup></strong></span><span>
                                Min: <strong><span class="plus">+</span>27<sup>°</sup></strong></span></p>
                        <p>Humidité: <strong>59%</strong></p>
                        <p>Vent: <strong>SW - 18 KPH</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
        type="text/javascript"> var css_file = document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel", "stylesheet"); css_file.setAttribute("type", "text/css"); css_file.setAttribute("href", 'https://s.bookcdn.com/css/weather.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_13530(data) { if (typeof (data) != 'undefined' && data.results.length > 0) { for (var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-custom-widget-13530'); if (objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if (copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=9506;type=2;scode=124;ltid=3458;domid=581;anc_id=5249;countday=undefined;cmetric=1;wlangID=3;color=009f5d;wwidth=226;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1"; widgetSrc += ';ref=' + widgetUrl; widgetSrc += ';rand_id=13530'; var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script>
    <!-- weather widget end -->
    <footer class="mt-auto ccc text-center fw-bold">
        <p>Modèle de couverture pour <a href="/accueil" class="text-light">TOGUNA AZUR</a>, by <a
                href="togohamidou.netlify.app" class="text-white">@Togo</a>.</p>
    </footer>
</div>
@endsection