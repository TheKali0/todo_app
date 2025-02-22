﻿To-Do List App in PHP

A simple and functional To-Do List application built with PHP, MySQL, and CSS. This app allows users to add, update, and delete tasks, while also marking them as completed. It includes basic CRUD operations, making it a great project for learning PHP and web development.

Features
Add New Tasks: Users can add tasks to their to-do list.
Mark Tasks as Completed: Tasks can be marked as completed with a click of a button.
Delete Tasks: Users can delete tasks from their list.
Responsive Design: The application is designed with a basic, user-friendly interface that works on all devices.


Requirements
PHP (v7.0+ recommended)
MySQL (for storing tasks in a database)
Apache (for running the PHP server)
XAMPP or MAMP (for local development environment)



Installation
Clone or Download the Project:
Download or clone this repository to your local machine.



git clone https://github.com/TheKali0/todo_app.git
Set Up XAMPP/MAMP:
Ensure you have XAMPP or MAMP installed and running on your local server.

Create Database:

Open phpMyAdmin (usually available at http://localhost/phpmyadmin/).
Create a new database named todo_db.
Run the following SQL query to create the tasks table:


CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status ENUM('pending', 'completed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Database Connection:

Ensure the db.php file contains the correct connection details (usually localhost, root, and no password for XAMPP).

Run the App:

Move the project folder to your htdocs (for XAMPP) or MAMP directory.
Access the application by navigating to http://localhost/todo_app/ in your browser.
