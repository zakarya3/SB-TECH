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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="../js/translate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
    <title>search</title>
    <style>
    .ampmselect{
        display: none;
    }
    </style>
</head>

<body>
    <div class="left-side">

        <div class="logo">

            <img src="logo2.png" alt="">

        </div>

        <div class="navs">

            <div class="nav-link ">
                <a href="overview.php">
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

            <div class="nav-link active">
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

        <div class="search-area">
            <div class="search-area-container">
                <input type="text" name="daterange" id="search-input" value="" />
                <button id="search">Search</button>
                <button id="export" >Export</button>
            </div>
        </div>


        <div class="data-area">
            <table id="data-content">
                <thead>
                    <tr class="">
                        <th>Date <br> </th>
                        <th>Wind speed <br> (m/s) </th>
                        <th> Wind direction <br> (°) </th>
                        <th> Atmospheric temperature <br> (℃) </th>
                        <th> Atmospheric humidity <br>(%RH) </th>
                        <th> Atmospheric pressure <br>(hPa) </th>
                        <th> Solar Radiation <br>(W/m2) </th>
                        <th> Pyranometer <br>(W/m2) </th>
                        <th> 24hour Cumulative rainfall<br> (mm) </th>
                        <th> 1 Min Cumulative rainfall<br> (mm) </th>
                    </tr>

                </thead>
                <tbody></tbody>

            </table>
            <div class="pagination">
                <div id="container-pagination"></div>
            </div>
            <table id="data-content-export" style="display: none;">
                <thead>
                    <tr class="">
                        <th>Date <br> </th>
                        <th>Wind speed <br> (m/s) </th>
                        <th> Wind direction <br> (°) </th>
                        <th> Atmospheric temperature <br> (℃) </th>
                        <th> Atmospheric humidity <br>(%RH) </th>
                        <th> Atmospheric pressure <br>(hPa) </th>
                        <th> Solar Radiation <br>(W/m2) </th>
                        <th> Pyranometer <br>(W/m2) </th>
                        <th> 24hour Cumulative rainfall<br> (mm) </th>
                        <th> 1 Min Cumulative rainfall<br> (mm) </th>
                    </tr>

                </thead>
                <tbody></tbody>

            </table>
        </div>

    </div>
    <script>
        function exportTableToExcel(tableID,filename) {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g,'%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'excel_data.xls';

            // Create download link element
            downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff',tableHTML],{
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob,filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }
        }
        function formatDate(date) {
            var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2)
                month = '0' + month;
            if (day.length < 2)
                day = '0' + day;

            return [month,day,year].join('/');
        }
    </script>
    <script>
         var infos =
            {
                username: "<?php echo $username;?>",
                password: "<?php echo $password;?>"
            }
            var URL_Login = "http://39.99.253.232:8005/login";
            var URL_Data_Fetch = "http://39.99.253.232:8005/data/<?php echo $station;?>";

        $(function () {

          $('input[name="daterange"]').daterangepicker({
          
                opens: 'left',
                timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
   
    locale: {
      format: 'M/DD hh:mm A'
    } 
            },function (start,end,label) {
                document.getElementById("search").onclick = () => {
                    fetch(URL_Login,{
                        method: "POST",
                        body: JSON.stringify(infos)
                    })
                        .then(res => res.json())
                        .then(data => {
                            var token = data.token;
                           GETDATA(moment(start).add(7,'hours').format("YYYY-MM-DD hh:mm:ss"),moment(end).add(7,'hours').format("YYYY-MM-DD hh:mm:ss"),token)
                        })
                        .catch(err => console.log(err))
                }
            });

        });
        
        
   


        
       //
        const today = new Date()
        const STARTDATE = [today.getFullYear(),`${today.getMonth() + 1}`.padStart(2,"0"),`${today.getDate()}`.padStart(2,"0"),today.getHours()].join("-")
        var after2day = new Date();
        
        after2day.setDate(after2day.getDate() + 3);
        const ENDDATE = [after2day.getFullYear(),`${after2day.getMonth() + 1}`.padStart(2,"0"),`${after2day.getDate()}`.padStart(2,"0")].join("-")
       
        var table = document.getElementById("data-content")

        var searchInput = document.getElementById("search-input");
        setTimeout(() => {
           searchInput.value = "Type Date Here"
        },1000)

         
        


        function GETDATA(STARTDATE,ENDDATE,TOKEN) {
            setTimeout(() => {
                fetch(`http://39.99.253.232:8005/datas/<?php echo $station;?>/count?startTime=${STARTDATE}&endTime=${ENDDATE}&interval=1`,{
                    method: "GET",
                    withCredentials: true,
                    headers: {
                        'token': TOKEN,
                        'X-FP-API-KEY': 'iphone'
                    }
                })
                    .then(response => response.text())
                    .then(data => {
                        $('#container-pagination').pagination({
                            dataSource: 'https://api.flickr.com/services/feeds/photos_public.gne?tags=cat&tagmode=any&format=json&jsoncallback=?',
                            locator: 'items',
                            totalNumber: data,
                            pageSize: 30,

                            callback: function (data,pagination) {
                                fetch(`http://39.99.253.232:8005/datas/<?php echo $station;?>?pageNum=${pagination.pageNumber}&pageSize=30&startTime=${STARTDATE}&endTime=${ENDDATE}&interval=1`,{
                                    method: "GET",
                                    withCredentials: true,
                                    headers: {
                                        'token': TOKEN,
                                        'X-FP-API-KEY': 'iphone'
                                    }
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        console.log(data);
                                        $("#data-content tbody").empty();

                                        for (let i = 0; i < data.length; i++) {
                                            const element = data[i];

                                            $("#data-content tbody").append(
                                                `
                                    <tr class=''>
                                        <td>${moment(element.dataTime).subtract(7,'hours').format("LLLL")}</td>
                                        <td>${element.e1 / 10}</td>
                                        <td>${element.e2 / 10}</td>
                                        <td>${element.e3 / 10} </td>
                                        <td>${element.e4 / 10}</td>
                                        <td>${element.e5 / 10}</td>
                                        <td>${element.e6 / 10}</td>
                                        <td>${element.e7 / 10}</td>
                                        <td>${element.e8 / 10}</td>
                                        <td>${element.e9 / 10}</td>

                                    </tr>
                                     `
                                            );


                                        }
                                    })
                            }
                        })



                    })
            },10)
            setTimeout(() => {
                document.getElementById("export").onclick = () => {
                    fetch(`http://39.99.253.232:8005/datas/20011506?pageNum=1&pageSize=100000&startTime=${STARTDATE}&endTime=${ENDDATE}&interval=1`,{
                        method: "GET",
                        headers: {
                            'token': TOKEN,
                        }

                    })
                    .then(res => res.json())
                    .then(resdata => {
                        $("#data-content-export tbody").empty();
                        for (let i = 0; i < resdata.length; i++) {
                            const element = resdata[i];

                            $("#data-content-export tbody").append(
                                `
                                    <tr class=''>
                                        <td>${moment(element.dataTime).subtract(7,'hours').format("YYYY-MM-DD hh:mm:ss")}</td>
                                        <td>${element.e1 / 10}</td>
                                        <td>${element.e2 / 10}</td>
                                        <td>${element.e3 / 10} </td>
                                        <td>${element.e4 / 10}</td>
                                        <td>${element.e5 / 10}</td>
                                        <td>${element.e6 / 10}</td>
                                        <td>${element.e7 / 10}</td>
                                        <td>${element.e8 / 10}</td>
                                        <td>${element.e9 / 10}</td>
                                    </tr>

                                `
                            );


                        }

                        setTimeout(()=>{
                          exportTableToExcel("data-content-export",`DATA-${STARTDATE}/${ENDDATE}`)
                          
                        },2000)
                    })
                    .catch(err => console.log(err))
                }
            },1000)
        }



        fetch(URL_Login,{
            method: "POST",
            body: JSON.stringify(infos)
        })
            .then(res => res.json())
            .then(data => {
                var token = data.token;
                GETDATA(STARTDATE,ENDDATE,token)

                
            })
            .catch(err => console.log(err))

         
    </script>
</body>

</html>