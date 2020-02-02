<?php
if(isset($_POST['submit'])){

	//collect form data
    $name = $_POST['name'];
	$travelDestination = $_POST['travelDestination'];
	$travelPurpose = $_POST['travelPurpose'];
	$travelDates = $_POST['travelDates'];
	$transportationMethod = $_POST['transportationMethod'];

	$ePAY = $_POST['ePAY'];
	$eRAY = $_POST['eRAY'];
	$eRAExplanation = $_POST['eRAExplanation'];
	$expenseReimburseActual = $_POST['expenseReimburseActual'];
	$expenseReimbursePerDiem = $_POST['expenseReimbursePerDiem'];
	$professionalDevelopment = $_POST['professionalDevelopment'];
	
	$programCharged = $_POST['programCharged'];
	$totalMiles = $_POST['totalMiles'];

	$perDiemDeparture = $_POST['perDiemDeparture'];
	$perDiemReturn = $_POST['perDiemReturn'];
	$perDiemRate = sprintf('%.2f', $_POST['perDiemRate']);
	
	$actualHotelCosts = sprintf('%.2f', $_POST['actualHotelCosts']);
	$actualFoodCosts = sprintf('%.2f', $_POST['actualFoodCosts']);
	$incidentalCosts = sprintf('%.2f', $_POST['incidentalCosts']);
	
	$miscItem1Name = $_POST['miscItem1Name'];
	$miscItem1Value = sprintf('%.2f', $_POST['miscItem1Value']);
	$miscItem2Name = $_POST['miscItem2Name'];
	$miscItem2Value = sprintf('%.2f', $_POST['miscItem2Value']);
	$miscItem3Name = $_POST['miscItem3Name'];
	$miscItem3Value = sprintf('%.2f', $_POST['miscItem3Value']);
	$miscItem4Name = $_POST['miscItem4Name'];
	$miscItem4Value = sprintf('%.2f', $_POST['miscItem4Value']);
	$miscItem5Name = $_POST['miscItem5Name'];
	$miscItem5Value = sprintf('%.2f', $_POST['miscItem5Value']);

	if (!isset($name))
	{
		$name = '';
	}
	if (!isset($travelDestination))
	{
		$travelDestination = '';
	}
	if (!isset($travelPurpose))
	{
		$travelPurpose = '';
	}
	if (!isset($travelDates))
	{
		$travelDates = '';
	}
	if (!isset($transportationMethod))
	{
		$transportationMethod = '';
	}
	if (!isset($ePAY))
	{
		$ePAY = '';
	}
	if (!isset($eRAY))
	{
		$eRAY = '';
	}
	if (!isset($eRAExplanation))
	{
		$eRAExplanation = '';
	}
	if (!isset($expenseReimburseActual))
	{
		$expenseReimburseActual = '';
	}
	if (!isset($expenseReimbursePerDiem))
	{
		$expenseReimbursePerDiem = '';
	}
	if (!isset($professionalDevelopment))
	{
		$professionalDevelopment = '';
	}
	if (!isset($programCharged))
	{
		$programCharged = '';
	}
	if (!isset($totalMiles))
	{
		$totalMiles = '';
	}
	if (!isset($perDiemDeparture))
	{
		$perDiemDeparture = '';
	}
	if (!isset($perDiemReturn))
	{
		$perDiemReturn = '';
	}
	if (!isset($perDiemRate))
	{
		$perDiemRate = '';
	}
	if (!isset($actualHotelCosts))
	{
		$actualHotelCosts = '';
	}
	if (!isset($actualFoodCosts))
	{
		$actualHotelCosts = '';
	}
	if (!isset($incidentalCosts))
	{
		$incidentalCosts = '';
	}
	if (!isset($miscItem1Name))
	{
		$miscItem1Name = '';
	}
	if (!isset($miscItem1Value))
	{
		$miscItem1Value = '';
	}
	if (!isset($miscItem2Name))
	{
		$miscItem2Name = '';
	}
	if (!isset($miscItem2Value))
	{
		$miscItem2Value = '';
	}
	if (!isset($miscItem3Name))
	{
		$miscItem3Name = '';
	}
	if (!isset($miscItem3Value))
	{
		$miscItem3Value = '';
	}
	if (!isset($miscItem4Name))
	{
		$miscItem4Name = '';
	}
	if (!isset($miscItem4Value))
	{
		$miscItem4Value = '';
	}
	if (!isset($miscItem5Name))
	{
		$miscItem5Name = '';
	}
	if (!isset($miscItem5Value))
	{
		$miscItem5Value = '';
	}

	if ($ePAY == "Yes")
	{
		$ePAYOutput1 = '<input type="radio" name="ePAY" value="Yes" checked>Yes<br>';
		$ePAYOutput2 = '<input type="radio" name="ePAY" value="No">No<br>';
	}
	else
	{
		$ePAYOutput1 = '<input type="radio" name="ePAY" value="Yes">Yes<br>';
		$ePAYOutput2 = '<input type="radio" name="ePAY" value="No" checked>No<br>';
	}


	if ($eRAY == "Yes")
	{
		$eRAYOutput1 = '<input type="radio" name="eRAY" value="Yes" checked>Yes<br>';
		$eRAYOutput2 = '<input type="radio" name="eRAY" value="No">No<br>';
	}
	else
	{
		$eRAYOutput1 = '<input type="radio" name="eRAY" value="Yes">Yes<br>';
		$eRAYOutput2 = '<input type="radio" name="eRAY" value="No" checked>No<br>';
	}

	if ($expenseReimburseActual == "Actual")
	{
		$expenseOutput1 = '<input type="checkbox" name="expenseReimburseActual" value="Actual" checked>Actual Expense';
	}
	else
	{
		$expenseOutput1 = '<input type="checkbox" name="expenseReimburseActual" value="Actual">Actual Expense';
	}
	
	if ($expenseReimbursePerDiem == "PerDiem")
	{
		$expenseOutput2 = '<input type="checkbox" name="expenseReimbursePerDiem" value="PerDiem" checked>Per Diem Allowance';
	}
	else
	{
		$expenseOutput2 = '<input type="checkbox" name="expenseReimbursePerDiem" value="PerDiem">Per Diem Allowance';
	}
	
        
	if ($professionalDevelopment == 'profDevYes')
	{
		$profDevYes = '<input type="radio" name="professionalDevelopment" value="profDevYes" checked>Yes';
        $profDevNo = '<input type="radio" name="professionalDevelopment" value="profDevNo">No';
	}
	else
	{
		$profDevYes = '<input type="radio" name="professionalDevelopment" value="profDevYes">Yes';
        $profDevNo = '<input type="radio" name="professionalDevelopment" value="profDevNo" checked>No';
	}

	$totalMileagePrice = sprintf('%.2f', ($totalMiles * 0.5));
	
	$perDiemDepartureTime = strtotime($perDiemDeparture);
	$perDiemReturnTime = strtotime($perDiemReturn);
	$totalPerDiemHours = abs($perDiemReturnTime - $perDiemDepartureTime)/(60*60);
	$totalPerDiem = sprintf('%.2f', (($perDiemRate * $totalPerDiemHours)/24));
	$totalPerDiemAdvance = sprintf('%.2f', ($totalPerDiem * 0.9));


	$totalActualExpense = sprintf('%.2f', ($actualHotelCosts + $actualFoodCosts + $incidentalCosts));

	$totalMisc = sprintf('%.2f', ($miscItem1Value + $miscItem2Value + $miscItem3Value + $miscItem4Value + $miscItem5Value));

	$totalAdvanceRequested = sprintf('%.2f', ($totalMileagePrice + $totalPerDiemAdvance + $totalActualExpense + $totalMisc));

}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?> 


