# 🎓 Edulab - Educational Platform

Full-stack educational platform with a subscription process for courses, built with Laravel, Bootstrap 5, and Laravel Breeze.

---

## 🎥 Project Demo

[Click here to watch the full walkthrough video](https://drive.google.com/file/d/1EGy1wBYf18_gYSO9prOQXK_v8DAlZa8G/view?usp=sharing)

---

## ✨ Key Features
- **User Authentication:** Login, Register, and Profile management using Laravel Breeze.
- **Course Browsing & Filtering:** Filter courses by categories with multi-language title/description support (EN/AR).
- **Subscription & Enrollment Flow:** Complete user journey to enroll and track payment status for courses.
- **Responsive Layout:** Clean design styled with Bootstrap 5.

---

## 🛠️ Tech Stack
- **Backend:** Laravel
- **Frontend:** Blade Templates, Bootstrap 5
- **Authentication:** Laravel Breeze
- **Database:** MySQL

---

## 🗄️ Database Schema & Architecture

### 1. `users`
| Column | Type | Attributes | Description |
| :--- | :--- | :--- | :--- |
| `id` | `INT(11)` | Primary Key, Auto Increment | User ID |
| `name` | `VARCHAR(255)` | Required | Full Name |
| `email` | `VARCHAR(255)` | Required | Email Address |
| `password` | `VARCHAR(255)` | Required | Hashed Password |
| `phone` | `VARCHAR(20)` | Nullable | Contact Phone Number |
| `status` | `ENUM('0', '1')` | Required | Account Status (0 = Inactive, 1 = Active) |
| `role` | `ENUM('user', 'admin')` | Required | System Role |
| `created_at` | `TIMESTAMP` | Nullable | Timestamp |
| `updated_at` | `TIMESTAMP` | Nullable | Timestamp |

---

### 2. `categories`
| Column | Type | Attributes | Description |
| :--- | :--- | :--- | :--- |
| `id` | `INT(11)` | Primary Key, Auto Increment | Category ID |
| `cate_image` | `VARCHAR(2048)` | Nullable | Category Image URL/Path |
| `title_en` | `VARCHAR(255)` | Required | Category Title (English) |
| `title_ar` | `VARCHAR(255)` | Required | Category Title (Arabic) |
| `description_en` | `VARCHAR(255)` | Required | Description (English) |
| `description_ar` | `VARCHAR(255)` | Required | Description (Arabic) |
| `status` | `ENUM('0', '1')` | Required | Visibility Status |
| `created_at` | `TIMESTAMP` | Nullable | Timestamp |
| `updated_at` | `TIMESTAMP` | Nullable | Timestamp |

---

### 3. `courses`
| Column | Type | Attributes | Description |
| :--- | :--- | :--- | :--- |
| `id` | `INT(11)` | Primary Key, Auto Increment | Course ID |
| `cour_image` | `VARCHAR(2048)` | Nullable | Course Cover Image |
| `title_en` | `VARCHAR(255)` | Required | Course Title (English) |
| `title_ar` | `VARCHAR(255)` | Required | Course Title (Arabic) |
| `description_en` | `VARCHAR(255)` | Required | Description (English) |
| `description_ar` | `VARCHAR(255)` | Required | Description (Arabic) |
| `price` | `DECIMAL(10,2)` | Required | Course Price |
| `category_id` | `INT(11)` | Foreign Key | Belongs to `categories.id` |
| `status` | `ENUM('0', '1')` | Required | Publication Status |
| `created_at` | `TIMESTAMP` | Nullable | Timestamp |
| `updated_at` | `TIMESTAMP` | Nullable | Timestamp |

---

### 4. `lessons`
| Column | Type | Attributes | Description |
| :--- | :--- | :--- | :--- |
| `id` | `INT(11)` | Primary Key, Auto Increment | Lesson ID |
| `title_en` | `VARCHAR(255)` | Required | Lesson Title (English) |
| `title_ar` | `VARCHAR(255)` | Required | Lesson Title (Arabic) |
| `video_url` | `VARCHAR(2048)` | Nullable | Lesson Video URL |
| `courses_id` | `INT(11)` | Foreign Key | Belongs to `courses.id` |
| `created_at` | `TIMESTAMP` | Nullable | Timestamp |
| `updated_at` | `TIMESTAMP` | Nullable | Timestamp |

---

### 5. `enrollments`
| Column | Type | Attributes | Description |
| :--- | :--- | :--- | :--- |
| `id` | `INT(11)` | Primary Key, Auto Increment | Enrollment ID |
| `user_id` | `INT(11)` | Foreign Key | Belongs to `users.id` |
| `courses_id` | `INT(11)` | Foreign Key | Belongs to `courses.id` |
| `paid_amount` | `DECIMAL(10,2)` | Required | Amount Paid |
| `payment_status` | `ENUM('pending', 'paid', 'failed')` | Required | Payment Transaction Status |
| `transaction_id` | `VARCHAR(255)` | Nullable | Gateway Transaction ID |
| `status` | `ENUM('0', '1')` | Required | Enrollment Status |
| `created_at` | `TIMESTAMP` | Nullable | Timestamp |
| `updated_at` | `TIMESTAMP` | Nullable | Timestamp |

---

## 🚀 How to Run Locally

1. Clone the repository and navigate to the project folder.
2. Install PHP dependencies (`composer install`) to generate the `vendor` folder.
3. Install NPM dependencies (`npm install && npm run dev`) to generate `node_modules`.
4. Set up your `.env` file, run `php artisan key:generate` and `php artisan migrate`.
5. Start the server with `php artisan serve`.
