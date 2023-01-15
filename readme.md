# Web Application to Adopt and put up for Adoption Pets

## Overview

Little Paws serves as a platform to adopt and put up for adoption pets. The user can filter for the pet of his preference from different parameters such as the animal type, the breed, the age, its location an more. An user with the role of admin can manage the pets, users and see the web application statistics.


https://user-images.githubusercontent.com/61996882/212542075-06567445-fd91-42c4-8f6a-74d8c4c31f60.mov




## Features

-   [x] Register and Login Page
-   [x] Forgot Password
-   [x] Find Pets based on different filters
-   [x] Contact current owner for adoption
-   [x] Put up a pet for adoption
-   [x] User(Profile, Settings)
-   [x] Admin(Dashboard, Users, Pets) + User Features
-   [x] FAQ
-   [x] About Us
-   [x] Contact Us

## Technologies

-   [x] PHP
-   [x] Laravel
-   [x] Breeze
-   [x] Swiperjs
-   [x] Chartjs
-   [x] Blade
-   [x] MySQL
-   [x] XAMPP
-   [x] JavaScript
-   [x] HTML
-   [x] CSS
-   [x] Bootstrap

## Prerequisites

-   XAMPP
-   Register in the **petfinder** API
-   Generate the API key and secret
-   Add the following variables to the env file

```sh
API_BASE_URL = "https://api.petfinder.com/v2/"
API_TOKEN_URL = "https://api.petfinder.com/v2/oauth2/token"
CLIENT_ID = Your API key
CLIENT_SECRET = Your secret
```

## Instructions to Run the Application

clone the git repo  
Create a .env file and copy the contents of .env.example to it and enter your credentials for MySQL database

```sh
composer install
npm install
php artisan migrate
php artisan db:seed
php artisan db:seed --class=UserSeeder
npm run dev

Open a new terminal
php artisan serve
```

### To run forgot password

First choose an email, it can be en email created just for testing, and follow the following steps:

-   Login to your gmail
-   Go to Security setting and Enable 2 factor authentication
-   After enabling this you can see app passwords option. Click here!
-   And then, from Your app passwords tab select Other option and put your app name and click GENERATE button to get new app password.
-   Finally copy the 16 digit of password and click done. Now use this password instead of email password to send mail via your app.
-   Now you can use just email and this generated pass to send email.

Replace these values in your envitonment file, but with your own username and password:

```sh
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=youremail@gmail.com
MAIL_PASSWORD="yourpassword"
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=youremail@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

## Contributors

Juan Gutierrez [<img src="https://i.stack.imgur.com/gVE0j.png" alt="Linkedin">](https://www.linkedin.com/in/-juan-gutierrez/)  
Jordan Chan [<img src="https://i.stack.imgur.com/gVE0j.png" alt="Linkedin">](https://www.linkedin.com/in/jordan-chan49/)  
Rutvik Joshi [<img src="https://i.stack.imgur.com/gVE0j.png" alt="Linkedin">](https://www.linkedin.com/)  
Sourav Choudhary [<img src="https://i.stack.imgur.com/gVE0j.png" alt="Linkedin">](https://www.linkedin.com/in/sourav009/)
