# 🌸 FloSun – Flower Shop E-Commerce Website

FloSun is a full-stack online flower shop built with **PHP and MySQL**. Customers can browse flowers, save favourites, fill a cart and place orders. Sellers get a separate admin area to manage their products, orders and messages.

<!-- Add screenshots here after you take them, e.g.:
![Home page](screenshots/home.png)
![Admin dashboard](screenshots/dashboard.png)
-->

## ✨ Features

### Customer side
- Register, log in and log out, with profile update
- Browse the shop and view product details
- Search for products
- Add products to a **cart** and a **wishlist**
- Checkout with delivery address (home or office) and a choice of payment method
- View order history and order details with status
- Contact form to send messages to the shop
- About page

### Seller / admin side (`/admin`)
- Separate seller registration and login
- **Dashboard** with live counts: products, active/deactive products, registered users, sellers, messages and orders
- Add, edit, view and delete products (with image upload and stock)
- Activate or deactivate products
- View and manage customer orders and payment status
- Read customer messages
- View registered users and sellers
- Update seller profile

## 🛠️ Tech Stack

| Layer | Technology |
|-------|------------|
| Backend | PHP (PDO with prepared statements) |
| Database | MySQL |
| Frontend | HTML, CSS, JavaScript |
| Libraries | [SweetAlert](https://sweetalert.js.org/) for alerts, [Boxicons](https://boxicons.com/) for icons |
| Local server | XAMPP / WAMP / Laragon |

## 🗄️ Database

The database is called `flowershop_db` and has 7 tables:

`users` · `sellers` · `products` · `cart` · `wishlist` · `orders` · `message`

The full schema and sample data are in [`database/flowershop_db.sql`](database/flowershop_db.sql).

## 🚀 Getting Started

### Prerequisites
- PHP 7.4 or newer
- MySQL / MariaDB
- A local server stack such as [XAMPP](https://www.apachefriends.org/)

### Installation

1. **Clone the repository** into your server's web root (`htdocs` for XAMPP):
   ```bash
   git clone https://github.com/athynova-tech/FlowerShop.git
   ```

2. **Start Apache and MySQL** from the XAMPP control panel.

3. **Create the database.** Open [phpMyAdmin](http://localhost/phpmyadmin), create a database named `flowershop_db`, then **Import** `database/flowershop_db.sql`.

4. **Check the database connection** in `components/connect.php`. The defaults match a standard XAMPP setup:
   ```php
   $db_name = 'mysql:host=localhost;dbname=flowershop_db';
   $user_name = 'root';
   $user_password = '';
   ```
   Change these if your MySQL settings are different.

5. **Open the site:**
   - Shop: `http://localhost/FlowerShop/home.php`
   - Seller/admin: `http://localhost/FlowerShop/admin/login.php`

### Sample accounts
The SQL file contains fictional demo customer and seller accounts. They use the password `demo123` for local testing only; do not reuse these credentials or use them in a deployed environment. You can also register a new account from the site.

## 📁 Project Structure

```
FlowerShop/
├── admin/             # Seller dashboard, product and order management
├── components/        # Shared headers, footers, DB connection, cart/wishlist actions
├── css/               # user_style.css, admin_style.css
├── js/                # user_script.js, admin_script.js, SweetAlert
├── database/          # flowershop_db.sql
├── image/             # Site images (compressed)
├── uploaded_files/    # Product images uploaded by sellers
├── home.php           # Landing page
├── menu.php           # Shop page
├── cart.php, wishlist.php, checkout.php, order.php, ...
└── README.md
```

## 🔮 Possible Improvements

- Hash passwords with `password_hash()` / `password_verify()`
- Integrate a real payment gateway
- Add product categories and reviews
- Email order confirmations
- Make the layout fully responsive for small screens

## 👤 Author

**Athuman Haruna Kasle**
Final-year Computer Science student, Tanzania
📧 athumankasele9@gmail.com
🔗 GitHub: [@athynova-tech](https://github.com/athynova-tech)

## 📄 License

This project was built for learning and portfolio purposes.
