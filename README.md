# I learn Create QR Code Generator in Laravel 11


A simple yet elegant QR Code Generator built using Laravel 11. This application allows users to generate QR codes by entering text and Links.

---

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
---

## Features

- Generate QR codes by entering text.
- Download the generated QR code as an image.
- Modern and responsive UI with Bootstrap 5.
- Lightweight and easy to use.

---

## Prerequisites

Before running this project, ensure you have the following installed:

- PHP 8.1 or higher
- Composer
- Laravel 11
- Node.js (optional, for asset management)

---

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/TaherZreeka/QR-App.git
   cd QR-App
   composer install
   npm install
   cp .env.example .env
   composer require simplesoftwareio/laravel-qr-code
   php artisan serve
   http://localhost:8000/qr-code

## Screenshots

Below are some screenshots of the QR Code Generator in action:

### **Home Page (Input Form)**
![Home Page](https://raw.githubusercontent.com/TaherZreeka/QR-App/main/public/qrcode/Screenshot%20(102).png)

### **Generated QR Code with Download Button**
![Generated QR Code](https://raw.githubusercontent.com/TaherZreeka/QR-App/main/public/qrcode/Screenshot%20(101).png)
