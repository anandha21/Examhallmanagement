<HTML>
<HEAD>
    <STYLE>
        .example_b {
color: #fff !important;
text-transform: uppercase;
background: #60a3bc;
padding: 20px;
border-radius: 50px;
display: inline-block;
border: none;
}

.example_b:hover {
text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}
            #outer-container {
    position: relative;
}

#scrollable {
    overflow-y: auto;
    /* Styles for your scrollable div here. */
}

#fixed-button {
    position: absolute;
    /* Left/right and top/bottom offsets etc. */
}

            
            body {font-family: Arial, Helvetica, sans-serif;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
.container{
      max-width: 500px;
    margin: auto;
    background: white;
    padding: 10px;
    text-align: center;
    position: fixed;
  top: 40%;
  left: 42%;
  margin-top: -50px;
  margin-left: -100px;
    
}
.form-group2{ 
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
position: fixed;
  bottom: -4px;
  right: 10px;
      cursor: pointer;

}
        </style>
	<STYLE>
		body {
			font-family: Arial;
		}
		a {color: blue}
                .container{
      max-width: 500px;
    margin: auto;
    background: white;
    padding: 10px;
    text-align: center;
    position: fixed;
  top: 40%;
  left:48%;
  margin-top: -50px;
  margin-left: -100px;
    
}
.form{
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
position: fixed;
  top: 100px;
    left: 20%;

  text-align: center;
 margin-top: -50px;
  margin-left: -100px;
   margin: auto;
    padding: 10px;
}
	</STYLE>
	<SCRIPT>
		function listbox_move(listID, direction) {

			var listbox = document.getElementById(listID);
			var selIndex = listbox.selectedIndex;

			if(-1 == selIndex) {
				alert("Please select an option to move.");
				return;
			}

			var increment = -1;
			if(direction == 'up')
				increment = -1;
			else
				increment = 1;

			if((selIndex + increment) < 0 ||
				(selIndex + increment) > (listbox.options.length-1)) {
				return;
			}

			var selValue = listbox.options[selIndex].value;
			var selText = listbox.options[selIndex].text;
			listbox.options[selIndex].value = listbox.options[selIndex + increment].value
			listbox.options[selIndex].text = listbox.options[selIndex + increment].text

			listbox.options[selIndex + increment].value = selValue;
			listbox.options[selIndex + increment].text = selText;

			listbox.selectedIndex = selIndex + increment;
		}

		function listbox_moveacross(sourceID, destID) {
			var src = document.getElementById(sourceID);
			var dest = document.getElementById(destID);


			for(var count=0; count < src.options.length; count++) {

				if(src.options[count].selected == true) {
						var option = src.options[count];

						var newOption = document.createElement("option");
                                   

						newOption.value = option.value;
						newOption.text = option.text;
						newOption.selected = true;
						try {
								 dest.add(newOption, null); //Standard
								 src.remove(count, null);
						 }catch(error) {
								 dest.add(newOption); // IE only
								 src.remove(count);
						 }
						count--;

				}

			}

		}
		function listbox_selectall(listID, isSelect) {

			var listbox = document.getElementById(listID);
			for(var count=0; count < listbox.options.length; count++) {

				listbox.options[count].selected = isSelect;

			}
		}
	</SCRIPT>
        <div class="container">

	<TITLE>Listbox JavaScript functions</TITLE>
</HEAD>
<body>
    
     <div id="particles-js"></div>

    <script src="../particles.js"></script>
<script src="js/app.js"></script>

<script src="js/lib/stats.js"></script>
    <script>
  //https://github.com/VincentGarreau/particles.js/

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 400,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "image",
      "stroke": {
        "width": 3,
        "color": "#fff"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "http://www.dynamicdigital.us/wp-content/uploads/2013/02/starburst_white_300_drop_2.png",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.7,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 20,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 50,
      "color": "#ffffff",
      "opacity": 0.6,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 5,
      "direction": "bottom",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": true,
        "rotateX": 300,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode":  "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 150,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 200,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.2
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
        </script>
        

    
    
    
<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
$sum=0;
?>
          
<table>
<tr valign="top">
<td>



<br/><br/>


</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td>
<form action="" method="post">

<SELECT name="name" id="s" size="10" multiple>
	<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
$a = array();

    $result = $conn->query("select * from room"); 
                        while ($row = $result->fetch_assoc()) {

                  echo '<option value="'.$row['room_name'].'"> '.$row['room_name'].' '.$row['capacity'].'</option>';


                        } 
                       
echo'</SELECT>';
?>
        </td>

   
<td valign="center">


</td>
<td>
    
 <input type="button" name="submit1" onclick="listbox_moveacross('s', 'd');" value=">>"> 
    <input type="button" name="submit2" onclick="listbox_moveacross('d', 's');" value="<<">
<SELECT name="name1[]" id="d" size="10" multiple>
	
</SELECT>
</td>
</tr>
</table>
   


<?php ?>
         
   


    <input type="submit" name="submit1"  value="CONFORM SELECTED SEATS" />
      </form>
</BODY>
</HTML>
</div>
<?php
if(isset($_POST['submit1']))
{

    $conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
    
    
      
        foreach ($_POST['name1'] as $selectedOption){


$ins=mysqli_query($conn,"INSERT INTO room21 (No, room_name, capacity, status,occupy,occu)  
SELECT No, room_name, capacity, status, occupy,capacity 
  FROM `room`
 WHERE `room_name` = '$selectedOption'
");




    if($ins)
    {
        echo  '';
    }
    else
    {
        echo mysqli_error($conn);
    }
        }
$result = mysqli_query($conn,'SELECT SUM(capacity) AS value_sum FROM room21'); 
$row = mysqli_fetch_assoc($result); 
$sum = $row['value_sum'];


}

?>
<?php
$conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');

  
                        $sql="SELECT * FROM student ORDER BY No";
$result=mysqli_query($conn,$sql);
if ($result)
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  mysqli_free_result($result);
  }

$qry='SELECT SUM(capacity) from `room`';

 $add=mysqli_query($conn,$qry);
  while($row1=mysqli_fetch_array($add))
  {
    $mark=$row1['SUM(capacity)'];
  

                         ?>
  <?php } ?>
<HTML>
    <HEAD>
        
    </HEAD>
        <div class="form">
        <form action="" method="post">
Total Students: <input type="text" name="studno" value="<?php echo $rowcount; ?>">
Selected Seats: <input type="text" name="LastName" value="<?php echo $sum; ?>">
Seats Available: <input type="text" name="LastName" value="<?php echo ($mark-$sum); ?>">

</form>
        <form action="" method="post">
            <input type="submit" name="submit2"  value="CLEAR ALL" />
        </FORM>
        </div>
    <div class="form-group2">
       <div class="button">
         <div id="outer-container">
    <div id="scrollable">

        <div class="button_cont" align="center"><a class="example_b" onclick="location.href='index3.php';" target="_blank" target="_blank" rel="nofollow noopener">DOWNLOAD DOCUMENT</a>
        </div>
    </div>
</div>
    </div>
    </div>
        

</HTML
<?php
if(isset($_POST['submit2']))
{

    $conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
        $ins1=mysqli_query($conn,"DELETE  FROM `room21` ");

if ($ins1) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}



}
    ?>