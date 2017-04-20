# Laravel 5.4.18 with Dusk no sandbox

This is a working Laravel 5.4.18 with dusk added.  If you are having trouble installing laravel dusk you can use this repo as a base.  The notable change is within the duskTestCaseFile.php file.  I added in the no sandbox option, this rule bypasses many restriction that prevent certain operating system from running this properly.  Read all about the benefits of the chromium sandbox and understand the risks of running without this option if you choose to visit external websites [https://www.chromium.org/developers/design-documents/sandbox].

The following needed to be run on a copy of ubuntu 16.10.  Pemissions on the public directory, the logs within the resources directory and the driver itself may need to be changed.

This has only been added to help me repeat this process.

```sh
# makes sure all your repos are up to date
sudo apt-get update

# chrome dependencies I think
sudo apt-get -y install libxpm4 libxrender1 libgtk2.0-0 libnss3 libgconf-2-4

# chromium is what I had success with on Codeship, so seemed a good option
sudo apt-get install chromium-browser

# XVFB for headless applications
sudo apt-get -y install xvfb gtk2-engines-pixbuf

# fonts for the browser
sudo apt-get -y install xfonts-cyrillic xfonts-100dpi xfonts-75dpi xfonts-base xfonts-scalable

# support for screenshot capturing
sudo apt-get -y install imagemagick x11-apps


From:  https://medium.com/@splatEric/laravel-dusk-on-homestead-dc5711987595
```

touch database/database.sqlite

composer install

php artisan dusk:install

If all else fails run the script at the bottom of the pull request:
https://github.com/laravel/dusk/issues/10

check with
/usr/bin/Xvfb :17 -screen 0 1280x720x24 & DISPLAY=:17 vendor/laravel/dusk/bin/chromedriver-linux --verbose --log-path=driver.log & vendor/bin/phpunit -c phpunit.dusk.xml --debug -




