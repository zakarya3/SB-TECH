<?php
session_start();
if (isset($_SESSION['username'])) {
$station=$_SESSION['stationID'];
$username=$_SESSION['username'];
$password=$_SESSION['password'];
}else {
    header('location:login.php'); 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/dashboard.css">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="../js/translate.js"></script>
    <title>overview</title>
</head>

<body>
    <div class="left-side">

        <div class="logo">

            <img src="images/logo2.png" alt="">

        </div>

        <div class="navs">

            <div class="nav-link active">
                <a href="">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <polygon
                                    points="256,152.96 79.894,288.469 79.894,470.018 221.401,470.018 221.401,336.973 296.576,336.973 296.576,470.018 432.107,470.018 432.107,288.469 		" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon
                                    points="439.482,183.132 439.482,90.307 365.316,90.307 365.316,126.077 256,41.982 0,238.919 35.339,284.855 256,115.062 476.662,284.856 512,238.92 		" />
                            </g>
                        </g>
                    </svg>
                    <span>
                        Home
                    </span>
                </a>
            </div>

            <div class="nav-link">
                <a href="search.php">
                    <svg class="search" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M356.475,304.386c20.888-31.028,33.092-68.363,33.092-108.497c0-107.404-87.38-194.784-194.784-194.784 S0,88.485,0,195.888s87.38,194.784,194.784,194.784c40.926,0,78.935-12.698,110.319-34.345l155.242,154.568L512,459.24 L356.475,304.386z M194.784,335.963c-77.067,0-139.768-62.7-139.768-139.768c0-77.067,62.7-139.767,139.768-139.767 s139.768,62.7,139.768,139.768S271.851,335.963,194.784,335.963z" />
                            </g>
                        </g>
                    </svg>
                    <span>
                        Search
                    </span>
                </a>
            </div>

            <div class="nav-link">
                <a href="">
                    <svg class="analytics" style="transform: translateY(-.2em);" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m464.980469 482.1875v-181.070312h-119.847657v181.070312h-30.210937v-241.09375h-119.847656v241.09375h-30.210938v-121.046875h-119.847656v123.046875h-45.015625v27.8125h512v-29.8125zm0 0" />
                    </svg>
                    <span>
                        Analysis
                    </span>
                </a>
            </div>
            <div class="nav-link">
                <a href="">
                    <svg class="location" viewBox="-119 -21 682 682.66669" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m216.210938 0c-122.664063 0-222.460938 99.796875-222.460938 222.460938 0 154.175781 222.679688 417.539062 222.679688 417.539062s222.242187-270.945312 222.242187-417.539062c0-122.664063-99.792969-222.460938-222.460937-222.460938zm67.121093 287.597656c-18.507812 18.503906-42.8125 27.757813-67.121093 27.757813-24.304688 0-48.617188-9.253907-67.117188-27.757813-37.011719-37.007812-37.011719-97.226562 0-134.238281 17.921875-17.929687 41.761719-27.804687 67.117188-27.804687 25.355468 0 49.191406 9.878906 67.121093 27.804687 37.011719 37.011719 37.011719 97.230469 0 134.238281zm0 0" />
                    </svg>

                    <span>Location</span>
                </a>
            </div>

        </div>


    </div>
    <div class="right-side">
        <nav>
            <div class="iconMain">
                <svg fill="#2db7f5" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <polygon
                                points="256,152.96 79.894,288.469 79.894,470.018 221.401,470.018 221.401,336.973 296.576,336.973 296.576,470.018 432.107,470.018 432.107,288.469 		" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon
                                points="439.482,183.132 439.482,90.307 365.316,90.307 365.316,126.077 256,41.982 0,238.919 35.339,284.855 256,115.062 476.662,284.856 512,238.92 		" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="navs-ng">
                <ul>
                    <li>
                        <a href="">HomePage</a>
                    </li>

                    <li>
                        <div class="icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 258.75 258.75"
                                style="enable-background:new 0 0 258.75 258.75;" xml:space="preserve">
                                <g>
                                    <circle cx="129.375" cy="60" r="60" />
                                    <path
                                        d="M129.375,150c-60.061,0-108.75,48.689-108.75,108.75h217.5C238.125,198.689,189.436,150,129.375,150z" />
                                </g>
                            </svg>
                        </div>
                        <?php echo $username;?>
                    </li>
                    <li class="backend">
                        <a href="">Login Backend</a>
                    </li>
                    <li>
                        <a href="logout.php?logout=true">Logout</a>
                    </li>
                    <li id="fullScreen">
                        <svg style="width: 1em; fill: #2db7f5; margin:0 .5em 0 .5em" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 348.198 348.198" style="enable-background:new 0 0 348.198 348.198;"
                            xml:space="preserve">
                            <polygon
                                points="297.843,71.569 348.198,121.924 348.198,0 226.274,0 276.63,50.356 174.099,152.886 71.569,50.356 121.924,0 0,0 0,121.924 50.356,71.569 152.886,174.099 50.356,276.63 0,226.274 0,348.198 121.924,348.198 71.569,297.842 174.099,195.312 276.63,297.842 226.274,348.198 348.198,348.198 348.198,226.274 297.843,276.63 195.312,174.099 " />
                        </svg>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="sen-info">
            <div class="container">
                <div class="update-time">
                    Update time: <span></span>
                </div>
                <div class="desvice-id">
                    Device ID: <?php echo $station;?>
                </div>
            </div>

        </div>

        <div class="overview">
            <span>Overview</span>
            <div class="line"></div>
        </div>
        <div class="tabpanel">
            <div class="tab-pn" style="background-color: #34c3ed;">
                <div class="icon">
                    <svg viewBox="0 -61 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m45 160c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0 0" />
                        <path
                            d="m370.5 220h-221.851562c-2.53125 4.683594-5.441407 9.128906-8.691407 13.296875.011719.566406.042969 1.132813.042969 1.703125 0 5.121094-.480469 10.128906-1.351562 15h231.851562c29.5 0 53.5 24 53.5 53.5v3c0 29.5-24 53.5-53.5 53.5s-53.5-24-53.5-53.5v-.5h-30v.5c0 46.042969 37.457031 83.5 83.5 83.5s83.5-37.457031 83.5-83.5v-3c0-46.042969-37.457031-83.5-83.5-83.5zm0 0" />
                        <path
                            d="m419 0h-4c-51.28125 0-93 41.71875-93 93h30c0-34.738281 28.261719-63 63-63h4c34.738281 0 63 28.261719 63 63v4c0 34.738281-28.261719 63-63 63h-260.1875c.777344 4.886719 1.1875 9.898438 1.1875 15s-.410156 10.113281-1.1875 15h260.1875c51.28125 0 93-41.71875 93-93v-4c0-51.28125-41.71875-93-93-93zm0 0" />
                        <path
                            d="m227.5 130c33.910156 0 61.5-27.589844 61.5-61.5v-5c0-33.910156-27.589844-61.5-61.5-61.5s-61.5 27.589844-61.5 61.5v2.5h30v-2.5c0-17.367188 14.132812-31.5 31.5-31.5s31.5 14.132812 31.5 31.5v5c0 17.367188-14.132812 31.5-31.5 31.5h-104.257812c10.410156 8.101562 19.09375 18.316406 25.40625 30zm0 0" />
                        <path
                            d="m.945312 245.09375c4.753907 25.519531 27.175782 44.90625 54.054688 44.90625 20.460938 0 38.332031-11.238281 47.804688-27.855469-11.589844 5.046875-24.375 7.855469-37.804688 7.855469-24.660156 0-47.152344-9.445312-64.054688-24.90625zm0 0" />
                        <path
                            d="m45 190c-16.871094 0-32.453125-5.601562-45-15.039062v.039062c0 35.839844 29.160156 65 65 65s65-29.160156 65-65c0-14.613281-4.847656-28.113281-13.019531-38.980469-9.113281 31.152344-37.921875 53.980469-71.980469 53.980469zm0 0" />
                    </svg>
                </div>
                <div class="data">
                    <div class="data-label">Wind speed </div>
                    <div class="data-content ">
                        <div class="st">0</div> m/s
                    </div>
                </div>
            </div>

            <div class="tab-pn" style="background-color: #ff9a00;">
                <div class="icon">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <polygon points="398.665,131.378 398.665,267.431 483.775,254.915 483.775,143.895 		" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon points="247.358,109.127 247.358,289.682 293.012,282.968 293.012,115.841 		" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M143.248,93.816l-56.653,42.49V84.063c16.544-6.118,28.37-22.049,28.37-40.693C114.965,19.456,95.51,0,71.595,0 c-23.915,0-43.37,19.456-43.37,43.37c0,18.644,11.826,34.575,28.37,40.693V512h30V256.103l55.986,48.988l74.777-10.997V104.715 L143.248,93.816z M132.248,256.186L86.595,216.24v-42.434l45.653-34.24V256.186z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon points="323.012,120.253 323.012,278.557 368.665,271.843 368.665,126.966 		" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="data">
                    <div class="data-label">-Wind direction</div>
                    <div class="data-content">
                        <div class="st">0</div> °
                    </div>
                </div>
            </div>
            <div class="tab-pn" style="background-color: #910e14;">
                <div class="icon">
                    <svg viewBox="-135 1 511 511.99999" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m105.507812 392.023438c-8.277343 0-15.003906 6.722656-15.003906 15 0 8.277343 6.726563 15 15.003906 15 8.273438 0 15-6.722657 15-15 0-8.277344-6.722656-15-15-15zm0 0" />
                        <path
                            d="m105.507812 0c-41.355468 0-75.007812 33.648438-75.007812 75.003906v257.523438c-19.144531 19.558594-30 46.96875-30 74.496094 0 57.742187 46.636719 104.976562 105.195312 104.976562 52.925782 0 95.171876-39.328125 103.234376-86.5625 5.816406-33.957031-4.773438-68.796875-28.417969-92.910156v-1.507813h60v-30.003906h-60v-31h30v-30.003906h-30v-30h60v-30h-60v-30.003907h30v-30h-30v-30.003906h60v-30h-61.519531c-6.96875-34.195312-37.265626-60.003906-73.484376-60.003906zm0 452.027344c-24.816406 0-45.003906-20.1875-45.003906-45.003906 0-19.53125 12.578125-36.027344 30-42.238282v-274.78125h30.003906v274.78125c17.421876 6.210938 30 22.707032 30 42.238282 0 24.816406-20.183593 45.003906-45 45.003906zm0 0" />
                    </svg> </div>
                <div class="data">
                    <div class="data-label">Atmospheric temperature</div>
                    <div class="data-content">
                        <div class="st">0</div> ℃
                    </div>
                </div>
            </div>
            <div class="tab-pn" style="background-color: #1a12b7;">
                <div class="icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 509.867 509.867"
                        style="enable-background:new 0 0 509.867 509.867;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M272,6.4c-8.533-8.533-23.467-8.533-32,0C220.8,27.733,62.933,219.733,62.933,317.867c0,106.667,85.333,192,192,192 s192-85.333,192-192C446.933,219.733,289.067,27.733,272,6.4z M169.6,253.867c0-12.8,8.533-21.333,21.333-21.333 s21.333,8.533,21.333,21.333s-8.533,21.333-21.333,21.333S169.6,266.667,169.6,253.867z M205.867,375.467L176,345.6l128-128 l29.867,29.867L205.867,375.467z M318.933,360.533c-12.8,0-21.333-8.533-21.333-21.333c0-12.8,8.533-21.333,21.333-21.333 s21.333,8.533,21.333,21.333C340.267,352,331.733,360.533,318.933,360.533z" />
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="data">
                    <div class="data-label">-Atmospheric humidity</div>
                    <div class="data-content">
                        <div class="st">0</div> %RH
                    </div>
                </div>
            </div>
            <div class="tab-pn" style="background-color: #7033fd;">
                <div class="icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001"
                        style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M271.014,0v60.173c42.823,3.256,81.841,20.327,112.612,46.747l42.615-42.616C384.47,27.137,330.463,3.436,271.014,0z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M341.637,362.643l21.231-21.233l20.695,20.695c7.6-9.078,14.146-18.838,19.576-29.134l-27.127-11.236l11.49-27.741 l27.153,11.247c3.467-11.13,5.757-22.664,6.811-34.454h-29.347v-30.026h29.341c-1.069-11.881-3.383-23.409-6.83-34.443 l-27.127,11.236l-11.49-27.741l27.082-11.218c-5.488-10.416-12.046-20.184-19.533-29.151l-20.503,20.505l-21.232-21.232 l20.503-20.503c-8.968-7.488-18.734-14.045-29.152-19.533l-11.218,27.082l-27.741-11.49l11.236-27.127 c-11.034-3.447-22.562-5.761-34.443-6.83v29.341h-30.026V90.315c-11.881,1.069-23.41,3.383-34.443,6.83l11.236,27.127 l-27.741,11.49l-11.218-27.082c-10.416,5.488-20.184,12.046-29.151,19.533l20.524,20.524l-21.232,21.232l-20.524-20.524 c-7.488,8.968-14.045,18.734-19.533,29.152l27.082,11.218l-11.49,27.741L97.369,206.32c-3.447,11.034-5.761,22.562-6.83,34.443 h29.341v30.026H90.534c1.054,11.789,3.344,23.323,6.811,34.453l27.153-11.247l11.49,27.741l-27.126,11.236 c5.43,10.296,11.978,20.056,19.576,29.134l20.695-20.695l21.232,21.232l-84.604,84.605 c45.263,40.273,104.888,64.753,170.24,64.753s124.978-24.479,170.24-64.753L341.637,362.643z M271.014,298.233v138.702h-30.026 V298.233c-17.474-6.197-30.026-22.885-30.026-42.457c0-19.572,12.552-36.26,30.026-42.457v-32.609h30.026v32.609 c17.474,6.197,30.026,22.885,30.026,42.457S288.488,292.035,271.014,298.233z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M256.001,240.762c-8.278,0-15.013,6.735-15.013,15.013c0,8.278,6.735,15.013,15.013,15.013s15.013-6.735,15.013-15.013 C271.014,247.497,264.279,240.762,256.001,240.762z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M60.398,270.788H0.225c3.436,59.45,27.138,113.456,64.303,155.227l42.6-42.6 C79.783,351.638,63.545,312.504,60.398,270.788z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M64.529,85.535C27.363,127.307,3.661,181.313,0.225,240.762h60.173c3.257-42.823,20.328-81.841,46.747-112.612 L64.529,85.535z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M447.473,85.535l-42.615,42.615c26.419,30.771,43.49,69.789,46.746,112.612h60.173 C508.34,181.312,484.64,127.307,447.473,85.535z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M85.761,64.303l42.615,42.615c30.77-26.419,69.789-43.49,112.612-46.746V0C181.538,3.436,127.531,27.138,85.761,64.303z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M451.604,270.788c-3.148,41.716-19.385,80.851-46.732,112.627l42.6,42.6c37.167-41.772,60.867-95.778,64.303-155.227 H451.604z" />
                            </g>
                        </g>
                        <g> </g>
                    </svg>
                </div>
                <div class="data">
                    <div class="data-label">-Atmospheric pressure</div>
                    <div class="data-content">
                        <div class="st">0</div> hPa
                    </div>
                </div>
            </div>
            <div class="tab-pn" style="background-color: #47ea77;">
                <div class="icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M352.111,422.469 l-70.542-122.183c-7.524,4.353-16.251,6.857-25.568,6.857c-9.317,0-18.045-2.504-25.568-6.857l-70.542,122.183 C102.453,389.179,63.734,327.028,63.734,256h141.123c0-18.928,10.291-35.442,25.575-44.286L159.889,89.531 C188.181,73.133,221.013,63.734,256,63.734s67.819,9.399,96.111,25.797l-70.542,122.183c15.284,8.844,25.575,25.358,25.575,44.286 h141.123C448.266,327.028,409.547,389.179,352.111,422.469z" />
                            </g>
                        </g>
                    </svg> </div>
                <div class="data">
                    <div class="data-label">-Solar Radiation</div>
                    <div class="data-content">
                        <div class="st">0</div> W/m2
                    </div>
                </div>
            </div>
            <div class="tab-pn" style="background-color: #079333;">
                <div class="icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M352.111,422.469 l-70.542-122.183c-7.524,4.353-16.251,6.857-25.568,6.857c-9.317,0-18.045-2.504-25.568-6.857l-70.542,122.183 C102.453,389.179,63.734,327.028,63.734,256h141.123c0-18.928,10.291-35.442,25.575-44.286L159.889,89.531 C188.181,73.133,221.013,63.734,256,63.734s67.819,9.399,96.111,25.797l-70.542,122.183c15.284,8.844,25.575,25.358,25.575,44.286 h141.123C448.266,327.028,409.547,389.179,352.111,422.469z" />
                            </g>
                        </g>
                    </svg> </div>
                <div class="data">
                    <div class="data-label">-Pyranometer</div>
                    <div class="data-content">
                        <div class="st">0</div> W/m2
                    </div>
                </div>
            </div>

            <div class="tab-pn" style="background-color: #310e5e">
                <div class="icon">
                    <svg id="Layer_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="m341.861 428.438c3.599.76 5.137 5.019 2.906 7.943-34.815 45.647-90.215 75.617-152.767 75.617-105.87 0-192-86.13-192-192 0-82.461 39.786-160.335 91.51-225 44.68-55.85 88.85-90.22 90.71-91.66 5.76-4.45 13.8-4.45 19.56 0 1.886 1.447 36.346 28.304 74.925 72.716 1.574 1.812 1.615 4.486.131 6.373-39.563 50.359-68.836 113.834-68.836 178.372 0 81.731 56.639 151.331 133.861 167.639z" />
                            <path
                                d="m512 260.799c0 80.295-66.512 144.29-145.27 138.88-70.704-4.903-126.73-65.333-126.73-138.88 0-56.381 25.792-110.788 60.11-156.07 21.689-28.516 48.496-55.46 65.95-69.26 5.82-4.62 14.06-4.62 19.88 0 1.29 1.02 31.86 25.44 62.68 65 41.46 53.21 63.38 108.65 63.38 160.33z" />
                        </g>
                    </svg>
                </div>
                <div class="data">
                    <div class="data-label">-24-hour Cumulative rainfallr</div>
                    <div class="data-content">
                        <div class="st">0</div> mm
                    </div>
                </div>
            </div>

            <div class="tab-pn" style="background-color: #bc7fa9;">
                <div class="icon">
                    <svg id="Layer_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="m341.861 428.438c3.599.76 5.137 5.019 2.906 7.943-34.815 45.647-90.215 75.617-152.767 75.617-105.87 0-192-86.13-192-192 0-82.461 39.786-160.335 91.51-225 44.68-55.85 88.85-90.22 90.71-91.66 5.76-4.45 13.8-4.45 19.56 0 1.886 1.447 36.346 28.304 74.925 72.716 1.574 1.812 1.615 4.486.131 6.373-39.563 50.359-68.836 113.834-68.836 178.372 0 81.731 56.639 151.331 133.861 167.639z" />
                            <path
                                d="m512 260.799c0 80.295-66.512 144.29-145.27 138.88-70.704-4.903-126.73-65.333-126.73-138.88 0-56.381 25.792-110.788 60.11-156.07 21.689-28.516 48.496-55.46 65.95-69.26 5.82-4.62 14.06-4.62 19.88 0 1.29 1.02 31.86 25.44 62.68 65 41.46 53.21 63.38 108.65 63.38 160.33z" />
                        </g>
                    </svg>
                </div>
                <div class="data">
                    <div class="data-label">-1 Min Cumulative rainfall</div>
                    <div class="data-content">
                        <div class="st">0</div> mm
                    </div>
                </div>
            </div>



        </div>
        <div class="overview">
            <span>Today's curve</span>
            <div class="line"></div>
        </div>
        <!--here -->
        <div class="curve-data">
            <div class="container">
                <canvas id="myChart"></canvas>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script>
        var infos =
        {
            username: "<?php echo $username;?>",
            password: "<?php echo $password;?>"
        }

        var updateTime = document.querySelector(".update-time span")
        updateTime.innerHTML = new Date().toLocaleString();
        var URL_Login = "http://39.99.253.232:8005/login";
        var URL_Data_Fetch = "http://39.99.253.232:8005/data/<?php echo $station;?>";
        var objs = document.querySelectorAll(".st")
        function setter(token) {
            fetch(URL_Data_Fetch, {
                method: "GET",
                withCredentials: true,
                headers: {
                    'token': token,
                    'X-FP-API-KEY': 'iphone' //it can be iPhone or your any other attribute
                }
            })
                .then(response => response.json())
                .then(DataObject => {
                    var DateString = DataObject.dataTime;
                    //const regex = /-/gi;

                    //DateString = DateString.replaceAll(regex,"/")

                    updateTime.innerHTML = DateString;

                    objs[0].innerHTML = (DataObject.e1) / 10;
                    objs[1].innerHTML = (DataObject.e2) / 10;
                    objs[2].innerHTML = (DataObject.e3) / 10;
                    objs[3].innerHTML = (DataObject.e4) / 10;
                    objs[4].innerHTML = (DataObject.e5) / 10;
                    objs[5].innerHTML = (DataObject.e6) / 10;
                    objs[6].innerHTML = (DataObject.e7) / 10;
                    objs[7].innerHTML = (DataObject.e8) / 10;
                    objs[8].innerHTML = (DataObject.e9) / 10;
                })
                .catch(err => console.log(err))
        }

        //Login Setup && GET The Tocken 

        fetch(URL_Login, {
            method: "POST",
            body: JSON.stringify(infos)
        })
            .then(res => res.json())
            .then(data => {

                var token = data.token;



                setTimeout(() => {
                    const today = new Date()
                    const STARTDATE = [today.getFullYear(), `${today.getMonth() + 1}`.padStart(2, "0"), `${today.getDate()}`.padStart(2, "0")].join("-")
                    var after2day = new Date()
                    after2day.setDate(after2day.getDate() + 3)
                    const ENDDATE = [after2day.getFullYear(), `${after2day.getMonth() + 1}`.padStart(2, "0"), `${after2day.getDate()}`.padStart(2, "0")].join("-")
                    fetch(`http://39.99.253.232:8005/datas/<?php echo $station;?>?pageNum=${1}&pageSize=1000&startTime=${STARTDATE}&endTime=${ENDDATE}&interval=1`, {
                        method: "GET",
                        withCredentials: true,
                        headers: {
                            'token': token,
                            'X-FP-API-KEY': 'iphone'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            var labels = [];
                            var windspeedData = [];
                            var windDirectionData = [];
                            var AtmosphericTemperatureData = [];
                            var AtmosphericHumidityData = []
                            var AtmosphericPressure = []
                            var SolarRAdiationData = []
                            var PyranometerData = []
                            var tfhourCumulativerainfall = []
                            var OneMinCumulativerainfall = []
                            for (let i = 0; i < data.length; i++) {
                                const element = data[i];
                                labels.push(element.dataTime);
                                windspeedData.push(element.e1 / 10);
                                windDirectionData.push(element.e2 / 10);
                                AtmosphericTemperatureData.push(element.e3 / 10);
                                AtmosphericHumidityData.push(element.e4 / 10)
                                AtmosphericPressure.push(element.e5 / 10)
                                SolarRAdiationData.push(element.e6 / 10)
                                PyranometerData.push(element.e7 / 10)
                                tfhourCumulativerainfall.push(element.e8 / 10)
                                OneMinCumulativerainfall.push(element.e9 / 10)
                            }

                            var ctx = document.getElementById('myChart').getContext('2d');
                            var stackedLine = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: labels,
                                    datasets:
                                        [
                                            {
                                                label: "Pyranometer",
                                                borderColor: '#079333',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: PyranometerData

                                            }
                                            , {
                                                label: "-24-hour Cumulative rainfallr",
                                                borderColor: '#310e5e',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: tfhourCumulativerainfall

                                            }

                                            , {
                                                label: "-1 Min Cumulative rainfall",
                                                borderColor: '#bc7fa9',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: OneMinCumulativerainfall

                                            },
                                            {
                                                label: 'WindSpeed',
                                                borderColor: '#34c3ed',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: windspeedData,
                                                borderWidth: 1

                                            },

                                            {
                                                fill: true,
                                                label: "WindDirection",
                                                borderColor: '#ff9a00',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: windDirectionData

                                            }
                                            ,
                                            {
                                                label: "Atmospheric temperature",
                                                borderColor: '#910e14',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: AtmosphericTemperatureData

                                            },
                                            {
                                                label: "Atmospheric humidity",
                                                borderColor: '#1a12b7',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: AtmosphericHumidityData

                                            }
                                            , {
                                                label: "Solar radiation",
                                                borderColor: '#47ea77',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: SolarRAdiationData

                                            }
                                            , {
                                                label: "Atmospheric pressure",
                                                borderColor: '#7033fd',
                                                backgroundColor: 'rgba(0,0,0,0)',
                                                data: AtmosphericPressure

                                            }


                                        ]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            // stacked: true
                                        }]
                                    },
                                    labels: {
                                        FontSize: 5
                                    }
                                }
                            });
                        })

                }, 0)





                setTimeout(() => {
                    setter(token);
                    setInterval(() => {
                        setter(token)
                    }, 60000);

                }, 1000)

            })
            .catch(err => console.log(err))







    </script>
</body>

</html>