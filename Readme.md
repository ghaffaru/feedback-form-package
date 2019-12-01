# Feedback form package
Laravel package to create and handle feedback forms on your website
[![Stars](https://img.shields.io/github/stars/Ghaffaru15/feedback-form-package.svg?style=flat-square)](https://github.com/Ghaffaru15/feedback-form-package/stargazers)
[![Issues](https://img.shields.io/github/issues/Ghaffaru15/feedback-form-package.svg?style=flat-square)](https://github.com/Ghaffaru15/feedback-form-package/issues)
## Installation
Use composer to install the package

```bash
  composer require ghaff/feedback
```

## Usage
Run your migrations
```php
  php artisan migrate
```
Boot up your server
```php
    php artisan serve
```
### Visit the url
localhost:8000/feedback

## Configuration
Publish the configuration file by running

```bash
  php artisan vendor:publish
```

Your configuration file would look like this

  ```php
    
      return [
        'send_email_to' => 'ghaff@gmail.com'  
      ];
  
  ```
  You can add your email here to determine which email to send the feedbacks to 
  
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
