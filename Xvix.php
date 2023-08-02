<!DOCTYPE html> <html><head><title>Xvix Security Panel</title> <style>    label{font-size:30px; color: #222; text-align: center;}    button {background: #007bec;color: #fff;line-height: 40px;height: 40px;font-size: 18px;border: 0;}    button:hover {opacity: 0.7;cursor: pointer;} </style></head><body><h1 style="font-size:20px;color:gold">Maked By @Black_Nicola (Telegram)</h1><p></p> <h1 style="font-size:90px;color:black">Xvix</h1> <p></p> <form method="post" action="">  <label style="font-size:30px;color:black">Username:</label>  <input type="text" name="username"><br><br>  <label style="font-size:30px;color:black">Password:</label>  <input type="password" name="password"><br><br><br><p></p><p></p><p></p>  <p style="font-size:30px;color:blue;"> Security Option: </p>         <label>Anti Code Injection?</label>            <select name="b_inj">                <option value="yes">Yes</option>                <option value="no">no</option>        </select> <br><br>            <label>Block Robots?</label>            <select name="b_robo">                <option value="yes">Yes</option>                <option value="no">no</option>        </select> <br><br>            <label>Block To setting PHP Files?</label>            <select name="b_ini">                <option value="yes">Yes</option>                <option value="no">no</option>        </select> <br><br>            <label>Exncode Files And Fasted Your Site?</label>            <select name="b_encode">                <option value="yes">Yes</option>                <option value="no">no</option>        </select> <br><br>            <label>Block Search Security In Files?</label>            <select name="b_search">                <option value="yes">Yes</option>                <option value="no">no</option>        </select> <br><br>                <label>Block Access To .htaccess Files?</label>            <select name="b_htaccess">                <option value="yes">Yes</option>                <option value="no">no</option>        </select> <br><br>            <label>Block Access To .TXT Files?</label>        <select name="b_txt">            <option value="yes">Yes</option>            <option value="no">no</option>        </select> <br><br>            <label>Block Access To .LOG Files?</label>        <select name="b_log">            <option value="yes">Yes</option>            <option value="no">no</option>        </select> <br><br>            <label>Block Access To wp-config.php File?</label>        <select name="b_wp_config">            <option value="yes">Yes</option>            <option value="no">no</option></select> <br><br>            <label>Block Access To readme.html Files?</label>        <select name="b_readme">            <option value="yes">Yes</option>            <option value="no">no</option>        </select> <br><br>            <label>Block Access To licens.txt Files?</label>        <select name="b_licens"><option value="yes">Yes</option>            <option value="no">no</option>        </select> <br><br>                <label>Action Anti Xss?</label>    <select name="xss">            <option value="yes">Yes</option>            <option value="no">no</option>        </select> <br><br>  <button type="submit" name="submit">Save And Login</button></form>


<?php
 $USERNAME_M = "nicola";
 $PASSWORD_M = "nicola1234";






if (!empty($_SERVER['HTTP_CLIENT_IP'])) {$ip = $_SERVER['HTTP_CLIENT_IP'];} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];} else {$ip = $_SERVER['REMOTE_ADDR'];}
 if(isset($_POST['submit'])){$username = $_POST['username']; $password = $_POST['password'];
    if($username == $USERNAME_M && $password == $PASSWORD_M){echo "<script> alert('Hello Welcom To Xvix Security Panel  Your Ip:$ip'); </script>";         echo "<script> document.body.innerHTML = ''; </script>";echo "<p style='font-size:30px;color:green;'> Your Ip : $ip </p>";        echo "<p style='font-size:50px;color:blue;'> Ckeck Security: </p>";        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {            echo "<h2 style='color:green'>HTTPS : Actice/h2>";        } else {            echo "<h2 style='color:red'>HTTPS : Not Actice</h2>";        }        if (file_exists('.htaccess')) {            echo "<h2 style='color:green'>.htaccess Finded</h2>";        } else {            echo "<h2 style='color:red'>.htaccess NotFinded</h2>";            $w = fopen(".htaccess", "w+");            fwrite($w, "");            fclose($w);        }
        if (file_exists('wp-trackback.php')) {echo "<h2 style='color:red'>Finded Exploit  --> Please Delete Or Rename Or Black *wp-trackback.php*</h2>";} else {echo "<h2 style='color:green'>Exploit *wp-trackback.php* Not Find</h2>";}
        if (file_exists('xml-rpc.php')) {echo "<h2 style='color:red'>Finded Exploit  --> Please Delete Or Rename *xml-prc.php*</h2>";} else {echo "<h2 style='color:green'>Exploit *xml-prc.php* Not Find</h2>";}
        if (file_exists('wp-cron.php')) {echo "<h2 style='color:red'>Finded Exploit  --> Please Delete Or Rename *wp-cron.php*</h2>";} else {echo "<h2 style='color:green'>Exploit *wp-cron.php* Not Find</h2>";}
        if (file_exists('wp-config-sample.php')) {echo "<h2 style='color:red'>Finded Exploit  --> Please Hide *wp-config-sample.php*</h2>";} else {echo "<h2 style='color:green'>Exploit *wp-config-sample.php* Not Find</h2>";}
        if (file_exists('wp-config.php')) {echo "<h2 style='color:red'>Finded Exploit  --> Please Hide *wp-config.php*</h2>";} else {echo "<h2 style='color:green'>Exploit *wp-config.php* Not Find</h2>";}
        if (file_exists('wp-admin/index.php')) {echo "<h2 style='color:red'>Finded Exploit  --> Finded Admin Page Login *wp-admin* Please Install Plugin Hide Login Page Wordpress</h2>";} else {echo "<h2 style='color:green'>Exploit *wp-admin* Not Find</h2>";}
            $w = fopen(".htaccess", "w+");
            fwrite($w, "");
            fclose($w);
            $injection = $_POST['b_inj'];
            if ($injection === "yes"){
                $w = fopen(".htaccess", "a+");
                fwrite($w, "
RewriteEngine On
RewriteBase /
RewriteCond %{THE_REQUEST} !^[A-Z]{3,9}\ [a-zA-Z0-9\.\+_/\-\?\=\&]+\ HTTP/ [NC]
RewriteRule .* – [F,NS,L]");
                fclose($w);
            }
            if ($injection === "yes"){
                $injection = $_POST['b_robo'];
                $w = fopen(".htaccess", "a+");
                fwrite($w, "
RewriteEngine On
RewriteCond %{HTTP_USER_AGENT} ^BlackWidow [OR]
RewriteCond %{HTTP_USER_AGENT} ^Bot\ mailto:craftbot@yahoo.com [OR]
RewriteCond %{HTTP_USER_AGENT} ^ChinaClaw [OR]
RewriteCond %{HTTP_USER_AGENT} ^Custo [OR]
RewriteCond %{HTTP_USER_AGENT} ^DISCo [OR]
RewriteCond %{HTTP_USER_AGENT} ^Download\ Demon [OR]
RewriteCond %{HTTP_USER_AGENT} ^eCatch [OR]
RewriteCond %{HTTP_USER_AGENT} ^EirGrabber [OR]
RewriteCond %{HTTP_USER_AGENT} ^EmailSiphon [OR]
RewriteCond %{HTTP_USER_AGENT} ^EmailWolf [OR]
RewriteCond %{HTTP_USER_AGENT} ^Express\ WebPictures [OR]
RewriteCond %{HTTP_USER_AGENT} ^ExtractorPro [OR]
RewriteCond %{HTTP_USER_AGENT} ^EyeNetIE [OR]
RewriteCond %{HTTP_USER_AGENT} ^FlashGet [OR]
RewriteCond %{HTTP_USER_AGENT} ^GetRight [OR]
RewriteCond %{HTTP_USER_AGENT} ^GetWeb! [OR]
RewriteCond %{HTTP_USER_AGENT} ^Go!Zilla [OR]
RewriteCond %{HTTP_USER_AGENT} ^Go-Ahead-Got-It [OR]
RewriteCond %{HTTP_USER_AGENT} ^GrabNet [OR]
RewriteCond %{HTTP_USER_AGENT} ^Grafula [OR]
RewriteCond %{HTTP_USER_AGENT} ^HMView [OR]
RewriteCond %{HTTP_USER_AGENT} HTTrack [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^Image\ Stripper [OR]
RewriteCond %{HTTP_USER_AGENT} ^Image\ Sucker [OR]
RewriteCond %{HTTP_USER_AGENT} Indy\ Library [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^InterGET [OR]
RewriteCond %{HTTP_USER_AGENT} ^Internet\ Ninja [OR]
RewriteCond %{HTTP_USER_AGENT} ^JetCar [OR]
RewriteCond %{HTTP_USER_AGENT} ^JOC\ Web\ Spider [OR]
RewriteCond %{HTTP_USER_AGENT} ^larbin [OR]
RewriteCond %{HTTP_USER_AGENT} ^LeechFTP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Mass\ Downloader [OR]
RewriteCond %{HTTP_USER_AGENT} ^MIDown\ tool [OR]
RewriteCond %{HTTP_USER_AGENT} ^Mister\ PiX [OR]
RewriteCond %{HTTP_USER_AGENT} ^Navroad [OR]
RewriteCond %{HTTP_USER_AGENT} ^NearSite [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetAnts [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetSpider [OR]
RewriteCond %{HTTP_USER_AGENT} ^Net\ Vampire [OR]
RewriteCond %{HTTP_USER_AGENT} ^NetZIP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Octopus [OR]
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Explorer [OR]
RewriteCond %{HTTP_USER_AGENT} ^Offline\ Navigator [OR]
RewriteCond %{HTTP_USER_AGENT} ^PageGrabber [OR]
RewriteCond %{HTTP_USER_AGENT} ^Papa\ Foto [OR]
RewriteCond %{HTTP_USER_AGENT} ^pavuk [OR]
RewriteCond %{HTTP_USER_AGENT} ^pcBrowser [OR]
RewriteCond %{HTTP_USER_AGENT} ^RealDownload [OR]
RewriteCond %{HTTP_USER_AGENT} ^ReGet [OR]
RewriteCond %{HTTP_USER_AGENT} ^SiteSnagger [OR]
RewriteCond %{HTTP_USER_AGENT} ^SmartDownload [OR]
RewriteCond %{HTTP_USER_AGENT} ^SuperBot [OR]
RewriteCond %{HTTP_USER_AGENT} ^SuperHTTP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Surfbot [OR]
RewriteCond %{HTTP_USER_AGENT} ^tAkeOut [OR]
RewriteCond %{HTTP_USER_AGENT} ^Teleport\ Pro [OR]
RewriteCond %{HTTP_USER_AGENT} ^VoidEYE [OR]
RewriteCond %{HTTP_USER_AGENT} ^Web\ Image\ Collector [OR]
RewriteCond %{HTTP_USER_AGENT} ^Web\ Sucker [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebAuto [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebCopier [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebFetch [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebGo\ IS [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebLeacher [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebReaper [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebSauger [OR]
RewriteCond %{HTTP_USER_AGENT} ^Website\ eXtractor [OR]
RewriteCond %{HTTP_USER_AGENT} ^Website\ Quester [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebStripper [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebWhacker [OR]
RewriteCond %{HTTP_USER_AGENT} ^WebZIP [OR]
RewriteCond %{HTTP_USER_AGENT} ^Wget [OR]
RewriteCond %{HTTP_USER_AGENT} ^Widow [OR]
RewriteCond %{HTTP_USER_AGENT} ^WWWOFFLE [OR]
RewriteCond %{HTTP_USER_AGENT} ^Xaldon\ WebSpider [OR]
RewriteCond %{HTTP_USER_AGENT} ^Zeus
RewriteRule ^.* – [F,L]");
            fclose($w);
            }
            $injection = $_POST['b_ini'];
            if ($injection === "yes"){
                $w = fopen(".htaccess", "a+");
                fwrite($w, '
<FilesMatch "^php5?\.(ini|cgi)$">
    Order Deny,Allow
    Deny from All
    Allow from env=REDIRECT_STATUS
</FilesMatch>
<files “php.ini”>
    order allow,deny
    deny from all
</files>
<files “php.cgi”>
    order allow,deny
    deny from all
</files>
');
                fclose($w);
            }
            $injection = $_POST['b_encode'];
            if ($injection === "yes"){
                $w = fopen(".htaccess", "a+");
                fwrite($w, '
<IfModule mod_deflate.c>
    # Compress HTML, CSS, JavaScript, Text, XML and fonts
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/vnd.ms-fontobject
    AddOutputFilterByType DEFLATE application/x-font
    AddOutputFilterByType DEFLATE application/x-font-opentype
    AddOutputFilterByType DEFLATE application/x-font-otf
    AddOutputFilterByType DEFLATE application/x-font-truetype
    AddOutputFilterByType DEFLATE application/x-font-ttf
    AddOutputFilterByType DEFLATE application/x-javascript
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE font/opentype
    AddOutputFilterByType DEFLATE font/otf
    AddOutputFilterByType DEFLATE font/ttf
    AddOutputFilterByType DEFLATE image/svg+xml
    AddOutputFilterByType DEFLATE image/x-icon
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/javascript
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/xml
    # Remove browser bugs (only needed for really old browsers)
    BrowserMatch ^Mozilla/4 gzip-only-text/html
    BrowserMatch ^Mozilla/4\.0[678] no-gzip
    BrowserMatch \bMSIE !no-gzip !gzip-only-text/html
    Header append Vary User-Agent
</IfModule>
');
                fclose($w);
            }
            $injection = $_POST['b_search'];
            if ($injection === "yes"){
                $w = fopen(".htaccess", "a+");
                fwrite($w, '
Options All -Indexes
');
                fclose($w);
            }
            $injection = $_POST['b_htaccess'];
            if ($injection === "yes"){
                $w = fopen(".htaccess", "a+");
                fwrite($w, '
<files “.htaccess”>
    order allow,deny
    deny from all
</files>
');
                fclose($w);
            }
            $injection = $_POST['b_txt'];
            if ($injection === "yes"){
                $w = fopen(".htaccess", "a+");
                fwrite($w, '
<Files *.txt>
    Order Deny,Allow
    Deny from All
</Files>
');
                fclose($w);
            }
            $injection = $_POST['b_log'];
            if ($injection === "yes"){
                $w = fopen(".htaccess", "a+");
                fwrite($w, '
<Files *.log>
    Order Deny,Allow
    Deny from All
</Files>
');
                fclose($w);
            }
            $injection = $_POST['b_wp_config'];
            if ($injection === "yes"){
                $w = fopen(".htaccess", "a+");
                fwrite($w, '
<files wp-config.php>
    order allow,deny
    deny from all
</files>
');
                fclose($w);
            }
           $injection = $_POST['b_readme'];
           if ($injection === "yes"){
               $w = fopen(".htaccess", "a+");
               fwrite($w, '
<files readme.html>
   order allow,deny
   deny from all
</files>
');
               fclose($w);
           }
           $injection = $_POST['b_licens'];
           if ($injection === "yes"){
               $w = fopen(".htaccess", "a+");
               fwrite($w, '
<files licens.txt>
   order allow,deny
   deny from all
</files>
');
               fclose($w);
           }
           $injection = $_POST['xss'];
           if ($injection === "yes"){
               $w = fopen(".htaccess", "a+");
                fwrite($w, '
<IfModule mod_rewrite.c>
    RewriteCond %{QUERY_STRING} (\|%3E) [NC,OR]
    RewriteCond %{QUERY_STRING} GLOBALS(=|\[|\%[0-9A-Z]{0,2}) [OR]
    RewriteCond %{QUERY_STRING} _REQUEST(=|\[|\%[0-9A-Z]{0,2})
    RewriteRule .* index.php [F,L]
</IfModule>
');
               fclose($w);
           }
           $injection = $_POST['b_licens'];
           if ($injection === "yes"){
               $w = fopen(".htaccess", "a+");
               fwrite($w, '
<files licens.txt>
   order allow,deny
   deny from all
</files>
');
               fclose($w);
           }
        echo "<script> alert('Saved!') </script>";
        echo "<br><p></p><p></p><p></p>  <p style='font-size:50px;color:blue;'> Start Security World: </p>";
        $Tx = "<h2 style='color:green'> Removed Exploit New...</h2>";
        unlink("readme.html");
        echo $Tx;
        unlink("licens.txt");
        echo $Tx;
        unlink("log.log");
        echo $Tx;
        unlink("log.txt");
        echo $Tx;
        unlink("xml-prc.php");
        echo $Tx;
        unlink("xmlprc.php");
        echo $Tx;
        }else{ echo"<script>alert('Invalid username or password!');</script>"; }  
    } 
 ?>
</body>
</html>
