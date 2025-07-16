
# PHP Toggle Status Web App

This project is a simple web application built with PHP, MySQL, HTML, CSS, and JavaScript to manage a list of users. It allows you to:

- Add users with name and age
- Display all users in a table
- Toggle the status of each user (ON/OFF) using AJAX
![wep pic](https://github.com/user-attachments/assets/7f93cb1a-dcf5-4efb-a69a-a43c1f438bf6)

---

## ✅ Features

- Add new user (name + age)
- All records displayed in a table
- Each row has a "Toggle" button to update status (0 ↔ 1)
- Status updates instantly without page reload

---

## 🛠 Technologies Used

- PHP
- MySQL (phpMyAdmin)
- HTML & CSS
- JavaScript (AJAX using Fetch API)

---


## 🗃️ MySQL Table Structure

```sql
CREATE TABLE list (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  age INT,
  status TINYINT(1) DEFAULT 0
); 
```
![xam pic](https://github.com/user-attachments/assets/54787e05-0c37-4668-b5b7-ac2bf7893ff2)

---
##  🚀 How to Run
Copy the task2 folder to your XAMPP htdocs directory:

makefile

C:\xampp\htdocs\task2
Start Apache and MySQL from XAMPP Control Panel.

Create a database in phpMyAdmin named:

nginx

task2
Execute the SQL to create the list table (see above).

Open your browser and go to:

bash
http://localhost/task2/index.php
Start adding users and toggling statuses 🎉


---


## 📌 Notes
status = 0 is shown as OFF

status = 1 is shown as ON

No page reload is needed when toggling
