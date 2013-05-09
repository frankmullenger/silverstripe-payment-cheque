# SilverStripe Payment Cheque Module

## Maintainer Contacts
*  [Frank Mullenger](https://github.com/frankmullenger)

## Requirements
* SilverStripe 3.0.x
* Payment module 1.0.x

## Documentation
Simple cheque payment method for SilverStripe payment module.

### Installation Instructions
1. Place this directory in the root of your SilverStripe installation and call it 'payment-cheque'.
2. Visit yoursite.com/dev/build?flush=1 to rebuild the database.

### Usage Overview
Enable in your application YAML config:

```yaml
PaymentGateway:
  environment:
    'dev'

PaymentProcessor:
  supported_methods:
    dev:
      - 'Cheque'
    live:
      - 'Cheque'
```
Optionally you can set the supported currencies otherwise it will default to supporting GBP, USD, NZD (see ChequeGateway::$supportedCurrencies):

```yaml
ChequeGateway:
  live:
    supported_currencies: 
      'NZD' : 'New Zealand Dollar'
      'USD' : 'United Statues Dollar'
  dev:
    supported_currencies: 
      'NZD' : 'New Zealand Dollar'
      'USD' : 'United Statues Dollar'
```

Remember to ?flush=1 after changes to the config YAML files.