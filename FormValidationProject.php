<?php
// Initialize variables to null.
$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError="";
//On Submitting form, below function will execute
//Submit Scope starts from here
if(isset($_POST['Submit'])){
	if(empty($_POST["Name"]))
    {
        $NameError="Name is Required";
    }
    else
    {
        $Name=Test_User_Input($_POST["Name"]);
        if(!preg_match("/^[A-Za-z\. ]*$/",$Name))
        {
            $NameError="Only Letters and white sapace are allowed";
        }
    }

    if(empty($_POST["Email"]))
    {
        $EmailError="Email is Required";
    }
    else
    {
        $Email=Test_User_Input($_POST["Email"]);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email))
        {
            $EmailError="Invalid Email Format";
        }
    }

    if(empty($_POST["Gender"]))
    {
        $GenderError="Gender is Required";
    }
    else
    {
        $Gender=Test_User_Input($_POST["Gender"]);
    }
    
    if(empty($_POST["Website"]))
    {
        $WebsiteError="Website is Required";
    }
    else
    {
        $Website=Test_User_Input($_POST["Website"]);
        if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website))
        {
            $WebsiteError="Invalid Webside Address Format";	
        }
    }
}
?>

<!-- HTML CODE -->
<!DOCTYPE>
<html>
	<head>
		<title>Form Validation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
	</head>
<style type="text/css">
    input[type="text"],input[type="email"],textarea{
        border: none;
        background-color: hsl(267, 40%, 91%);
        width: 600px;
        padding: .5em;
        font-size: 1.0em;
    }
    .Error{
        color: red;
    }
    h2{
    color: var(--verydarkdesaturatedviolet);
    font-family: 'Rubik', sans-serif;
    font-weight: 500;
    font-size: 45px;
    }

    body{
        font-family: 'Rubik', sans-serif;
        background-color: var(--bg);
        align-content: center;
        color: var(--lightviolet)
    }
}
</style>

<body>
    <div class="box3"></div>
        <div class="php">
        <?php ?>
        <div class="top">
        <h2>Contact Me.</h2>
            <legend>* Please fill out the following fields.</legend>
        </div>	
        <form  action="FormHandling.php" method="post"> 
        <fieldset>
        Name:<br>
        <input class="input" type="text" Name="Name" value="">
        <span class="Error">*<?php echo $NameError;  ?></span><br>	 
        E-mail:<br>
        <input class="input" type="text" Name="Email" value="">
        <span class="Error">*<?php echo $EmailError; ?></span><br>
        Gender:<br>
        <input class="radio" type="radio" Name="Gender" value="Female">Female
        <input class="radio" type="radio" Name="Gender" value="Male">Male
        <span class="Error">*<?php echo $GenderError; ?></span><br>		   
        Website:<br>
        <input class="input" type="text" Name="Website" value="">
        <span class="Error">*<?php echo $WebsiteError; ?></span><br>
        Comment:<br>
        <textarea Name="Comment" rows="5" cols="25"></textarea>
        <br>
        <br>
        <input type="Submit" Name="Submit" class="b" value="Submit Your Information">
        </fieldset>
        </form>  
        </div>
    </div>
    <div class="box4"></div>     
</body>
</html>