# 🛒 SwiftBuy - Laravel Grocery Store E-Commerce Platform

## Overview

SwiftBuy is a full-featured grocery store e-commerce web application built with Laravel. The platform provides a complete online shopping experience for customers while offering a powerful administration panel for managing products, orders, customers, content, and website settings.

The system includes multi-authentication, payment gateway integration, email notifications, coupon management, delivery management, customer reviews, wishlist functionality, invoice generation, and much more.

---

# 🚀 Key Features

## Admin Panel Features

### Website Management

* Change website logo and favicon
* Manage top bar information
* Manage footer information
* Update contact page information
* Manage homepage sliders
* Update Privacy Policy page
* Update Terms & Conditions page
* Website settings management

### Product Management

* Create, Edit, Delete Product Categories
* Create, Edit, Delete Products
* Manage Product Variants
* Upload Product Images
* Product Inventory Management

### Order Management

* View Customer Orders
* Generate and Download Invoices
* Update Order Status:

  * Pending
  * Processing
  * Shipped
  * Delivered
* Manage Delivery Charges

### Customer Management

* Create, Edit, Delete Customers
* Activate or Deactivate Customer Accounts
* View Customer Information
* Customer Profile Management

### Coupon Management

* Create Coupons
* Edit Coupons
* Delete Coupons
* Configure Discount Rules

### Content Management

* FAQ Management
* Blog/Post Management
* Comment Management
* Reply Management

### Subscriber Management

* View Subscribers
* Export Subscriber Data as CSV

### Admin Profile

* Update Profile Information
* Change Profile Photo
* Change Password

---

# 👥 Customer Features

### Authentication

* Free Customer Registration
* Secure Login System
* Password Reset Functionality
* Email Verification During Registration

### Profile Management

* Update Profile Information
* Change Password
* Manage Account Settings

### Shopping Features

* Browse Products
* Search Products
* Product Categories
* Product Variants Selection
* Shopping Cart Management

### Wishlist

* Add Products to Wishlist
* Remove Products from Wishlist

### Orders

* Place Orders
* View Order History
* Download & Print Invoices
* Track Order Status

### Reviews

* Submit Product Reviews
* Manage Personal Reviews

### Notifications

* Order Confirmation Emails
* Order Status Update Emails
* Account Verification Emails

---

# 🔐 Authentication & Security

* Multi Authentication System
* Admin Authentication
* Customer Authentication
* Email Verification
* Password Reset System
* Form Validation
* CSRF Protection
* Secure Password Hashing

---

# 💳 Payment Methods

The application supports multiple payment options:

* PayPal Integration
* Stripe Integration
* Cash On Delivery (COD)

---

# 📧 Email Features

* Registration Verification Emails
* Password Reset Emails
* Order Confirmation Emails
* Order Status Notification Emails
* Laravel Built-in Mail System

---

# ⚙️ Technical Features

* Laravel Framework
* MVC Architecture
* Eloquent ORM
* Complete CRUD Operations
* File Upload System
* Image Upload System
* Toast Notification Messages
* Responsive Design
* Invoice Generation
* CSV Export Functionality

---

# 🛠 Technology Stack

### Backend

* PHP 8+
* Laravel 12
* MySQL

### Frontend

* Blade Templates
* HTML5
* CSS3
* JavaScript
* Bootstrap

### Development Tools

* Composer
* Git
* GitHub
* Laravel Artisan

---

# 📦 Installation

## Clone Repository

```bash
git clone https://github.com/your-username/swiftbuy.git
cd swiftbuy
```

## Install Dependencies

```bash
composer install
```

## Create Environment File

```bash
cp .env.example .env
```

## Generate Application Key

```bash
php artisan key:generate
```

## Configure Database

Update your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=swiftbuy
DB_USERNAME=root
DB_PASSWORD=
```

## Run Migrations

```bash
php artisan migrate
```

## Seed Database (Optional)

```bash
php artisan db:seed
```

## Create Storage Link

```bash
php artisan storage:link
```

## Run Application

```bash
php artisan serve
```

Visit:

```text
http://127.0.0.1:8000
```

---

# 📂 Project Modules

* Authentication Module
* Admin Dashboard Module
* Customer Dashboard Module
* Product Management Module
* Category Management Module
* Shopping Cart Module
* Wishlist Module
* Coupon Module
* Delivery Charge Module
* Order Management Module
* Invoice Module
* Payment Gateway Module
* Review Module
* FAQ Module
* Blog Module
* Subscriber Module
* Website Settings Module

---

# 🎯 Future Enhancements

* AI Product Recommendations
* Multi-Vendor Support
* Mobile Application
* Real-Time Order Tracking
* Loyalty Reward System
* Advanced Analytics Dashboard
* Multiple Language Support

---

# 👨‍💻 Developer

**Aamish Malik**

BS Software Engineering

Laravel & MERN Stack Developer

---

# 📄 License

This project is licensed under the MIT License.

---



SwiftBuy is a complete Laravel-based Grocery Store Management & E-Commerce System designed to provide a seamless shopping experience for customers and a powerful management system for administrators.
