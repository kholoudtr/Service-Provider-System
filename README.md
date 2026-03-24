# 🛠️ Service Provider Platform - Advanced Backend (Laravel 12) 🚀

**Service Provider Platform** is a robust, scalable, and highly organized backend system built with **Laravel 12**. It serves as a comprehensive marketplace connecting customers with professional service providers, featuring real-time tracking, secure payments, and an automated booking workflow.

## 🎨 Key Functional Modules
* **Service Marketplace & Categorization:** A dynamic system for managing diverse service categories (Cleaning, Maintenance, etc.) with specialized provider profiles.
* **Advanced Booking Workflow:** Complete lifecycle management for service requests, from initial booking to provider acceptance and final completion.
* **Customer-Provider Matching:** Intelligent logic to connect users with the right professionals based on service type and availability.
* **Ratings & Reviews System:** A built-in feedback loop to ensure service quality, allowing customers to rate providers after every completed task.
* **Location-Based Services:** Integrated support for managing service areas and linking requests to specific geographic locations.

## 🔔 Notifications & Real-time Integration
* **Firebase Cloud Messaging (FCM):** Fully configured to send instant push notifications to mobile devices for booking updates and status changes.
* **Multi-Channel Alerts:** Supports Database and Mail notifications to keep both customers and providers informed at every step.

## 🔒 Security & Architecture
* **Authentication:** Secured via **Laravel Passport (OAuth2)** for robust, token-based API access.
* **Service-Oriented Architecture (SOA):** Business logic is strictly decoupled from controllers into dedicated **Service Classes**, ensuring high maintainability.
* **Role-Based Access Control (RBAC):** Granular permissions for Admins, Service Providers, and Customers.
* **Data Integrity:** Uses Eloquent relationships and Soft Deletes to maintain a clean and reliable database state.

## 🛠️ Technical Stack
* **Framework:** Laravel 12.x (Latest PHP features).
* **Security:** Laravel Passport.
* **Real-time:** Firebase (FCM).
* **Design Pattern:** Service-Repository Pattern.

---

## 🚀 Installation & Setup Guide

### 1. Clone & Navigate
```bash
git clone [https://github.com/kholoudtr/service-provider.git](https://github.com/kholoudtr/service-provider.git)
cd service-provider
2. Dependency Management
Bash
composer install
npm install && npm run build
3. Environment Configuration
Bash
cp .env.example .env
php artisan key:generate
Note: Ensure you update your DB, Firebase, and Passport credentials in the .env file.

4. Database & Security Setup
Bash
php artisan migrate --seed
php artisan passport:install
5. Finalizing
Bash
php artisan storage:link
php artisan serve