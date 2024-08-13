
#FAQ

## How to install Google Tag Manager?
    
    ```bash
    composer require nexa-merchant/google-tag-manager
    ```

## How to publish Google Tag Manager?
    
    ```bash
    php artisan vendor:publish --provider="NexaMerchant\GoogleTagManager\Providers\GoogleTagManagerServiceProvider"
    ```

## How to use Google Tag Manager?
    
    ```php
    {!! GoogleTagManager::head() !!}
    ```

## How to configure Google Tag Manager?
    
    ```bash
    php artisan vendor:publish --provider="NexaMerchant\GoogleTagManager\Providers\GoogleTagManagerServiceProvider"
    ```

## How to uninstall Google Tag Manager?
    
    ```bash
    composer remove nexa-merchant/google-tag-manager
    ```

## How to update Google Tag Manager?
    
    ```bash
    composer update nexa-merchant/google-tag-manager
    ```

## How to test Google Tag Manager?
    
    ```bash
    phpunit
    ```

## How to contribute to Google Tag Manager?

1. Fork the repository
2. Create a new branch for your feature
3. Create a pull request
4. Wait for approval

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

