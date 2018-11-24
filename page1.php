
<!DOCTYPE html>
<html>
<head>
	<title>Excel Uploading PHP</title>
        <style>
            .example_b {
color: #fff !important;
text-transform: uppercase;
background: #60a3bc;
padding: 20px;
border-radius: 50px;
display: inline-block;
border: none;
}
.form-group2{ 
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
position: fixed;
  bottom: -4px;
  right: 10px;
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
    padding: 10px;
    text-align: center;
    position: fixed;
  top: 40%;
  left: 42%;
  margin-top: -50px;
  margin-left: -100px;
    
}
.form-group{
     display: inline;

     
}
.form-group1{
    display: inline;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;

}
.form-group2{ 
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
position: fixed;
  bottom: -4px;
  right: 10px;
}
        </style>
	
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
        
   

<div class="container">
	<h1>File Upload</h1>

	<form method="POST" action="excelUpload.php" enctype="multipart/form-data">
   
  <br><br>
		<div class="form-group">
			<label>Upload Excel File</label>
			<input type="file" name="file" >
		</div>
		<div class="form-group">
			<button type="submit" name="Submit" >Upload</button>
		</div>
  		<div class="form-group1">

  
<input type="button" onclick="location.href='roommn.php';" value="Room Management" />
<form action="" method="post">
            <input type="submit" name="submit12"  value=" MASTER CLEAR" />
        </FORM>
                        </div>
</div>
<div class="form-group2">

    <div class="button">
         <div id="outer-container">
    <div id="scrollable">

        <div class="button_cont" align="center"><a class="example_b" onclick="location.href='page2.php';" target="_blank" target="_blank" rel="nofollow noopener">NEXT</a>
        </div>
    </div>
</div>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit2']))
{

    $conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
        $ins1=mysqli_query($conn,"DELETE  FROM `student` ");

if ($ins1) {

    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}
    ?>
<?php
if(isset($_POST['submit12']))
{

    $conn = new mysqli('localhost', 'root', '', 'mace') 
or die ('Cannot connect to db');
        
         $ins1=mysqli_query($conn,"DELETE  FROM `student` ");
        $ins21=mysqli_query($conn,"DELETE  FROM `course` ");
        $ins31=mysqli_query($conn,"DELETE  FROM `f401` ");
        $ins41=mysqli_query($conn,"DELETE  FROM `l02` ");
        $ins51=mysqli_query($conn,"DELETE  FROM `l04` ");
        $ins61=mysqli_query($conn,"DELETE  FROM `l07` ");
        $ins71=mysqli_query($conn,"DELETE  FROM `l08` ");
        $ins81=mysqli_query($conn,"DELETE  FROM `l109` ");
        $ins91=mysqli_query($conn,"DELETE  FROM `l112` ");
        $ins101=mysqli_query($conn,"DELETE  FROM `l201` ");
        $ins111=mysqli_query($conn,"DELETE  FROM `l208` ");
        $ins121=mysqli_query($conn,"DELETE  FROM `l217` ");
        $ins131=mysqli_query($conn,"DELETE  FROM `l218` ");
        $ins141=mysqli_query($conn,"DELETE  FROM `m12` ");
        $ins151=mysqli_query($conn,"DELETE  FROM `m13` ");
        $ins161=mysqli_query($conn,"DELETE  FROM `m15` ");
        $ins171=mysqli_query($conn,"DELETE  FROM `mpv201` ");
        $ins181=mysqli_query($conn,"DELETE  FROM `mpv311` ");
        $ins191=mysqli_query($conn,"DELETE  FROM `pg107` ");
        $ins201=mysqli_query($conn,"DELETE  FROM `pg204` ");
        $ins211=mysqli_query($conn,"DELETE  FROM `pg205` ");
        $ins221=mysqli_query($conn,"DELETE  FROM `pg206` ");
        $ins231=mysqli_query($conn,"DELETE  FROM `pg208` ");
        $ins241=mysqli_query($conn,"DELETE  FROM `pg307` ");
        $ins251=mysqli_query($conn,"DELETE  FROM `pg308` ");
        $ins261=mysqli_query($conn,"DELETE  FROM `pg309` ");
        $ins271=mysqli_query($conn,"DELETE  FROM `pg3g2` ");
        $ins281=mysqli_query($conn,"DELETE  FROM `room21` ");
                $ins281=mysqli_query($conn,"DELETE  FROM `roomcourse` ");
                        $ins281=mysqli_query($conn,"DELETE  FROM `finalroom` ");
                                                $ins282=mysqli_query($conn,"DELETE  FROM `temp` ");
                                                                $ins281=mysqli_query($conn,"DELETE  FROM `roomcourse1` ");
                                                                echo'<script>
    alert(" Record deleted successfully");

</script>';




 
       


               

if ($ins1) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}
    ?>

