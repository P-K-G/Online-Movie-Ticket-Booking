<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Ticket</title>
</head>
<body >
<article style="text-align: left;font-size:20px;COLOR:black;  background: #DCDCDC;" class="ticket">
         <header class="ticket__wrapper">
          <div class="ticket__header">
		     
            <p id="text">
               <nav style="float:right;margin-right:-100px;margin-top:10px;">
			   <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACWCAMAAABThUXgAAAASFBMVEX///8AAAA2wP//wHAARqDT/////72IAAD1nT//4ZpTAAAAdcOzRgD//98AneMAAEh04f/WdQAAAHee//9GRkYAncLT/98AdZ9zyPHrAAACYElEQVR4nO3W23LaMBAAUAtSMJACbnr5/z+tV5IvCNKZvLpnH8CSJcGe0cruuhIppfVnifm66x6GNSPnnubuunO9SPNzL0c2A5q/9NmCL//kyx96Xv8fOXZNwIIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIFCxYsWLBgwYIF6wtYQojNx+mc0u3e7ctxccntdI07+/T2rZvbecAu+g/H+B5S6fj+nqc9za/rbioi83368ZEbfbpE+3Qes+zHnEesaJcxt/vpnMcNxajOGdJl9Lq28x/W3UrE9hmTrVsmkrzdazvvrPwxFIyypfZpjVUBu3b+et3NRB8Y446I6wmm1F8tw4hhqssR5nD8FQaHY7m5DHqcv153MzEeLVFmkVTdCENKjcM+Hz7jqLyj3n4XrJTPpnJWZcuH+at1NxSR7c+cVN44kXE+sxasyDsPjTLsa5VWjN14tO1KeTbzl3U3FqXMhvLQm8tnrsb55OnTn/fpqVfal9X4dv5cvpuKsjPKfupbrH6xqv3LuT228wGf+5/m13U3FHEe9fkRP+QMp/LqKtZUgzGmXmesqR2vDdOL13r+su6WIs6WyGnaBs1L6TCVXT+/lJadNbXzS+n1ef60rhDi/4i/iOJRJNeQa+AAAAAASUVORK5CYII=" height="30%" width="60%">
			   </nav>
			   <div><p><b STYLE="COLOR:red;">Ticket NO. :-</b>12440</p><div>
           <?php 
$server = "localhost";
$usernam = "root";
$pass = "";
$database = "demo";
$conn = mysqli_connect($server, $usernam, $pass, $database);
if(!$conn){
    die("</br>Connection was failed" .mysqli_connect_error());
}
$sqli = "SELECT * FROM `person`;";
$result1 = mysqli_query($conn, $sqli);
$num = mysqli_num_rows($result1);
$i =0;
if($i<$num){
while($i = mysqli_fetch_array($result1)) {
echo "<b STYLE=COLOR:red;>Booking Date:</b> ";
echo date("d.M.Y");
echo "<br><b STYLE=COLOR:red;>Booking Day:</b> ";
echo date("D");
echo "<br><b STYLE=COLOR:red;>Booking Time:</b> ";
echo date("h:i a");
echo "<br><b STYLE=color:red;>Name:</b> ";
echo $i['First Name'];
echo "<br><b STYLE=COLOR:red;>Contact No.:</b> ";
echo $i['last name'];
echo "<br><b STYLE=COLOR:red;>Email:</b> ";
echo $i['Email'];
}
    
}
 ?>
 <style>
              article{
                  
                  width:500px;
              }
              @media print {
                  .noprint{
                  visibility: hidden;
              }
            }
          </style>
          </div>
        </header>
        <div class="ticket__divider">
          <div class="ticket__notch"></div>
          <div class="ticket__notch ticket__notch--right"></div>
        </div>
        <div class="ticket__body" >
		<section class="ticket__section">
           
            <script>
                let a=localStorage.getItem("selectedSeats");
                var old= JSON.parse(localStorage.getItem('selectedSeats'));
                
                var i;
                var l=old.length;

                 var ticketprice =localStorage.getItem("priceofticket");
                 document.write(" <b style=color:red;>Your Tickets</b>"+" 🎟"+l);
     
      
      document.write( "<p><b style=color:red;>Balcony <B style=COLOR:BLACK;>RS.120</B>Each</b></p>")
      var x= old.toString();
      document.write( "<b style=color:red;>Block <b style=color:black;>406</b>   Row<b style=color:black;> Q </b>  Seats no. </b>"+x)
      document.write( "<p>And</p>")
	  document.write( "<b style=color:red;>Your total seats are</b>"    +l+"\n")
      document.write( "<b style=color:red;>for a price of RS</b>"  +"\n"+l*ticketprice)

        </script>

          </section>
          <section class="ticket__section">
          </section>
          <section class="ticket__section">
            <p><b style="color:red;">Payment Method :-</b>Mastercard **** 8765</p>
          </section>
         </div>
         <footer class="ticket__footer">
          <span><b style="color:red;">Total Paid :- </b></span>
          <script>
              document.write(l*ticketprice)
          </script>
        </footer>
<div style="color:white; background-color:#FF00FF; text-align:center;"><a onclick="window.print()">SAVE AS PDF</a></div>
</article>
</body>
</html>