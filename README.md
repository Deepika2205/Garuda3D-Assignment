# Garuda3D Assignment - PHP Developer Intern Role

This repository contains my assignment submission for the **PHP Developer Intern** position at **Garuda3D**.

## Project Overview

A simple PHP-based contact form application with database integration that allows users to submit contact information and view previous submissions.

## Features

- ✅ Contact form with validation
- ✅ MySQL database integration
- ✅ Data storage and retrieval
- ✅ Form validation (email format, required fields)
- ✅ View all submissions in a table format
- ✅ Responsive design with basic styling
- ✅ Error handling and success messages

## Project Structure

```
Garuda3D_assignment/
├── index.php        # Main contact form page
├── view.php         # Display all submissions
├── db.php           # Database connection and setup
├── garuda_3d.sql    # SQL dump with sample data
└── README.md        # Project documentation
```

## File Descriptions

### 1. `index.php`
- Main landing page with contact form
- Handles form submission and validation
- Includes server-side validation for:
  - Required fields check
  - Email format validation
- Displays success/error messages
- Link to view submissions page

### 2. `view.php`
- Displays all contact form submissions in a table
- Shows ID, Name, Email, Phone, Message, and Created timestamp
- Styled table with proper formatting
- Navigation link back to the contact form

### 3. `db.php`
- Database configuration and connection
- Automatically creates database `Garuda_3D` if not exists
- Creates `contact_form` table with proper structure
- Handles database connection errors

### 4. `garuda_3d.sql`
- Complete SQL dump of the database
- Includes table structure and sample data
- Can be imported directly into phpMyAdmin or MySQL

## Database Schema

### Table: `contact_form`
| Column | Type | Description |
|--------|------|-------------|
| id | INT(11) AUTO_INCREMENT | Primary key |
| name | VARCHAR(100) NOT NULL | User's full name |
| email | VARCHAR(100) NOT NULL | User's email address |
| phone | VARCHAR(15) NOT NULL | User's phone number |
| message | TEXT NOT NULL | User's message |
| created_at | TIMESTAMP DEFAULT CURRENT_TIMESTAMP | Record creation time |

## Setup Instructions

### Prerequisites
- PHP 7.4 or higher
- MySQL/MariaDB
- Web server (Apache/Nginx) or XAMPP/WAMP

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/Deepika2205/Garuda3D-Assignment.git
   cd Garuda3D-Assignment
   ```

2. **Database Setup**
   - Start your MySQL server
   - Import the SQL file:
     ```sql
     mysql -u root -p < garuda_3d.sql
     ```
   - Or simply run the application (database will be created automatically)

3. **Configuration**
   - Update database credentials in `db.php` if needed:
     ```php
     $server = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Garuda_3D";
     ```

4. **Run the Application**
   - Place files in your web server's document root
   - Access `index.php` through your web browser
   - Example: `http://localhost/Garuda3D_assignment/index.php`

## Features Implemented

### Form Validation
- **Client-side**: HTML5 form validation
- **Server-side**: PHP validation for:
  - Empty field detection
  - Email format validation using regex
  - Data sanitization with `trim()`

### Database Operations
- **Create**: Insert new contact submissions
- **Read**: Display all submissions
- **Connection**: Robust database connection with error handling
- **Security**: Prepared statements to prevent SQL injection

### User Experience
- Clean, simple interface
- Success and error message display
- Easy navigation between form and view pages
- Responsive table design for viewing submissions

## Technical Highlights

- **Security**: Uses prepared statements with parameter binding
- **Error Handling**: Comprehensive error messages for users
- **Database Design**: Proper table structure with auto-increment ID and timestamps
- **Code Organization**: Separation of concerns with dedicated files
- **Validation**: Both client-side and server-side validation

## Sample Data

The application includes sample submissions:
- Deepika Booreddi (booreddideepika@gmail.com)
- Kamal (kamalkumar.doddi@gmail.com)

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL/MariaDB
- **Frontend**: HTML, CSS (inline styling)
- **Development Environment**: XAMPP/Local server setup

## Assignment Completion Status

✅ **Complete** - All requirements met:
- Contact form creation ✓
- Database integration ✓
- Form validation ✓
- Data display functionality ✓
- Proper error handling ✓
- Documentation ✓

---

## About

This assignment was completed as part of the application process for the **PHP Developer Intern** position at **Garuda3D**. It demonstrates proficiency in:

- PHP development
- MySQL database design and operations
- Form handling and validation
- Security best practices
- Code organization and documentation

**Developed by**: Deepika Booreddi  
**Email**: booreddideepika@gmail.com  
**Position**: PHP Developer Intern Candidate  
**Company**: Garuda3D  
**Date**: December 2025

---

### Contact

For any questions about this assignment, please contact:
- **Email**: booreddideepika@gmail.com
- **GitHub**: [@Deepika2205](https://github.com/Deepika2205)