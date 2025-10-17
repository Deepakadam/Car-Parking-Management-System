# Car Parking Management System

[![PHP](https://img.shields.io/badge/PHP-7.4-blue)](https://www.php.net/) 
[![MySQL](https://img.shields.io/badge/MySQL-8.0-green)](https://www.mysql.com/) 
[![HTML](https://img.shields.io/badge/HTML5-orange)](https://developer.mozilla.org/en-US/docs/Web/HTML) 
[![CSS](https://img.shields.io/badge/CSS3-blueviolet)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-yellowgreen)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

---

## Table of Contents
- [About](#about)  
- [Features](#features)  
- [Technology Stack](#technology-stack)  
- [Installation / Setup](#installation--setup)  
- [Usage](#usage)  
- [Screenshots](#screenshots)  
- [Future Enhancements](#future-enhancements)  
- [License](#license)  

---

## About
**Car Parking Management System** is a **PHP-MySQL web application** designed to manage parking operations efficiently. The system includes **Admin, User, and Security modules**, allowing slot booking, real-time updates, and secure authentication. It automates parking management, reducing manual effort and improving efficiency.

---

## Features
- **Admin Module:** Manage parking slots, monitor activity, and generate reports.  
- **User Module:** Book parking slots, view booking history, and check real-time slot availability.  
- **Security Module:** Track vehicle entry/exit and validate bookings.  
- **Automation:** Reduces ~70% of manual work by automating slot allocation.  
- **Secure Authentication:** Role-based access for all users.  

---

## Technology Stack
- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** WAMP/XAMPP  

---

## Installation / Setup
1. Install [WAMP](https://www.wampserver.com/) or [XAMPP](https://www.apachefriends.org/).  
2. Place the project folder in the `www` (WAMP) or `htdocs` (XAMPP) directory.  
3. Open **phpMyAdmin** and create a database (e.g., `car_parking_db`).  
4. Import the provided `.sql` file to create tables and sample data.  
5. Update `config.php` with your database credentials:
6. Start Apache and MySQL from WAMP/XAMPP control panel.

Open your browser and navigate to:
http://localhost/Parking/

   ```php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "parking";

## Usage

Admin: Login to manage slots, view reports, and monitor bookings.

User: Register/login to book parking slots and check booking history.

Security: Login to track vehicle entry/exit and validate bookings.

Screenshots

(Add screenshots of main pages here to showcase your project)

Future Enhancements

Mobile-responsive interface

Email/SMS notifications for bookings

Analytics and dynamic pricing

License

This project is licensed under the MIT License.



