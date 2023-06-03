step1 : create database ecommerce

step2: git clone to this repository
        https://github.com/moni273/ecommerce

step3: migrate all table using php artisan migrate

step4: run -php artisan db:seed CreateAdminSeeder
           -php artisan db:seed CreateProductCategorySeeder
           -php artisan db:seed CreateProductSeeder
           -php artisan db:seed CreateUserSeeder

step 5: After all the step run php artisan serve
        for admin login I have use /admin/login prefix


        
