### Set up PHP on Windows

1. Go to [php.net](https://www.php.net/)

- - "Download" => "Windows downloads" => PHP 8.1 (8.1.27) "Zip"
    - Download [php for windows](https://windows.php.net/download#php-8.3)
  - Unzip and move to Program files
    - "This PC" => "Windows (C:)" => "Program Files" => "php-8.1"
  - Set up [system variables as shown here](https://www.udemy.com/course/lets-learn-laravel-a-guided-path-for-beginners/learn/lecture/33971544#overview)
  - Start Menu => variables => edit the system variables => 'Environment Variables' button
  - => _Double Click_ 'Path'
  - Click 'New' => Enter `C:\Program Files\php-8.1` and click 'OK'
  - **Must click 'Ok' on the next screen**
  -
  - Download [x86 Microsoft Visual C++ Redistributable latest supported downloads](https://learn.microsoft.com/en-us/cpp/windows/latest-supported-vc-redist?view=msvc-170)
  - restart computer.

#### How to edit php.ini file in (system protected) Program Files with VS Studio.

1. Rename `php.ini-development` to just `php.ini`.
2. Right click on `php.ini` and select
3. If option not available:

- right click. Select **open in (windows) terminal**
- In windows terminal type code php.ini

4. Uncomment a series of things he covers at [(13:58)](https://www.udemy.com/course/lets-learn-laravel-a-guided-path-for-beginners/learn/lecture/33971544#overview)

#### [Visual Studio code and PHP](https://www.udemy.com/course/lets-learn-laravel-a-guided-path-for-beginners/learn/lecture/33973232#overview)

1. (14:35) - press **CTRL** + **,** to open up settings.
2. Select the small box icon in the upper right corner, on cover will say _open settings_.
3. He recommended adding:

```js
//settings.json
{
  php.validate.executablePath: "C:\\Program Files\\php8.1\\php.exe"
}

```

### Start local server with PHP terminal Commmand

- From terminal enter command: [(~18th min)](https://www.udemy.com/course/lets-learn-laravel-a-guided-path-for-beginners/learn/lecture/33973232#overview)

  - `php -S localhost:8000`
  - Starts local server, looks for `index.php` in directory command run in.
  - visit _http://locahost:8000_
  - CTRL + C to shut down local server.

### [Download Composer for Windows](https://www.udemy.com/course/lets-learn-laravel-a-guided-path-for-beginners/learn/lecture/33973234#overview)

- - Visit the GetComposer.org site and click on [Downloads](https://getcomposer.org/download/)
- Then download `Composer-Setup.exe`
- Select _Install for all users_.
- Accept default installation (leave developer mode unchecked).
- Check path to the php.exe that we want to work with.
- Do not check the option to _Use a proxy server to connect to internet_
- You may have to restart your computer to get Composer to work.

- After restart confirm successful install:
  - Open windows PowerShell terminal and run `composer`
  - Double check, open project folder with VS Studio. CTR + J and run composer to see if you get the same output.
