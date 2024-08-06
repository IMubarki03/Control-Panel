# Robot Control Panel
## Introduction
A _robot control panel_ will be responsible for the human-controlled motion of the robot, and it will be a webpage that interact with people through input buttons; to move the robot in right, left, forward, and backward direction. 
## Requirements
- Webpage(html, php)
- Local server(xampp)
- Database(phpMyAdmin - via xampp)
## Procedure
### Webpage(html, php)
1. Download a text editor. I downloaded VS code, and I highely recommend it.
2. Make your own control panel with the input buttons that will move the robot through an html code; you can also make it colorful and interractive with css and javascript.
3. Now you need to link the control panel you made with the database through a php code.<br>
**NOTE:** I merged the two codes in one to make it a whole one page. If you want to do it this way, please make the file extension ".php". 
### Local Server(xampp)
1. Download xampp. You can download xampp through the link below:<br> https://www.apachefriends.org/es/download.html
2. Run xampp control panel.
3. start "Apatche" and start "MySQL". Now your local host is ON.
### Database(phpMyAdmin - via xampp)
1. Go to xampp control panel and in MySQL row, click "admin".
2. You will be redirected to "phpMyAdmin" page; where you can manage your databases(DBs).
3. Create a new DB.
4. Create a new table in the DB.
5. In the table, make two columns.
6. We will be considering 4 attributes for each column: Name, Type, Length, and AI(Auto_Increment)-or not-.
7. The first column is the unique id or number of the move. So, we will name it "No.", type "INT", length "100", AI.
8. The second column will save the move. So, we will name it "direction", type "VARCHAR", length "255", not AI.
