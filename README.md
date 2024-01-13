## Fax Parsing Project In Laravel

**Import command Cheat Sheet**

- Install Laravel
  - `composer create-project laravel/laravel <project-name-here>`
- Generate Application Key after updating `.env` file:
  - `php artisan key:generate`
- ## Generate a Controller:

1. Install laravel to desired directory with:

- - `composer create-project laravel/laravel <project-name>`

2. In cPanel's **MySQL Databases**, create a new database and a new user (name and pw). Then add that user to the new database.

- - **Create New DB:** `cPanel-account-name_` + `your-db-name`
  - **Create New DB-User:** `cPanel-account-name_` + `your-db-user-name`
  - Add created User to created DB. Select **ALL PRIVILEGES**.

3. Add these new variables to the .env file.
   Update the **DB_DATABASE**, **DB_USERNAME** and **DB_PASSWORD** - `DB_DATABASE=myserver_fax_to_text_database` - `DB_USERNAME=myserver_faxtotextuser_` - `DB_PASSWORD='FaxingIsFun!ButBase64IsBetter!'`
   -
   - Hosting provider eventually resolved the installation with domain user account.

---

- -
  - **NOTE:** Do **NOT** install your laravel package with the **root** user.
  -
  - **Error:** **_"The system failed to create the file '/home/tcdmedical/public_html/dent/.env.lock" (as EUID: 1003, EGID:1005 1005) because of the following error: Permission denied."_** - _The error you're encountering, "Permission denied," suggests that the user running the process (in this case, your web server user or the user you used to run the Composer command) does not have the necessary permissions to create the .env.lock file._ - -
- - **Identify the User and Group with this command:**
  - `ps aux | grep apache`
  - In our case it returned the following:

```js
systuser  2750  0.0  0.0  10132    56 ?        Ssl   2023   0:00 /usr/local/lp/opt/exporters/apache_exporter/apache_exporter
root     10926  0.0  0.0  12744  1300 ?        S    Jan07   0:00 /usr/local/cpanel/bin/splitlogs --dir=/etc/apache2/logs/domlogs --main=host.domain.com --suffix=-bytes_log
root     10927  0.0  0.0  12752  1304 ?        S    Jan07   0:00 /usr/local/cpanel/bin/splitlogs --dir=/etc/apache2/logs/domlogs --main=host.domain.com --mainout=/etc/apache2/logs/access_log
root     12340  0.0  0.0 112812   976 pts/0    S+   23:41   0:00 grep --color=auto apache

```

#### Update the ownership of the Laravel project directory:

- - **RESULT:** _Based on the output you provided, the Apache process is running as the user systuser. Therefore, you need to ensure that this user has the necessary permissions on your Laravel project directory._
  -
  - **Run This Command:**

    - `sudo chown -R systuser:systuser /home/tcdmedical/public_html/dent`

  - Try to update the `.env` file again. If the problem persits, try changing the permissions on `storage` and `bootsrap` as shown below:

```js
    //# Set proper permissions on the storage directory
    chmod -R 775 /home/tcdmedical/public_html/dent/storage

    //# Set proper permissions on the bootstrap/cache directory
    chmod -R 775 /home/tcdmedical/public_html/dent/bootstrap/cache
```

### HOW TO REMOVE A LARAVEL INSTALLATION FROM THE COMMAND LINE

- - In the **parent directory** _(here, it's public_html/)_ run this command (with same permissions as the one who installed, like `root`?)

```js
// >rm -rf <directory/project name>
    rm -rf dent
```

4. Generate Application Key:

- Run the following command [to generate your application key as shown here (10:55)](https://youtu.be/X4KElZcUi-g?si=NAiRDc1PVLlve3ZU&t=655)

  - `php artisan key:generate`
  - Then install all the dependencies with:

    - `composer install`

  - **[Optional??]** Update `app/Providers/AppServiceProvider.php` with:

```php

//At top of AppServiceProvider.php add:
use Illuminate\Support\Facades\Schema;


//Add to existing boot() function:
public function boot(){
  Schema::defaultStringLength(190);
}

```

- Run the migrate command:

  - `php artisan migrate`

- You can run a local server with
- `php artisan serve`
- This should generate a base64 encoded key in your .env file.

- See other tutorials for [uploading zipped laravel project to cPanel](https://www.youtube.com/watch?v=WN2hHvxMHTI)
