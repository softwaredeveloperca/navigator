# navigator
Laravel 5.4 with Dusk no sandbox - working ubuntu 16.10


<p>
touch database/database.sqlite

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
</p>
```
