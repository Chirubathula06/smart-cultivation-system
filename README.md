🌱 Smart Cultivation System
<p align="center"> <img src="https://img.shields.io/badge/PHP-Backend-blue?style=for-the-badge&logo=php"> <img src="https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql"> <img src="https://img.shields.io/badge/HTML5-Frontend-red?style=for-the-badge&logo=html5"> <img src="https://img.shields.io/badge/CSS3-Styling-blue?style=for-the-badge&logo=css3"> <img src="https://img.shields.io/badge/JavaScript-Client-yellow?style=for-the-badge&logo=javascript"> </p> <p align="center"> <a href="https://smart-cultivation.kesug.com"> <img src="https://img.shields.io/badge/🚀 Live Demo-Visit Website-green?style=for-the-badge"> </a> </p>
🚀 Overview

Smart Cultivation System is a web-based agriculture management platform designed to help farmers digitally manage their farming activities.

The platform allows farmers to track crops, monitor growth stages, receive notifications, and access agricultural knowledge to improve farming productivity.

It also includes an Admin Dashboard to manage farmers, crops, notifications, and knowledge base content.

The system aims to make agriculture more organized, data-driven, and accessible through digital technology.

🌐 Live Demo

🔗 Project Live Link

https://smart-cultivation.kesug.com
🎯 Key Features
👨‍🌾 Farmer Dashboard

Farmer registration and login

Track crop cultivation details

Monitor crop growth stages

Receive farming notifications

View agricultural knowledge base

Update farmer profile information

🛠 Admin Dashboard

Manage farmer accounts

Add / edit / delete crops

Update crop growth stages

Send notifications to farmers

Manage knowledge base articles

📚 Agricultural Knowledge Base

The system contains crop guidance including:

Growth stages

Fertilizer schedules

Irrigation schedules

Crop problems & solutions

Supported crops include:

Tomato

Groundnut

📩 Notification System

Automated crop alerts

Activity reminders for farmers

Notification status tracking

🛠 Tech Stack
Technology	Purpose
HTML5	Frontend structure
CSS3	Styling and layout
JavaScript	Client-side interactions
PHP	Backend logic
MySQL	Database management
PHPMailer	Email notifications
XAMPP / InfinityFree	Hosting environment
Git & GitHub	Version control
🏗 System Architecture
Farmer Dashboard / Admin Dashboard
                │
                ▼
            PHP Backend
     (Authentication & Logic)
                │
                ▼
          MySQL Database
                │
                ▼
        Notification System
         (Email / Alerts)
📁 Project Structure
smart-cultivation-system
│
├── admin_dashboard.php
├── farmer_dashboard.php
├── login.php
├── register.php
├── crop_management.php
├── knowledge_base.php
├── notifications_admin.php
├── db_connection.php
├── smart_cultivation.sql
│
├── PHPMailer-master
│
└── README.md
⚙ Installation
1️⃣ Clone Repository
git clone https://github.com/YOUR_USERNAME/smart-cultivation-system.git
2️⃣ Move Project

Place project folder inside:

xampp/htdocs/
3️⃣ Create Database

Open phpMyAdmin

Create database:

smart_cultivation
4️⃣ Import Database

Import:

smart_cultivation.sql
5️⃣ Configure Database

Edit db_connection.php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "smart_cultivation";
6️⃣ Start Server

Start Apache and MySQL in XAMPP.

7️⃣ Run Project

Open browser:

http://localhost/smart-cultivation-system
🎯 Project Purpose

The Smart Cultivation System was developed to help farmers adopt digital tools for managing crops and agricultural activities.

The system simplifies crop tracking and provides knowledge-based guidance to help farmers make better farming decisions.

👨‍💻 Author

Chiranjeevi Bathula
B.Tech Computer Science Student

🌟 Future Enhancements

AI-based crop disease detection

Weather-based farming recommendations

Mobile application integration

IoT smart agriculture sensors

⭐ If you like this project, please star the repository.
