<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link href='style.css' rel='stylesheet'>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Lato', sans-serif;
        margin: 0;
        background: url('shop.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        color: #696969;
        overflow: hidden;
        opacity: 1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: 'Lato', sans-serif;
        padding: 40px;
        width: 500px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 75%;
        font-size: 17px;
        font-family: 'Lato', sans-serif;
        border: 1px solid #aaaaaa;
        margin-left: 15%;
        margin-right: 15%
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #556B2F;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: 'Lato', sans-serif;
        cursor: pointer;
        display: inline-block;

    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #556B2F;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #556B2F;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #556B2F;
    }

    .tab_name {
        color: #696969;

    }
</style>

<body>


    <div class="container">

        <header>
            <h2><a href="#"><i class="ion-plane"></i> FoodAssist</a></h2>
            <nav>
                <ul>

                    <li>
                        <a class="btn" href="#" title="AboutUs">About Us</a>
                    </li>
                    <!-- <li>
                        <a class="btn" href="register.php" title="Register">Register</a>
                    </li>
                    <li>
                        <div class="text-right">
                        Button HTML (to Trigger Modal)
                        <a href="landing_page.php/#myModal" class="btn" data-toggle="modal">Login</a>
                        </div>
                        <a class="login-trigger" href="#" data-target="#login">Log In</a>
                    </li> -->
                </ul>
            </nav>
        </header>
    </div>

    <form id="regForm" action="register.php">
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <h1 class='tab_name'>Account Information</h1>

            <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
            <p><input placeholder="Password" oninput="this.className = ''" name="password" type='password'></p>
        </div>
        <div class="tab">
            <h1 class='tab_name'> Personal Information</h1>

            <p><input placeholder="First Name" oninput="this.className = ''" name="first_name"></p>
            <p><input placeholder="Last Name" oninput="this.className = ''" name="last_name"></p>
            <p><input placeholder="Age" oninput="this.className = ''" name="age"></p>
            <p><input placeholder="Street Address" oninput="this.className = ''" name="sa"></p>
            <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
            <p><input placeholder="State" oninput="this.className = ''" name="state"></p>
            <p><input placeholder="Zip-Code" oninput="this.className = ''" name="zip_code"></p>

        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>