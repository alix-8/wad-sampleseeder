# STUDENT-MS

This is a basic **Student Management System** made with **Laravel** for **WAD (Web Application Development)**. Creating this also serves as my review for our upcoming WAD midterm examination for 2nd semester.

---

## Project Overview

**My guide making this:**
[Click here to visit the guide](https://github.com/LVCCWAD/student-ms.git)

This project is created to practice:
* **Basic CRUD Operations** (Create, Read, Update, Delete)
* **Database Seeding** (Laravel Factories and Seeders)
* **Backend Logic**

> [!NOTE]
> It, actually, focuses more on **functionality** than the interface aesthetics.

---

## Tech Stack
* **Framework:** Laravel
* **Database:** SQLite / MySQL
* **Language:** PHP

---

##  How to Run
1. **Clone the Repo**
   ```bash
   git clone https://github.com/alix-8/wad-sampleseeder.git
   
2. **Install dependencies**
   ```bash
   composer install
   
3. **Setup Environment**
    ```bash
    cp .env.example .env
    php artisan key:generate
    
4. **Migrate & Seed**
    ```bash
    php artisan migrate:fresh --seed
5. **Run Server**
    ```bash
    php artisan serve
