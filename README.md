SilverStripe Payment Cheque Module
==================================

**Work in progress**

Maintainer Contacts
-------------------
Frank Mullenger (frankmullenger_AT_gmail(dot)com)
* [Deadly Technology Blog](http://deadlytechnology.com/silverstripe/)
* [SwipeStripe Shop](http://swipestripe.com)

Requirements
------------
* SilverStripe 3.0
* Payment module 1.0

Documentation
-------------
Simple cheque payment method for SilverStripe payment module.

Installation Instructions
-------------------------
1. Place this directory in the root of your SilverStripe installation and call it 'payment-cheque'.
2. Visit yoursite.com/dev/build?flush=1 to rebuild the database.

Usage Overview
--------------
* Enable in your application YAML config

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
* Configure in your application YAML config

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

* Remember to ?flush=1 after changes to the config YAML files

