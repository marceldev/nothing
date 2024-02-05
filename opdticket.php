<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPD Card</title>
    <link rel="stylesheet" href="opdticket.css">
    <link rel="icon" type="image/x-icon" href="images/logo1.ico">
    <style>
       
    </style>
</head>
<body>
    <button class="btn" onclick="window.print()">Download PDF</button>
    
    <main>
     
        <div class="container">
            <hr>
          <div id="nav">
            <div id="image"><img src="images/logo.png"></div>
            
              <div id="head">
              <h3>Gouri Devi Institute of <br> Medical Sciences & Hospital</h3>
              <h3>G.T Road, Rajbadh, Durgapur</h3>
              
              </div>
              
              <p>OPD Patient Card <br>Radiology</p>
             
           </div>
           <hr>

    <table> 
        <tr>
        <strong>Patient's Name:</strong> <?php echo  $_POST["name"];  ?>
        </tr>
        <tr>
            <td>Date of Birth(DOB):</td>
        </tr>
        <tr>
            <td>Address:</td>   
            <td>Contact No:</td>  
        </tr>
        <tr>
            <td>Aadhar No:</td>   
        </tr>
        <tr>
            <td>Doctor's Name:</td>
            <td>Room Number: 45,2ND FLOOR</td>
            
        </tr>
       
    </table>
   <main id="contentt"></main>
   <footer>
    <p class="foot"> &#9742; Helpline:<br> 801116644, 9333927289</p>
    <p class="foot"> &#x2709; Mail to:<br>grievance@gimsh.in</p>
    <p class="foot"> &#128279;Vist Us:<br>gimsh.in/public-grievance-cell</p>
   </footer>


</div>
</main>
</body>
</html>
