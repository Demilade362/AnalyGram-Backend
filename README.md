<h1 align="center">Analygram Backend</h1>

## Auth Routes

Registration Route:

Route: /register
Controller Method: RegisterController@showRegistrationForm (to display registration form) and RegisterController@register (to handle registration logic).
HTTP Method: GET (to display form) and POST (to handle form submission).
Purpose: Allows users to register accounts.
Login Route:

Route: /login
Controller Method: LoginController@showLoginForm (to display login form) and LoginController@login (to handle login logic).
HTTP Method: GET (to display form) and POST (to handle form submission).
Purpose: Allows users to log in.
Logout Route:

Route: /logout
Controller Method: LoginController@logout
HTTP Method: POST
Purpose: Logs the user out.
Password Reset Routes:

Routes: /password/reset , /password/reset/{token}
Controller Methods: ResetPasswordController@reset
HTTP Methods: GET and POST
Purpose: Allows users to request and reset their passwords.
