# AnalyGram - Instagram Analytics Web App

## Overview

AnalyGram is a powerful web application designed to provide comprehensive analytics and insights for Instagram accounts. Whether you are an individual user, influencer, or business, AnalyGram empowers you to track and analyze your Instagram performance, understand audience engagement, and make informed decisions to enhance your online presence.

## Features

### 1. **User-friendly Dashboard**

   - **At-a-Glance Overview:** Get a quick snapshot of key metrics, including followers, engagement rate, and top-performing posts.
   - **Customizable Widgets:** Tailor the dashboard to display the metrics most relevant to your goals.

### 2. **Audience Insights**

   - **Demographics:** Understand the demographics of your followers, including age, gender, location, and more.
   - **Follower Growth:** Track the growth of your follower count over time.

### 3. **Content Analysis**

   - **Top Performing Posts:** Identify your most engaging content to optimize future posts.
   - **Hashtag Effectiveness:** Evaluate the impact of hashtags on your reach and engagement.

### 4. **Engagement Metrics**

   - **Likes and Comments:** Monitor the number of likes and comments on your posts.
   - **Engagement Rate:** Calculate and analyze your overall engagement rate.

### 5. **Competitor Benchmarking**

   - **Compare Metrics:** Measure your performance against competitors or similar accounts.
   - **Identify Trends:** Stay ahead of trends within your niche.

## Getting Started

### Requirements

- Modern web browser (Google Chrome, Mozilla Firefox, Safari, etc.)
- Instagram Business or Creator account for full functionality.

### Installation

1. Visit the AnalyGram website at [www.analygram.com](https://www.analygram.com).
2. Create an account or log in with your existing credentials.
3. Connect your Instagram account securely.

## Usage

1. **Dashboard:** Explore the overview of your Instagram account's performance.
2. **Audience:** Dive into audience demographics and growth trends.
3. **Content:** Analyze your posts, hashtags, and engagement metrics.
4. **Competitors:** Benchmark your performance against competitors.

## Support and Feedback

For any issues, questions, or feedback, please contact our support team at [support@analygram.com](mailto:support@analygram.com). We appreciate your input as we strive to continually improve AnalyGram.

## License

This project is licensed under the [MIT License](LICENSE).


## Routes

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
