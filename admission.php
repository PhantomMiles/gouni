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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" type="img/png" href="img/logo2.png">
    <script src="https://kit.fontawesome.com/d2a04fa078.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="max-w-full relative container mx-auto py-4 md:py-4 px-3 bg-sapphireBlue">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="mx-auto">
                <img src="img/logo2.png" class="h-10 md:h-20" alt="" />
            </div>
        </div>
    </div>

    <section id="reg" class="bg-platinum">
        <h1 class="text-4xl md:text-5xl text-center py-2 px-8 font-bold">APPLICATION FORM</h1>
        <h2 class="text-3xl md:text-4xl text-center py-4 px-8 font-bold">All fields are required</h2>
        <!-- Flex Container -->
        <div class="container flex flex-col items-center justify-between px-6 py-4 mx-auto space-y-12 md:py-4 md:space-x-4 md:flex-row md:space-y-20">
            <form id="reg-frm-p" class="bg-white" action="account2.php" method="post">
                <div class="container flex flex-col mb-2 space-y-6">
                    <div class="flex-col items-center justify-between px-6 py-4 mx-auto space-y-2">
                        <fieldset>
                            <legend>Your Personal Information</legend>
                            <table cellpadding="3">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="fname" placeholder="Enter first name" class="<?php if(isset($err_fname)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_fname)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_fname</p>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                    <input type="text" name="lname" placeholder="Enter last name" class="<?php if(isset($err_lname)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_lname)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_lname</p>";
                                            }
                                        ?>
                                    </td>
                                
                                </tr>

                                <tr>  
                                    <th>Date of Birth</th>
                                    <th>Age</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="date" name="dob" id="" placeholder="Date of Birth" class="<?php if(isset($err_dob)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_dob)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_dob</p>";
                                            }
                                        ?>
                                    </td>
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
                                    
                                </tr>
                                <tr>
                                    <th>State of Origin</th>
                                    <th>LGA</th>
                                </tr>
                                <tr>
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
                                    <th>Telephone Number</th>
                                    <th>Email</th>
                                </tr>                            
                                <tr>
                                    <td>
                                        <input type="tel" name="phone_num" id="" placeholder="Enter your phone number" class="<?php if(isset($err_phone_num)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_phone_num)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_phone_num</p>";
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
                                    <tr>
                                        <th>Nationality</th>
                                        <th>Next of Kin</th>
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
                                            <input type="text" name="nok" placeholder="Enter next of kin" class="<?php if(isset($err_gname)) { echo 'error'; } else{ echo 'correct';} ?>">
                                                <?php  
                                                    if (isset($err_lname)) {
                                                        echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_nok</p>";
                                                    }
                                                ?>
                                        </td>
                                    </tr>
                            </table>
                            
                        </fieldset>
                        <fieldset>
                            <legend>Your Parent's Information</legend>
                            <table cellpadding="3">
                                <tr>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="fa_name" placeholder="Enter father's name" class="<?php if(isset($err_fa_name)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_fa_name)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_fa_name</p>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                    <input type="text" name="mo_name" placeholder="Enter mother's name" class="<?php if(isset($err_mo_name)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_mo_name)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_mo_name</p>";
                                            }
                                        ?>
                                    </td>  
                                </tr>
                                <tr>
                                    <th>State of Origin</th>
                                    <th>LGA</th>
                                </tr>
                                <tr>
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
                                    <th>Father's Phone No.</th>
                                    <th>Mother's Phone No.</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="tel" name="f_phone_num" id="" placeholder="Enter your father's phone no." class="<?php if(isset($err_f_phone_num)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_f_phone_num)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_f_phone_num</p>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <input type="tel" name="m_phone_num" id="" placeholder="Enter your mother's phone no." class="<?php if(isset($err_m_phone_num)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_m_phone_num)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_m_phone_num</p>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            
                        </fieldset>
                        <fieldset>
                            <legend>Your Parent's Information</legend>
                            <table cellpadding="3">
                                <tr>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="fa_name" placeholder="Enter father's name" class="<?php if(isset($err_fa_name)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_fa_name)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_fa_name</p>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                    <input type="text" name="mo_name" placeholder="Enter mother's name" class="<?php if(isset($err_mo_name)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_mo_name)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_mo_name</p>";
                                            }
                                        ?>
                                    </td>  
                                </tr>
                                <tr>
                                    <th>State of Origin</th>
                                    <th>LGA</th>
                                </tr>
                                <tr>
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
                                    <th>Father's Phone No.</th>
                                    <th>Mother's Phone No.</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="tel" name="f_phone_num" id="" placeholder="Enter your father's phone no." class="<?php if(isset($err_f_phone_num)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_f_phone_num)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_f_phone_num</p>";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <input type="tel" name="m_phone_num" id="" placeholder="Enter your mother's phone no." class="<?php if(isset($err_m_phone_num)) { echo 'error'; } else{ echo 'correct';} ?>">
                                        <?php  
                                            if (isset($err_m_phone_num)) {
                                                echo "<p style='color: red; font-family:proxima-nova; font-size: 15px; margin-top: 1px; margin-left: 25px;'>$err_m_phone_num</p>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            
                        </fieldset>
                    </div> 
                </div> 
            </form>
            <form id="reg-frm-a" class="bg-white" action="account2.php" method="post">
                <div class="container flex flex-col mb-2 space-y-6">
                    <div class="flex-col items-center justify-between px-6 py-4 mx-auto space-y-2">
                        <fieldset>
                            <legend>Academic Details</legend>
                            <label for="" style="display: block; margin-top: -5px; margin-bottom: 20px; text-align: center;">WAEC/ NECO Grades</label>
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
                                <tr>
                                    <th>JAMB Score</th>
                                    <th>Type Of Entry</th>
                                    <th>Other Exams</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="number" name="" id="" min="100" max="400" placeholder="Enter JAMB UTME score">
                                    </td>
                                    <td>
                                        <select name="entry_type" id="">
                                            <option value="t1">--Select--</option>
                                            <option value="t2">JAMB Entry</option>
                                            <option value="t3">Direct Entry</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="other_result" id="">
                                            <option value="n1">--Select--</option>
                                            <option value="n1">IGSCE</option>
                                            <option value="n1">IELTS</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>JAMB Reg Number</th>
                                    <th>WAEC Reg Number</th>
                                    <th>NECO Reg Number</th>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea name="" id="" placeholder="Enter JAMB reg number"></textarea>
                                    </td>
                                    <td>
                                        <textarea name="" id="" placeholder="Enter WAEC reg number"></textarea>
                                    </td>
                                    <td>
                                        <textarea name="" id="" placeholder="Enter NECO reg number"></textarea>
                                    </td>
                                </tr>
                            </table>
                            <label for=""  class="inline-block font-bold my-20 mx-auto"></label>
                            
                            <label for=""  class="inline-block font-bold"></label>
                            
                        </fieldset>
                    </div>
                </div> 
            </form>
        </div>
        <div class="flex justify-center">
            <button id="reg-btn" class="p-4 px-16 text-white bg-royalBlue rounded-xl baseline hover:bg-lightSkyBlue sm:hover-none focus:none outline:none text-md text-left font-bold md:mx-auto md:block">Submit</button>
        </div>
    </section>
    <footer class="bg-veryDarkBlue">
        <!-- Flex container -->
        <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
            <!-- Logo and social links container -->
            <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
                <div class="mx-auto my-6 text-center text-white md:hidden">Copyright &copy; Godfrey Okoye University 2022, All Rights Reserved</div>
                <!-- Logo -->
                <div>
                    <img src="img/logo-white.png" alt="" class="h-20 md:mt-10">
                </div>
                <!-- Social lInks container -->
                <div class="flex justify-center space-x-4">
                    <!-- Link 1 -->
                    <a href="www.facebook.com"><img src="img/icon-facebook.svg" alt="" class="h-8"></a>
                    <!-- Link 2 -->
                    <a href="www.youtube.com"><img src="img/icon-youtube.svg" alt="" class="h-8"></a>
                    <!-- Link 3 -->
                    <a href="www.twitter.com"><img src="img/icon-twitter.svg" alt="" class="h-8"></a>
                    <!-- Link 4 -->
                    <a href="www.pinterest.com"><img src="img/icon-pinterest.svg" alt="" class="h-8"></a>
                    <!-- Link 5 -->
                    <a href="www.instagram.com"><img src="img/icon-instagram.svg" alt="" class="h-8"></a>
                </div>
            </div>
            <!-- List container -->
            <div class="flex justify-around space-x-32" id="nav2">
                <div class="flex flex-col space-y-3 text-white">
                    <a href="account.html" class="hover:text-skyBlue font-bold">Your Profile</a>
                    <a href="index.html" class="hover:text-skyBlue font-bold">Home</a>
                    <a href="events.html" class="hover:text-skyBlue font-bold">Events</a>
                    <a href="news.html" class="hover:text-skyBlue font-bold">News</a>
                    <a href="about.html" class="hover:text-skyBlue font-bold">About</a>
                </div>
                <div class="flex flex-col space-y-3 text-white">
                    <a href="archive.html" class="hover:text-skyBlue font-bold">Archive</a>
                    <a href="courses.html" class="hover:text-skyBlue font-bold">Courses</a>
                    <a href="forum.html" class="hover:text-skyBlue font-bold">Forums</a>
                    <a href="faq.html" class="hover:text-skyBlue font-bold">FAQs</a>
                </div>
            </div>
            <!-- Input Container -->
            <div class="flex flex-col justify-between">
                <form action="">
                    <div class="flex space-x-3">
                        <input type="text" name="" id="" class="flex-1 w-1 px-4 rounded-full focus:outline-none" placeholder="Send us an email"> <button class="px-6 py-2 text-white rounded-full font-bold bg-royalBlue hover:bg-lightSkyBlue focus:outline:none">Send</button>
                    </div>
                </form>
                <div class="hidden text-white md:block"> Contact us on the following lines:</div>
                <div class="hidden text-white md:block md:mt-1/2">
                    <ul id="tel" class="ml-5">
                        <li>09134273215</li>
                        <li>09121963049</li>
                        <li>07061756730</li>
                    </ul>
                </div>
                <div class="hidden text-white md:block">&copy; Godfrey Okoye University 2022, All Rights Reserved</div>
            </div>
        </div>
    </footer>
    <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
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
        
        <fieldset>
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
    </form> -->
</body>
</html>