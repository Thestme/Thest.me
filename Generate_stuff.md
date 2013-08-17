Generate stuff

php artisan generate:scaffold gender --fields="name:string"
php artisan generate:scaffold student_type --fields="name:string"
php artisan generate:scaffold university --fields="name:string"
php artisan generate:scaffold student --fields="first_name:string, last_name:string, email:string, born_at:date, password:string, country:string, city:string"
php artisan generate:scaffold student_project --fields="enabled:boolean" <--
php artisan generate:scaffold project --fields="title:string, description:string, objectives:string, due_date:date, deployable:string"
php artisan generate:scaffold project_state --fields="name:string"
php artisan generate:scaffold project_application_area --fields="enabled:boolean"
php artisan generate:scaffold area --fields="name:string"
php artisan generate:scaffold company --fields="name:string, email:string, password:string, operating_since:date, country:string, city:string"
php artisan generate:scaffold company_size --fields="name:string, employee_quantity:integer"
php artisan generate:scaffold company_area --fields="enabled:boolean"
php artisan generate:scaffold project_selection --fields="enabled:boolean"