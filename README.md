🌱 Smart Cultivation System
<p align="center"> <b>A Smart Agriculture Management Platform for Farmers</b><br> Built using PHP, MySQL, HTML, CSS & JavaScript </p> <p align="center"> <a href="https://smart-cultivation.kesug.com"> <img src="https://img.shields.io/badge/🚀 Live Demo-Visit Now-success?style=for-the-badge"> </a> </p> <p align="center"> <img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php"> <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql"> <img src="https://img.shields.io/badge/HTML5-Markup-E34F26?style=for-the-badge&logo=html5"> <img src="https://img.shields.io/badge/CSS3-Styling-1572B6?style=for-the-badge&logo=css3"> <img src="https://img.shields.io/badge/JavaScript-Frontend-F7DF1E?style=for-the-badge&logo=javascript"> <img src="https://img.shields.io/badge/Server-Apache-orange?style=for-the-badge"> <img src="https://img.shields.io/badge/License-Educational-blue?style=for-the-badge"> </p>
📌 Project Overview

The Smart Cultivation System is a web-based agriculture management platform designed to support farmers in managing their crops digitally.

It enables farmers to track crop growth stages, receive cultivation guidance, and get notifications about farming activities, making agricultural management more organized and efficient.

💡 The system aims to modernize traditional farming practices by providing farmers with digital tools for better crop monitoring and decision-making.

🌐 Live Application

🔗 Access the deployed system here:
https://smart-cultivation.kesug.com

✨ Core Features
👨‍🌾 Farmer Panel

Secure Farmer Registration & Login

Add and manage crop details

Track crop growth stages

Receive crop-related notifications

View agricultural knowledge base

Update farmer profile information

🛠️ Admin Panel

Admin Dashboard

Manage farmer accounts

Add / update / delete crop information

Update crop growth stages

Send notifications to farmers

Manage agricultural knowledge base

📚 Agricultural Knowledge Base

The platform includes structured crop guidance for farmers:

Crop growth stages

Fertilizer schedules

Irrigation planning

Crop problems & solutions

Supported crops currently include:

Tomato

Groundnut

🎨 UI & Styling Approach

The system follows a clean and structured interface design:

Responsive layout design

Dashboard-based UI structure

Card-based crop information display

Organized navigation menus

Simple farmer-friendly interface

Clean typography and color scheme

CSS Techniques Used

Flexbox for layout alignment

Responsive design using media queries

Hover transitions for interactive elements

Card-based layout for dashboards

Box-shadow and border-radius for modern UI

🏗️ System Architecture
Farmer / Admin (Browser)
          ↓
Frontend (HTML + CSS + JavaScript)
          ↓
Backend (PHP)
          ↓
MySQL Database
          ↓
Notification System
🗂️ Database Structure
Main Tables
Table Name	Description
users	Stores farmer and admin details
farmer_crops	Stores farmer crop cultivation records
crop_notifications	Stores notifications related to crops
knowledge_base	Stores agricultural knowledge content
📂 Project Structure
smart-cultivation-system/
│
├── index.php
├── login.php
├── register.php
├── farmer_dashboard.php
├── admin_dashboard.php
│
├── crop_management.php
├── knowledge_base.php
├── notifications_admin.php
│
├── db_connection.php
├── smart_cultivation.sql
│
├── PHPMailer-master/
│
└── README.md
⚙️ Installation Guide
1️⃣ Clone Repository
git clone https://github.com/yourusername/smart-cultivation-system.git
2️⃣ Move Project Folder

Move the folder to:

htdocs (XAMPP)
OR

www (WAMP)

3️⃣ Create Database

Open phpMyAdmin

Create database named:

smart_cultivation

Import:

smart_cultivation.sql
4️⃣ Configure Database Connection

Update db_connection.php:

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smart_cultivation";
5️⃣ Run the Project

Open browser:

http://localhost/smart-cultivation-system
🔄 System Workflow

Farmer registers or logs in

Farmer adds crop details

System tracks crop growth stages

Farmers receive notifications and guidance

Admin manages crops and knowledge base

Farmers use recommendations to manage cultivation

🔐 Security Features

Session-based authentication

Password hashing for secure login

Input validation and sanitization

Controlled admin access

🎯 Future Enhancements

AI-based crop disease detection

Weather-based crop recommendations

IoT-based smart farming sensors

Mobile application integration

Real-time agricultural analytics

👨‍💻 Author

Chiranjeevi Bathula
BTech Computer Science Engineering Student

📜 License

This project is developed for educational purposes.

⭐ Support

If you like this project, consider giving it a ⭐ on GitHub!
