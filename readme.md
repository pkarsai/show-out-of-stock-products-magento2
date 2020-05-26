# Overview

This module makes Magento 2 display out-of-stock configurations for configurable products when the relevant option is set to Yes in the back end.

There is an [option][1] in Magento 2's admin interface that enables the display of out-of-stock products on the front end. The problem with this option is that out-of-stock product configurations for configurable products are not displayed even when this option is enabled. This module makes Magento 2's front end display these products, while keeping the swatches for the out-of-stock configurations crossed out.

# Update for 1.0.4
Removed the Magento Framework and PHP version requirements imposed by composer.json. But this module was not tested with releases later than Magento 2.2.7. Use at your own risk!

# Installation

Via composer:
```
composer require myweb/show-out-of-stock-products
bin/magento setup:upgrade
```

OR copy the contents of this repo to the following location:

```
{magento_root}/app/code/Myweb/ShowOutOfStockProducts
```
then
```
bin/magento setup:upgrade
```


If you are in production mode you also need to run the following after installation:
```
bin/magento setup:di:compile
bin/magento setup:static-content:deploy
```

[1]: https://docs.magento.com/m2/ce/user_guide/configuration/catalog/inventory.html