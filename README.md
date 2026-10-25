# ElectroMart — E-Commerce Web Application

**ElectroMart** is a modern e-commerce web application designed to provide customers with a convenient online shopping experience. The project is being developed using PHP, HTML, CSS, JavaScript, Bootstrap, and MySQL, with a focus on responsive design, usability, secure authentication, and reliable order management.

The project currently includes the initial frontend and interactive shopping interface. PHP backend integration and database-driven functionality are planned development milestones.

## Project Overview

ElectroMart aims to connect customers with electronic products through a user-friendly online store. Customers will be able to browse products, manage a shopping cart, create accounts, place orders, and track their purchases.

The long-term goal is to develop a complete e-commerce system with secure authentication, persistent data storage, order processing, and administrative product management.

## Current Features

- **Modern homepage:** A professional storefront layout with promotional content and product sections.
- **Responsive user interface:** Styling designed to work across desktop and mobile screen sizes.
- **Product discovery:** Homepage product sections and interactive search and category-filtering functionality.
- **Shopping cart interface:** Frontend cart functionality with quantity updates, item removal, and total calculations.
- **Wishlist:** Client-side wishlist functionality using browser local storage.
- **Login interface:** A dedicated sign-in page with password visibility controls.
- **Reusable page components:** Shared header and footer files to support consistent navigation and layout.

> **Development status:** These are the existing or previously implemented frontend capabilities. Persistent database storage, real authentication, payment processing, and other backend features must be implemented and tested before they can be considered complete.

## Technology Stack

| Technology | Purpose |
|---|---|
| PHP | Server-side application logic |
| HTML5 | Web page structure |
| CSS3 | Styling and responsive layouts |
| JavaScript | Client-side interactivity |
| Bootstrap 5 | Responsive UI components |
| Bootstrap Icons | Interface icons |
| MySQL | Planned persistent database |
| XAMPP | Local Apache and MySQL development environment |
| Git and GitHub | Version control and source code hosting |

## Planned Core Backend Functionality

### 1. User Registration and Authentication

- Register new customer accounts.
- Validate submitted form data on the server.
- Check for duplicate email addresses.
- Hash passwords securely before storing them.
- Authenticate users using database records.
- Manage sessions and authenticated access.
- Implement logout and appropriate access controls.
- Support password reset functionality in a later development phase.

Passwords must never be stored as plain text.

### 2. Product Management

- Store products in a MySQL database.
- Organize products by category.
- Display product names, descriptions, prices, images, stock quantities, and availability.
- Retrieve products dynamically from the database.
- Support product search and category filtering.
- Provide administrative functionality to create, update, and remove products.
- Validate inventory and product information before saving changes.

### 3. Shopping Cart

- Add products to the shopping cart.
- Update item quantities and remove products.
- Calculate subtotals and the overall cart total on the server.
- Validate product prices and stock availability using database records.
- Associate persistent carts with customer accounts where appropriate.
- Preserve guest cart functionality and support cart merging after login if implemented.

Client-side prices and totals must not be trusted for final order calculations.

### 4. Checkout and Order Processing

- Require valid checkout information.
- Validate delivery details and selected products.
- Recalculate prices and totals on the server.
- Check stock availability before confirming an order.
- Create an order and its associated order items in the database.
- Store an order reference, order date, total amount, and order status.
- Reduce stock quantities safely when an order is accepted.
- Prevent inconsistent orders through appropriate database transactions.
- Display an order confirmation after successful processing.

### 5. Order Management

- Allow authenticated customers to view their own orders.
- Display order details and item information.
- Track order statuses such as Pending, Processing, Shipped, Delivered, and Cancelled.
- Allow authorized administrators to view and manage orders.
- Enforce permissions so customers cannot access other customers' orders.

### 6. Database Management

The planned MySQL database will organize the application's core information into related tables, including:

| Table | Purpose |
|---|---|
| `users` | Customer and administrator accounts |
| `categories` | Product categories |
| `products` | Product descriptions, prices, and inventory |
| `cart_items` | Persistent shopping cart items, if used |
| `orders` | Order details and status |
| `order_items` | Products and quantities associated with each order |

Additional tables, such as addresses, payments, and product reviews, may be introduced when required.

