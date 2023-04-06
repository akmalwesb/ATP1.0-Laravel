<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Getting Started With Laravel

Things that you need to install on your device:

- Git
    (https://git-scm.com/download/win)

- Node.js
    (https://nodejs.org/en/download)

- Composer
    (https://getcomposer.org/download/)

- XAMPP 
    (https://www.apachefriends.org/download.html)

Milestones of milestones of milestones. In other words:

Create SSH public key
1. Open Terminal or Command Prompt on your Windows.
2. Run the ssh-keygen command to create SSH key

        ssh-keygen -o -t rsa -C "yourusername@email.com"

You will also be asked for a location to save the GitHub SSH keys on Windows. Again, just click enter to accept the default location, which is the .ssh folder under the user’s home directory.

3. The Windows GitHub SSH keys live in the .ssh folder under the current user’s home directory.

        PS C:\Users\Username\.ssh

4. There are 2 files in .ssh folder:
- id_rsa(private)
- id_rsa.pub(public)

5. Open the SSH public key in any text editor and copy the key.

6. Log in to your GitHub account and go to the "Settings" page.
7. Click on "SSH and GPG keys" in the sidebar.
8. Click the "New SSH key" button.
9. Give your SSH key a title (such as "My Laptop" or "My Work Desktop") and paste the contents of your public key into the "Key" field.
10. Click the "Add SSH key" button to add the key to your account.

Now that you've set up your SSH key with GitHub, you can use it to authenticate with GitHub instead of entering your username and password. When you clone a repository, make sure to use the SSH URL (which starts with git@github.com:) instead of the HTTPS URL, and Git will use your SSH key to authenticate with GitHub.


Clone the repository

1. Click on the "Code" button, which is located near the top-right corner of the repository page.
2. In the dropdown menu that appears, click on the "HTTPS" option to view the repository's HTTPS URL.
3. Copy the HTTPS URL by clicking on the "Copy" button next to it.
4. Open your terminal or command prompt and navigate to the directory where you want to clone the repository.
5. Enter the following command in your terminal or command prompt, replacing <repository-URL> with the HTTPS URL that you copied in step 5:

		git clone <repository-URL>

This will clone the repository to your local machine.

Depending on the size of the repository, the cloning process may take some time. Once it is complete, you should see a message indicating that the repository has been cloned successfully.

Now you can navigate to the cloned repository on your local machine and start working on it. You can use a text editor or an integrated development environment (IDE) to edit the files in the repository.

That's it! You have successfully cloned a repository from GitHub and have a local copy of the repository on your machine.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
