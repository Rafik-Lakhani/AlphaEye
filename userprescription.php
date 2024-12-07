<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssStyle/userprescription.css">
    <title>Prescription | Alpha Eye</title>
</head>
<body>
    <div class="main">
        <?php include("config/remixicone.php");?>
        <?php include("config/fontfamily.php");?>
        <?php include("component/nav.php");?>
        <div class="center-div">
            <form action="order.php" method="post">
                <div class="power-part">
                        <div class="power-heading">
                            <h2>SPH</h2>
                            <h2>CYL</h2>
                            <h2>AXIS</h2>
                            <h2>ADD</h2>
                        </div>
                        <div class="power-heading2">
                            <div class="right-eye">
                                <h2>RIGHT EYE(OD)</h2>
                                <select required name="rightsph" id="">
                                    
                                    <!-- Negative Sph Powers -->
                                <option value="0.00">0.00</option>
                                <option value="-0.25">-0.25</option>
                                <option value="-0.50">-0.50</option>
                                <option value="-0.75">-0.75</option>
                                <option value="-1.00">-1.00</option>
                                <option value="-1.25">-1.25</option>
                                <option value="-1.50">-1.50</option>
                                <option value="-1.75">-1.75</option>
                                <option value="-2.00">-2.00</option>
                                <option value="-2.25">-2.25</option>
                                <option value="-2.50">-2.50</option>
                                <option value="-2.75">-2.75</option>
                                <option value="-3.00">-3.00</option>
                                <option value="-3.25">-3.25</option>
                                <option value="-3.50">-3.50</option>
                                <option value="-3.75">-3.75</option>
                                <option value="-4.00">-4.00</option>
                                <option value="-4.25">-4.25</option>
                                <option value="-4.50">-4.50</option>
                                <option value="-4.75">-4.75</option>
                                <option value="-5.00">-5.00</option>
                                <option value="-5.25">-5.25</option>
                                <option value="-5.50">-5.50</option>
                                <option value="-5.75">-5.75</option>
                                <option value="-6.00">-6.00</option>
                                <option value="-6.25">-6.25</option>
                                <option value="-6.50">-6.50</option>
                                <option value="-6.75">-6.75</option>
                                <option value="-7.00">-7.00</option>
                                <option value="-7.25">-7.25</option>
                                <option value="-7.50">-7.50</option>
                                <option value="-7.75">-7.75</option>
                                <option value="-8.00">-8.00</option>
                                <option value="-8.25">-8.25</option>
                                <option value="-8.50">-8.50</option>
                                <option value="-8.75">-8.75</option>
                                <option value="-9.00">-9.00</option>
                                <option value="-9.25">-9.25</option>
                                <option value="-9.50">-9.50</option>
                                <option value="-9.75">-9.75</option>
                                <option value="-10.00">-10.00</option>
                                <option value="-10.25">-10.25</option>
                                <option value="-10.50">-10.50</option>
                                <option value="-10.75">-10.75</option>
                                <option value="-11.00">-11.00</option>
                                <option value="-11.25">-11.25</option>
                                <option value="-11.50">-11.50</option>
                                <option value="-11.75">-11.75</option>
                                <option value="-12.00">-12.00</option>
                                <option value="-12.25">-12.25</option>
                                <option value="-12.50">-12.50</option>
                                <option value="-12.75">-12.75</option>
                                <option value="-13.00">-13.00</option>

                                <!-- Positive Sph Powers -->
                                <option value="+0.25">+0.25</option>
                                <option value="+0.50">+0.50</option>
                                <option value="+0.75">+0.75</option>
                                <option value="+1.00">+1.00</option>
                                <option value="+1.25">+1.25</option>
                                <option value="+1.50">+1.50</option>
                                <option value="+1.75">+1.75</option>
                                <option value="+2.00">+2.00</option>
                                <option value="+2.25">+2.25</option>
                                <option value="+2.50">+2.50</option>
                                <option value="+2.75">+2.75</option>
                                <option value="+3.00">+3.00</option>
                                <option value="+3.25">+3.25</option>
                                <option value="+3.50">+3.50</option>
                                <option value="+3.75">+3.75</option>
                                <option value="+4.00">+4.00</option>
                                <option value="+4.25">+4.25</option>
                                <option value="+4.50">+4.50</option>
                                <option value="+4.75">+4.75</option>
                                <option value="+5.00">+5.00</option>
                                <option value="+5.25">+5.25</option>
                                <option value="+5.50">+5.50</option>
                                <option value="+5.75">+5.75</option>
                                <option value="+6.00">+6.00</option>
                                <option value="+6.25">+6.25</option>
                                <option value="+6.50">+6.50</option>
                                <option value="+6.75">+6.75</option>
                                <option value="+7.00">+7.00</option>
                                <option value="+7.25">+7.25</option>
                                <option value="+7.50">+7.50</option>
                                <option value="+7.75">+7.75</option>
                                <option value="+8.00">+8.00</option>
                                </select>
                                                                
                            <select name="rightcyl" required id="">
                            <option value="0.00">0.00</option>
                            <option value="-0.25">-0.25</option>
                            <option value="-0.50">-0.50</option>
                            <option value="-0.75">-0.75</option>
                            <option value="-1.00">-1.00</option>
                            <option value="-1.25">-1.25</option>
                            <option value="-1.50">-1.50</option>
                            <option value="-1.75">-1.75</option>
                            <option value="-2.00">-2.00</option>
                            <option value="-2.25">-2.25</option>
                            <option value="-2.50">-2.50</option>
                            <option value="-2.75">-2.75</option>
                            <option value="-3.00">-3.00</option>
                            <option value="-3.25">-3.25</option>
                            <option value="-3.50">-3.50</option>
                            <option value="-3.75">-3.75</option>
                            <option value="-4.00">-4.00</option>
                            <option value="-4.25">-4.25</option>
                            <option value="-4.50">-4.50</option>
                            <option value="-4.75">-4.75</option>
                            <option value="-5.00">-5.00</option>
                            <option value="-5.25">-5.25</option>
                            <option value="-5.50">-5.50</option>
                            <option value="-5.75">-5.75</option>
                            <option value="-6.00">-6.00</option>

                           
                            <option value="0.25">+0.25</option>
                            <option value="0.50">+0.50</option>
                            <option value="0.75">+0.75</option>
                            <option value="1.00">+1.00</option>
                            <option value="1.25">+1.25</option>
                            <option value="1.50">+1.50</option>
                            <option value="1.75">+1.75</option>
                            <option value="2.00">+2.00</option>
                            <option value="2.25">+2.25</option>
                            <option value="2.50">+2.50</option>
                            <option value="2.75">+2.75</option>
                            <option value="3.00">+3.00</option>
                            <option value="3.25">+3.25</option>
                            <option value="3.50">+3.50</option>
                            <option value="3.75">+3.75</option>
                            <option value="4.00">+4.00</option>
                            <option value="4.25">+4.25</option>
                            <option value="4.50">+4.50</option>
                            <option value="4.75">+4.75</option>
                            <option value="5.00">+5.00</option>
                            <option value="5.25">+5.25</option>
                            <option value="5.50">+5.50</option>
                            <option value="5.75">+5.75</option>
                            <option value="6.00">+6.00</option>
                            </select>
                             
                            <input type="number" min="0" value="00" name="rightaxis" max="180">
                                <select name="rightadd" required id="">
                                    <option value="0">0.00</option>
                                    <option value="+0.50">+0.50</option>
                                    <option value="+0.75">+0.75</option>
                                    <option value="+1.00">+1.00</option>
                                    <option value="+1.25">+1.25</option>
                                    <option value="+1.50">+1.50</option>
                                    <option value="+1.75">+1.75</option>
                                    <option value="+2.00">+2.00</option>
                                    <option value="+2.25">+2.25</option>
                                    <option value="+2.50">+2.50</option>
                                    <option value="+2.75">+2.75</option>
                                    <option value="+3.00">+3.00</option>
                                </select>
                            </div>
                            <div class="left-eye">
                                <h2>LEFT EYE(OS)</h2>
                                <select required name="leftsph" id="">
                              
  <!-- Negative Sph Powers -->
                                <option value="0.00">0.00</option>
                                <option value="-0.25">-0.25</option>
                                <option value="-0.50">-0.50</option>
                                <option value="-0.75">-0.75</option>
                                <option value="-1.00">-1.00</option>
                                <option value="-1.25">-1.25</option>
                                <option value="-1.50">-1.50</option>
                                <option value="-1.75">-1.75</option>
                                <option value="-2.00">-2.00</option>
                                <option value="-2.25">-2.25</option>
                                <option value="-2.50">-2.50</option>
                                <option value="-2.75">-2.75</option>
                                <option value="-3.00">-3.00</option>
                                <option value="-3.25">-3.25</option>
                                <option value="-3.50">-3.50</option>
                                <option value="-3.75">-3.75</option>
                                <option value="-4.00">-4.00</option>
                                <option value="-4.25">-4.25</option>
                                <option value="-4.50">-4.50</option>
                                <option value="-4.75">-4.75</option>
                                <option value="-5.00">-5.00</option>
                                <option value="-5.25">-5.25</option>
                                <option value="-5.50">-5.50</option>
                                <option value="-5.75">-5.75</option>
                                <option value="-6.00">-6.00</option>
                                <option value="-6.25">-6.25</option>
                                <option value="-6.50">-6.50</option>
                                <option value="-6.75">-6.75</option>
                                <option value="-7.00">-7.00</option>
                                <option value="-7.25">-7.25</option>
                                <option value="-7.50">-7.50</option>
                                <option value="-7.75">-7.75</option>
                                <option value="-8.00">-8.00</option>
                                <option value="-8.25">-8.25</option>
                                <option value="-8.50">-8.50</option>
                                <option value="-8.75">-8.75</option>
                                <option value="-9.00">-9.00</option>
                                <option value="-9.25">-9.25</option>
                                <option value="-9.50">-9.50</option>
                                <option value="-9.75">-9.75</option>
                                <option value="-10.00">-10.00</option>
                                <option value="-10.25">-10.25</option>
                                <option value="-10.50">-10.50</option>
                                <option value="-10.75">-10.75</option>
                                <option value="-11.00">-11.00</option>
                                <option value="-11.25">-11.25</option>
                                <option value="-11.50">-11.50</option>
                                <option value="-11.75">-11.75</option>
                                <option value="-12.00">-12.00</option>
                                <option value="-12.25">-12.25</option>
                                <option value="-12.50">-12.50</option>
                                <option value="-12.75">-12.75</option>
                                <option value="-13.00">-13.00</option>

                                <!-- Positive Sph Powers -->
                                <option value="+0.25">+0.25</option>
                                <option value="+0.50">+0.50</option>
                                <option value="+0.75">+0.75</option>
                                <option value="+1.00">+1.00</option>
                                <option value="+1.25">+1.25</option>
                                <option value="+1.50">+1.50</option>
                                <option value="+1.75">+1.75</option>
                                <option value="+2.00">+2.00</option>
                                <option value="+2.25">+2.25</option>
                                <option value="+2.50">+2.50</option>
                                <option value="+2.75">+2.75</option>
                                <option value="+3.00">+3.00</option>
                                <option value="+3.25">+3.25</option>
                                <option value="+3.50">+3.50</option>
                                <option value="+3.75">+3.75</option>
                                <option value="+4.00">+4.00</option>
                                <option value="+4.25">+4.25</option>
                                <option value="+4.50">+4.50</option>
                                <option value="+4.75">+4.75</option>
                                <option value="+5.00">+5.00</option>
                                <option value="+5.25">+5.25</option>
                                <option value="+5.50">+5.50</option>
                                <option value="+5.75">+5.75</option>
                                <option value="+6.00">+6.00</option>
                                <option value="+6.25">+6.25</option>
                                <option value="+6.50">+6.50</option>
                                <option value="+6.75">+6.75</option>
                                <option value="+7.00">+7.00</option>
                                <option value="+7.25">+7.25</option>
                                <option value="+7.50">+7.50</option>
                                <option value="+7.75">+7.75</option>
                                <option value="+8.00">+8.00</option>
                                </select>
                                    
                                <select name="leftcyl" required id="">
                                <option value="0.00">0.00</option>
                                <option value="-0.25">-0.25</option>
                            <option value="-0.50">-0.50</option>
                            <option value="-0.75">-0.75</option>
                            <option value="-1.00">-1.00</option>
                            <option value="-1.25">-1.25</option>
                            <option value="-1.50">-1.50</option>
                            <option value="-1.75">-1.75</option>
                            <option value="-2.00">-2.00</option>
                            <option value="-2.25">-2.25</option>
                            <option value="-2.50">-2.50</option>
                            <option value="-2.75">-2.75</option>
                            <option value="-3.00">-3.00</option>
                            <option value="-3.25">-3.25</option>
                            <option value="-3.50">-3.50</option>
                            <option value="-3.75">-3.75</option>
                            <option value="-4.00">-4.00</option>
                            <option value="-4.25">-4.25</option>
                            <option value="-4.50">-4.50</option>
                            <option value="-4.75">-4.75</option>
                            <option value="-5.00">-5.00</option>
                            <option value="-5.25">-5.25</option>
                            <option value="-5.50">-5.50</option>
                            <option value="-5.75">-5.75</option>
                            <option value="-6.00">-6.00</option>

                           
                            <option value="0.25">+0.25</option>
                            <option value="0.50">+0.50</option>
                            <option value="0.75">+0.75</option>
                            <option value="1.00">+1.00</option>
                            <option value="1.25">+1.25</option>
                            <option value="1.50">+1.50</option>
                            <option value="1.75">+1.75</option>
                            <option value="2.00">+2.00</option>
                            <option value="2.25">+2.25</option>
                            <option value="2.50">+2.50</option>
                            <option value="2.75">+2.75</option>
                            <option value="3.00">+3.00</option>
                            <option value="3.25">+3.25</option>
                            <option value="3.50">+3.50</option>
                            <option value="3.75">+3.75</option>
                            <option value="4.00">+4.00</option>
                            <option value="4.25">+4.25</option>
                            <option value="4.50">+4.50</option>
                            <option value="4.75">+4.75</option>
                            <option value="5.00">+5.00</option>
                            <option value="5.25">+5.25</option>
                            <option value="5.50">+5.50</option>
                            <option value="5.75">+5.75</option>
                            <option value="6.00">+6.00</option>
                            </select>
                            
                                <input type="number" required min="0" value="00" name="leftaxis" max="180">
                                <select name="leftadd" id="" required>
                                    <option value="0.00">0.00</option>
                                    <option value="+0.50">+0.50</option>
                                    <option value="+0.75">+0.75</option>
                                    <option value="+1.00">+1.00</option>
                                    <option value="+1.25">+1.25</option>
                                    <option value="+1.50">+1.50</option>
                                    <option value="+1.75">+1.75</option>
                                    <option value="+2.00">+2.00</option>
                                    <option value="+2.25">+2.25</option>
                                    <option value="+2.50">+2.50</option>
                                    <option value="+2.75">+2.75</option>
                                    <option value="+3.00">+3.00</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="payment-sec">
                    <div class="payment-div">
                        <h1>Payment Method</h1>
                        <input type="radio" id="cod" checked="true">
                        <label for="cod">Cash ON Delivery</label>
                    </div>
                    <div class="submit-div">
                        <input type="submit" name="userprescriptionpage" value="Submit">
                    </div>    
                </div>
            </form>
        </div>
        <?php include("component/footer.php");?>
    </div>
</body>
</html>