Primary keys, foreign keys, unique constraints, and suitable indexes will be used to maintain data integrity.

### 7. Administration

A future administrative area will provide authorized administrators with tools to:

- Manage products and categories.
- Update prices and inventory.
- View and manage customer orders.
- Review customer account information when necessary.
- Monitor basic sales and order statistics.

Administrative pages must be protected by server-side role checks.

### 8. Security and Validation

Security will be considered throughout backend development, including:

- Password hashing using PHP's password-hashing functions.
- Prepared SQL statements using PDO or MySQLi.
- Server-side validation and output escaping.
- Session security and appropriate session regeneration.
- Authorization checks for protected operations.
- CSRF protection for state-changing forms.
- Secure handling of database credentials.
- Validation of product stock and prices during checkout.
- Safe error handling without exposing database credentials or sensitive system details.

Payment integration will require a suitable payment provider and must not store raw card details.

## Planned Application Architecture

ElectroMart will use a straightforward PHP and MySQL architecture suitable for learning, demonstration, and incremental development.

```text
Customer Browser
       |
       v
HTML / CSS / JavaScript / Bootstrap
       |
       v
PHP Application
       |
       +---- Authentication and Sessions
       |
       +---- Product and Category Management
       |
       +---- Shopping Cart
       |
       +---- Checkout and Order Processing
       |
       +---- Administrative Functions
       |
       v
MySQL Database
```

JavaScript will improve the user experience, while PHP will validate requests, enforce permissions, perform business logic, and communicate with the database.

## Getting Started

### Prerequisites

Install the following software:

- XAMPP with Apache, PHP, and MySQL/MariaDB.
- A modern web browser.
- Git (optional, for version control).

### 1. Clone the Repository

Open a terminal and run:

```bash
git clone https://github.com/Zolla21/ElectroMart.git
```

### 2. Place the Project in XAMPP

Move or clone the project into the Apache web root:

```text
C:\xampp\htdocs\electromart
```

### 3. Start XAMPP

Start Apache in the XAMPP Control Panel. Start MySQL when beginning database integration.

### 4. Open the Application

Visit:

```text
http://localhost/electromart/
```

The current frontend can be explored locally. Database-backed features will become available as the backend is implemented.

### 5. Configure the Database

During backend development, we will create the application database using phpMyAdmin or MySQL commands, define the schema, and configure a PHP database connection.

Database credentials should be kept outside publicly committed source code. A local environment configuration file should be excluded from Git.

## Development Roadmap

- [x] Create the initial storefront and page structure.
- [x] Implement the initial login and shopping cart interfaces.
- [x] Add client-side cart and wishlist interactions.
- [x] Create the GitHub repository and push the initial version.
- [ ] Create the MySQL database and schema.
- [ ] Implement secure customer registration and login.
- [ ] Connect products and categories to the database.
- [ ] Implement persistent cart functionality.
- [ ] Implement checkout and order processing.
- [ ] Build administrative product and order management.
- [ ] Test validation, authentication, authorization, and database operations.
- [ ] Improve deployment configuration and production security.

## Project Structure

The current repository includes the following files and directories:

```text
ElectroMart/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── images/
│   └── js/
│       ├── cart.js
│       ├── login.php
│       └── main.js
├── includes/
│   ├── header.php
│   └── footer.php
├── cart.php
├── index.php
├── login.php
└── README.md
```

The structure may evolve as database configuration, backend services, registration, checkout, and administrative pages are added.

## Testing

The application will be tested incrementally, including:

- Registration and login validation.
- Invalid credentials and session handling.
- Product search and category filtering.
- Cart quantity and total calculations.
- Insufficient stock and invalid checkout requests.
- Order creation and inventory consistency.
- Customer and administrator access permissions.
- Responsive layouts and usability.

## Future Improvements

Potential extensions include:

- Payment gateway integration.
- Order confirmation emails.
- Product ratings and reviews.
- Advanced product filtering and sorting.
- Sales reports and analytics.
- Product recommendations.
- Order tracking and customer notifications.

These enhancements will be considered after the core shopping and order-processing workflow is implemented.

## Repository

GitHub: https://github.com/Zolla21/ElectroMart

## License

A license has not yet been selected. The licensing terms will be added when a suitable license is chosen.
