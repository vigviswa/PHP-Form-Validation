# PHP-Form-Validation
Implementation of a Form Validator in PHP using SESSION variables and Cookies

1.	login.html 

Creates a form that contains three input fields on it: email, name and password. When the form is submitted, it goes to login.php

2.	login.php

Validates the user input. All fields are mandatory. Email is a valid email address and password contains at least six characters. Once validated, stores user information (email and name) in session variables. You can alternatively use cookies.  Redirects user to welcome.php.
If user input is missing in one of the input fields or form doesn’t validate, redirects user to login.html.

3.	welcome.php

Checks if the user has signed in to the system. If signed in, welcomes user by using “name” of the user. Shows the number of visits for the page. Includes a link for the user to sign out.
Otherwise, redirect to login.html.  

4.	logout.php

Signs out the user by destroying session variables. Redirects to login.html.

