# edgarsaavedra-php-explore
All things php

---

## Using composer
  - To start a new composer project : ` $ composer init `
  - To autoload a directory include following in json file : ` "autoload": {"psr-4": {"EdgarSaavedra\\": "src"}},`
  - To add dependency : ` $ composer require {vendor/package}`
  - To add dev dependency : ` $ composer require {vendor/package} --dev`
  - To update a package : ` $ composer update `
  - To install deps : ` $ composer install `

---

## Command line php
  - To run php internal server : `php -S localhost:8080`

---

## Working Networking

  - To send data to an app use curl `curl -d hi=hello localhost:8080`
  - see : (curl  docs)[https://curl.haxx.se/docs/manpage.html]