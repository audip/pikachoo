<?php
ob_start();
session_start();
require "samkush.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="content-language" content="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="gM2QaflSX7Gc4v5R8AHXNNkCn6rUa9FwdV_8TtnF9kY">
    <link rel="shortcut icon" href="http://pikachoo.in/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css1/style1.css">

    <title>Pikachoo | Payment</title>
</head>

<body>
    <?php
    $a=$_GET['value'];
    $cid=$_GET['cid'];
    if(!isset($_SESSION['s_var']))
    {
        $_SESSION['cid']=$cid;
        //echo $_SESSION['cid'];
        echo '<br>';
        echo 'You are being redirected to login page';
        header("Refresh:1;login/index.php");
    }
    else if($_SESSION['s_var']=='1')
        {
            if($a=='confirm')
            {
                $uid=$_SESSION['uid'];
                $str="select * from samkush_login where userid='$uid'";
                $result=mysqli_query($con,$str);
                $row=mysqli_fetch_array($result);

                $str1="select * from samkush_profile where userid='$uid'";
                $result1=mysqli_query($con,$str1);
                $row1=mysqli_fetch_array($result1);
                echo '<center>
                        <img src="img/cart_logo.jpg" alt="Pikachoo-Payment"><br><br><br>
                        <table border="0" width="500">
                            <tr align="center">
                                <td bgcolor="grey">Shipping Info</td>
                                <td>|&raquo;|</td>
                                <td>Shipping Address</td>
                                <td>|&raquo;|</td>
                                <td>Order Summary </td>
                                <td>|&raquo;|</td>
                                <td>Payment</td>
                            </tr>
                        </table>
                    <br><br>

                <table border="0" width="400">
                    <th colspan="4">Shipping Info</th>
                    <form action="payment3.php" method="POST">
                    <tr>
                        <td>Name <sup>*</sup>&nbsp;&nbsp;</td>
                        <td><input type="text" name="fname" placeholder="Full name" required="required" size="40" value="'.$row1[1].'"></td>
                    </tr>
                    <tr>
                        <td>Email ID <sup>*</sup></td>
                        <td colspan="3"><input type="email" name="email" required="required" value="'.$row[2].'" size="40" placeholder="Please enter your Email Id"></td>
                    </tr>
                    <tr>
                        <td>Company</td>
                        <td colspan="3"><input type="company" name="company" placeholder="company" size="40" value="'.$row1[2].'"></td>
                    </tr>
                    <tr>
                        <td>Address <sup>*</sup></td>
                        <td><textarea name="address" rows="4" cols="32" required="required" value="'.$row1[3].'"></textarea></td>
                    </tr>
                    <tr>
                        <td>Landmark <sup>*</sup></td>
                        <td colspan="3"><input type="text" name="landmark" size="40" value="'.$row1[4].'"></td>
                    </tr>
                    <tr>
                        <td colspan="1">City <sup>*</sup></td>
                        <td><input type="text" name="city" size="40" value="Kolkata" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td>State <sup>*</sup></td>
                        <td><input type="text" name="state" value="West Bengal" readonly="readonly" required="required" size="40"></td>
                    </tr>
                    <tr>
                        <td>Pincode <sup>*</sup></td>
                        <td colspan="3"><input type="pincode" name="pincode" size="40" value="'.$row1[7].'" required="required"></td>
                    </tr>
                    <tr>
                        <td>Phone <sup>*</sup></td>
                        <td colspan="3"><input type="number" name="phone" min="1111111111" max="9999999999" size="15" maxlength="10" value="'.$row1[8].'" required="required"></td>
                    </tr>';
                /**<tr>
                        <td>DOB <sup>*</sup></td>
                        <td width="300"><select name="month" required>
                                <option value="Jan">January</option>
                                <option value="Feb">February</option>
                                <option value="Mar">March</option>
                                <option value="Apr">April</option>
                                <option value="May">May</option>
                                <option value="Jun">June</option>
                                <option value="Jul">July</option>
                                <option value="Aug">August</option>
                                <option value="Sep">September</option>
                                <option value="Oct">October</option>
                                <option value="Nov">November</option>
                                <option value="Dec">December</option>
                            </select>

                        <select name="date">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">23</option>
                                <option value="24">24</option>
                                <option value="25">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="year">
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                            </select>
                        </td>
                    </tr>**/
                echo '<tr>
                        <td>Gender <sup>*</sup></td>
                        <td><select name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="continue" value="Continue" class="button"></td>
                    </tr>
                    </form>

                    </table>';



            }
        }
    else
        header("location:index.php");

    ?><script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-47903223-1', 'pikachoo.in');
    ga('send', 'pageview');

    </script><?php
    ob_flush();
    ?>
</body>
</html>
