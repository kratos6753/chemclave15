<!DOCTYPE html>
<html>
<head>
	<title>Application Form | Chemclave'15 Coordinators</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://ivaynberg.github.io/select2/select2-3.5.1/select2.css">
	<link rel="stylesheet" href="https://fk.github.io/select2-bootstrap-css/css/select2-bootstrap.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="https://ivaynberg.github.io/select2/select2-3.4.2/select2.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<img src="http://students.iitm.ac.in/ches/wp-content/uploads/2013/10/chemclave-logo.png" alt="chemclave-logo" width="200" height="90" />
    <?php if(isset($_POST['submit'])){
      $conn = mysql_connect('localhost','root','chiru');
      if(!$conn){
        die("Database Connection failed".mysql_error());
      }
      $select_db = mysql_select_db('app');
      if(!$select_db){
        die("Database selection failed".mysql_error());
      }
      $name = $_POST['name'];
      $roll = $_POST['roll'];
      $room = $_POST['room'];
      $hostel = $_POST['hostel'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $skill = implode(",",$_POST['skill']);
      var_dump($skill);
      $webops = $_POST['webops'];
      $expect = $_POST['expect'];
      $experience = $_POST['experience'];
      $query = "INSERT INTO users"."(name,roll,room,hostel,mobile,email,skill,webops,expect,experience) "."VALUES('$name','$roll','$room','$hostel','$mobile','$email','$skill','$webops','$expect','$experience')";
      $result = mysql_query($query,$conn);
      if($result){
        $msg = "Form submitted successfully";
      }
      //How to show the Thanking message: Form submitted successfully
      //Hope we meet in the interview.
      //Resources:
      //       w3schools.com,codecademy.com,try.github.io
      //Fundae session details:          

      } else { ?>
		<form class="form-horizontal" role="form" action="" method="POST">
  <div class="form-group">
    <label for="inputName3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Name</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <input type="text" class="form-control" id="inputName3" name="name" placeholder="Name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputRoll3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Roll No.</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <input type="text" class="form-control" id="inputRoll3" name="roll" placeholder="Roll Number" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputRoom3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Room No.</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <input type="number" class="form-control" id="inputRoom3" name="room" placeholder="Room Number" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputHostel3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Hostel</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <select id="inputHostel3" class="form-control select2" name="hostel" required>
                <option value="Alakananda">Alakananda</option>
                <option value="Brahmaputra">Brahmaputra</option>
                <option value="Cauvery">Cauvery</option>
                <option value="Ganga">Ganga</option>
                <option value="Godavari">Godavari</option>
                <option value="Jamuna">Jamuna</option>
                <option value="Krishna">Krishna</option>
                <option value="Mahanadi">Mahanadi</option>
                <option value="Mandakini">Mandakini</option>
                <option value="Narmada">Narmada</option>
                <option value="Pampa">Pampa</option>
                <option value="Saraswathi">Saraswathi</option>
                <option value="Sarayu">Sarayu</option>
                <option value="Sharavati">Sharavati</option>
                <option value="Sindhu">Sindhu</option>
                <option value="Tamraparani">Tamraparani</option>
                <option value="Tapti">Tapti</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputMobile3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Mobile No.</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <input type="number" class="form-control" id="inputMobile3" name="mobile" placeholder="Mobile Number" pattern="\d{10}" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Email</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email Address" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputskill3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Skillset</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <select id="inputskill3" class="form-control select2" name="skill[]" multiple="multiple">
      		<optgroup label="Frontend">
      			<option value="HTML5">HTML5</option>
                <option value="CSS3">CSS3</option>
                <option value="JAVASCRIPT">JAVASCRIPT</option>
                <option value="JQUERY">JQUERY</option>
                <option value="SVG">SVG</option>
      		</optgroup>
            <optgroup label="Backend">
            	<option value="PHP5">PHP5</option>
                <option value="MYSQL">MYSQL</option>
            </optgroup>
            <optgroup label="Miscellaneous">
            	<option value="Git">Git</option>
                <option value="Wordpress">Wordpress</option>
            </optgroup>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputWebops3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Why Webops?</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <textarea class="form-control" rows="5" id="inputWebops3" name="webops" placeholder="Enter atleast 50 words..." required></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputExpect3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">What do you expect from webops?</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <textarea class="form-control" rows="5" id="inputExpect3" name="expect" placeholder="Enter atleast 50 words..." required></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputExperience3" class="col-md-offset-2 col-sm-offset-1 col-xs-offset-2 col-md-2 col-xs-2 col-sm-2 control-label">Professional experience if any?</label>
    <div class="col-xs-6 col-sm-8 col-md-4">
      <textarea class="form-control" rows="5" id="inputExperience3" name="experience" placeholder="Enter atleast 50 words..."></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-xs-offset-4 col-md-offset-4 col-xs-10 col-sm-10 col-md-8">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<?php } ?>
	</div>
</div>
</body>
</html>