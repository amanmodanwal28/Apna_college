</style>
</head>
<body style="     background: linear-gradient(to right, #ff9933 0%, #33ccff 100%);">
   <div id="marquee1" style="overflow:hidden; left:1px; top:15px; width:device-width;  z-index:1 ;margin-top: 30px;"  >
   	<div class="backhome" style="float: left; width: 18%;">
   		<?php
    $nametype=$_GET['mname'];
      $nametype=substr($nametype, 8,strlen($nametype));
      $nametype=substr($nametype, 0,strpos($nametype, "/"));
      echo "<a href='".$nametype.".php'><button type=''  style='width: 100%;height: 48px;	background: linear-gradient(to  left, #ff9933 0%, #33ccff 100%);'><b>Back</b></button> </a>";
  ?>
		           

	</div>
	<div class="scroll " style="float: left;width: 82%">
		
		<marquee width=100%>
	<div class="wpmd">
	<div><font color="#4A274F" face="@Meiryo" class="ws28" align:center><B><I> WELCOME TO INDIAN RAILWAYS !!</I></B></font></div>
	</div></marquee>
	</div>
	</div>
	