<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Page level custom scripts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<!-- sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
input[type=text], select {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 90%;
  background-color: #0060cc;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0000e6;
}

.modal-form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
*, *:before, *:after {
     box-sizing: unset !important; 
}
.table tbody tr td:not(:first-child) {
  border: 1px solid #a7a7a7 !important;
  width: 1em !important;
  height:1em !important;
  border-radius: 26% !important;
}

.table tbody tr td:first-child {
  font-weight:bold !important;
}

.table tr td:4th-child {
  margin-right:2em !important;
}

.table {
  border-spacing: 3em !important;
}
.box {
  display: inline-block;
  height: 15px;
  width: 15px;
  margin-bottom: -3px;
  border: 1px;
  clear: both;
  margin-top: 7px;
  margin-left: 93px;
  margin-right: 6px;
}

.grey {
  background-color: grey;
}

.white {
  background-color: white;
}

.green {
  background-color: lightgreen;
}
.book {
    background-color: #0060cc;
    height: 43px;
    width: 12%;
    color: #fff;
    text-transform: none;
    letter-spacing: 0;
    min-width: 35px;
    margin: 5px 0;
    font-size: 15px;
    border: 1px;
}
.booked{
  background-color: grey !important;
}
</style>
</head>
<body>
<table class="table" id="Seats-list-table">
<center><h2>Book your Seats</h2></center>
<thead>
  <tr>
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
    <td>13</td>
    <td>14</td>
    <td>15</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="seat">A</td>
    <td class="seat" data-ticketNo="A1"></td>
    <td class="seat" data-ticketNo="A2"></td>
    <td class="seat" data-ticketNo="A3"></td>
    <td class="seat" data-ticketNo="A4"></td>
    <td class="seat" data-ticketNo="A5"></td>
    <td class="seat" data-ticketNo="A6"></td>
    <td class="seat" data-ticketNo="A7"></td>
    <td class="seat" data-ticketNo="A8"></td>
    <td class="seat" data-ticketNo="A9"></td>
    <td class="seat" data-ticketNo="A10"></td>
    <td class="seat" data-ticketNo="A11"></td>
    <td class="seat" data-ticketNo="A12"></td>
    <td class="seat" data-ticketNo="A13"></td>
    <td class="seat" data-ticketNo="A14"></td>
    <td class="seat" data-ticketNo="A15"></td>
  </tr>
  <tr>
    <td class="seat">B</td>
    <td class="seat" data-ticketNo="B1"></td>
    <td class="seat" data-ticketNo="B2"></td>
    <td class="seat" data-ticketNo="B3"></td>
    <td class="seat" data-ticketNo="B4"></td>
    <td class="seat" data-ticketNo="B5"></td>
    <td class="seat" data-ticketNo="B6"></td>
    <td class="seat" data-ticketNo="B7"></td>
    <td class="seat" data-ticketNo="B8"></td>
    <td class="seat" data-ticketNo="B9"></td>
    <td class="seat" data-ticketNo="B10"></td>
    <td class="seat" data-ticketNo="B11"></td>
    <td class="seat" data-ticketNo="B12"></td>
    <td class="seat" data-ticketNo="B13"></td>
    <td class="seat" data-ticketNo="B14"></td>
    <td class="seat" data-ticketNo="B15"></td>
  </tr>
  <tr>
    <td>C</td>
    <td class="seat" data-ticketNo="C1"></td>
    <td class="seat" data-ticketNo="C2"></td>
    <td class="seat" data-ticketNo="C3"></td>
    <td class="seat" data-ticketNo="C4"></td>
    <td class="seat" data-ticketNo="C5"></td>
    <td class="seat" data-ticketNo="C6"></td>
    <td class="seat" data-ticketNo="C7"></td>
    <td class="seat" data-ticketNo="C8"></td>
    <td class="seat" data-ticketNo="C9"></td>
    <td class="seat" data-ticketNo="C10"></td>
    <td class="seat" data-ticketNo="C11"></td>
    <td class="seat" data-ticketNo="C12"></td>
    <td class="seat" data-ticketNo="C13"></td>
    <td class="seat" data-ticketNo="C14"></td>
    <td class="seat" data-ticketNo="C15"></td>
  </tr>
  <tr>
    <td>D</td>
    <td class="seat" data-ticketNo="D1"></td>
    <td class="seat" data-ticketNo="D2"></td>
    <td class="seat" data-ticketNo="D3"></td>
    <td class="seat" data-ticketNo="D4"></td>
    <td class="seat" data-ticketNo="D5"></td>
    <td class="seat" data-ticketNo="D6"></td>
    <td class="seat" data-ticketNo="D7"></td>
    <td class="seat" data-ticketNo="D8"></td>
    <td class="seat" data-ticketNo="D9"></td>
    <td class="seat" data-ticketNo="D10"></td>
    <td class="seat" data-ticketNo="D11"></td>
    <td class="seat" data-ticketNo="D12"></td>
    <td class="seat" data-ticketNo="D13"></td>
    <td class="seat" data-ticketNo="D14"></td>
    <td class="seat" data-ticketNo="D15"></td>
  </tr>
  <tr>
    <td>E</td>
    <<td class="seat" data-ticketNo="E1"></td>
    <td class="seat" data-ticketNo="E2"></td>
    <td class="seat" data-ticketNo="E3"></td>
    <td class="seat" data-ticketNo="E4"></td>
    <td class="seat" data-ticketNo="E5"></td>
    <td class="seat" data-ticketNo="E6"></td>
    <td class="seat" data-ticketNo="E7"></td>
    <td class="seat" data-ticketNo="E8"></td>
    <td class="seat" data-ticketNo="E9"></td>
    <td class="seat" data-ticketNo="E10"></td>
    <td class="seat" data-ticketNo="E11"></td>
    <td class="seat" data-ticketNo="E12"></td>
    <td class="seat" data-ticketNo="E13"></td>
    <td class="seat" data-ticketNo="E14"></td>
    <td class="seat" data-ticketNo="15"></td>
  </tr>
  <tr>
    <td>F</td>
    <td class="seat" data-ticketNo="F1"></td>
    <td class="seat" data-ticketNo="F2"></td>
    <td class="seat" data-ticketNo="F3"></td>
    <td class="seat" data-ticketNo="F4"></td>
    <td class="seat" data-ticketNo="F5"></td>
    <td class="seat" data-ticketNo="F6"></td>
    <td class="seat" data-ticketNo="F7"></td>
    <td class="seat" data-ticketNo="F8"></td>
    <td class="seat" data-ticketNo="F9"></td>
    <td class="seat" data-ticketNo="F10"></td>
    <td class="seat" data-ticketNo="F11"></td>
    <td class="seat" data-ticketNo="F12"></td>
    <td class="seat" data-ticketNo="F13"></td>
    <td class="seat" data-ticketNo="F14"></td>
    <td class="seat" data-ticketNo="F15"></td>
  </tr>
  <tr>
    <td>G</td>
    <td class="seat" data-ticketNo="G1"></td>
    <td class="seat" data-ticketNo="G2"></td>
    <td class="seat" data-ticketNo="G3"></td>
    <td class="seat" data-ticketNo="G4"></td>
    <td class="seat" data-ticketNo="G5"></td>
    <td class="seat" data-ticketNo="G6"></td>
    <td class="seat" data-ticketNo="G7"></td>
    <td class="seat" data-ticketNo="G8"></td>
    <td class="seat" data-ticketNo="G9"></td>
    <td class="seat" data-ticketNo="G10"></td>
    <td class="seat" data-ticketNo="G11"></td>
    <td class="seat" data-ticketNo="G12"></td>
    <td class="seat" data-ticketNo="G13"></td>
    <td class="seat" data-ticketNo="G14"></td>
    <td class="seat" data-ticketNo="G15"></td>
  </tr>
  <tr>
    <td>H</td>
    <td class="seat" data-ticketNo="H1"></td>
    <td class="seat" data-ticketNo="H2"></td>
    <td class="seat" data-ticketNo="H3"></td>
    <td class="seat" data-ticketNo="H4"></td>
    <td class="seat" data-ticketNo="H5"></td>
    <td class="seat" data-ticketNo="H6"></td>
    <td class="seat" data-ticketNo="H7"></td>
    <td class="seat" data-ticketNo="H8"></td>
    <td class="seat" data-ticketNo="H9"></td>
    <td class="seat" data-ticketNo="H10"></td>
    <td class="seat" data-ticketNo="H11"></td>
    <td class="seat" data-ticketNo="H12"></td>
    <td class="seat" data-ticketNo="H13"></td>
    <td class="seat" data-ticketNo="H14"></td>
    <td class="seat" data-ticketNo="H15"></td>
  </tr>
  <tr>
    <td>I</td>
    <td class="seat" data-ticketNo="I1"></td>
    <td class="seat" data-ticketNo="I2"></td>
    <td class="seat" data-ticketNo="I3"></td>
    <td class="seat" data-ticketNo="I4"></td>
    <td class="seat" data-ticketNo="I5"></td>
    <td class="seat" data-ticketNo="I6"></td>
    <td class="seat" data-ticketNo="I7"></td>
    <td class="seat" data-ticketNo="I8"></td>
    <td class="seat" data-ticketNo="I9"></td>
    <td class="seat" data-ticketNo="I10"></td>
    <td class="seat" data-ticketNo="I11"></td>
    <td class="seat" data-ticketNo="I12"></td>
    <td class="seat" data-ticketNo="I13"></td>
    <td class="seat" data-ticketNo="I14"></td>
    <td class="seat" data-ticketNo="I15"></td>
  </tr>
  <input type="hidden" name="ticketNo" id="ticketNo" value=""/>
