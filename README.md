# baby-stank
A static PHP website for babies.

To run the app you need an Apache server and a mySQL server. The following running example is for XAMPP(you need to install it first):

- Clone this repo inside the htdocs folder (located inside the xampp folder).

- Run the apache and mysql servers

- Inside the database folder, there is a file called script.sql. Run the script in your local database. Also, in the same folder, modify database connection parameters inside the file named db_functions.sql.

- Type in your browser: localhost/baby-stank/

- Feel free to test the functionalities

Main features:

- Login + Register + Session: Initially, the user is not logged in. However, to add a new fost on the forum or to upload a baby photo, login is required. First, you have to register. Once logged in, your username should be displayed in the top right corner.

- Album foto: Upload photos of babies. The uploaded photos from all users will be displayed.

- Deseneaza: Select any color and then draw on the white screen. Draw app is done using canvas API.

- Magazin: See products from different categories. Search through the products(you can enter a name, vendor or category) and click on them to see them on their vendor pages.

- Forum: Choose category and post a message. You will see all the posted messages. The messages you posted will have a different background.

