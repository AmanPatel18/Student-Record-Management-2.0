# Student-Record-Management-2.0
Student Record Management is a GUI web based application created using HTML, CSS, JavaScript and PHP with MySQL Database Connectivity.

It's main purpose is to successfully perform various operation regarding the student record management.

It is used for storing the records of the student in any institution especially for the coaching centers that teaches programming.

Here you can manage the record of the students in a very easy way, as it provides very friendly and easy user interface.

# What Operation can we perform?

In this web application you can perform following operations:-

1. Insertion - Inserting a new record of a student.
                (Here, you can insert the details like student's Roll Number, Name, Age , Gender, Select subject, and according to that subject the total fees of a student will be appear. Also the batch of a student will be allocated automatically which you can change later if you wish so. Then you can insert the total amount paid by the student and according to that 'pending amount' and 'fee status' (Paid/Due) will be calculated automatically.)

2. Deletion  - Deleting the existing records of the students.
3. Updation  - Updating the details or records of the students.
4. Searching - You can search for a record of a particular student.

** You can also view the records of all the students in a tabular format. **
** You can see the records of those students who has a pending fees particularly. **

# How to use?

In order to use this web-application you need to have an application server as well as the database server, as some of the files of the app are coded in php with mysql,
so just download a software which provides a local application server, database server like WAMP-Server or Xamp-Server. (Here we are using WAMP-Server).

After installing the WAMP-Server in your system, go to the directory where WAMP is installed (usually in C drive) and head over to "C:\wamp64\www" and create a folder and name it anything you want for instance "SRM" and copy all the files that i have provided in my repository and paste in this folder that you just created.

** Then open php-myadmin, go to databases and create a new database namely 'srm'. Now click on import and select the database file namely, 'srm.sql' that i have provided in my repository. And click on 'Go Button' to execute the query.
Now your database will have two tables 'username' and 'student'. **

Now, turn on the server in your system, and open any webbrowser and type "localhost/SRM/Login.php" just login or create an account and you are good to go.

# Note:-
** Change the port of the mysql server if the default port i.e 3006 is not working and then also make all these changes in the files which has database connectivity statements. **

# Created By: Aman Patel
# Email: Codingdrift18@gmail.com
