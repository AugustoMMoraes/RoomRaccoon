## Shopping List Application

This application is a simple shopping list web application implemented in vanilla PHP part of RoomRaccoon assessment test.
It uses a basic MVC-like architecture without using any frameworks.

## Notes
I've run out of time before I could create both Request.php and Response.php to encapsulate the HTTP request/response used in modern frameworks like Laravel;
Also, the App.php is acting like a router with the ShoppingController->index as default, I would separate this into a dedicated Router.php class.

## Improvements
* Create both Response.php and Request.php to handle HTTP messages
* Refactor routing
* Frontend: API-driven functions handling

## Installation
* Clone the repo
* Create database named 'roomraccoon'
* Update the file config.php at app/core with your DBUSER and DBPASS
* Run the application at 'public/index.php'