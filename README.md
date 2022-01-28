# Instructions

## Clone the repo
```
git clone git@github.com:smpita/logger.git /var/www/html
```

## Configure environment
Set the database to where you want to log the received requests.
```
cp .env.example .env; vi .env
```

## Run migrations
```
php artisan migrate
```

## Usage

* You're already done
* Any requests received will be logged in the specified database
* All HTTP request methods (`GET`, `POST`, `DELETE`, etc) are valid
* All routes are valid
* Successful connections will receive `HTTP 200`


This logger is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
