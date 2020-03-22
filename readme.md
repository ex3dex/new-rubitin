Create .env file, copy from .env.example and enter all needed data and credentials (app url, database, email)
Pay attention at all values which start with `YOUR`. You have to put there your personal credentials

Configuration Google Mail SMTP See this video https://www.youtube.com/watch?v=qUma5gQfIEQ for 3 mins and repeat everything on your side

Configure local server to `/public` folder as an entrance of the application

Run `composer install`

Run `php artisan key:generate`

Run `php artisan migrate`

Run `php artisan config:cache`

Run `npm install`

Open in browser

To compile sass and js use `npm run dev` or `npm run watch`

Header and footer you can find under the `resources/view/layouts`

Routes - `routes/web.php`

Controllers - `app/Http/Controllers`

All pages you can find under `resources/views/pages`

Very useful video of configuration Laravel on shared hosting https://www.youtube.com/watch?v=e2WPMJdf_qI

Facebook Login should be configured for each new application. 
Few screens from Facebook Developer page

http://prntscr.com/r94kb5

http://prntscr.com/r94lt8

http://prntscr.com/r94m8q


Example of how to show/hide information for logged in and logged out users
You can find it in `resources/views/home.blade.php`
```
{{--// Showed for EVERYONE--}}
@guest
    {{--// Showed only for GUESTS--}}
    <p class="text-center">User is logged out</p>
    @else
    {{--// Showed only for LOGGED IN USERS--}}
    <p class="text-center">User is logged in</p>
@endguest
```


/*** Create correct users table query *******/

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/****************************************************************/