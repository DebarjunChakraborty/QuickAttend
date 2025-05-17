# QuickAttend

A QR-based attendance system designed to automate and simplify attendance tracking for educational institutions and organisations.

---

## Table of Contents

1. [Overview](#overview)
2. [Features](#features)
3. [SDG Alignment](#sdg-alignment)
4. [Prerequisites](#prerequisites)
5. [Installation](#installation)
6. [Usage](#usage)
7. [Testing](#testing)
8. [Technologies](#technologies)
9. [Contributing](#contributing)
10. [Authors](#authors)
11. [Acknowledgements](#acknowledgements)
12. [References](#references)
13. [Project Link](#project-link)

---

## Overview

In the modern academic landscape, timely and accurate attendance tracking is vital. QuickAttend replaces manual sign-ins with QR codes, offering a fast, secure, and paperless solution. Administrators can generate unique codes for each student and session, while students simply scan to record their presence. Real-time data is stored centrally, enabling efficient reporting and analysis.

## Features

- **Automated Attendance**: Instant marking via QR code scanning.
- **User Roles**: Separate panels for administrators and students.
- **Real-Time Reporting**: Immediate access to attendance data.
- **Attendance History**: Students view their own records at any time.
- **Defaulter List**: Automatic generation of a list of students with low attendance.
- **Secure Access**: User authentication for all panels.
- **Scalable Design**: Suitable for small classrooms up to large institutions.

## SDG Alignment

| Goal | Alignment Point |
| ---- | ----------------|
| SDG 4: Quality Education | QuickAttend fosters inclusive and equitable quality education by digitising attendance, reducing administrative burden, and ensuring reliable data for decision-making. |

## Prerequisites

- **Web Server**: PHP 8.0+ installed (Apache, Nginx, or similar).
- **Database**: MySQL 5.7+.
- **Browser**: Modern browser with camera support (for scanning).
- **Tools**: Composer (optional), npm (for front-end assets).

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/DebarjunChakraborty/FinalYearSem5Project.git
   cd FinalYearSem5Project
   ```

2. **Configure the database**
   - Create a database named `attendance_system`.
   - Import the provided schema in `database/schema.sql`.

3. **Set environment variables**
   - Copy `.env.example` to `.env` and update DB credentials.

4. **Install dependencies** (if using Composer/npm)
   ```bash
   composer install     # for PHP dependencies
   npm install && npm run build   # for front-end assets
   ```

5. **Set folder permissions**
   ```bash
   chown -R www-data:www-data storage/ uploads/
   chmod -R 775 storage/ uploads/
   ```

6. **Launch the application**
   - Start your web server or run `php -S localhost:8000 -t public`.

## Usage

1. **Administrator**
   - Log in at `/admin/login.php`.
   - Add student details, generate QR codes, and view attendance reports.

2. **Student**
   - Register via `/student/register.php` (pending admin approval).
   - Log in at `/student/login.php` once approved.
   - Scan QR codes at `/student/scan.php` and view history at `/student/history.php`.

## Testing

Testing was conducted using Selenium IDE to automate end-to-end scenarios:

1. **Login Tests**: Verification of admin and student login flows.
2. **Registration Tests**: Ensuring student registration and approval workflows.
3. **QR Scan Tests**: Automated scanning and attendance marking.
4. **Reporting Tests**: Generation and download of attendance reports.

## Technologies

- **Frontend**: HTML5, Bootstrap CSS, JavaScript, jQuery, HTML5-QRCode.
- **Backend**: PHP, MySQL.
- **Testing**: Selenium IDE.

## Contributing

Contributions are welcome! To propose changes, please fork the repository and open a pull request:

1. Fork this repository.
2. Create a new branch: `git checkout -b feature/YourFeature`.
3. Commit your changes: `git commit -m 'Add YourFeature'`.
4. Push to the branch: `git push origin feature/YourFeature`.
5. Open a pull request describing your changes.

## Authors

- **Debarjun Chakraborty** – Roll No. TCS2425012

## Acknowledgements

- Prof. Maya Nair (Project Guide)
- Dr. Manoj Singh (Head of Department)

## References

- [html5-qrcode library](https://github.com/mebjas/html5-qrcode)
- [Bootstrap Documentation](https://getbootstrap.com/)
- [jQuery Documentation](https://jquery.com/)
- [PHP Manual](https://www.php.net/manual/)
- [MySQLi Reference](https://www.php.net/manual/en/book.mysqli.php)

## Project Link

[GitHub Repository](https://github.com/DebarjunChakraborty/FinalYearSem5Project.git)