</tbody>
</table>

<div>
<center>
<button class="book" id="book">Book</button>
</center>
</div>

<div style="background-color:#eee; height: 32px;width: 100%;">
<center>
<div class='box white'></div> Available
<div class='box grey'></div> Sold
<div class='box green'></div> Selected
</center>
</div>
 <div id="myModal" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('myModal').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>BOOKING SUMMARY</h2>
      </header>
      <div class="modal-form">
        <form method="POST" id="bookingForm" name="bookingForm">
          {{ csrf_field() }} 
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">
          
          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Your email..">
         
          <label for="phone">Phone No</label>
          <input type="text" id="phone" name="phone" placeholder="Your phone..">

          <label for="tno">Ticket No</label>
          <input type="text" id="tno" name="tno" value="">
        
          <input type="submit" value="PROCEED" id="proceed" name="proceed">
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
      "type":"GET",
      "url": "{{url('/bookedData')}}",
      success: function(response) {
        console.log(response);
        

        response.forEach(function(response){
          var no = response['ticket_no'];
          var result = no.split(",");
          console.log(result);
          result.forEach(function(result){
            $("td").each(function(){
              if($(this).attr('data-ticketNo') == result){
                $(this).addClass('booked');

              }
            });
          });
        })
      }
    });
  $('.book').hide();
  
  $('.seat').on('click', function() {
    var tickets = $(this).attr("data-ticketNo");
    if($(this).hasClass('booked')){
      toastr.error("This Ticket are already Booked");
      swal({
          title: "Are you sure?",
          text: "Once unbooked, you will be loose your booking ticketNo!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
            "type": "GET",
            "url": "unbooked",
            "data": {"ticket_no":tickets},
            "dataType": "JSON",
              success: function(response) {
                  console.log(response);
                  $(this).removeClass('booked');
                  $(this).css("background-color", "white");
                  toastr.success('Ticket has been Unbooked successfully');
                  location.reload();
              },
              error: function(response){
                toastr.error(response['message']);
              }
            });
            } else {
            swal("Your Booking is safe!");
            }
        });
    }
    else{
      $(this).toggleClass('active');
      $('.book').show();
    }

    var ticketNo = jQuery('.active').map(function() { 
      return jQuery(this).attr("data-ticketNo");
    }).get();
    

    console.log(ticketNo);
    $(this).css("background-color", "#2dc492");
    $('#ticketNo').val(ticketNo);
    $('#tno').val(ticketNo);
  });

  $('.book').on('click', function() {
    $("#myModal").css("display","block");
  });

  $("#bookingForm").on('submit',function(e){
    e.preventDefault();
    $.ajax({
      "type":"POST",
      "url": "{{url('/getBooking')}}",
      "data":$("#bookingForm").serialize(),
      "dataType":"JSON",
      success: function(response) {
        toastr.error("Booking Done");
        var no = response['ticketNo'];
       
        var result = no.split(",");
        
         result.forEach(function(result){
          console.log(result);
          $("td").each(function(){
            if($(this).attr('data-ticketNo') == result){
              $(this).addClass('booked');
            }
          });
        });
        location.reload();
      }
    });
  });
});
</script>
</body>
</html>
