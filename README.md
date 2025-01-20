SET UP PROCEDURES -------

1. Create a database called property.
2. Go to the folder called database in the project directory and import the file inside of the sql folder called property 2.sql into your database, to create all the required tables.



3. Go to the myconfig folder in the project directory and open the constants folder and change only the values for DB_USER & DB_PASSWORD to your own phpmyadmin user values.


define('ROOT_URL', 'http://localhost/housing/');  // CHANGE THIS VALUE "HOUSING" TO YOUR OWN FOLDER NAME
define('DB_HOST', 'localhost');    
define('DB_USER', 'nelson');    // CHANGE THIS VALUE
define('DB_PASSWORD', 'nelson');  // CHANGE THIS VALUE
define('DB_NAME', 'property');

CAN USE LOCAL HOST SERVER LIKE WAMP/XAMPP


PROJECT ARCHITECTURE -------

Property Models
Location Of Properties
Adding/Creating of a new tenant
Payments made by tenant
Notifications Message to Tenants