<!DOCTYPE html>
<HTML>
	<HEAD>
		<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<TITLE>travel_advance_form</TITLE>

		<STYLE type="text/css">
			@media print {
				#printPageButton {
					display: none;
				}
			}
			body {margin-top: 0px;margin-left: 0px;}

			#page_1 {position:relative; overflow: hidden;margin: 70px 0px 103px 71px;padding: 0px;border: none;width: 745px;}
			#page_1 #id1_1 {border:none;margin: 0px 0px 0px 1px;padding: 0px;border:none;width: 744px;overflow: hidden;}
			#page_1 #id1_2 {border:none;margin: 11px 0px 0px 4px;padding: 0px;border:none;width: 741px;overflow: hidden;}

			#page_1 #p1dimg1 {position:absolute;top:286px;left:0px;z-index:-1;width:642px;height:581px;}
			#page_1 #p1dimg1 #p1img1 {width:642px;height:581px;}




			#page_2 {position:relative; overflow: hidden;margin: 116px 0px 87px 72px;padding: 0px;border: none;width: 744px;}
			#page_2 #id2_1 {border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 744px;overflow: hidden;}
			#page_2 #id2_2 {border:none;margin: 15px 0px 0px 3px;padding: 0px;border:none;width: 741px;overflow: hidden;}
			#page_2 #id2_2 #id2_2_1 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 547px;overflow: hidden;}
			#page_2 #id2_2 #id2_2_2 {float:left;border:none;margin: 0px 0px 0px 0px;padding: 0px;border:none;width: 194px;overflow: hidden;}
			#page_2 #id2_3 {border:none;margin: 51px 0px 0px 3px;padding: 0px;border:none;width: 637px;overflow: hidden;}

			#page_2 #p2dimg1 {position:absolute;top:262px;left:0px;z-index:-1;width:640px;height:553px;}
			#page_2 #p2dimg1 #p2img1 {width:640px;height:553px;}




			.ft0{font: 14px 'Arial';line-height: 16px;}
			.ft1{font: 12px 'Arial';line-height: 15px;}
			.ft2{font: 1px 'Arial';line-height: 1px;}
			.ft3{font: 11px 'Helvetica';line-height: 14px;}
			.ft4{font: 1px 'Arial';line-height: 6px;}
			.ft5{font: 1px 'Arial';line-height: 7px;}
			.ft6{font: 11px 'Arial';line-height: 14px;}
			.ft7{font: 1px 'Arial';line-height: 8px;}
			.ft8{font: 1px 'Arial';line-height: 9px;}
			.ft9{font: bold 12px 'Arial';line-height: 15px;}
			.ft10{font: 11px 'Helvetica';line-height: 14px;position: relative;}
			.ft11{font: 9px 'Arial';line-height: 12px;}
			.ft12{font: 10px 'Arial';line-height: 13px;position: relative; bottom: -3px;}
			.ft13{font: italic bold 12px 'Arial';line-height: 15px;}
			.ft14{font: 11px 'Arial';text-decoration: underline;color: #0000ff;line-height: 15px;}
			.ft15{font: bold 11px 'Arial';text-decoration: underline;line-height: 15px;}
			.ft16{font: 11px 'Arial';line-height: 15px;}
			.ft17{font: bold 12px 'Arial';line-height: 16px;}
			.ft18{font: italic 9px 'Arial';line-height: 12px;}
			.ft19{font: 1px 'Arial';line-height: 14px;}
			.ft20{font: 1px 'Arial';line-height: 13px;}
			.ft21{font: italic bold 11px 'Arial';line-height: 13px;}
			.ft22{font: 13px 'Helvetica';line-height: 16px;}
			.ft23{font: 12px 'Arial';line-height: 13px;}
			.ft24{font: 11px 'Arial';line-height: 13px;}
			.ft25{font: 13px 'Helvetica';line-height: 15px;}
			.ft26{font: 9px 'Helvetica';line-height: 12px;}
			.ft27{font: 12px 'Arial';line-height: 14px;}
			.ft28{font: 11px 'Helvetica';line-height: 13px;}
			.ft29{font: 12px 'Arial';text-decoration: underline;color: #0000ff;line-height: 15px;}
			.ft30{font: bold 11px 'Arial';line-height: 14px;}

			.p0{text-align: left;padding-left: 231px;margin-top: 0px;margin-bottom: 0px;}
			.p1{text-align: left;padding-left: 259px;margin-top: 2px;margin-bottom: 0px;}
			.p2{text-align: left;padding-left: 256px;margin-top: 2px;margin-bottom: 0px;}
			.p3{text-align: left;padding-left: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p4{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p5{text-align: right;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p6{text-align: right;padding-right: 50px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p7{text-align: left;padding-left: 14px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p8{text-align: center;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p9{text-align: right;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p10{text-align: right;padding-right: 85px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p11{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p12{text-align: left;padding-left: 70px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p13{text-align: right;padding-right: 84px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p14{text-align: left;padding-left: 186px;margin-top: 14px;margin-bottom: 0px;}
			.p15{text-align: left;padding-left: 220px;margin-top: 44px;margin-bottom: 0px;}
			.p16{text-align: left;padding-left: 3px;padding-right: 143px;margin-top: 15px;margin-bottom: 0px;}
			.p17{text-align: left;padding-left: 3px;padding-right: 164px;margin-top: 12px;margin-bottom: 0px;}
			.p18{text-align: left;padding-left: 3px;padding-right: 180px;margin-top: 0px;margin-bottom: 0px;}
			.p19{text-align: left;padding-left: 3px;padding-right: 124px;margin-top: 30px;margin-bottom: 0px;}
			.p20{text-align: right;padding-right: 66px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p21{text-align: left;padding-left: 66px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p22{text-align: right;padding-right: 56px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p23{text-align: left;margin-top: 0px;margin-bottom: 0px;}
			.p24{text-align: left;padding-left: 259px;margin-top: 0px;margin-bottom: 0px;}
			.p25{text-align: left;padding-left: 256px;margin-top: 1px;margin-bottom: 0px;}
			.p26{text-align: center;padding-left: 228px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p27{text-align: left;padding-left: 5px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p28{text-align: right;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p29{text-align: right;padding-right: 21px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p30{text-align: center;padding-right: 37px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p31{text-align: center;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p32{text-align: left;padding-left: 20px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p33{text-align: center;padding-left: 11px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p34{text-align: left;padding-left: 239px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p35{text-align: center;padding-right: 35px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p36{text-align: right;padding-right: 16px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p37{text-align: center;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p38{text-align: left;padding-left: 3px;margin-top: 42px;margin-bottom: 0px;}
			.p39{text-align: left;margin-top: 1px;margin-bottom: 0px;}
			.p40{text-align: left;margin-top: 0px;margin-bottom: 0px;}
			.p41{text-align: right;padding-right: 141px;margin-top: 0px;margin-bottom: 0px;}
			.p42{text-align: left;margin-top: 15px;margin-bottom: 0px;}
			.p43{text-align: left;padding-left: 60px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
			.p44{text-align: left;padding-left: 99px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}

			.td0{padding: 0px;margin: 0px;width: 120px;vertical-align: bottom;}
			.td1{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 90px;vertical-align: bottom;}
			.td2{padding: 0px;margin: 0px;width: 221px;vertical-align: bottom;}
			.td3{padding: 0px;margin: 0px;width: 79px;vertical-align: bottom;}
			.td4{padding: 0px;margin: 0px;width: 130px;vertical-align: bottom;}
			.td5{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
			.td6{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
			.td7{padding: 0px;margin: 0px;width: 36px;vertical-align: bottom;}
			.td8{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
			.td9{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
			.td10{padding: 0px;margin: 0px;width: 431px;vertical-align: bottom;}
			.td11{padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
			.td12{padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
			.td13{padding: 0px;margin: 0px;width: 210px;vertical-align: bottom;}
			.td14{padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
			.td15{padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
			.td16{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
			.td17{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 221px;vertical-align: bottom;}
			.td18{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 79px;vertical-align: bottom;}
			.td19{padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
			.td20{padding: 0px;margin: 0px;width: 90px;vertical-align: bottom;}
			.td21{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 431px;vertical-align: bottom;}
			.td22{padding: 0px;margin: 0px;width: 259px;vertical-align: bottom;}
			.td23{padding: 0px;margin: 0px;width: 172px;vertical-align: bottom;}
			.td24{padding: 0px;margin: 0px;width: 150px;vertical-align: bottom;background: #000000;}
			.td25{padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;background: #000000;}
			.td26{padding: 0px;margin: 0px;width: 172px;vertical-align: bottom;background: #000000;}
			.td27{padding: 0px;margin: 0px;width: 126px;vertical-align: bottom;background: #000000;}
			.td28{padding: 0px;margin: 0px;width: 209px;vertical-align: bottom;}
			.td29{padding: 0px;margin: 0px;width: 316px;vertical-align: bottom;}
			.td30{padding: 0px;margin: 0px;width: 126px;vertical-align: bottom;}
			.td31{padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
			.td32{padding: 0px;margin: 0px;width: 282px;vertical-align: bottom;}
			.td33{padding: 0px;margin: 0px;width: 275px;vertical-align: bottom;}
			.td34{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 282px;vertical-align: bottom;}
			.td35{padding: 0px;margin: 0px;width: 113px;vertical-align: bottom;}
			.td36{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 162px;vertical-align: bottom;}
			.td37{padding: 0px;margin: 0px;width: 162px;vertical-align: bottom;}
			.td38{padding: 0px;margin: 0px;width: 164px;vertical-align: bottom;}
			.td39{padding: 0px;margin: 0px;width: 295px;vertical-align: bottom;}
			.td40{padding: 0px;margin: 0px;width: 51px;vertical-align: bottom;}
			.td41{padding: 0px;margin: 0px;width: 2px;vertical-align: bottom;}
			.td42{padding: 0px;margin: 0px;width: 33px;vertical-align: bottom;}
			.td43{padding: 0px;margin: 0px;width: 95px;vertical-align: bottom;}
			.td44{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 164px;vertical-align: bottom;}
			.td45{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 295px;vertical-align: bottom;}
			.td46{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 51px;vertical-align: bottom;}
			.td47{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 2px;vertical-align: bottom;}
			.td48{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 33px;vertical-align: bottom;}
			.td49{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
			.td50{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
			.td51{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 163px;vertical-align: bottom;background: #c0c0c0;}
			.td52{padding: 0px;margin: 0px;width: 348px;vertical-align: bottom;background: #c0c0c0;}
			.td53{padding: 0px;margin: 0px;width: 33px;vertical-align: bottom;background: #c0c0c0;}
			.td54{padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;background: #c0c0c0;}
			.td55{padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;background: #c0c0c0;}
			.td56{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 639px;vertical-align: bottom;background: #c0c0c0;}
			.td57{padding: 0px;margin: 0px;width: 181px;vertical-align: bottom;}
			.td58{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 2px;vertical-align: bottom;}
			.td59{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 128px;vertical-align: bottom;}
			.td60{padding: 0px;margin: 0px;width: 128px;vertical-align: bottom;}
			.td61{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 95px;vertical-align: bottom;}
			.td62{padding: 0px;margin: 0px;width: 459px;vertical-align: bottom;}
			.td63{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 51px;vertical-align: bottom;}
			.td64{padding: 0px;margin: 0px;width: 153px;vertical-align: bottom;}
			.td65{padding: 0px;margin: 0px;width: 38px;vertical-align: bottom;}
			.td66{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 130px;vertical-align: bottom;}

			.tr0{height: 24px;}
			.tr1{height: 23px;}
			.tr2{height: 17px;}
			.tr3{height: 6px;}
			.tr4{height: 7px;}
			.tr5{height: 29px;}
			.tr6{height: 28px;}
			.tr7{height: 20px;}
			.tr8{height: 8px;}
			.tr9{height: 9px;}
			.tr10{height: 37px;}
			.tr11{height: 35px;}
			.tr12{height: 1px;}
			.tr13{height: 15px;}
			.tr14{height: 30px;}
			.tr15{height: 47px;}
			.tr16{height: 16px;}
			.tr17{height: 21px;}
			.tr18{height: 25px;}
			.tr19{height: 18px;}
			.tr20{height: 19px;}
			.tr21{height: 14px;}
			.tr22{height: 13px;}
			.tr23{height: 43px;}
			.tr24{height: 26px;}
			.tr25{height: 22px;}

			.t0{width: 640px;margin-top: 22px;font: 11px 'Helvetica';}
			.t1{width: 454px;margin-left: 3px;margin-top: 13px;font: 9px 'Arial';}
			.t2{width: 557px;margin-top: 1px;font: 12px 'Arial';}
			.t3{width: 640px;margin-top: 27px;font: 12px 'Arial';}
			.t4{width: 637px;font: 12px 'Arial';}

		</STYLE>
	</HEAD>

	<BODY>
		<DIV id="page_1">
			<DIV id="p1dimg1">
			<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAJFAoMDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD1/wAPf8hzxZ/2FY//AEita6Cuf8Pf8hzxZ/2FY/8A0ita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/Bv/IDuf+wrqX/pbNRR4N/5Adz/ANhXUv8A0tmooAPD3/Ic8Wf9hWP/ANIrWugrn/D3/Ic8Wf8AYVj/APSK1roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOf8G/8AIDuf+wrqX/pbNRR4N/5Adz/2FdS/9LZqKADw9/yHPFn/AGFY/wD0ita6Cuf8Pf8AIc8Wf9hWP/0ita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/AAb/AMgO5/7Cupf+ls1FHg3/AJAdz/2FdS/9LZqKADw9/wAhzxZ/2FY//SK1roK5/wAPf8hzxZ/2FY//AEita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/Bv/IDuf8AsK6l/wCls1FHg3/kB3P/AGFdS/8AS2aigA8Pf8hzxZ/2FY//AEita6Cuf8Pf8hzxZ/2FY/8A0ita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/Bv/IDuf+wrqX/pbNRR4N/5Adz/ANhXUv8A0tmooAPD3/Ic8Wf9hWP/ANIrWugrn/D3/Ic8Wf8AYVj/APSK1roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOf8G/8AIDuf+wrqX/pbNRR4N/5Adz/2FdS/9LZqKADw9/yHPFn/AGFY/wD0ita6Cuf8Pf8AIc8Wf9hWP/0ita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/AAb/AMgO5/7Cupf+ls1FHg3/AJAdz/2FdS/9LZqKADw9/wAhzxZ/2FY//SK1roK5/wAPf8hzxZ/2FY//AEita6CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn/Bv/IDuf8AsK6l/wCls1FHg3/kB3P/AGFdS/8AS2aigDH0nxZ4b0/xB4rivfEGlW0h1VcJNexoTttLdG4J7MrKfQqR1FbH/Cd+D/8Aoa9D/wDBjD/8VXQUUAc//wAJ34P/AOhr0P8A8GMP/wAVR/wnfg//AKGvQ/8AwYw//FV0FFAHP/8ACd+D/wDoa9D/APBjD/8AFUf8J34P/wChr0P/AMGMP/xVdBRQBz//AAnfg/8A6GvQ/wDwYw//ABVH/Cd+D/8Aoa9D/wDBjD/8VXQUUAc//wAJ34P/AOhr0P8A8GMP/wAVR/wnfg//AKGvQ/8AwYw//FV0FFAHP/8ACd+D/wDoa9D/APBjD/8AFUf8J34P/wChr0P/AMGMP/xVdBRQBz//AAnfg/8A6GvQ/wDwYw//ABVH/Cd+D/8Aoa9D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T/8AkCj/AIT7XP8AoWP/ACHqf/yBXoFFAHn/APwn2uf9Cx/5D1P/AOQKP+E+1z/oWP8AyHqf/wAgV6BRQB5//wAJ9rn/AELH/kPU/wD5Ao/4T7XP+hY/8h6n/wDIFegUUAef/wDCfa5/0LH/AJD1P/5Ao/4T7XP+hY/8h6n/APIFegUUAef/APCfa5/0LH/kPU//AJAo/wCE+1z/AKFj/wAh6n/8gV6BRQB5/wD8J9rn/Qsf+Q9T/wDkCj/hPtc/6Fj/AMh6n/8AIFegUUAef/8ACfa5/wBCx/5D1P8A+QKP+E+1z/oWP/Iep/8AyBXoFFAHn/8Awn2uf9Cx/wCQ9T/+QKP+E+1z/oWP/Iep/wDyBXoFFAHn/wDwn2uf9Cx/5D1P/wCQKP8AhPtc/wChY/8AIep//IFegUUAeH61+0I+iambKTwzBc/uopkmg1JtjpJGsikboFb7rjqBRXiHjL/kOW3/AGCtN/8ASKGigD6f8A/8jP4i/wCB/wDpy1KvQK8/8A/8jP4i/wCB/wDpy1KvQKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPiDxl/wAhy2/7BWm/+kUNFHjL/kOW3/YK03/0ihooA+n/AAD/AMjP4i/4H/6ctSr0CvP/AAD/AMjP4i/4H/6ctSr0CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigD4g8Zf8hy2/wCwVpv/AKRQ0UeMv+Q5bf8AYK03/wBIoaKAPp/wD/yM/iL/AIH/AOnLUq9Arz/wD/yM/iL/AIH/AOnLUq9AoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA+IPGX/ACHLb/sFab/6RQ0UeMv+Q5bf9grTf/SKGigD6f8AAP8AyM/iL/gf/py1KvQK8/8AAP8AyM/iL/gf/py1KvQKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPiDxl/yHLb/ALBWm/8ApFDRR4y/5Dlt/wBgrTf/AEihooA+n/AP/Iz+Iv8Agf8A6ctSr0CvP/AP/Iz+Iv8Agf8A6ctSr0CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigD4g8Zf8AIctv+wVpv/pFDRR4y/5Dlt/2CtN/9IoaKAPp/wAA/wDIz+Iv+B/+nLUq9Arz/wAA/wDIz+Iv+B/+nLUq9AoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA+IPGX/Ictv8AsFab/wCkUNFHjL/kOW3/AGCtN/8ASKGigD6f8A/8jP4i/wCB/wDpy1KvQK8/8A/8jP4i/wCB/wDpy1KvQKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPiDxl/wAhy2/7BWm/+kUNFHjL/kOW3/YK03/0ihooA+n/AAD/AMjP4i/4H/6ctSr0CvP/AAD/AMjP4i/4H/6ctSr0CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigD4g8Zf8hy2/wCwVpv/AKRQ0UeMv+Q5bf8AYK03/wBIoaKAPp/wD/yM/iL/AIH/AOnLUq9Arz/wD/yM/iL/AIH/AOnLUq9AoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA+IPGX/ACHLb/sFab/6RQ0UeMv+Q5bf9grTf/SKGigD6f8AAP8AyM/iL/gf/py1KvQK8/8AAP8AyM/iL/gf/py1KvQKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPiDxl/yHLb/ALBWm/8ApFDRR4y/5Dlt/wBgrTf/AEihooA+n/AP/Iz+Iv8Agf8A6ctSr0CvP/AP/Iz+Iv8Agf8A6ctSr0CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigD4g8Zf8AIctv+wVpv/pFDRR4y/5Dlt/2CtN/9IoaKAPofSbTxvpOqalfWujTxfbJZMRS2ltNsjNzcTJ8wv0y3+kNnjHAAzjJ2P7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigDz/wDtb4h/9An/AMplv/8ALKj+1viH/wBAn/ymW/8A8sq9AooA8/8A7W+If/QJ/wDKZb//ACyo/tb4h/8AQJ/8plv/APLKvQKKAPP/AO1viH/0Cf8AymW//wAsqP7W+If/AECf/KZb/wDyyr0CigD5Y8T/AAi8b6nrQnsNAna1jtLW2Rp7m2jdvKgjiLFRKwGShOMnrRX1PRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHj/jb46f8ACHeL77QP+Ec+2fZfL/f/AG7y926NX+75Zxjdjr2rn/8Ahpr/AKlH/wAqX/2qiigA/wCGmv8AqUf/ACpf/aqP+Gmv+pR/8qX/ANqoooAP+Gmv+pR/8qX/ANqo/wCGmv8AqUf/ACpf/aqKKAD/AIaa/wCpR/8AKl/9qo/4aa/6lH/ypf8A2qiigA/4aa/6lH/ypf8A2qj/AIaa/wCpR/8AKl/9qoooAP8Ahpr/AKlH/wAqX/2qj/hpr/qUf/Kl/wDaqKKAD/hpr/qUf/Kl/wDaqP8Ahpr/AKlH/wAqX/2qiigA/wCGmv8AqUf/ACpf/aqP+Gmv+pR/8qX/ANqoooAP+Gmv+pR/8qX/ANqo/wCGmv8AqUf/ACpf/aqKKAD/AIaa/wCpR/8AKl/9qo/4aa/6lH/ypf8A2qiigA/4aa/6lH/ypf8A2qj/AIaa/wCpR/8AKl/9qoooAP8Ahpr/AKlH/wAqX/2qj/hpr/qUf/Kl/wDaqKKAD/hpr/qUf/Kl/wDaqP8Ahpr/AKlH/wAqX/2qiigA/wCGmv8AqUf/ACpf/aqP+Gmv+pR/8qX/ANqoooAP+Gmv+pR/8qX/ANqo/wCGmv8AqUf/ACpf/aqKKAD/AIaa/wCpR/8AKl/9qo/4aa/6lH/ypf8A2qiigA/4aa/6lH/ypf8A2qj/AIaa/wCpR/8AKl/9qoooAP8Ahpr/AKlH/wAqX/2qvUPhx46/4WB4euNW/s77B5N21t5Xn+bnCI27O1f7+MY7UUUAdhRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAf//Z" id="p1img1"></DIV>


			<DIV id="id1_1">
				<P class="p0 ft0">Bay Mills Community College</P>
				<P class="p1 ft0">Travel Authorization</P>
				<P class="p2 ft0">Advance Requisition</P>
				<TABLE cellpadding=0 cellspacing=0 class="t0">
					<TR>
						<TD colspan=2 rowspan=2 class="tr0 td0"><P class="p3 ft1">Employee Name:</P></TD>
						<TD rowspan=2 class="tr1 td1"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=3 class="tr2 td2"><P class="p4 ft3">&nbsp;<?php echo $name;?></P></TD>
						<TD rowspan=2 class="tr0 td3"><P class="p5 ft1">Today's Date:</P></TD>
						<TD colspan=2 class="tr2 td4"><P class="p6 ft3"><?php echo date("d-m-Y"); ?></P></TD>
					</TR>
					<TR>
						<TD class="tr3 td5"><P class="p4 ft4">&nbsp;</P></TD>
						<TD class="tr3 td6"><P class="p4 ft4">&nbsp;</P></TD>
						<TD class="tr4 td7"><P class="p4 ft5">&nbsp;</P></TD>
						<TD class="tr3 td8"><P class="p4 ft4">&nbsp;</P></TD>
						<TD class="tr3 td9"><P class="p4 ft4">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=2 rowspan=2 class="tr5 td0"><P class="p3 ft1">Travel Destination:</P></TD>
						<TD rowspan=2 class="tr6 td1"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=3 class="tr7 td2"><P class="p7 ft3">&nbsp;&nbsp;<?php echo $travelDestination;?></P></TD>
						<TD rowspan=2 class="tr5 td3"><P class="p5 ft6">Travel Date(s):</P></TD>
						<TD colspan=2 class="tr7 td4"><P class="p8 ft3"><?php echo $travelDates; ?></P></TD>
					</TR>
					<TR>
						<TD class="tr8 td5"><P class="p4 ft7">&nbsp;</P></TD>
						<TD class="tr8 td6"><P class="p4 ft7">&nbsp;</P></TD>
						<TD class="tr9 td7"><P class="p4 ft8">&nbsp;</P></TD>
						<TD class="tr8 td8"><P class="p4 ft7">&nbsp;</P></TD>
						<TD class="tr8 td9"><P class="p4 ft7">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=6 class="tr5 td10"><P class="p3 ft1">Purpose of Travel (briefly explain where you are going and why)</P></TD>
						<TD class="tr5 td3"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td11"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td12"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=3 class="tr10 td13"><P class="p3 ft3">&nbsp;&nbsp;&nbsp;<?php echo $travelPurpose; ?></P></TD>
						<TD class="tr10 td14"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr10 td15"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr10 td7"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr10 td3"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr10 td11"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr10 td12"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr11 td16"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr11 td16"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr11 td1"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=3 class="tr11 td17"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr11 td18"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr11 td8"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr11 td9"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr5 td19"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td19"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td20"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=3 class="tr5 td2"><P class="p7 ft9">Attach Meeting Agenda if Available</P></TD>
						<TD class="tr5 td3"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td11"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td12"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=6 class="tr6 td21"><P class="p3 ft1">Method of Transportation: <SPAN class="ft10">&nbsp;&nbsp;<?php echo $transportationMethod; ?></SPAN></P></TD>
						<TD class="tr6 td18"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr6 td8"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr6 td9"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=4 class="tr5 td22"><P class="p3 ft6">Is any expense directly paid by another agency?</P></TD>
						<TD colspan=2 class="tr5 td23"><P class="p4 ft1">(hotel, meals or transportation)</P></TD>
						<TD class="tr5 td3"><P class="p9 ft11"><?php echo $ePAYOutput1; ?></P></TD>
						<TD colspan=2 class="tr5 td4"><P class="p10 ft11"><?php echo $ePAYOutput2; ?></P></TD>
					</TR>
					<TR>
						<TD colspan=4 class="tr5 td22"><P class="p3 ft6">Is any expense reimbursable for another agency?</P></TD>
						<TD class="tr5 td15"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td7"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td3"><P class="p9 ft11"><?php echo $eRAYOutput1; ?></P></TD>
						<TD colspan=2 class="tr5 td4"><P class="p10 ft11"><?php echo $eRAYOutput2; ?></P></TD>
					</TR>
					<TR>
						<TD colspan=3 class="tr5 td13"><P class="p11 ft3"><SPAN class="ft12">If so, who? </SPAN>&nbsp;&nbsp;&nbsp;<?php echo $eRAExplanation; ?></P></TD>
						<TD class="tr5 td14"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td15"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td7"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td3"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td11"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr5 td12"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr12 td19"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=2 class="tr12 td24"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr12 td25"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=2 class="tr12 td26"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=2 class="tr12 td27"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr12 td12"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD colspan=3 class="tr2 td13"><P class="p3 ft6">What is their method of reimbursement?</P></TD>
						<TD class="tr2 td14"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=2 class="tr2 td23"><P class="p12 ft11"><?php echo $expenseOutput1; ?></P></TD>
						<TD colspan=3 class="tr2 td28"><P class="p13 ft11"><?php echo $expenseOutput2; ?></P></TD>
					</TR>
				</TABLE>
				<P class="p14 ft13">Attach copies of reimbursement documentation</P>
				<P class="p15 ft9">Professional Development Activities</P>
				<P class="p16 ft1">Professional development includes a broad range of topics and activities that expands your professional knowledge, competence, skills, or effectiveness.</P>
				<TABLE cellpadding=0 cellspacing=0 class="t1">
					<TR>
						<TD class="tr2 td29"><P class="p4 ft1">Is this travel for professional development?</P></TD>
						<TD class="tr2 td30"><P class="p4 ft11"><?php echo $profDevYes; ?></P></TD>
						<TD class="tr2 td31"><P class="p4 ft11"><?php echo $profDevNo; ?></P></TD>
					</TR>
				</TABLE>
				<P class="p17 ft16">When you come back from your trip, you will need to enter the professional development activity in Taskstream <SPAN class="ft14">(www.taskstream.com) </SPAN><SPAN class="ft15">before</SPAN> receiving payment on the travel expense statement. Please provide the</P>
				<P class="p18 ft1">total cost of the training, a narrative explaining the nature of the professional development, what you learned, how it will benefit you at work, and specifically, how it will affect student success outcomes.</P>
				<P class="p19 ft17">I agree to reconcile my travel expenses with this advance within 5 days of my travel date. Failure to file a travel statement and to repay any overage received will result in the total travel advance or overage being deducted from my next payroll check(s).</P>
				<TABLE cellpadding=0 cellspacing=0 class="t2">
					<TR>
						<TD class="tr2 td32"><P class="p4 ft2">&nbsp;</P></TD>
						<TD colspan=2 class="tr2 td33"><P class="p20 ft3"><?php echo date("d-m-Y"); ?></P></TD>
					</TR>
					<TR>
						<TD class="tr4 td34"><P class="p4 ft5">&nbsp;</P></TD>
						<TD rowspan=2 class="tr1 td35"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr4 td36"><P class="p4 ft5">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr13 td32"><P class="p3 ft1">Employee Signature</P></TD>
						<TD class="tr13 td37"><P class="p21 ft1">Date</P></TD>
					</TR>
					<TR>
						<TD class="tr14 td34"><P class="p4 ft2">&nbsp;</P></TD>
						<TD rowspan=2 class="tr15 td35"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr14 td36"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr16 td32"><P class="p3 ft1">Supervisor Signature</P></TD>
						<TD class="tr16 td37"><P class="p21 ft1">Date</P></TD>
					</TR>
					<TR>
						<TD class="tr17 td32"><P class="p3 ft3"><?php echo $programCharged; ?></P></TD>
						<TD colspan=2 class="tr17 td33"><P class="p22 ft3">$ <?php echo $totalAdvanceRequested; ?></P></TD>
					</TR>
					<TR>
						<TD class="tr8 td34"><P class="p4 ft7">&nbsp;</P></TD>
						<TD rowspan=2 class="tr18 td35"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr8 td36"><P class="p4 ft7">&nbsp;</P></TD>
					</TR>
					<TR>
						<TD class="tr16 td32"><P class="p3 ft1">Program to be charged/GL account number</P></TD>
						<TD class="tr16 td37"><P class="p21 ft1">Amount</P></TD>
					</TR>
					<TR>
						<TD class="tr19 td32"><P class="p3 ft3"></P></TD>
						<TD class="tr19 td35"><P class="p4 ft2">&nbsp;</P></TD>
						<TD class="tr19 td37"><P class="p4 ft2">&nbsp;</P></TD>
					</TR>
				</TABLE>
			</DIV>

			<DIV id="id1_2">
				<P class="p23 ft18"><SPAN class="ft1">Accountant Initials </SPAN>(Ok on Program to Charge/Line Item)</P>
			</DIV>
		</DIV>

		<DIV id="page_2">
			<DIV id="p2dimg1">
				<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAIoAn8DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD3+iiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooA5/wD4QTwf/wBCpof/AILof/iaP+EE8H/9Cpof/guh/wDia6CigDn/APhBPB//AEKmh/8Aguh/+Jo/4QTwf/0Kmh/+C6H/AOJroKKAOf8A+EE8H/8AQqaH/wCC6H/4mj/hBPB//QqaH/4Lof8A4mugooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKK5//AIQ3S/8An61z/wAHt7/8eo/4Q3S/+frXP/B7e/8Ax6gDoKK5/wD4Q3S/+frXP/B7e/8Ax6j/AIQ3S/8An61z/wAHt7/8eoA6Ciuf/wCEN0v/AJ+tc/8AB7e//HqP+EN0v/n61z/we3v/AMeoA6Ciuf8A+EN0v/n61z/we3v/AMeo/wCEN0v/AJ+tc/8AB7e//HqAOgorn/8AhDdL/wCfrXP/AAe3v/x6j/hDdL/5+tc/8Ht7/wDHqAOgorn/APhDdL/5+tc/8Ht7/wDHqP8AhDdL/wCfrXP/AAe3v/x6gDoKK5//AIQ3S/8An61z/wAHt7/8eo/4Q3S/+frXP/B7e/8Ax6gDoKK5/wD4Q3S/+frXP/B7e/8Ax6j/AIQ3S/8An61z/wAHt7/8eoA6Ciuf/wCEN0v/AJ+tc/8AB7e//HqP+EN0v/n61z/we3v/AMeoA6Ciuf8A+EN0v/n61z/we3v/AMeo/wCEN0v/AJ+tc/8AB7e/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ItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUVz/wBs8Yf9ALQ//BzN/wDItH2zxh/0AtD/APBzN/8AItAHQUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAf/2Q==" id="p2img1"></DIV>


				<DIV id="id2_1">
					<P class="p0 ft0">Bay Mills Community College</P>
					<P class="p24 ft0">Travel Authorization</P>
					<P class="p25 ft0">Advance Requisition</P>
					<TABLE cellpadding=0 cellspacing=0 class="t3">
						<TR>
							<TD class="tr20 td38"><P class="p3 ft9">MILEAGE:</P></TD>
							<TD class="tr20 td39"><P class="p26 ft6">Total miles</P></TD>
							<TD class="tr20 td40"><P class="p27 ft3"><?php echo $totalMiles; ?></P></TD>
							<TD class="tr20 td41"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr20 td42"><P class="p28 ft3">0.50</P></TD>
							<TD colspan=2 class="tr20 td43"><P class="p29 ft3">$ <?php echo $totalMileagePrice; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr21 td44"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td45"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr22 td46"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr22 td47"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr21 td48"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td49"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr22 td50"><P class="p4 ft20">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD class="tr21 td51"><P class="p4 ft19">&nbsp;</P></TD>
							<TD colspan=3 class="tr21 td52"><P class="p30 ft6">COMPLETE EITHER PER DIEM OR ACTUAL - NOT BOTH</P></TD>
							<TD class="tr21 td53"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td54"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td55"><P class="p4 ft19">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD colspan=7 class="tr13 td56"><P class="p31 ft21"><NOBR>EXCEPTION-USE</NOBR> STANDARD PER DIEM MEALS/INCIDENTALS ($55 IN 2019) AND ACTUAL HOTEL COSTS</P></TD>
						</TR>
						<TR>
							<TD class="tr23 td38"><P class="p3 ft9">PER DIEM</P></TD>
							<TD class="tr23 td39"><P class="p4 ft2">&nbsp;</P></TD>
							<TD colspan=5 class="tr23 td57"><P class="p32 ft9">HOTEL RECEIPT REQUIRED</P></TD>
						</TR>
						<TR>
							<TD class="tr14 td38"><P class="p3 ft1">Date and time of Departure</P></TD>
							<TD class="tr14 td39"><P class="p33 ft6">Date (m/d/yy) and Time (h:M tt):</P></TD>
							<TD class="tr14 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr5 td58"><P class="p4 ft2">&nbsp;</P></TD>
							<TD colspan=3 class="tr5 td59"><P class="p31 ft22"><?php echo date("m/d/Y h:i A", $perDiemDepartureTime); ?></P></TD>
						</TR>
						<TR>
							<TD class="tr22 td38"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr22 td39"><P class="p34 ft23">Example:</P></TD>
							<TD class="tr22 td40"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr22 td41"><P class="p4 ft20">&nbsp;</P></TD>
							<TD colspan=3 class="tr22 td60"><P class="p31 ft24">7/11/19 4:06 PM</P></TD>
						</TR>
						<TR>
							<TD class="tr16 td38"><P class="p3 ft1">Date and time of Return</P></TD>
							<TD class="tr16 td39"><P class="p33 ft6">Date (m/d/yy) and Time (h:M tt):</P></TD>
							<TD class="tr16 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr13 td58"><P class="p4 ft2">&nbsp;</P></TD>
							<TD colspan=3 class="tr13 td59"><P class="p31 ft25"><?php echo date("m/d/Y h:i A", $perDiemReturnTime); ?></P></TD>
						</TR>
						<TR>
							<TD class="tr13 td38"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr13 td39"><P class="p34 ft1">Example:</P></TD>
							<TD class="tr13 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr13 td41"><P class="p4 ft2">&nbsp;</P></TD>
							<TD colspan=3 class="tr13 td60"><P class="p31 ft6">7/12/19 8:15 AM</P></TD>
						</TR>
						<TR>
							<TD class="tr5 td38"><P class="p3 ft1">Total Number of Hours</P></TD>
							<TD class="tr5 td39"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr5 td40"><P class="p27 ft1"></P></TD>
							<TD class="tr6 td58"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr6 td48"><P class="p4 ft2">&nbsp;</P></TD>
							<TD colspan=2 class="tr6 td61"><P class="p35 ft3"><?php echo $totalPerDiemHours; ?></P></TD>
						</TR>
						<TR>
							<TD colspan=2 class="tr21 td62"><P class="p3 ft27">Per Diem Rate from www.gsa.gov</P></TD>
							<TD class="tr21 td40"><P class="p36 ft27"></P></TD>
							<TD class="tr22 td58"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr22 td48"><P class="p4 ft20">&nbsp;</P></TD>
							<TD colspan=2 class="tr22 td61"><P class="p35 ft3">$ <?php echo $perDiemRate; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr16 td38"><P class="p3 ft9">Total Per Diem</P></TD>
							<TD class="tr16 td39"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr16 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr13 td58"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr13 td48"><P class="p4 ft2">&nbsp;</P></TD>
							<TD colspan=2 class="tr13 td61"><P class="p35 ft3">$ <?php echo $totalPerDiem; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr24 td38"><P class="p3 ft9">Per Diem Rate Information:</P></TD>
							<TD class="tr24 td39"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr24 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr24 td41"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr24 td42"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr24 td31"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr24 td12"><P class="p4 ft2">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD colspan=2 class="tr16 td62"><P class="p3 ft29"><NOBR>https://www.gsa.gov/travel/plan-book/per-diem-rates/per-diem-rates-lookup</NOBR></P></TD>
							<TD class="tr16 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr16 td41"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr16 td42"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr16 td31"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr16 td12"><P class="p4 ft2">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD class="tr21 td44"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td45"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td63"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td58"><P class="p4 ft19">&nbsp;</P></TD>
							<TD colspan=3 class="tr21 td59"><P class="p4 ft19">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD class="tr5 td38"><P class="p3 ft9">ACTUAL</P></TD>
							<TD class="tr5 td39"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr5 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr5 td41"><P class="p4 ft2">&nbsp;</P></TD>
							<TD colspan=3 class="tr5 td60"><P class="p37 ft9">RECEIPTS REQUIRED</P></TD>
						</TR>
						<TR>
							<TD class="tr5 td38"><P class="p3 ft1">Total Hotel Costs</P></TD>
							<TD class="tr5 td39"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr5 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr6 td58"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr6 td48"><P class="p4 ft2">&nbsp;</P></TD>
							<TD colspan=2 class="tr6 td61"><P class="p35 ft3">$ <?php echo $actualHotelCosts; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr21 td38"><P class="p3 ft27">Total Food Costs</P></TD>
							<TD class="tr21 td39"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td40"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr22 td58"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr22 td48"><P class="p4 ft20">&nbsp;</P></TD>
							<TD colspan=2 class="tr22 td61"><P class="p35 ft28">$ <?php echo $actualFoodCosts; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr13 td38"><P class="p3 ft1">Total Incidentals</P></TD>
							<TD class="tr13 td39"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr13 td40"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr21 td58"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td48"><P class="p4 ft19">&nbsp;</P></TD>
							<TD colspan=2 class="tr21 td61"><P class="p35 ft3">$ <?php echo $incidentalCosts; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr21 td38"><P class="p3 ft30">Total Cost of Actual Expense</P></TD>
							<TD class="tr21 td39"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td40"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr22 td58"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr22 td48"><P class="p4 ft20">&nbsp;</P></TD>
							<TD colspan=2 class="tr22 td61"><P class="p35 ft28">$ <?php echo $totalActualExpense; ?></P></TD>
						</TR>
					</TABLE>
					<P class="p38 ft1"><SPAN class="ft9">MISCELLANEOUS </SPAN>(bridge, parking, taxi, etc.)</P>
				</DIV>
				<DIV id="id2_2">
					<DIV id="id2_2_1">
						<P class="p23 ft1">Item:</P>
						<P class="p39 ft3"><?php echo $miscItem1Name; ?></P>
						<P class="p39 ft3"><?php echo $miscItem2Name; ?></P>
						<P class="p39 ft3"><?php echo $miscItem3Name; ?></P>
						<P class="p23 ft3"><?php echo $miscItem4Name; ?></P>
						<P class="p39 ft3"><?php echo $miscItem5Name; ?></P>
						<br>
						<br>
						<br>
						<br>
						<br>
						<P class="p40 ft9">Total Miscellaneous</P>
					</DIV>
					<DIV id="id2_2_2">
						<P class="p41 ft1">Amount:</P>
						<P class="p39 ft3">$ <?php echo $miscItem1Value; ?></P>
						<P class="p39 ft3">$ <?php echo $miscItem2Value; ?></P>
						<P class="p39 ft3">$ <?php echo $miscItem3Value; ?></P>
						<P class="p23 ft3">$ <?php echo $miscItem4Value; ?></P>
						<P class="p39 ft3">$ <?php echo $miscItem5Value; ?></P>
						<P class="p42 ft3">$ <?php echo $totalMisc; ?></P>
					</DIV>
				</DIV>
				<DIV id="id2_3">
					<TABLE cellpadding=0 cellspacing=0 class="t4">
						<TR>
							<TD class="tr25 td29"><P class="p4 ft9">ADVANCE REQUISITION</P></TD>
							<TD class="tr25 td64"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr25 td65"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr25 td4"><P class="p4 ft2">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD rowspan=2 class="tr5 td29"><P class="p4 ft1">Mileage</P></TD>
							<TD class="tr17 td64"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr17 td65"><P class="p4 ft2">&nbsp;</P></TD>
							<TD rowspan=2 class="tr6 td66"><P class="p8 ft3">$ <?php echo $totalMileagePrice; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr8 td64"><P class="p4 ft7">&nbsp;</P></TD>
							<TD class="tr8 td65"><P class="p4 ft7">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD class="tr22 td29"><P class="p4 ft23">Room & Meals</P></TD>
							<TD class="tr22 td64"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr22 td65"><P class="p4 ft20">&nbsp;</P></TD>
							<TD class="tr22 td4"><P class="p4 ft20">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD class="tr16 td29"><P class="p43 ft1">If using Per Diem (90% on Advance)</P></TD>
							<TD class="tr16 td64"><P class="p44 ft1"></P></TD>
							<TD class="tr16 td65"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr13 td66"><P class="p8 ft3">$ <?php echo $totalPerDiemAdvance; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr21 td29"><P class="p43 ft27">If using Actual</P></TD>
							<TD class="tr21 td64"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr21 td65"><P class="p4 ft19">&nbsp;</P></TD>
							<TD class="tr22 td66"><P class="p8 ft3">$ <?php echo $totalActualExpense; ?></P></TD>
						</TR>
						<TR>
							<TD rowspan=2 class="tr13 td29"><P class="p4 ft1">Miscellaneous</P></TD>
							<TD class="tr3 td64"><P class="p4 ft4">&nbsp;</P></TD>
							<TD class="tr3 td65"><P class="p4 ft4">&nbsp;</P></TD>
							<TD rowspan=2 class="tr21 td66"><P class="p8 ft3">$ <?php echo $totalMisc; ?></P></TD>
						</TR>
						<TR>
							<TD class="tr9 td64"><P class="p4 ft8">&nbsp;</P></TD>
							<TD class="tr9 td65"><P class="p4 ft8">&nbsp;</P></TD>
						</TR>
						<TR>
							<TD class="tr5 td29"><P class="p4 ft9">Total Advance Requested</P></TD>
							<TD class="tr5 td64"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr5 td65"><P class="p4 ft2">&nbsp;</P></TD>
							<TD class="tr6 td66"><P class="p8 ft3">$ <?php echo $totalAdvanceRequested; ?></P></TD>
						</TR>
					</TABLE>
				</DIV>
		</DIV>

		<button id="printPageButton" onClick="window.print();">Save/Print this Form</button>
		</script>
	</BODY>
</HTML>