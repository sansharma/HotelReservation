<?php
/**
 * Created by PhpStorm.
 * User: sansharma
 * Date: 11/29/2016
 * Time: 11:36 AM
 */

?>
<html>
<head>

    <title> Book Hotel Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.44/css/bootstrap-datetimepicker.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/js/moment-with-locales.js"></script>




</head>
<body>
<div class="container">

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Hotel Reservation System</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>
    <div class="row">

    <div class ="col-sm-12">

    <form>


    <div class="form-group">
        <label for="sel1">Please Enter your preferred Location</label>
        <select class="form-control" id="sel1">
            <option>Kathmandu</option>
            <option>Pokhara</option>
            <option>Dharan</option>
            <option>Biratnagar</option>
        </select>
    </div>
        <div class= "form-group" id="num_person">
            <label> No of Persons</label><br>
            <label class="checkbox-inline" ><input type="checkbox" value="">1</label>
            <label class="checkbox-inline"><input type="checkbox" value="">2</label>
            <label class="checkbox-inline"><input type="checkbox" value="">3</label>
        </div>
        <div class="container">
            <div class="row">
                <div class='col-sm-6 form-group'>
                    <label> Check in </label>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" id="check_in_date"/>
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- departure -->

        <div class="container">
            <div class="row">
                <div class='col-sm-6 form-group'>
                    <label> Check out </label>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker2'>
                            <input type='text' class="form-control" id="check_out_date" />
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!--departure-->

        <input type="submit" value="Search Hotel" onclick="findHotel();">
    </form>

    </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Copyright All Right Reserved</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</nav>




<!--    <div class="row">-->
<!--        <div class="col-sm-4">-->
<!--            <button type="button" class="btn btn-primary">Home</button>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <button type="button" class="btn btn-primary">About us</button>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <button type="button" class="btn btn-primary">Contact us</button>-->
<!--        </div>-->
<!--    </div>-->
</div>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#datetimepicker1').datepicker();
        $('#datetimepicker2').datepicker();
    });
 </script>
<script src="../assets/js/custom.js">

</script>
</body>

</html>
