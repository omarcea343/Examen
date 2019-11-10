<?php

  function getPlantilla(){

  $plantilla = '<body>

<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificacion</span>
       <br><br>
       <span style="font-size:25px"><i>Esto certifica que:</i></span>
       <br><br>
       <span style="font-size:30px"><b>$student.getFullName()</b></span><br/><br/>
       <span style="font-size:25px"><i>a completado exitosamenta la certificacion de</i></span> <br/><br/>
       <span style="font-size:30px">Desarrollador Backend</span> <br/><br/>
       <span style="font-size:20px">con un puntaje de <b>$grade.getPoints()%</b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>el dia</i></span><br>
      #set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), "MMMM dd, yyyy"))
      <span style="font-size:30px">$dt</span>
</div>
</div>
</body>';

  return $plantilla;
}