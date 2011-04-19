Overview:
This module provide simple login to Drupal site througth Facebook.

For admin:
Create your new Facebook application on https://www.facebook.com/developers/apps.php (or use existing one). (Allow Developer application access is required by Facebook for creating application. Don't worry, this application is developed by Facebook.)
In admin/settings/fboauth set App ID and Secret for your Facebook application.
In admin/build/block add Facebook login block where you like to show Connect button.

For user:
Anonymous user: create new Drupal account without password (user can login only througth Facebook before set password)
Logged user: connect existing Drupal account with Facebook. Password and Facebook, both login method will be available.
