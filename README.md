# Boilerplate Slim framework + foundation SASS

## Installation

First, Install [Composer](https://getcomposer.org):

```bash
$ curl -sS https://getcomposer.org/installer | php
```
Next, clone the repo:

```bash
$ git clone https://github.com/Nicoaedhel/slim-framework-foundation-sass-boilerplate.git
```
Install packages via Composer in app :

```bash
$ php composer.phar install
```

## Adding packages

You can find packages on [packagist.org](https://packagist.org/).
To add packages, edit the `composer.json` file and run the following:

```bash
$ php composer.phar update
```

## For Sass Foundation 

install in front :

```bash
$ gem install compass
```

Run in front :

```bash
$ bundle exec compass watch
```


## Run a server

To see in action, you can boot up a local server using the following in app:

```bash
$ php -S localhost:8000
```

Now, visit `http://localhost:8000/` in your browser.


## Config 

Open app/config.ini and change value for your site.
Change name - path - author

## For deploy

Copy only /app/ in web server.

---
Inspired by [Svelte](https://github.com/stursby/svelte) for Boilerplate slim framework
