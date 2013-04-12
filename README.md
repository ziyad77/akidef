AkiLaMachine project
===============================================================

## Introduction
Site Artistique

## Installation
### Download and install the package
* Download zip file from gitHub [here](https://github.com/ziyad77/akidef)
* Unzip it in your document root directory
* Install Vendors:

```bash
php composer.phar install
```

### Creating the upload directory and managing permission
* The upload directory:

```bash
mkdir web/uploads && mkdir web/uploads/media && chmod -R 0777 web/uploads
```

* Permission:

```bash
chmod -R 777 ./app/cache/
chmod -R 777 ./app/log/
```

### Compiling the css

```bash
php app/console assetic:dump
```

## Ready !
You can now use this project as a normal symfony 2 project.