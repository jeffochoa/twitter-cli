## Twitter CLI ##

Just sent tweets from your console.

## Install ##

```bash
$ git clone https://github.com/jeffochoa/twitter-cli
```

Install dependencies
```bash
$ composer install
```

Add your twitter credentials to the `.env` file.

```txt
CONSUMER_KEY=
CONSUMER_SECRET=
ACCESS_TOKEN=
ACCESS_TOKEN_SECRET=
```

## Have fun ##
The tweet will be published in your twitter account.
```bash
$ php twitter-cli tweet "This is awesome"
```
You can also tweet images
```bash
$ php twitter-cli tweet "This is awesome" path/to/img-file.jpg
```

## About ##

This package uses
- [Laravel social auto posting](https://github.com/toolkito/laravel-social-auto-posting)
- [Laravel Zero](https://github.com/laravel-zero/laravel-zero)
- [PHP dotenv](https://github.com/vlucas/phpdotenv)
