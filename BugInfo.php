<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 18/03/2016
 * Time: 3:57 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Info</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
<img class="img1" src="images/%20logo.png ">
<div class="links">
    <a href="index.html">Home Page</a> &nbsp;&nbsp;
    <a href="login.html">Login</a> &nbsp;&nbsp;
    <a href="signup.html">Signup</a>
</div>
<nav class = "format">
    <h3>Report Bug's</h3>
    <form method="POST" action="form.php">
        <table cellpadding="10" align="center" id = "signup">
            <tbody>
            <tr>
                <td>UserName</td>
                <td>
                    <input type="text" maxlength="30" name="Name">
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>
            <tr>
                <td>Bug Tiltle</td>
                <td>
                    <input type="text" maxlength="10" name="BugTitle">
                    (10 digit number)
                </td>
            </tr>
            <tr>
                <td>
                    Bug Description
                    <br>
                    <br>
                    <br>
                </td>
                <td>
                    <textarea cols="30" rows="4" name="BugInfo" style="width: 330px; height: 88px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>Date Posted</td>
                <td>
                    <select id="Birthday_Day" name="Dateposted">
                        <option value="-1">Day:</option>
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
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select id="Birthday_Month" name="Monthposted">
                        <option value="-1">Month:</option>
                        <option value="January">Jan</option>
                        <option value="February">Feb</option>
                        <option value="March">Mar</option>
                        <option value="April">Apr</option>
                        <option value="May">May</option>
                        <option value="June">Jun</option>
                        <option value="July">Jul</option>
                        <option value="August">Aug</option>
                        <option value="September">Sep</option>
                        <option value="October">Oct</option>
                        <option value="November">Nov</option>
                        <option value="December">Dec</option>
                    </select>
                    <select id="Birthday_Year" name="Yearposted">
                        <option value="-1">Year:</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Fixed</td>
                <td>
                    Fixed
                    <input type="radio" value="fixed" name="fixed">
                    Unfixed
                    <input type="radio" value="unfixed" name="fixed">
                </td>
            </tr>
            <tr>
                <td>Attachments</td>
                <td>
                    <input type="text" maxlength="30" name="State">
                    (max 30 characters a-z and A-Z)
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</nav>
<footer>
    <p>(c) 2016 Ganama's Design</p>
</footer>

</body>
</html>
