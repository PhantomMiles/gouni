<?php  
	if (isset($_GET['register'])) {
		$err_flag = false;
		if (!empty($_GET['fname'])) {
			$fname = htmlentities($_GET['fname']);
		}else{
			$err_flag = true;
			$err_fname = "First name is required.";
		}
		
		if (!empty($_GET['lname'])) {
			$lname = htmlentities($_GET['lname']);
		}else{
			$err_flag = true;
			$err_lname = "Last name is required.";
		}

		if (!empty($_GET['age'])) {
			$age = htmlentities($_GET['age']);
			if (isset($age)) {
				if ($age <= 12 ) {
					$err_ageNum = "Invalid data not allowed!";
				}
			}
		}else{
			$err_flag = true;
			$err_age = "Age is required.";
		}
        
        if (!empty($_GET['dob'])) {
			$dob = htmlentities($_GET['dob']);
		}else{
			$err_flag = true;
			$err_dob = "Date of birth is required.";
		}

        if (!empty($_GET['state'])) {
			$state = htmlentities($_GET['state']);
		}else{
			$err_flag = true;
			$err_state = "State of origin is required.";
		}
        
        if (!empty($_GET['lga'])) {
			$lga = htmlentities($_GET['lga']);
		}else{
			$err_flag = true;
			$err_lga = "LGA is required.";
		}
        
        if (!empty($_GET['nationality'])) {
			$nationality = htmlentities($_GET['nationality']);
		}else{
			$err_flag = true;
			$err_nationality = "Nationality is required.";
		}

		if (!empty($_GET['email'])) {
			$email = htmlentities($_GET['email']);
		}else{
			$err_flag = true;
			$err_email = "Email address is required.";
		}

        if (!empty($_GET['phone_num'])) {
			$phone_num = htmlentities($_GET['phone_num']);
		}else{
			$err_flag = true;
			$err_phone_num = "Phone number is required.";
		}

        /* if (!empty($_GET['jamb_reg'])) {
            $jamb_reg = htmlentities($_GET['jamb_reg']);
        }else{
            $err_flag = true;
            $err_jamb_reg = "JAMB Reg. number is required.";
        }

        if (!empty($_GET['waec_reg'])) {
            $waec_reg = htmlentities($_GET['waec_reg']);
        }else{
            $err_flag = true;
            $err_waec_reg = "WAEC Reg. number is required.";
        }

        if (!empty($_GET['other_exam'])) {
            $other_exam = htmlentities($_GET['other_exam']);
        }else{
            $err_flag = true;
            $err_other_exam = "Other Exam is required.";
        } */

		if ($err_flag === false) {
			header("Location: account2.php");
			exit();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="image" type="logo" href="logo.jpg">
    <script src="https://kit.fontawesome.com/d2a04fa078.js" crossorigin="anonymous"></script>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <img src="logo.jpg" style="width: 180px; height: 180px; padding: 30px; margin: -30px 40% 0px;  border-radius: 100%;" alt="">
        <fieldset>
            <legend>Your Personal Information</legend>
            <table cellpadding="3">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="fname" placeholder="First Name" class="<?php if(isset($err_fname)) { echo 'error'; } else{ echo 'correct';} ?>">
                        <?php  
                            if (isset($err_fname)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_fname</p>";
                            }
                        ?>
                    </td>
                    <td>
                    <input type="text" name="lname" placeholder="Last Name" class="<?php if(isset($err_lname)) { echo 'error'; } else{ echo 'correct';} ?>">
                        <?php  
                            if (isset($err_lname)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_lname</p>";
                            }
                        ?>
                    </td>
                    <td>
                        <input type="date" name="dob" id="" placeholder="Date of Birth" class="<?php if(isset($err_dob)) { echo 'error'; } else{ echo 'correct';} ?>">
                        <?php  
                            if (isset($err_dob)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_dob</p>";
                            }
                        ?>
                    </td>
                </tr>

                <tr>  
                    <th>Age</th>
                    <th>State of Origin</th>
                    <th>LGA</th>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="age" id="" min="15" max="40" placeholder="Enter your age" class="<?php if(isset($err_age) || isset($err_ageNum)) { echo 'error'; } else{ echo 'correct';} ?>">
                        <?php  
                            if (isset($err_age)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_age</p>";
                            }
                            if (isset($err_ageNum)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_ageNum</p>";
                            }
                        ?>
                    </td>
                    <td>
                        <select name="state" id="" class="<?php if(isset($err_state)) { echo 'error'; } else{ echo 'correct';} ?>">
                            <option value="">--Select--</option>
                            <option value="n1">Abia</option>
                            <option value="n2">Adamawa</option>
                            <option value="n3">Akwa Ibom</option>
                            <option value="n4">Anambra</option>
                            <option value="n5">Bauchi</option>
                            <option value="n6">Bayelsa</option>
                            <option value="n7">Benue</option>
                            <option value="n8">Borno</option>
                            <option value="n9">Cross River</option>
                            <option value="n10">Delta</option>
                            <option value="n11">Ebonyi</option>
                            <option value="n12">Edo</option>
                            <option value="n13">Ekiti</option>
                            <option value="n14">Enugu</option>
                            <option value="n15">Gombe</option>
                            <option value="n16">Imo</option>
                            <option value="n17">Jigawa</option>
                            <option value="n18">Kaduna</option>
                            <option value="n19">Kano</option>
                            <option value="n20">Katsina</option>
                            <option value="n21">Kebbi</option>
                            <option value="n22">Kogi</option>
                            <option value="n23">Kwara</option>
                            <option value="n24">Lagos</option>
                            <option value="n25">Nasarawa</option>
                            <option value="n26">Niger</option>
                            <option value="n27">Ogun</option>
                            <option value="n28">Ondo</option>
                            <option value="n29">Osun</option>
                            <option value="n30">Oyo</option>
                            <option value="n31">Plateau</option>
                            <option value="n32">Rivers</option>
                            <option value="n33">Sokoto</option>
                            <option value="n34">Taraba</option>
                            <option value="n35">Yobe</option>
                            <option value="n36">Zamfara</option>
                            <option value="n37">FCT</option>
                        </select>  
                        <?php  
                            if (isset($err_state)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_state</p>";
                            }
                        ?>
                    </td>
                    <td>
                        <select name="lga" id="" class="<?php if(isset($err_lga)) { echo 'error'; } else{ echo 'correct';} ?>">
                            <option value="">--Select--</option>
                            <option value="n1">Abia</option>
                            <option value="n2">Adamawa</option>
                            <option value="n3">Akwa Ibom</option>
                            <option value="n4">Anambra</option>
                            <option value="n5">Bauchi</option>
                            <option value="n6">Bayelsa</option>
                            <option value="n7">Benue</option>
                            <option value="n8">Borno</option>
                            <option value="n9">Cross River</option>
                            <option value="n10">Delta</option>
                            <option value="n11">Ebonyi</option>
                            <option value="n12">Edo</option>
                            <option value="n13">Ekiti</option>
                            <option value="n14">Enugu</option>
                            <option value="n15">Gombe</option>
                            <option value="n16">Imo</option>
                            <option value="n17">Jigawa</option>
                            <option value="n18">Kaduna</option>
                            <option value="n19">Kano</option>
                            <option value="n20">Katsina</option>
                            <option value="n21">Kebbi</option>
                            <option value="n22">Kogi</option>
                            <option value="n23">Kwara</option>
                            <option value="n24">Lagos</option>
                            <option value="n25">Nasarawa</option>
                            <option value="n26">Niger</option>
                            <option value="n27">Ogun</option>
                            <option value="n28">Ondo</option>
                            <option value="n29">Osun</option>
                            <option value="n30">Oyo</option>
                            <option value="n31">Plateau</option>
                            <option value="n32">Rivers</option>
                            <option value="n33">Sokoto</option>
                            <option value="n34">Taraba</option>
                            <option value="n35">Yobe</option>
                            <option value="n36">Zamfara</option>
                            <option value="n37">FCT</option>
                        </select>  
                        <?php  
                            if (isset($err_lga)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_lga</p>";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Nationality</th>
                    <th>Email</th>
                    <th>Telephone Number</th>
                </tr>
                <tr>
                    <td>
                        <select name="nationality" id="" class="<?php if(isset($err_nationality)) { echo 'error'; } else{ echo 'correct';} ?>">
                            <option value="">--Select--</option>
                            <option value="n1">Afghani</option>
                            <option value="n2">Albanian</option>
                            <option value="n3">Austrian</option>
                            <option value="n4">Australian</option>
                            <option value="n5">Bangladese</option>
                            <option value="n6">Benin</option>
                            <option value="n7">Botswanian</option>
                            <option value="n8">Cameroonian</option>
                            <option value="n9">Denmark</option>
                            <option value="n10">Ecuador</option>
                            <option value="n11">Estonian</option>
                            <option value="n12">Egyptian</option>
                            <option value="n13">Finland</option>
                            <option value="n14">French</option>
                            <option value="n15">Gabonese</option>
                            <option value="n16">Irish</option>
                            <option value="n17">Jamaican</option>
                            <option value="n18">Laos</option>
                            <option value="n19">Nigerien</option>
                            <option value="n20">Nigerian</option>
                            <option value="n21">Oman</option>
                            <option value="n22">Polish</option>
                            <option value="n23">Rwandan</option>
                            <option value="n24">Spanish</option>
                            <option value="n25">Togolese</option>
                            <option value="n26">Yugoslavian</option>
                            <option value="n27">Zimbabwean</option>
                        </select>  
                        <?php  
                            if (isset($err_nationality)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_nationality</p>";
                            }
                        ?>
                    </td>
                    <td>
                        <input type="email" name="email" placeholder="Email Address" class="<?php if(isset($err_email)) { echo 'error'; } else{ echo 'correct';} ?>">
                        <?php  
                            if (isset($err_email)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_email</p>";
                            }
                        ?>
                    </td>
                    <td>
                        <input type="tel" name="phone_num" id="" placeholder="Enter your phone number" class="<?php if(isset($err_phone_num)) { echo 'error'; } else{ echo 'correct';} ?>">
                        <?php  
                            if (isset($err_phone_num)) {
                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_phone_num</p>";
                            }
                        ?>
                    </td>
                </tr>
            </table>
            
        </fieldset>
        
        <fieldset style="display:none;">
            <legend>Academic Details</legend>
            <label for="">JAMB Score</label>
            <input type="number" name="" id="" min="100" max="400" placeholder="Enter JAMB UTME score" style="display: inline-block; width: 400px;">
            <label for="" style="display: block; text-align: center">WAEC/ NECO Grades</label>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Exam Type</th>
                    <th>Grade</th>
                </tr>

                <tr>
                    <td>
                        <select name="" id="subjects" required>
                            <option value=""></option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType" required>
                            <option value=""></option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade" required>
                            <option value=""></option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="subjects">
                            <option value="">--Select--</option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType">
                            <option value="">--Select--</option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade">
                            <option value="">--Select--</option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="subjects">
                            <option value="">--Select--</option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType">
                            <option value="">--Select--</option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade">
                            <option value="">--Select--</option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="subjects">
                            <option value="">--Select--</option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType">
                            <option value="">--Select--</option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade">
                            <option value="">--Select--</option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="subjects">
                            <option value="">--Select--</option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType">
                            <option value="">--Select--</option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade">
                            <option value="">--Select--</option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="subjects">
                            <option value="">--Select--</option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType">
                            <option value="">--Select--</option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade">
                            <option value="">--Select--</option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="subjects">
                            <option value="">--Select--</option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType">
                            <option value="">--Select--</option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade">
                            <option value="">--Select--</option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="subjects">
                            <option value="">--Select--</option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType">
                            <option value="">--Select--</option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade">
                            <option value="">--Select--</option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="subjects">
                            <option value="">--Select--</option>
                            <option value="">Mathematics</option>
                            <option value="">English</option>
                            <option value="">Further Mathemtics</option>
                            <option value="">Biology</option>
                            <option value="">Chemistry</option>
                            <option value="">Physics</option>
                            <option value="">Economics</option>
                            <option value="">Commerce</option>
                            <option value="">Accounting</option>
                            <option value="">Literature-in-English</option>
                            <option value="">Government</option>
                            <option value="">Computer Science</option>
                            <option value="">Geography</option>
                            <option value="">Technical Drawing</option>
                            <option value="">Visual Arts</option>
                            <option value="">Food and Nutrition</option>
                            <option value="">Agriculture</option>
                            <option value="">Civic Education</option>
                            <option value="">C.R.K</option>
                            <option value="">Data Processing</option>
                            <option value="">Painting and Decoration</option>
                            <option value="">Catering Craft</option>
                            <option value="">Dyeing and Bleaching</option>
                            <option value="">French</option>
                            <option value="">Igbo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="examType">
                            <option value="">--Select--</option>
                            <option value="">WAEC</option>
                            <option value="">NECO</option>
                            <option value="">GCE</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="grade">
                            <option value="">--Select--</option>
                            <option value="">A1</option>
                            <option value="">B2</option>
                            <option value="">B3</option>
                            <option value="">C4</option>
                            <option value="">C5</option>
                            <option value="">C6</option>
                            <option value="">D7</option>
                            <option value="">E8</option>
                            <option value="">F9</option>
                        </select>
                    </td>
                </tr>
                <label for="" style="display: block; text-align: cenmter">Other Exams</label>
                <tr>
                    <td>    
                        <select name="other_result" id="">
                            <option value="n1">--Select--</option>
                            <option value="n1">IGSCE</option>
                            <option value="n1">IELTS</option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
        <input type="submit" name="register" value="REGISTER">
    </form>
</body>
</html>