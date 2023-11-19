# Setup
- Clone the repo
- add .env
- run composer install
- run php artisan app:task-app-setup ( Will Make migrate and add an admin with 100 customers)
- run npm install
- run npm run dev
- run php artisan serve

#Mobile Api
- Login api
- http://127.0.0.1:8000/api/customer/login POST With Parameters email and password
-  Customer Transactions Api 
- http://127.0.0.1:8000/api/customer/transactions?limit=20&page=1 With Authorization Bearer token

#Dashboard
- http://127.0.0.1:8000
- Credentials ( Email : admin@admin.com , Password : 12345678)

#Packages
- laravel excel : For Generate transactions reports
- laravel passport : for customer authentication
- laravel permission
- laravel datatable
"# Transactions-Task" 
