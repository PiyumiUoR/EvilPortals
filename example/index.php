<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<HTML>
    <HEAD>
        <title>Security Notice by OUSPG</title>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin: 0;
                padding: 0;
                background-color: #f8f8f8;
            }
            h1 {
                color: #e63946;
            }
            p {
                color: #333;
            }
            a {
                color: #007bff;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </HEAD>

    <BODY>
        <div>
            <h1>Warning! You have been hacked!!!</h1>
            <h3>You have connected to a potentially malicious network.</h3>
            <p>This is an Evil Portal that is being configured to run penetration testing in university network.</>
            <p>The task is conducted as a deliverable of a project under the course "Cyber Security Project 2024". The purpose of this project is to educate users on proper use of public networks. </p>
            <p>The SSID you are connected to is <?=getClientSSID($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your host name is <?=getClientHostName($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your MAC Address is <?=getClientMac($_SERVER['REMOTE_ADDR']);?></p>
            <p>Your internal IP address is <?=$_SERVER['REMOTE_ADDR'];?></p>

            <p>To stay safe online, please review the following guidelines:</p>
            <ul style="text-align: left; display: inline-block;">
                <li><a href="https://www.kyberturvallisuuskeskus.fi/en/ncsc-news/instructions-and-guides/instructions-and-manuals-private-individuals" target="_blank">Guidelines by Traficom</a></li>
                <li><a href="https://www.enisa.europa.eu/press-office/cybersecurity-material" target="_blank">Cybersecurity Material by ENISA</a></li>
            </ul>

            <p>Disconnect from this network immediately and use a secure, trusted connection.</p>
            <form method="POST" action="/captiveportal/index.php">
                <input type="hidden" name="target" value="<?=$destination?>">
                <button type="submit" style="background-color: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer;">
                    Acknowledge and Disconnect
                </button>
            </form>

        </div>

    </BODY>

</HTML>