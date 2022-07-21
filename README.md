# Online Library Management System

This project manages and stores book info in Relational Database using x**PHP** and **MySQL** with CRUD functionality 

## Made with PHP, MySQL, HTML, CSS and bootstrap

## Working
1. **Xampp server** should be installed on your device.
2. clone this [git repository](https://github.com/keerthanapalepu/OnlineLibrary) into a existing directory `C:\xampp\htdocs\`
3. start your xampp server
4. Import the [librarybd.sql](https://github.com/keerthanapalepu/OnlineLibrary/blob/main/librarydb.sql) file into **phpmyadmin**, which is designed to handle MySQL administration over the Internet.
5. In the browser, navigate to the path of your project, prefixed with **localhost/**.`http://localhost/xampp/htdocs/OnlineLibrary/` like so.

## About the project

**CRUD operations** on MySQL database are performed with the help of PHP, which can only be handled by the admin.

The existence of this session will state the user **authentication status**. After authentication, the PHP $_SESSION super global variable will contain the user id. That is, the $_SESSION[“member_id”] is set to manage the logged-in session.  

The user or administrator can input the type of book/magazine/article he is looking for and then search for it by entering the name/id/author.
![image](https://user-images.githubusercontent.com/98457650/180199369-fc4058d3-538f-4152-8807-bb4279a97d09.png)

![image](https://user-images.githubusercontent.com/98457650/180198805-ca18b12e-b27f-44d5-92b5-51fa013205ee.png)


## Credits
[Keerthana Palepu](https://github.com/keerthanapalepu)
