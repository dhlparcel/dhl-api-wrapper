# dhl-api-wrapper

### Installing via Composer
The recommended way to install the wrapper is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of the wrapper:

```bash
php composer.phar require dhl-plugins/dhl-api-wrapper
```
After installing, you need to require Composer's autoloader:

```php
require __DIR__ . '/vendor/autoload.php';
```

### Frequently asked questions

See [FAQ.md](FAQ.md).

## Getting Started

First you will need to initialise the client like this:

```php
$client = new \Dhl\ApiClient([
    'apiUser' => $apiUser,
    'apiKey' => $apiKey,
    'accountId' => $accountId,
    'organisationId' => $organisationId,
]);
```

Then you can begin making requests like shown below.
Please note that the list of requests below is not complete.

More complete examples are located in the [examples directory](examples/)



### Create Shipping Label
check the [create label example](examples/createLabel.php) for the `$parameters` variable.
```php
// Create a DHL shipping label
$label = $client->createLabel($parameters);
$rawPdf = $labelResult->offsetGet('pdf');
if (!file_put_contents('DHLshippingLabel.pdf', base64_decode($rawPdf))) {
    printf('could not write label.%s', PHP_EOL);
} else {
    printf('Shipping label writen.%s', PHP_EOL);
}
```

### Retrieve Capabilities
```php
// Retrieve the capabilities for your account and shipment information.
// The result can be used as `options` in the createLabel call.
$result = $client->capabilities([
    'fromCountry' => 'NL',
    'fromPostalCode' => '3542 AD',
    'toCountry' => 'NL',
    'toPostalCode' => '3542 AB',
]);
printf('<pre>%s</pre>', print_r($result, true));
```

### Destination Countries
```php
// Get a list of all destination Countries.
$result = $client->destinationCountries(['senderType' => 'business', 'fromCountry' => 'NL']);
printf('<pre>%s</pre>', print_r($result, true));
```

Endpoints which are available, take a look in the [./src/Dhl/resources](src/Dhl/resources) directory for reference.

### Bugs & Issues
If you spot any bugs, please report it using the issue tracker.
If you would like to contribute to the project please feel free to make your amends and submit a pull request.

### Contact
If you think something is not working correct or as it should, then contact us by emailing [plugins@dhl.com](mailto:plugins@dhl.com).

