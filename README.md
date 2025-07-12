# Get Paid in Kenya
Composer package for PaidIn Africa (Kenya)

## Installation
```bash
composer require paidinafrica/ke
```

## Usage
### Banks
The following banks and codes are currently supported
Bank|Namespace|Code
Cooperative bank| Coop | COOP
NCBA Bank| Ncba | NCBA

#### Initiate STK Push
```php
use PaidInAfrica\Banks;

class PaymentService
{
  public function sendPrompt($amount, $phone, $callbackUrl)
  {
    $config = [...other_keys, 'apiKey' => ''];
    $bank = Banks\Coop::make($config);

    $response = $bank->stkPush($amount, $phone, $callbackUrl);
  }
}

```
