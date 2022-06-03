### Laravel 9 with Multi Auth Level (Uuid id)

Laravel multiple authentication using middleware with a single table.

### Types of users:

- 1 - Client
- 2 - User(employee)
- 3 - Manager
- 4 - Admin 

### Accounts from Seed

> php artisan db:seed --class=CreateUsersSeeder

    client@test.com
    user@test.com
    manager@test.com
    admin@test.com
- same password to all **"secret"**

