<html>
<button class="button" ><a href="main page.php" style="color: #ffffff">Home page</a></button>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Write a Comment</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<br><h3>Write a Comment</h3>

<script>
 $(document).ready(function(){
        $('#submitbtn').change(function(){
             $.ajax({
                   type: "POST",
                   url: "SendComment.php",
                   data: "query="+document.form.textarea.value,
                   success: function(msg){
                    alert(msg)                         }
                 })
        });
    });

</script>

<body>


<div class="box">
    <a class="button" id="commentbutton" href="#divOne">Leave a Commment</a>
</div>
<div class="overlay" id="divOne" href="#" >
    <div class="wrapper" id="wrap">
        <h2>Write a Commment</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
            <div class="container" >
                <form id="commentform" action="SendComment.php" method="post">
                    Email &nbsp; <span id="validate" style="color: red;"></span>
                    <br><input placeholder="Enter your Email" type="text" name="email" id="email" onkeyup="validateEmail(this)" required> 
                    Comment <span class="counter" id="wordCount"></span>
                    <textarea placeholder="Write your comment here" name="commentBox" id="commentBox" type="text" onkeyup="countChars()" required></textarea>
                    <input type="submit" value="Submit" id="submitbtn" name="submit">
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>

<script>
    // var email = document.getElementById("email");
    // var validation = document.getElementById("validate");
    // email.addEventListener("keyup", function(){
    // });

    function countChars(){// Obtain the length of the string in the textbox.
        var myText = document.getElementById("commentBox");
        var wordCount = document.getElementById("wordCount");


		myText.addEventListener("keyup",function(){
			var characters = myText.value.split('');
			if (characters.length > 0){
			    wordCount.innerText = characters.length;
			}
			else {
				wordCount.innerText = " ";
            }
		});
    }

    function validateEmail(mail){
        $("#email").removeClass("input-error");
        $("#email").removeClass("input-success");

        var email = $("#email").val();
        var validation = document.getElementById("validate");
        var errorEmail = false;

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) || email == ""){
            validation.innerText = "";
            var errorEmail = false;
        }
        else{
            validation.innerText = "Invalid Email!";
            var errorEmail = true;
        }
        if (errorEmail == true) {
            $("#email").addClass("input-error");
        }
        else {
            $("#email").addClass("input-success");
        }

    }
</script>
