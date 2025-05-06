# QuickAttend

A QR-based attendance management system that automates and secures the recording of attendance using unique QR codes. Designed for educational institutions and organisations, QuickAttend provides real-time attendance tracking, comprehensive reporting and an intuitive web interface for both administrators and students.

---

## Contents

1. [About the Project](#1-about-the-project)  
2. [Features](#2-features)  
3. [Technology Stack](#3-technology-stack)  
4. [Prerequisites](#4-prerequisites)  
5. [Installation](#5-installation)  

---

## 1. About the Project

Traditional attendance systems relying on manual registers are time-consuming, error-prone and difficult to audit. **QuickAttend** replaces manual methods with a modern, web-based solution:

- **Administrators** can add students, generate per-student QR codes and view/download attendance reports.  
- **Students** scan their unique QR code via smartphone or webcam to mark attendance and may view their personal attendance history.  

---

## 2. Features

- **QR Code Generation**  
  - Unique QR codes per student and per session.

- **Attendance Marking**  
  - Real-time validation and timestamping via `html5-qrcode`.

- **User Authentication**  
  - Secure login for admins and students (pending admin approval).

- **Web Portal**  
  - Responsive UI built with Bootstrap, jQuery and custom CSS.

- **Reporting & Analytics**  
  - Generate detailed attendance reports; exportable in PDF/CSV.

- **Defaulter List Generator**  
  - Automatic monthly defaulter reports emailed to administrators.

---

## 3. Technology Stack

| Layer         | Technology                            |
| ------------- | ------------------------------------- |
| Front-end     | HTML5, Bootstrap CSS, JavaScript, jQuery |
| QR Scanner    | [html5-qrcode](https://github.com/mebjas/html5-qrcode) |
| Back-end      | PHP (mysqli)                          |
| Database      | MySQL                                 |
| Version Control | Git & GitHub                        |

---

## 4. Prerequisites

- **Web Server**: Apache or Nginx with PHP 7.x/8.x  
- **Database**: MySQL 5.7+
- **PHP Extensions**: `mysqli`, `mbstring`, `openssl`  

---

## 5. Installation

1. **Clone the repository**  
   ```bash
   git clone https://github.com/DebarjunChakraborty/FinalYearSem5Project.git
   cd FinalYearSem5Project
