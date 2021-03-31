<?php
session_start();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
              if (isset($_POST['38'])) {
                header("Location:/sub_details.php");
                $_SESSION["card_n"] = "PRO"; // This is the name of the subscription.
                $_SESSION["card_v"] = 38; // This is the proce of subscription.
                $_SESSION["card_d"] = 12; // This is a duration of subscription(in months).

                $price = $_SESSION["card_v"];
                $tax = ($price * 4)/100;
                $_SESSION["card_tax"] = $tax;

                $total = $price + $tax;
                $_SESSION["card_total"] = $total;
                
              } elseif(isset($_POST['56'])) {
                header("Location:/sub_details.php");
                $_SESSION["card_n"] = "BUSINESS"; // this is the name of the subscription.
                $_SESSION["card_v"] = 56; // this is the proce of subscription.
                $_SESSION["card_d"] = 24; // is a duration of subscription in months.

                $price = $_SESSION["card_v"];
                $tax = ($price * 4)/100;
                $_SESSION["card_tax"] = $tax;
                $total = $price + $tax;
                $_SESSION["card_total"] = $total;

              } elseif(isset($_POST['72'])) {
                header("Location:/sub_details.php");
                $_SESSION["card_n"] = "SPECIAL"; // this is the name of the subscription.
                $_SESSION["card_v"] = 72; // this is the proce of subscription.
                $_SESSION["card_d"] = 36; // is a duration of subscription in months.
                
                $price = $_SESSION["card_v"];
                $tax = ($price * 4)/100;
                $_SESSION["card_tax"] = $tax;
                $total = $price + $tax;
                $_SESSION["card_total"] = $total;

              } elseif(isset($_POST['free'])) {
                header("Location:/sub_details.php");
                $_SESSION["card_n"] = "start"; // this is the name of the subscription.
                $_SESSION["card_v"] = 0; // this is the proce of subscription.
                $_SESSION["card_d"] = 3; // is a duration of subscription in months.

                $_SESSION["card_tax"] = 0;
                $_SESSION["card_total"] = 0;
              }
            }
?>