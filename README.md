# 🎓 EduSphere - Education Management System

EduSphere is a web-based **Education Management System** built with **Laravel Blade** that helps manage students, teachers, courses, attendance, results, and academic activities through a simple and user-friendly dashboard.

## 🚀 Features

- 🔐 Authentication System
  - Admin Login
  - Teacher Login
  - Student Login

- 👨‍🎓 Student Management
  - Add, edit, delete students
  - View student profiles
  - Manage student information

- 👨‍🏫 Teacher Management
  - Add and manage teachers
  - Assign subjects

- 📚 Course Management
  - Create courses and subjects
  - Assign teachers to courses

- 📝 Attendance Management
  - Take attendance
  - View attendance reports

- 📊 Result Management
  - Add student marks
  - Calculate grades
  - View results

- 📢 Notice Board
  - Create and view announcements

- 📈 Dashboard
  - Overview statistics
  - User-friendly admin panel

---

## 🛠️ Technology Stack

| Technology | Used For |
|------------|----------|
| Laravel | Backend Framework |
| Blade | Frontend Template Engine |
| PHP | Programming Language |
| MySQL | Database |
| Bootstrap | UI Design |
| JavaScript | Client-side Interaction |

---

## 📂 Project Modules

```
Admin
 ├── Dashboard
 ├── Student Management
 ├── Teacher Management
 ├── Course Management
 ├── Attendance
 ├── Results
 └── Notices

Teacher
 ├── Profile
 ├── Attendance
 └── Marks Management

Student
 ├── Profile
 ├── Attendance View
 └── Result View
```

---

## ⚙️ Installation

### Clone Repository

```bash
git clone https://github.com/your-username/edusphere.git
```

### Go to Project Directory

```bash
cd edusphere
```

### Install Dependencies

```bash
composer install
```

### Create Environment File

```bash
cp .env.example .env
```

### Generate Application Key

```bash
php artisan key:generate
```

### Configure Database

Update your `.env` file:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Run Migration

```bash
php artisan migrate
```

### Start Development Server

```bash
php artisan serve
```

---

## 📸 Screenshots

_Add project screenshots here._

---

## 👨‍💻 Developer

**Your Name**

GitHub: https://github.com/your-username

---

## 📄 License

This project is open-source and available under the MIT License.