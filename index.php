<?php
$dbSevername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "readings";

$conn = mysqli_connect($dbSevername, $dbUsername, $dbPassword, $dbName );

$sql = 'SELECT *FROM data';
$rows = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard FloMo | Flood Monitoring System</title>
    <link rel="icon" href="images/logo.ico" type="image/icon type">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script>
        function logout()
        {
            window.location.href = "start.html";
        }
    </script>
</head>
<body>
    <div class="container" onload="table();">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./images/logo.png" alt="">
                    <h2>FLO<span class="blue">MO</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div> 
            </div>

            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#hisTi">
                    <span class="material-icons-sharp">history</span>
                    <h3>History</h3>
                </a>
                </a>
            </div>
        </aside>
        <!---END OF ASIDE--->
        <main>
           <h1>Dashboard</h1>

           <div class="insights">
            <div class="location">
                <span class="material-icons-sharp">map</span>
                <div class="middle">
                    <div class="left">
                        <h3>Current Location</h3>
                        <h1>Brgy. Alangilan, Batangas City</h1>
                        <figure>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d242.18072953840118!2d121.0682267!3d13.7854033!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e502ae296cbb93c!2zMTPCsDQ3JzA3LjUiTiAxMjHCsDA0JzA1LjQiRQ!5e0!3m2!1sen!2sph!4v1669791973782!5m2!1sen!2sph"
                                width="400" height="300" loading="lazy"></iframe>
                        </figure>
                    </div>
                </div>
                <small class="text-muted">Sitio Santolan - 13°47'07.5"N 121°04'05.4"E</small>
            </div>
            <!---END OF LOCATION--->
                <div class="humidity">
                    <span class="material-icons-sharp">schedule</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Date and Time</h3>
                            <h1 id="date-time"><</h1>
                            <h1 id="date"></h1>
                        </div>
                    </div>
                    <small class="text-muted">Realtime</small><br><br>
                    <span class="material-icons-sharp">thunderstorm</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Humidity</h3>
                            <div id = "weather-results"></div>
                            <script>function renderWeather(weather){
                                console.log(weather);
                                var resultContainer = document.querySelector("#weather-results");
                                //create h2 for name
                                //create p for humidity, wind, description. temp

                                var humidity = document.createElement("h2");
                                humidity.textContent = + weather.main.humidity + "%";
                                resultContainer.append(humidity);

                                details.append("")
                            }

                            //Fetch weather data for city
                            function fetchWeather(query){
                                var url = "https://api.openweathermap.org/data/2.5/weather?lat=13.785417&lon=121.068167&appid=b180d79a228fc60df187c61594ec5463";

                                fetch(url)
                                .then((response) => response.json())
                                .then((data) => renderWeather(data));
                            }

                            fetchWeather();
                            </script>
                        </div>
                    </div>
                    <small class="text-muted">Realtime</small>
                </div>
                <!---END OF HUMIDITY--->
                <div class="monitor">
                <span class="material-icons-sharp">water_drop</span>
                <h2>Water Level</h2>
                <div class="cup" id="cup">
                    <div class="waterlevel">
                    </div>
                    <div class="centimeters" id="centi">
                    
                    </div>
                </div>  
                <p class="text" id="text">Water level at the location</p>
            
                <script src="WatLev.js"></script>
                <script type="text/javascript" src="WatLev.js"></script>
            </div>
                <!---END OF TIME--->
           </div>
           <script type="text/javascript" src="history.js"></script>
           <h2 class="hisTi" id="hisTi">History of Water Levels</h2>
           
           <div class="history" id = "table"></div>
           
        </main>
        <!---END OF MAIN--->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
            </div>
            <!---END OF TOP--->
            <div class="information">
                <div class="middle">
                    <div class="left">
                        <br><br>
                        <h1>Hotline Number</h1><br>
                        <h3>Mayor's Action Center: 723-1511 / 723-2930 <br><br>
                            BFP Batangas City Alangilan Substation: 702-1973 <br><br>
                            PNP BAtangas City (Office): 723-2030 <br><br>
                            Batangas Medical Center: 740-8307 <br><br>
                            St. Patrick's Hospital & Medical Center 723-1605 <br><br>
                            Jesus of Nazareth Hospital: 723-4144 <br><br>
                            Golden Gate General Hospital: 341-3112 <br><br>
                            City Disaster Risk Reduction and Management Office: 702-3902 / 09228010776 <br><br>

                        </h3>
                    </div>
                </div>
                <small class="text-muted">Please call in case of emergency!</small>
            </div>
            
        </div>
    </div>


    <script src="./index.js"></script>
    <script>
    let time = document.getElementById("date-time");

    setInterval(()=>{
        let d = new Date();
        time.innerHTML = d.toLocaleTimeString();
    },1000)

    </script>

    <script>
        n =  new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
    </script>
    

</body>
</html>
