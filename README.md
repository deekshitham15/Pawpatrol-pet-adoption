#  Pet Adoption Website

A full-stack web application that connects people who want to adopt pets with those who have pets available for adoption.  
Built with **PHP**, **MySQL**, **HTML**, **CSS**, **JavaScript**, and **Bootstrap**.

---

# Features
- **User Registration & Login** (secure password hashing)
- **Browse Pets** with search & filter
- **Pet Listing** with image upload
- **Adoption Requests** with approval/rejection system
- **Admin Panel** for managing users, pets, and requests
- **Responsive Design** for mobile and desktop

---

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP (procedural)
- **Database:** MySQL
- **Hosting:** Works with Apache (XAMPP, WAMP, or LAMP stack)

---

# Project Structure
Pet-Adoption-Website/
│
├── admin/ # Admin dashboard & management files
├── assets/ # Images, CSS, JS files
├── includes/ # Database connection & helper functions
├── index.php # Homepage with pet listings
├── login.php # User login page
├── register.php # User registration page
├── adopt.php # Adoption request handler
└── view.php # Detailed pet information


---

## ⚡ Setup Instructions
 **Clone the repository**
  
Import the Database

Open phpMyAdmin

Create a new database: pet_adoption

Import the provided .sql file from the database folder

Configure Database Connection

Open includes/connect.php

Set your database credentials (host, username, password, dbname)

Run the Project

Place the project folder in htdocs (for XAMPP) or www (for WAMP)

Start Apache & MySQL

Visit: http://localhost/pet-adoption-website

---
**Author:** Deekshitha M <br>
Developed with ❤️ and dedication.
