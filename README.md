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

## Normal Routes Implementation

User-Related Routes:
User Profile Information:

Route: /api/users/{username}
Purpose: Retrieve information about a specific user, including bio, profile picture, follower count, etc.
User Engagement Metrics:

Route: /api/users/{username}/engagement
Purpose: Get engagement metrics for a user, such as average likes and comments per post, follower growth trends, etc.
Post-Related Routes:
Recent Posts:

Route: /api/posts/recent
Purpose: Fetch recent posts from user accounts for analytics and insights.
Post Metrics:

Route: /api/posts/{post_id}/metrics
Purpose: Retrieve metrics for a specific post, including likes, comments, and views.
Top Posts:

Route: /api/posts/top
Purpose: Get the top-performing posts based on engagement metrics.
Hashtag-Related Routes:
Hashtag Analytics:
Route: /api/hashtags/{hashtag}/analytics
Purpose: Retrieve analytics for a specific hashtag, including usage frequency, top posts, etc.
Analytics Overview Routes:
User Analytics Overview:

Route: /api/analytics/users/{username}
Purpose: Get an overview of analytics for a user, combining various metrics like engagement, top posts, etc.
Overall Analytics:

Route: /api/analytics/overall
Purpose: Retrieve overall analytics and trends for the entire platform, including user growth, popular hashtags, etc.