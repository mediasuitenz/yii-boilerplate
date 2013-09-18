Mediasuite Boilerplate Yii Application
======================================

* Generated with Yii
* Yii 1.1.14 added to vendor directory
* Config files added to .gitignore
* Example config files created

Contributing
------------
Push any default settings you want for new projects to this repo.

New Yii Projects
----------------

* Clone this repo
* Create config files
    * protected/config/main.php
    * protected/config/console.php
    * protected/config/test.php
* Ensure your web server has write access to:
    * assets/
    * protected/runtime/
e.g.
```
chown lewis:www-data assets
chown lewis:www-data protected/runtime
```
* Change the default remote to a new repository url
e.g.
```
git remote set-rul origin git@github.com:mediasuitenz/some-new-repo.git
```
* Push to repo