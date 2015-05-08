 <?php
/*
Template Name: calculator
*/
?>
 <?php get_header(); ?>

<div class="container">
<div class="container page-content">
 <div class="row">
   <div class="col-md-9 backbg">

<?php

$customerCurrentLight = 40;
$quantityPcs = 872;
$accoledLightWattage = 20;
$usageHours = 12;
$exchangeRate = 1.24;
$accoledPrice = 47.00;

$meterRatekWh  = 0.2595;
$meterRatekWh  = 0.2595;


$resultR1 = 12556.80;
$resultR2 = 3258.49;
$resultR3 = 2627.81;

$resultA1 = 6278.80;
$resultA2 = 1629.24;
$resultA3 = 1313.91;

$resultC1 = 1629.24;
$resultC2 = 1313.91;

$resultSGD1 = 46.65;
$resultS2 = 40677.75;
$resultS3 = 3389.81;
$resultS4 = 1629.24;
$resultS5 = 19550.94;

$resultUSD1 = 37.62;
$resultU2 = 32804.64;
$resultU3 = 2733.72;
$resultU4 = 1313.91;
$resultU5 = 15766.89;

$resultW1 = 24.97;
$resultW2 = 2.08;
    
if($_POST['compute']) {
  
$customerCurrentLight = $_POST['customerCurrentLight'];
$quantityPcs = $_POST['quantityPcs'];
$accoledLightWattage = $_POST['accoledLightWattage'];
$usageHours = $_POST['usageHours'];
$exchangeRate = $_POST['exchangeRate'];
$accoledPrice = $_POST['accoledPrice'];

$resultSGD1 = $_POST['resultSGD1'];
$resultUSD1 = $_POST['resultUSD1'];

$resultR1 = ($customerCurrentLight*$quantityPcs*$usageHours*30)/1000;
$resultR2 = $resultR1*$meterRatekWh;
$resultR3 = $resultR2/$exchangeRate;

$resultR1 = number_format($resultR1,2);
$resultR2 = number_format($resultR2,2);
$resultR3 = number_format($resultR3,2);

$resultA1 = ($accoledLightWattage*$quantityPcs*$usageHours*30)/1000;
$resultA2 = $resultA1*$meterRatekWh;
$resultA3 = $resultA2/$exchangeRate;

$resultA1 = number_format($resultA1,2);
$resultA2 = number_format($resultA2,2);
$resultA3 = number_format($resultA3,2);

$resultC1 = ((($customerCurrentLight*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh)-(($accoledLightWattage*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh;
$resultC2 = (((($customerCurrentLight*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh)/$exchangeRate)-((($accoledLightWattage*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh/$exchangeRate);

$resultC1 = number_format($resultC1,2);
$resultC2 = number_format($resultC2,2);


$resultS2 = $resultSGD1*$quantityPcs;
$resultS3 = $resultS2/12;
$resultS4 = ((($customerCurrentLight*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh)-(($accoledLightWattage*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh;
$resultS5 = $resultS4*12;

$resultS2 = number_format($resultS2,2);
$resultS3 = number_format($resultS3,2);
$resultS4 = number_format($resultS4,2);
$resultS5 = number_format($resultS5,2);

$resultU2 = $resultUSD1*$quantityPcs;
$resultU3 = $resultU2/12;
$resultU4 = (((($customerCurrentLight*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh)/$exchangeRate)-((($accoledLightWattage*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh/$exchangeRate);
$resultU5 = $resultU4*12;

$resultU2 = number_format($resultU2,2);
$resultU3 = number_format($resultU3,2);
$resultU4 = number_format($resultU4,2);
$resultU5 = number_format($resultU5,2);

$resultW1 = ($resultSGD1*$quantityPcs)/(((($customerCurrentLight*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh)-(($accoledLightWattage*$quantityPcs*$usageHours*30)/1000)*$meterRatekWh);
$resultW2 = $resultW1/12;

$resultW1 = number_format($resultW1,2);
$resultW2 = number_format($resultW2,2);

}

if($_POST['clear']) {

$customerCurrentLight = "";
$quantityPcs = "";
$accoledLightWattage = "";
$usageHours = "";
$exchangeRate = "";
$accoledPrice = "";

$meterRatekWh  = "";
$meterRatekWh  = "";

$resultR1 = "";
$resultR2 = "";
$resultR3 = "";

$resultSGD1 = "";
$resultUSD1 = "";

$resultA1 = "";
$resultA2 = "";
$resultA3 = "";

$resultC1 = "";
$resultC2 = "";

$resultS1 = "";
$resultS2 = "";
$resultS3 = "";
$resultS4 = "";
$resultS5 = "";

$resultU1 = "";
$resultU2 = "";
$resultU3 = "";
$resultU4 = "";
$resultU5 = "";

$resultW1 = "";
$resultW2 = "";

}

  
?>


<div class="content">
      <div class="content-topleft">
        <div class="content-topright">
          <div class="content-topfiller">
          </div>
        </div>
      </div>
      <div class="content-leftfiller">
        <div class="content-rightfiller">
        
            <!-- INSERT CONTENT HERE -->
                        <div class="cal cal-body">
                        <div class="cal-top">
<div id="ut"><img src="http://accoled.com.sg/wp-content/uploads/2014/04/ut.png" /></div>
                            <div class="cal-head-text">
                            <div class="cal-head-right">
                              <p class="green"><h2>Energy Saving Calculator</h2></p>
                            </div>
                            
                            </div>
                         </div>
                         
                         <div class="cal-elements">

                <div class="col-md-12 pull-left"><form action="?" method="post">
 <div id="exist">

                  <table width="800" border="0" cellspacing="0" cellpadding="0" class="cal-table">
                    <tr class="green">
                        <td class="exi green">Existing Bulb Information</td>
			<td class="exi green"></td>
			<td class="exi green"></td>
                    </tr>
                    <tr class="orange">
                        <td>Customer Current Light (Wattage)</td>
                        <td><input name="customerCurrentLight" id="customerCurrentLight" class="b-blue orange" type="text" size="20" dir="rtl"value="<?php echo $customerCurrentLight;?>"/></td>
			<td>(please input wattage)</td>
                    </tr>
                    <tr class="green">
                                          <td>Quantity (Pcs)</td>
                      <td><input name="quantityPcs" id="quantityPcs " class="b-blue green" type="text orange" size="20" dir="rtl"value="<?php echo $quantityPcs?>"/></td>
			<td>(please input quantity)</td>
                    </tr>
                                        <tr class="orange">
                                          <td>ACCOLED Light (Wattage) </td>
                      <td><input name="accoledLightWattage" id="accoledLightWattage" class="b-blue orange" type="text" size="20" dir="rtl"value="<?php echo $accoledLightWattage?>"/></td>
			<td></td>
                    </tr>
                    <tr class="green">
                                          <td>Usage (Hours)</td>
                      <td><input name="usageHours" id="usageHours" class="b-blue green" type="text" size="20" dir="rtl"value="<?php echo $usageHours?>"/></td>
			<td>(please input hours)</td>
                    </tr>
                    <tr class="orange">
                                          <td>Exchange Rate (USD1 = SGD1.24)</td>
                      <td><input name="exchangeRate" id="exchangeRate" class="b-blue orange" type="text orange" size="20" dir="rtl"value="<?php echo $exchangeRate?>"/></td>
			<td></td>
                    </tr>
                    <tr class="green">
                                          <td>ACCOLED Price/Model (SGD)</td>
                      <td><input name="accoledPrice" id="accoledPrice" class="b-blue green" type="text" size="20" dir="rtl"value="<?php echo $accoledPrice?>"/></td>
			<td></td>
                    </tr>
                  </table></div>

<div id="calscom">
                  <table width="800" border="0" cellspacing="0" cellpadding="0" class="cal-table">
                <tr class="green"> 
                    <td class="compa">
                    COMPARISON
                    </td> 
                    <td>
                    <span class="cur">CURRENT LIGHTING</span>
                    </td> 
                    <td>
                   <span class="acc">ACCOLED LED</span>
                    </td> 
                   </tr>
                   <tr class="orange"> 
                    <td>
                    
                    </td> 
                    <td>
                   <input name="Fluorescent" id="Fluorescent" class="tflou orange" type="text" size="20" dir="rtl" value="(T8 Fluorescent - 40W (4 feet"/>
                    </td> 
                    <td>
  		    <input name="Fluorescent" id="Fluorescent" class="ttube orange" type="text" size="20" dir="rtl" value="(T8 tube - 20W (4 feet"/>
                    </td> 
                   </tr>

<tr class="green"> 
                    <td>
                    Meter Rate kWh 
                    </td>
                    <td>
                   <input name="meterRatekWh" id="meterRatekWh" class="a-blue green" type="text" size="20" dir="rtl" value="<?php echo $meterRatekWh?>"/>
                    </td>
                    <td>
                    <input name="meterRatekWh" id="meterRatekWh" class="a-blue green" type="text" size="20" dir="rtl" value="<?php echo $meterRatekWh?>"/>
                    </td>
                   </tr>

		    <tr class="orange"> 
                    <td>
                    Electricity Consumed per month (kWh)
                    </td> 
                    <td>
                    <input name="resultR1" id="resultR1" class="a-blue orange" type="text" size="20" dir="rtl" value="<?php echo $resultR1?>"/>
                    </td> 
                    <td>
                    <input name="resultA1" id="resultA1" class="a-blue orange" type="text" size="20" dir="rtl" value="<?php echo $resultA1?>"/>
                    </td> 
                   </tr>
                   <tr class="green"> 
                    <td>
                    Electricity Cost per month (SGD)
                    </td> 
                    <td>
                    <input name="resultR2" id="resultR2" class="a-blue green" type="text" size="20" dir="rtl" value="<?php echo $resultR2?>"/>
                    </td>
                    <td>
                    <input name="resultA2" id="resultA2" class="a-blue green" type="text" size="20" dir="rtl" value="<?php echo $resultA2?>"/>
                    </td>  
                   </tr>
                   <tr class="orange"> 
                    <td>
                    Electricity Cost per month (USD)
                    </td> 
                    <td>
                    <input name="resultR3" id="resultR3" class="a-blue orange" type="text" size="20" dir="rtl" value="<?php echo $resultR3?>"/>
                    </td>  
                    <td>
                    <input name="resultA3" id="resultA3" class="a-blue orange" type="text" size="20" dir="rtl" value="<?php echo $resultA3?>"/>
                    </td>
                   </tr>

                  </table></div>
<div id="calssave">
                    <table width="800" border="0" cellspacing="0" cellpadding="0" class="cal-table">
                    <tr class="green">
                        <td>
                          Total Savings (SGD)

                        </td>
                          <td>
                           <input name="resultC1" id="resultC1" class="g-blue green" type="text" size="20" dir="rtl" value="<?php echo $resultC1?>"/>
                        </td>
                    </tr> 

                     <tr class="orange">
                        <td>
                            Total Savings (USD)

                        </td>
                          <td>
                            <input name="resultC2" id="resultC2" class="g-blue orange" type="text" size="20" dir="rtl" value="<?php echo $resultC2?>"/>
                        </td>
                    </tr> 


                  </table>  </div>

                   <div class="tabam"><table width="800" border="0" cellspacing="0" cellpadding="0" class="cal-table">
      <tr class"green">
        <td class="led green">LED T8 tube - 20W (4 feet)</td>
        <td class="green"><span class="amsgd green">AMOUNT (SGD)</span></td>
        <td class="green"><span class="amusd green">AMOUNT (USD)</span></td>
</tr>
<tr class="orange">
<td>UNIT PRICE</td>
<td>
 <input name="resultSGD1" id="resultSGD1" class="f-blue orange" type="text" size="20" dir="rtl"value="<?php echo $resultSGD1?>"/>
                         
                        </td>
<td>
                            <input name="resultUSD1" id="resultUSD1" class="s-blue orange" type="text" size="20" dir="rtl"value="<?php echo $resultUSD1?>"/>
                        </td>
</tr>
<tr class="green">
<td>TOTAL COST </td>
<td>
                            <input name="resultS2" id="resultS2" class="f-blue green" type="text" size="20" dir="rtl"value="<?php echo $resultS2?>"/>
                        </td>
<td>
                            <input name="resultU2" id="resultU2" class="s-blue green" type="text" size="20" dir="rtl"value="<?php echo $resultU2?>"/>
                        </td>
</tr>
<tr class="orange">
<td>MONTHLY COST</td>
<td>
                            <input name="resultS3" id="resultS3" class="f-blue orange" type="text" size="20" dir="rtl"value="<?php echo $resultS3?>"/>
                        </td>
<td>
                            <input name="resultU3" id="resultU3" class="s-blue orange" type="text" size="20" dir="rtl"value="<?php echo $resultU3?>"/>
                        </td>
</tr>
<tr class="green">
<td>MONTHLY SAVINGS</td>
<td>
                            <input name="resultS4" id="resultS4" class="f-blue green" type="text" size="20" dir="rtl"value="<?php echo $resultS4?>"/>
                        </td>
<td>
                            <input name="resultU4" id="resultU4" class="s-blue green" type="text" size="20" dir="rtl"value="<?php echo $resultU4?>"/>
                        </td>
</tr>
<tr class="orange">
<td>ANNUAL SAVINGS </td>
<td>
                            <input name="resultS5" id="resultS5" class="f-blue orange" type="text" size="20" dir="rtl"value="<?php echo $resultS5?>"/>
                        </td>
<td>
                            <input name="resultU5" id="resultU5" class="s-blue orange" type="text" size="20" dir="rtl"value="<?php echo $resultU5?>"/>
                        </td>
</tr>
</tr>
                  </table></div>

                  <div class="roi"><table width="800" border="0" cellspacing="0" cellpadding="0" class="cal-table">
                    <tr class="green">
                      <td>ROI (No. of Months)</td>
                      <td><input name="resultW1" id="resultW1" class="d-blue green" type="text" size="20" dir="rtl"value="<?php echo $resultW1?>"/></td>
                    </tr>
                    <tr class="orange">
                      <td>ROI (No. of Years)</td>
                      <td><input name="resultW2" id="resultW2" class="d-blue orange" type="text" size="20" dir="rtl"value="<?php echo $resultW2?>"/></td>
                    </tr>

                  </table>  </div>

                        <div class="hr">
                        <hr/></div>
                        <div class="cal-btn pull-left">
                        <input type="submit" value="Clear Fields" id="clear" name="clear"/>
                        <input type="submit" value="Compute" id="compute" name="compute"/>
                        </div>
                        <div class="greet pull-left"><h3 class="knowh">Know how much you can SAVE!!!</h3></div>
            </div>
                        </form>
              
            <!-- END OF INSERT CONTENT -->
                        

        </div>
      </div>
      <div class="content-btmleft">
        <div class="content-btmright">
          <div class="content-btmfiller">
          
          </div>
        </div>
      </div>
    </div>
    <!-- END OF CONTENT -->

   </div>
</div>

</div>
<div class="col-md-3 in-sidebar">
         <?php get_sidebar(); ?>

   </div>
   </div>
<?php get_footer(); ?>
 
