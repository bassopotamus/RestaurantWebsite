<html>
<head>
    <title>Birthday Club!</title>
    <link rel="stylesheet" type="text/css" href="css/bouilla.css">
</head>

<body>
    <img src="image/header_pic.png" alt="bouilla" id="name">
        
        <table id="menutable" id="menu">
            <tr>
                <td id="home"><a href="bouilla.html"><img src="image/menu_home.png" alt="Home"></a></td>
                <td id="menu"><a href="menus.html"><img src="image/menu_menus.png" alt="Menu"></a></td>
                <td id="find"><a href="find.html"><img src="image/menu_find.png" alt="Find Us"></a></td>
                <td id="birthclub"><a href="birthday.php"><img src="image/menu_birthday.png" alt="Birthday Club"></a></td>
                <td id="contact"><a href="contact.html"><img src="image/menu_contact.png" alt="Contact Us"></a></td>
            </tr>
        </table>
        <br>

        <div id="form">
            <div id="width1">
                &nbsp;
            </div>

            <div id="width2">
                <h1 id="addbirthday">Please enter your information to join our birthday club! You'll receive 
                a card in the mail during your birthday month that gives a percentage off of your bill.
                </h1>
                <br>
                <form method="post" action="thankyou.php" id="bdayform" align="center">
                    <table id="formtable">
                        <tr>
                        <label id="firstName">First Name:</label>
                        </tr>
                        <tr>
                        <input type="text" class="firstName" id="fName">
                        </tr>
                        <br>
                        <tr>
                        <label id="lastName">Last Name:</label>
                        </tr>
                        <tr>
                        <input type="text" class="lastName" id="lName">
                        </tr>
                        <br>
                        <tr>
                        <label id="month">Month:</label>
                        </tr>
                        <tr>
                        <select class="month" id="monthop">
                            <option value="jan">January</option>
                            <option value="feb">February</option>
                            <option value="mar">March</option>
                            <option value="apr">April</option>
                            <option value="may">May</option>
                            <option value="jun">June</option>
                            <option value="jul">July</option>
                            <option value="aug">August</option>
                            <option value="sep">September</option>
                            <option value="oct">October</option>
                            <option value="nov">November</option>
                            <option value="dec">December</option>
                        </select>
                        </tr>
                        <tr>
                        <label id="day">Day:</label>
                        </tr>
                        <tr>
                        <select class="day" id="dayop">
                            <?php
                                for ($i=1; $i<=31; $i++){
                                    echo "<option value='" . $i ."'>" . $i . "</option>";
                                }
                            ?>
                        </select>
                        </tr>
                        <tr>
                        <label id="year">Year:</label>
                        </tr>
                        <tr>
                        <select class="year" id="yearop">
                            <?php
                                for ($j=1900; $j<=2017; $j++){
                                    echo "<option value='" . $j ."'>" . $j . "</option>";
                                }
                            ?>
                        </select>
                        </tr>
                        <br>
                        <tr>
                        <label id="email">Email:<label>
                        </tr>
                        <tr>
                        <input type="text" id="email" class="email">
                        </tr>
                        <br>
                        <br>   
                        <tr>
                        <div id="button"><button type="button" onclick="">Submit</button></div>
                        </tr>
                    </table>

                </form>
            </div>

            <!--<div id="width3">
                &nbsp;
            </div>-->
        <div>



        <br>

</body>

</html>