<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once './config/db_config.php';
    $con = new PDO('sqlite:./db/database.db');
    include 'app/logics.php';
    ?>
    <div class="demo-page">
        <div class="demo-page-navigation">
          <nav>
            <ul>
              <li>
                <a href="#configure">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                    <polygon points="12 2 2 7 12 12 22 7 12 2" />
                    <polyline points="2 17 12 22 22 17" />
                    <polyline points="2 12 12 17 22 12" />
                  </svg>
                  Configure</a>
              </li>
              <li>
                <a href="#sessions">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server">
                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2" />
                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2" />
                        <line x1="6" y1="6" x2="6.01" y2="6" />
                        <line x1="6" y1="18" x2="6.01" y2="18" />
                      </svg>
                  Sessions</a>
              </li>
              <li>
                <a href="#quickConnect">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                    <polyline points="9 11 12 14 22 4" />
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                  </svg>
                  Quick Connect</a>
              </li>
              <li>
                <a href="#contribute">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                  </svg>
                  Contribute</a>
              </li>
            </ul>
          </nav>
        </div>
        <main class="demo-page-content">
          <section>
            <div class="href-target" id="intro"></div>
            <h1 class="package-name">Welcome to Mysql Admin Client</h1>
            <p>
                PHPMyAdmin Desktop Connector is a user-friendly desktop application designed to facilitate seamless access to phpMyAdmin without the need for a web browser. This application allows users to connect to their phpMyAdmin panels, whether hosted locally or on the cloud, with ease and efficiency. Key features include:
            </p>
            <ul>
              <li><strong>Localhost Connection:</strong> Quickly connect to your local phpMyAdmin instance.</li>
              <li><strong>Saved Sessions:</strong> Manage and connect to multiple saved phpMyAdmin sessions effortlessly.</li>
              <li><strong>Settings Configuration:</strong> Customize and save settings for different phpMyAdmin instances, including specifying the localhost URL.</li>
            </ul>
          </section>
      

      
          <section>
            <div class="href-target" id="configure"></div>
            <h1>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                <polygon points="12 2 2 7 12 12 22 7 12 2" />
                <polyline points="2 17 12 22 22 17" />
                <polyline points="2 12 12 17 22 12" />
              </svg>
              Configure localhost 
            </h1>
            <p>
                Configure your localhost URL for connection
            </p>
            <form action="./app/controller.php" method="post">    
                <div class="nice-form-group">
                    <label>Current URL: <?php 
                        $currentUrl = getLocalUrl();
                        echo $currentUrl;
                    ?> </label>
                    <input type="submit" class="toggle-code" name="l-connect" value="Connect">
                    <br> 
                    <br> 
                    <label>Change URL</label>
                    <input type="text" name="local-url" placeholder="<?php 
                    $currentUrl = getLocalUrl();
                    echo $currentUrl;
                     ?>" /><br />
                    <input type="submit" class="toggle-code" value="Save & Connect">
                </div>
            </form>
          </section>
      
          
          
          
          <section>
              <div class="href-target" id="sessions"></div>
              <h1>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server">
                <rect x="2" y="2" width="20" height="8" rx="2" ry="2" />
                <rect x="2" y="14" width="20" height="8" rx="2" ry="2" />
                <line x1="6" y1="6" x2="6.01" y2="6" />
                <line x1="6" y1="18" x2="6.01" y2="18" />
              </svg>
              Sessions
            </h1>
            
            
            
            <form action="./app/controller.php" method="post">
                <div class="nice-form-group">
                    <label>Select session</label>
                    <select name="session_name">
                        <option>Please select a value</option>
                        <?php
                            $sessionNames = getSessionNames();
                            foreach ($sessionNames as $name) {
                                echo "<option value=\"$name\">$name</option>";
                        }
                        ?>
                    </select><br>
                    <input type="submit" class="toggle-code" value="Connect">
                </div>
            </form>
            
            
            
        </section>
        <section>
          <div class="href-target" id="quickConnect"></div>
          <h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
              <polygon points="12 2 2 7 12 12 22 7 12 2" />
              <polyline points="2 17 12 22 22 17" />
              <polyline points="2 12 12 17 22 12" />
            </svg>
            Quick Connect 
          </h1>
          <p>
              Connect to server for one time.
          </p>
          <form action="./app/controller.php" method="post">    
              <div class="nice-form-group">
                  <label>Name</label>
                  <input type="text" name="s-name" placeholder="Name of the session" /><br>
                  <br>
                  <label>Server URL</label>
                  <input type="text" name="s-url" placeholder="Enter server URL here" /><br>
                  <input type="submit" class="toggle-code" name="q-connect" value="Connect">
                  <input type="submit" class="toggle-code" name="q-connect-and-save" value="Save">
              </div>
          </form>
        </section>
    
      
          <section>
            <div class="href-target" id="contribute"></div>
            <h1>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
              </svg>
              Contribute
            </h1>
            <p>
              If you encounter a bug on any device or have suggestions for
              improvement, don't hesitate to open a bug report or pull request.
            </p>
      
            <a href="https://github.com/SathiraSriSathsara?tab=repositories" class="to-repo" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link">
                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                <polyline points="15 3 21 3 21 9" />
                <line x1="10" y1="14" x2="21" y2="3" />
              </svg>
              Check out the repo
            </a>
          </section>
      
          <footer>Made with ♥ by Sathira Sri Sathara</footer>
        </main>
      </div>
</body>
</html>