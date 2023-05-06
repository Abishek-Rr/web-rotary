jQuery(document).ready(function ($) {
	'use strict';
	
	var loanCalculatorChart = '';

	jQuery(".contact-book-btn").click(function(){
		jQuery(".contact-us-popup").show();
		jQuery('body').addClass('body-overflow-hidden');
	});

	function loan_calculation_process() {
		
		var loan_amount = jQuery("#loan_amount").val();
		loan_amount = parseFloat(loan_amount.replaceAll(",",""));
	
		var interest_rates = parseFloat(jQuery("#interest_rates").val());
		var ballon_amounts_per = jQuery("#ballon_amounts_per").val();
		var loan_terms_month = 0;
	
		jQuery("#loan_terms").val(Math.round(jQuery("#loan_terms").val()));
		var loan_terms =parseFloat(jQuery("#loan_terms").val());
		if(loan_terms > 0){
			loan_terms_month =loan_terms *12;
		}
		loan_terms_month =loan_terms;
		if(loan_terms > 36 ){
			if(ballon_amounts_per >20 ){
				jQuery("#ballon_amounts_per").val(20);
				jQuery("#ballon_amount_range").val(20)
			}
			document.getElementById("ballon_amount_range").max = "20";			
		}
		if(loan_terms <= 36){
			document.getElementById("ballon_amount_range").max = "50";
		}
	
		var ballon_amounts_per =jQuery("#ballon_amounts_per").val();
		if(ballon_amounts_per > 50) {
			jQuery("#ballon_amounts_per").val(50);
			ballon_amounts_per =50;
		}
    	var payment_type= jQuery("#payment_type").val();
    	var loan_advance_interest =0;
    	if(payment_type == "In Advance"){
			loan_advance_interest =parseFloat(loan_amount*interest_rates/(100 *12));	
			loan_amount =loan_amount- parseFloat(loan_amount*interest_rates/(100 *12));	
    	}    
	
		var ballon_amounts =parseFloat((parseFloat(loan_amount)+parseFloat(loan_advance_interest))*parseFloat(ballon_amounts_per))/100;
		jQuery("#bill_ballon_per").html(parseFloat(ballon_amounts_per).toFixed(2));
		jQuery("#bill_ballon_amt").html(addCommas(ballon_amounts.toFixed(2)));

		jQuery("#ballon_amounts").val(addCommas(ballon_amounts.toFixed(2)));
		
		if(parseFloat(ballon_amounts) >parseFloat(loan_amount)) {
			var new_ballon_amt =parseFloat((parseFloat(loan_amount)+parseFloat(loan_advance_interest))*parseFloat(ballon_amounts_per))/100;
			jQuery("#ballon_amounts").val(addCommas(new_ballon_amt.toFixed(2)));
			jQuery("#bill_ballon_amt").html(addCommas(ballon_amounts.toFixed(2)));
		}

		var ballon_amounts =jQuery("#ballon_amounts").val();
		ballon_amounts =ballon_amounts.replaceAll(",","");
		if(ballon_amounts == ""){
			ballon_amounts=0;
		}
		if(ballon_amounts > 0){
			jQuery("#ballon_amt_section").show();
		}
		else{
			jQuery("#ballon_amt_section").hide();
		}
		ballon_amounts_per= parseFloat(ballon_amounts_per);
		jQuery("#interest_rate_range_dis").html(jQuery("#interest_rates").val()+"% p.a.");
		jQuery("#ballon_amounts_per_dis").html(ballon_amounts_per.toFixed(2)+"%");
		
		var loan_amount_range = document.getElementById("loan_amount_range");
		var value = (loan_amount_range.value-loan_amount_range.min)/(loan_amount_range.max-loan_amount_range.min)*100
		loan_amount_range.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%,  #c9a208 100%)'

		var interest_rate_range = document.getElementById("interest_rate_range");
		var value = (interest_rate_range.value-interest_rate_range.min)/(interest_rate_range.max-interest_rate_range.min)*100
		interest_rate_range.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%,  #c9a208 100%)'

		var loan_terms_range = document.getElementById("loan_terms_range");
		var value = (loan_terms_range.value-loan_terms_range.min)/(loan_terms_range.max-loan_terms_range.min)*100
		loan_terms_range.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%,  #c9a208 100%)'
	
		var ballon_amount_range = document.getElementById("ballon_amount_range");
		var value = (ballon_amount_range.value-ballon_amount_range.min)/(ballon_amount_range.max-ballon_amount_range.min)*100
		ballon_amount_range.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%,  #c9a208 100%)'
		loan_terms =parseFloat(loan_terms/12).toFixed(2);
		loan_terms =parseFloat(loan_terms);

		var monthly_payment =((interest_rates /(100 * 12)) * (loan_amount-ballon_amounts)) / (1 - Math.pow(1 + interest_rates / 1200,  (-loan_terms_month)));
		monthly_payment= monthly_payment.toFixed(2);
		var total_interests =(monthly_payment * loan_terms_month) - loan_amount;
		var per_month_ballon_amt = 0;
		var ballon_amt_interest= 0;
		if(ballon_amounts > 0){
			ballon_amt_interest =(ballon_amounts*interest_rates/100);
			per_month_ballon_amt =ballon_amt_interest/12;
		}
		
		var loan_terms =jQuery("#loan_terms").val();
		loan_terms =parseFloat(loan_terms/12).toFixed(2);
		loan_terms =parseFloat(loan_terms);
		
		total_interests = parseFloat(total_interests) +parseFloat(ballon_amounts)+(parseFloat(ballon_amt_interest)*loan_terms);
		monthly_payment =parseFloat(monthly_payment) +parseFloat(per_month_ballon_amt);
		
		/* START: Total Fee Calculation */
		jQuery("#loan_terms_range").val(jQuery("#loan_terms").val());
		var monthly_fee =setting_data.monthly_rate;
		var application_fee =setting_data.application_fee;
		if(setting_data.calculation_fee_setting_enable ==1) {
			var total_regular_fee_amt = parseFloat(loan_terms)*120;
			total_regular_fee_amt =parseFloat(total_regular_fee_amt).toFixed(2);
			jQuery("#total_regular_fee_amt").html(total_regular_fee_amt);

			var total_fee =parseFloat(application_fee)+parseFloat(total_regular_fee_amt);
			jQuery("#total_fee_amt").html(total_fee);
		}
		/* END : Total Fee Calculation*/

		/* STRAT : Interests Field Fill*/		
		if( setting_data.calculation_fee_setting_enable ==1 ) {
			jQuery("#per_month_amount").html(addCommas(Math.round(parseFloat(monthly_payment)+parseFloat(monthly_fee))));
		} else {
			jQuery("#per_month_amount").html(addCommas(Math.round(parseFloat(monthly_payment))));
		}

		var display_year=loan_terms_month/12;
		var display_year_str="";
		var display_month ="";
		if(display_year >= 1) {
			display_month =loan_terms_month%12;
			if(display_month > 0) {
				display_year_str =parseInt(display_year)+ " <label>Years</label> "+display_month+" <label>Months</label> ";
			} else {
				display_year_str =Math.round(display_year)+ " <label>Years</label> ";
			}			
		}
		else {
			display_year_str =loan_terms_month+" Months ";
		}

		jQuery("#loan_amount_year").html(display_year_str);
		jQuery("#loan_amount_rate").html(interest_rates.toFixed(2));
		jQuery("#total_interests_amt").html(addCommas(Math.round(parseFloat(total_interests)-parseFloat(loan_advance_interest))));
		jQuery("#total_interests_years").html(display_year_str);
		/* END : Interests Field Fill*/

		/* START : Loan Table Section */
		var balance =loan_amount;
		var table_data ="";
		for(var i=0; i<=loan_terms_month; i++) {

			var interest = balance * interest_rates / 1200;
			var principal = monthly_payment - interest;
			table_data +='<tr>';
			table_data +='<td>'+i+'</td>';
			var display_monthly_payment =monthly_payment;
			if(i  == loan_terms_month){
				display_monthly_payment =parseFloat(display_monthly_payment) + parseFloat(ballon_amounts);
			}

			display_monthly_payment = display_monthly_payment.toFixed(2);
			if(interest < 0){
				interest =0;
			}
			if(i == 0){
				table_data +='<td>0.00</td>';
				table_data +='<td>0.00</td>';
			}else{
				table_data +='<td>-$'+display_monthly_payment+'</td>';
				table_data +='<td>$'+interest.toFixed(2)+'</td>';
			}
			if(i  == loan_terms_month){
				balance =balance - ballon_amounts;
			}
			var display_balance =balance;
			if(display_balance < 0 || (display_balance > 0 && display_balance < 1)){
				display_balance =0.00
			}
			display_balance=display_balance.toFixed(2);		
			table_data +='<td>$'+display_balance+'</td>';
			table_data +='</tr>';
			balance =balance - principal;
			
			
		}

		jQuery("#loan_table_data").html(table_data);
		/* END : Loan Table Section */

		/* START : Loan Chart Section */
		var balance_arr = [];
		var remainig_interests = [];
		var balance =loan_amount;
		var graph_type ="Years";
		if(loan_terms_month <= 12){
			graph_type ="Months";
		}
		graph_type ="Months";
		
		for(var p=1; p<=loan_terms_month; p++){
			if(p  ==1){
				remainig_interests.push(parseFloat(total_interests.toFixed(2)));
				balance_arr.push(parseFloat(balance.toFixed(2)));
			}
			var interest = balance * interest_rates / 1200;
			var principal =(monthly_payment - interest);
			if(p ==loan_terms_month ){
				balance =(balance - principal-ballon_amounts);
			}else{
				balance =(balance - principal);
			}
			
			var total_interests =(total_interests -interest);
			if(balance < 0 || (balance > 0 && balance < 1)){
				balance =0;
			}
			if(total_interests < 0 || (total_interests > 0 && total_interests < 1)){
				total_interests =0;
			}

			if(loan_terms_month > 120 ){
				if(p %12 ==0){
					remainig_interests.push(parseFloat(total_interests.toFixed(2)));
					balance_arr.push(parseFloat(balance.toFixed(2)));
				}

			}else{
				remainig_interests.push(parseFloat(total_interests.toFixed(2)));
				balance_arr.push(parseFloat(balance.toFixed(2)));
			}
			// total_interests
		}
		/* START : PREPARE CHART JS DATA */
		var loan_data =[];
		const interests = [];
		const principal_arr = [];
		const xData = [];

		for(var p=0; p<remainig_interests.length; p++) {		
			principal_arr.push(balance_arr[p]);
			interests.push(parseFloat(remainig_interests[p]) );
			xData.push(p);

		}
		
		 var ctx = document.getElementById("loan-process-graph").getContext("2d");

		const colors = {
		  green: {
		    fill: "#e0eadf",
		    stroke: "#5eb84d" },

		  lightBlue: {
		    stroke: "#6fccdd" },

		  darkBlue: {
		    fill: "#92bed2",
		    stroke: "#3282bf" },

		  purple: {
		    fill: "#8fa8c8",
		    stroke: "#75539e" } 
		  };
    const data = {
		    labels: xData,
		    datasets: [
		    {
		      label: "Interest",
		      fill: true,
		      backgroundColor: colors.purple.fill,
		      pointBackgroundColor: colors.purple.stroke,
		      borderColor: colors.purple.stroke,
		      pointHighlightStroke: colors.purple.stroke,
		      borderCapStyle: "butt",
		      data: interests },

		    {
		      label: "Principal",
		      fill: true,
		      backgroundColor: colors.darkBlue.fill,
		      pointBackgroundColor: colors.darkBlue.stroke,
		      borderColor: colors.darkBlue.stroke,
		      pointHighlightStroke: colors.darkBlue.stroke,
		      borderCapStyle: "butt",
		      data: principal_arr }

		    ] 
		  };
			Chart.Tooltip.positioners.custom = function(elements, position) {
			    console.log(elements);
			  //debugger;
			  return {
			    x: position.x,
			    y: position.y
			  }
			}

			if( loanCalculatorChart ) {
				loanCalculatorChart.destroy();
			}
			
       var ctx = "loan-process-graph";
	   loanCalculatorChart = new Chart(ctx, {
				  type: "line",
				  data: data,
				  options: {
				    title: {
				      display: true,
				      text: 'Loan Calculator',
				    },
				    layout: {
				      padding: 32
				    },
				    tooltips: {
				      mode: 'index',
				      intersect: true,
				      position: 'custom',
				      yAlign: 'bottom'
				    },
				    scales: {
				      xAxes: [{
				        stacked: true,
				        gridLines: {
					        display: false,
					      },
				       // display:false,
					       scaleLabel: {
			            display: true,
			            labelString: 'Term (Months)'
			          },
				      }],
				      yAxes: [{
				        stacked: true,
				        gridLines: {
					        display: false,
					      },
				       // display:false,
				       
				        scaleLabel: {
			            display: true,
			            labelString: 'Amount Owing ($)'
			          },
				      }]
				    }
				  },
				 });
		/* END : PREPARE CHART JS DATA */		
	
}
	/* END : Loan Calculation Process */
	
	/* START : Textbox Blur Event*/
	jQuery("#loan_amount").blur(function(){

		var loan_amount = jQuery("#loan_amount").val();

		jQuery("#loan_amount").val(addCommas(jQuery("#loan_amount").val()));
		loan_amount =loan_amount.replaceAll(",","");
		if(loan_amount == "" || loan_amount == "."){
			jQuery("#loan_amount").val(addCommas(setting_data.loan_amount_min_value));
		}
		if(parseFloat(loan_amount) < setting_data.loan_amount_min_value){
			jQuery("#loan_amount").val(addCommas(setting_data.loan_amount_min_value));

		}
		if(parseFloat(loan_amount) >= setting_data.loan_amount_max_value){
			jQuery("#loan_amount").val(addCommas(setting_data.loan_amount_max_value));
		}
		var loan_amount =jQuery("#loan_amount").val();
		loan_amount=loan_amount.replaceAll(",","");

		jQuery("#loan_amount_range").val(parseFloat(loan_amount));
		loan_calculation_process();
	});
	jQuery("#loan_terms").blur(function(){
		var loan_terms = jQuery("#loan_terms").val();
		if(loan_terms == "" || loan_terms == "."){
			jQuery("#loan_terms").val(setting_data.loan_term_min_value);
		}

		if(parseFloat(loan_terms) < setting_data.loan_term_min_value){
			jQuery("#loan_terms").val(setting_data.loan_term_min_value);

		}
		if(parseFloat(loan_terms) > setting_data.loan_term_max_value){
			jQuery("#loan_terms").val(setting_data.loan_term_max_value);
		}

		jQuery("#loan_terms_range").val(jQuery("#loan_terms").val());
		var monthly_fee =jQuery("#monthly_fee").val();
		var application_fee =jQuery("#application_fee").val();
		var loan_terms =jQuery("#loan_terms").val();
		var total_regular_fee_amt = parseFloat(loan_terms)*120;
		jQuery("#total_regular_fee_amt").html(total_regular_fee_amt);
		var total_fee =parseFloat(application_fee)+parseFloat(total_regular_fee_amt);
		jQuery("#total_fee_amt").html(total_fee);
		loan_calculation_process();
	});
	jQuery("#interest_rates").blur(function(){
		var interest_rates = jQuery("#interest_rates").val();
		if(interest_rates == "" || interest_rates == "."){
			jQuery("#interest_rates").val(parseFloat(setting_data.interest_rate_min_value).toFixed(2));
		}
		if(parseFloat(interest_rates) < setting_data.interest_rate_min_value){
			jQuery("#interest_rates").val(parseFloat(setting_data.interest_rate_min_value).toFixed(2));
		}
		if(parseFloat(interest_rates) > setting_data.interest_rate_max_value){
			jQuery("#interest_rates").val(parseFloat(setting_data.interest_rate_max_value).toFixed(2));
		}
		var interest_rates = jQuery("#interest_rates").val();
		jQuery("#interest_rates").val(parseFloat(interest_rates).toFixed(2));
		jQuery("#interest_rate_range").val(jQuery("#interest_rates").val());
		jQuery("#interest_rate_range_dis").html(jQuery("#interest_rates").val()+"% p.a.");
		loan_calculation_process();
	});
	jQuery("#ballon_amounts_per").blur(function(){
	jQuery("#ballon_amount_range").val(jQuery("#ballon_amounts_per").val());
		var loan_amount =jQuery("#loan_amount").val();
		loan_amount =loan_amount.replaceAll(",","");
		var ballon_amounts_per =jQuery("#ballon_amounts_per").val();
		var ballon_amounts =parseFloat(parseFloat(loan_amount)*parseFloat(ballon_amounts_per))/100;
		var ballon_amounts_per = jQuery("#ballon_amounts_per")
		if(ballon_amounts_per == "" || ballon_amounts_per == "."){
			jQuery("#ballon_amounts_per").val(0);
			ballon_amounts_per =0;
		}
		jQuery("#ballon_amounts").val(ballon_amounts);
		//jQuery("#bill_ballon_per").html(ballon_amounts_per);
		jQuery("#bill_ballon_amt").html(ballon_amounts);
		jQuery("#interest_rate_range_dis").html(jQuery("#interest_rates").val()+"% p.a.");
		jQuery("#ballon_amounts_per_dis").html(ballon_amounts_per+"%");
		loan_calculation_process();
	});

	jQuery("#ballon_amounts").blur(function() {
		
		jQuery("#ballon_amount_range").val(jQuery("#ballon_amounts_per").val());
		var loan_amount =jQuery("#loan_amount").val();
		loan_amount =loan_amount.replaceAll(",","");
		var ballon_amounts =jQuery("#ballon_amounts").val();
		if(ballon_amounts == "" || ballon_amounts == "."){
			jQuery("#ballon_amounts").val(0);
		}

		ballon_amounts= ballon_amounts.replaceAll(",","");

		if(ballon_amounts == "" || ballon_amounts == "."){
			ballon_amounts =0;
			ballon_amounts_per =0;
		} else {
			var ballon_amounts_per =parseFloat(parseFloat(ballon_amounts)*100/parseFloat(loan_amount));	
		}

		jQuery("#ballon_amounts_per").val(ballon_amounts_per);
		jQuery("#ballon_amount_range").val(ballon_amounts_per);
		jQuery("#bill_ballon_per").val(ballon_amounts_per);
		jQuery("#bill_ballon_amt").html(ballon_amounts);
		jQuery("#bill_ballon_per").html(ballon_amounts_per);
		jQuery("#ballon_amounts_per_dis").html(ballon_amounts_per+"%");
		loan_calculation_process();
	});
	/* END : Textbox Blur Event*/
	
	var loan_amount_range = document.getElementById("loan_amount_range");
	jQuery("#loan_amount").val(addCommas(loan_amount_range.value)); // Display the default slider value
	var value = (loan_amount_range.value-loan_amount_range.min)/(loan_amount_range.max-loan_amount_range.min)*100
	loan_amount_range.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%, white 100%)'

	// Update the current slider value (each time you drag the slider handle)
	loan_amount_range.oninput = function() {
		jQuery("#loan_amount").val(addCommas(this.value));
		loan_calculation_process();
	}

	var loan_terms_range = document.getElementById("loan_terms_range");
	jQuery("#loan_terms").val(loan_terms_range.value); // Display the default slider value
	var value = (loan_terms_range.value-loan_terms_range.min)/(loan_terms_range.max-loan_terms_range.min)*100
	loan_terms_range.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%, white 100%)'

	// Update the current slider value (each time you drag the slider handle)
	loan_terms_range.oninput = function() {
		jQuery("#loan_terms").val(this.value);
		var value = (this.value-this.min)/(this.max-this.min)*100
		this.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%, white 100%)'
		loan_calculation_process();
	}

	var interest_rate_range = document.getElementById("interest_rate_range");
	var interest_rate_range_val =parseFloat(interest_rate_range.value);
	jQuery("#interest_rates").val(interest_rate_range_val.toFixed(2));
	jQuery("#interest_rate_range_dis").html(interest_rate_range.value+"% p.a.");
	var value = (interest_rate_range.value-interest_rate_range.min)/(interest_rate_range.max-interest_rate_range.min)*100
	interest_rate_range.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%, white 100%)'
	// Update the current slider value (each time you drag the slider handle)
	interest_rate_range.oninput = function() {
		var interest_rate_range_val =parseFloat(this.value);
		jQuery("#interest_rates").val(interest_rate_range_val.toFixed(2));
		jQuery("#interest_rate_range_dis").html(this.value+"% p.a.");
		var value = (this.value-this.min)/(this.max-this.min)*100
		this.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%, white 100%)'
		loan_calculation_process();
	}

	var ballon_amount_range = document.getElementById("ballon_amount_range");
	jQuery("#ballon_amounts_per").val(ballon_amount_range.value);
	jQuery("#ballon_amounts_per_dis").html(ballon_amount_range.value+"%");
	var value = (ballon_amount_range.value-ballon_amount_range.min)/(ballon_amount_range.max-ballon_amount_range.min)*100
	ballon_amount_range.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%, white 100%)'
	
	// Update the current slider value (each time you drag the slider handle)
	ballon_amount_range.oninput = function() {
		jQuery("#ballon_amounts_per").val(this.value);
		jQuery("#ballon_amounts_per_dis").html(this.value+"%");
		var value = (this.value-this.min)/(this.max-this.min)*100
		this.style.background = 'linear-gradient(to right, #555555 0%, #555555 ' + value + '%, #fff ' + value + '%, white 100%)'
		loan_calculation_process();
	}

	/**
	 * Print Code
	 * 
	 */
	jQuery( '.print-table' ).click( function() {
		
		var body_html = jQuery( 'body' ).html();
		var interest_rates =jQuery('#interest_rates').val();
		var ballon_amounts_per =jQuery('#ballon_amounts_per').val();
		jQuery('#interest_rates').val('');
		jQuery('#ballon_amounts_per').val('');

		jQuery( 'body > :not(#main-sec)' ).hide(); //hide all nodes directly under the body
		jQuery( '#main-sec').appendTo( 'body' );

		window.print();
		jQuery( 'body > :not(#main-sec)' ).show();
		jQuery( 'body' ).html( body_html );
		jQuery('#interest_rates').val(interest_rates);
		jQuery('#ballon_amounts_per').val(ballon_amounts_per);
	});

	loan_calculation_process();
});

/* START : Add Commas in amonut function*/
function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
/* END : Add Commas in amonut function*/
/* START : Validation for only enter number with some special charcter */
function onlyNos(evt,txt_name) {

   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;            
   var keyCode = key;
   key = String.fromCharCode(key); 
   if(theEvent.key == "!" || theEvent.key == "@" || theEvent.key == "#" || theEvent.key == "$" || theEvent.key == "&" || theEvent.key == "%" || theEvent.key == "^" || theEvent.key == "*" || theEvent.key == ")" || theEvent.key == "("){
   		return false;
   }
   var txt_value =jQuery("#"+txt_name).val();
   if(txt_value.length >=1 && txt_value.charAt(0) =="." && theEvent.key =="."){
   	return false;
   }
   	
   if (key.length == 0) return;
   var regex = /^[0-9.,\b]+$/;            
   if(keyCode == 188 || keyCode == 190 || keyCode == 110 || keyCode ==9 || (keyCode >=96 && keyCode <=105)){
      return;
   }else{
      if (!regex.test(key)) {
      	 theEvent.returnValue = false;                
         if (theEvent.preventDefault) theEvent.preventDefault();
      }
    }    
 }
/* END : Validation for only enter number with some special charcter */