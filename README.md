# PHP-MVC
Simple Model-View-Controller PHP API

This project uses composer for package management:
https://getcomposer.org/

Endpoints:

// Get all users
GET /user

// Get single user
GET /user/{userId}

// Create user
POST /user

// Update user
PUT /user/{userId}

// Delete user
DELETE /user/{userId}

Start the server on port 8000:
php -S 127.0.0.1:8000 -t public
