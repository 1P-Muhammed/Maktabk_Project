# Maktabk E-commerce Application

## Overview
Maktabk is an e-commerce platform specializing in office furniture, particularly chairs. The application is built using Laravel and provides a seamless shopping experience for customers.

## Page Specifications

### 1. Home Page (`/`)
- Hero section with video background
- Welcome section with featured product
- Product preview with image gallery
- Features section highlighting key benefits

### 2. Catalog Page (`/catalog`)
- Grid display of all products
- Each product card shows:
  - Product image
  - Product name
  - Discounted price (LE)
  - Original price (strikethrough)
  - "Buy" button
- Save amount indicator for discounted items

### 3. Product Details Page (`/product/{id}`)
- Large product image with thumbnail gallery
- Product name
- Pricing information:
  - Discounted price
  - Original price (strikethrough)
- Quantity selector
- Add to Cart button
- Product description
- Customer reviews section
- Promotional section with warranty information

### 4. Cart Page (`/cart`)
- Order summary section
- Product list showing:
  - Product image
  - Product name
  - Quantity selector
  - Price (using discounted price)
  - Remove button
- Total calculation
- Empty cart state handling

### 5. Search Page (`/search`)
- Search input field
- Results display similar to catalog page
- "No results found" state
- Each result shows:
  - Product image
  - Product name
  - Discounted price
  - Original price
  - Add to Cart button

### 6. Contact Page (`/contact`)
- Contact form
- Contact information display

## Features

### Cart System
- Session-based cart management
- Add to cart functionality
- Update quantity
- Remove items
- Price calculations using discounted prices
- Cart total updates

### Product Management
- Product catalog with images
- Price management (regular and discount prices)
- Product details with multiple images
- Product search functionality

### User Interface
- Responsive design
- RTL (Right-to-Left) support
- Modern UI with hover effects
- Clear price display with discount indicators

### Email Notifications
- Order confirmation emails
- Contact form submission emails
- Email templates with order details

## Technical Specifications

### Database Structure
- Catalogs table:
  - id
  - name
  - price
  - discount_price
  - description
  - image
  - timestamps

- Images table:
  - id
  - url
  - catalog_id (foreign key)
  - timestamps

### Routes
- Home: `/`
- Catalog: `/catalog`
- Product Details: `/product/{id}`
- Cart: `/cart`
- Search: `/search`
- Contact: `/contact`
- Checkout: `/checkout`

### Authentication
- Registration
- Login
- Logout

## Installation
1. Clone the repository
2. Install dependencies: `composer install`
3. Set up environment file: `cp .env.example .env`
4. Generate application key: `php artisan key:generate`
5. Run migrations: `php artisan migrate`
6. Start the server: `php artisan serve`

## Dependencies
- Laravel Framework
- PHP 8.x
- MySQL/MariaDB
- Composer

## Contributing
Please read our contributing guidelines before submitting pull requests.

## License
This project is licensed under the MIT License.
