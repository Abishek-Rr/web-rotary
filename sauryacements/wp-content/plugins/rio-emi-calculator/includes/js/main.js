jQuery(document).ready(function($) {
  $( "#prncipleAmount" ).slider({
    range: "max",
    max: 100000000,
    slide: function( event, ui ) {
      $( "#amount" ).val(  ui.value );
    }
  });
  $( "#amount" ).val( $( "#prncipleAmount" ).slider( "values", 1 ) );
  //change slider with input field value
  $("#amount").keyup(function() {
    $("#prncipleAmount").slider("value", $(this).val());
  });
});
jQuery(document).ready(function($) {
  $( "#InterestRate" ).slider({
    range: "max",
    max: 100,
    slide: function( event, ui ) {
      $( "#inrate" ).val(  ui.value );
    }
  });
  $( "#inrate" ).val( $( "#InterestRate" ).slider( "values", 1 ) );
});
//prevent users from entering values greater than 100
jQuery(document).ready(function($) {
  $('#inrate').on('keydown keyup', function(e){
    if ($(this).val() > 100
    && e.keyCode !== 46 // keycode for delete
    && e.keyCode !== 8 // keycode for backspace
    ) {
      e.preventDefault();
    $(this).val(100);
  }
});
  $("#inrate").keyup(function() {
    $("#InterestRate").slider("value", $(this).val());
  });
});

jQuery(document).ready(function($) {
  $('#rio-emi-calculate').click(function() {
    if ($('#emiMonth').val() != 0)  {
      if($('#amount').val() != 0) {
        if ($('#inrate').val() != 0) {
          if ($("#years").prop("checked")) {
            months = $('#emiMonth').val();
            var month = months*12;
          } else if ($("#months").prop("checked")) {
            var month = $('#emiMonth').val();
          } else {
            var month = $('#emiMonth').val();
          }
          var rate = $("#inrate").val();
          var pamt = $("#amount").val();
          var pamt1 = parseFloat(pamt);
          var monthlyInterestRatio = (rate/100)/12;
          var monthlyInterest = (monthlyInterestRatio * pamt);
          var top = Math.pow((1 + monthlyInterestRatio), month);
          var emi = ((pamt * monthlyInterestRatio) * (top/(top-1)));
          var result = Math.round(emi);
          var totalAmount = Math.round(emi * month);
          var total_interest = Math.round(totalAmount - pamt);
          var total_interestRounded = Math.round(parseFloat((totalAmount - pamt)));
          var currency = $('#current_currency').val();
          var downPayment = Math.round(pamt * (20 / 100));

          if(currency == 'INR') {
            var result = result.toLocaleString('en-IN');
            var total_interest = total_interest.toLocaleString('en-IN');
            var totalAmount = totalAmount.toLocaleString('en-IN');
          }


          $("#result").empty();
          $("#result").append(result + ' ' + currency);
          $("#total_interest").empty();
          $("#total_interest").append(total_interest + ' ' + currency);
          $("#downPayment").empty();
          $("#downPayment").append(totalAmount + ' ' + currency);
          $('#charts').show();
          // Load google charts
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          // Draw the chart and set the chart values
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['EMI', 'Value Calculated'],
              ['Principal Amount', pamt1],
              ['Total Interest',total_interestRounded]
              ]);
            // Optional; add a title and set the width and height of the chart
            var options = { 'width': 500, 'height':240};
            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }
        } else {
          alert('Please Enter Interest Rate');
        }
      } else {
        alert('Please Enter Loan Amount');
      }
    }else {
      alert('Please Enter Loan Period');
    }
  });
  $('.number').bind('input propertychange', function () { var start = this.selectionStart,end = this.selectionEnd; $(this).val($(this).val().replace(/[^0-9/.]/g, '')); $(this).val($(this).val().slice(0, 10)); this.setSelectionRange(start, end); });
});
// show modal on button click
jQuery('document').ready(function($) {
  $('#charts').click(function() {
    $('#chart-modal').modal('show');
    $('.modal-backdrop').hide();
  });
});
// hide fields on reset
jQuery(document).ready(function($) {
  $('#reset').click(function() {
    var currency = $('#current_currency').val();
    $("#result").empty();
    $("#result").append('0' + ' ' + currency);
    $("#total_interest").empty();
    $("#total_interest").append('0' + ' ' + currency);
    $("#downPayment").empty();
    $("#downPayment").append('0' + ' ' + currency);
    $('#amount').val(0);
    $('#inrate').val(0);
    $('#emiMonth').val(0);
    $('#charts').hide();
    $('#chart-modal').modal('hide');
    // set sliders to initial position
    $("#prncipleAmount").slider("value", $("#prncipleAmount").slider("option", "min") );
    $("#InterestRate").slider("value", $("#InterestRate").slider("option", "min") );
  });
});
