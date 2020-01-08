<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard | SRC '19</title>
        <link rel="stylesheet" href="styles/main.css" />
        <link rel="shortcut icon" href="img/fav.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/dash.css">
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
        <div class="overlay overlay-bg">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h2>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</h2>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="notice-section">
                                    <h4>Notice</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nam natus, magnam, quo alias quaerat, numquam ea ullam praesentium sint quam. Dolores officiis blanditiis odit omnis, nam aperiam temporibus cupiditate?</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 status-section">
                                <div class="section-header">
                                    <h4>Abstract Status</h4>
                                </div>
                                <div class="card-body">
                                    <p>Will be updated soon.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 status-section section-center">
                                <div class="section-header">
                                    <h4>Registration Status</h4>
                                </div>
                                <div class="card-body">
                                    <p>Will be updated soon.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 status-section">
                                <div class="section-header">
                                    <h4>Payment Status</h4>
                                </div>
                                <div class="card-body">
                                    <p>Will be updated soon.</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="pay-section">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p>Payment will be made through SBI I-Collect gateway.</p>
                                    <p><strong>Total Fees: INR 400</strong></p>
                                    <ul>
                                        <li>Registration Fee: INR 200</li>
                                        <li>Security Fees (refundable): INR 200</li>
                                    </ul><br>
                                    <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=314456" target="_blank" class="btn login-btn">PAY NOW</a>
                                </div>
                                <div class="col-lg-8">

                                    <div class="pay-instr">
                                        <h3>Payment Instructions</h3>
                                        <ol>
                                            <li>On first screen click on check box, and then click on 'Proceed'.</li>
                                            <li>Payment Category: STUDENTS GYMKHANA</li>
                                            <li>Councils: PRESIDENT ACCOUNT</li>
                                            <li>Fill in your roll no. and name. Leave the hostel and room no. fields blank.</li>
                                            <li>Event Name: STUDENTS RESEARCH CONVENTION</li>
                                            <li>Payment Made For: REGISTRATION FEES</li>
                                            <li>Amount: 400</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="#">Sign Up</a>
                        </div> -->
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><a href="index.php">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>
