# [SilverStripe PHPInfo module](https://github.com/spekulatius/silverstripe-phpinfo) <br /> [![Build Status](https://api.travis-ci.org/spekulatius/silverstripe-phpinfo.svg?branch=master)](https://travis-ci.org/spekulatius/silverstripe-phpinfo) [![Latest Stable Version](https://poser.pugx.org/spekulatius/silverstripe-phpinfo/version.svg)](https://github.com/spekulatius/silverstripe-phpinfo/releases) [![Latest Unstable Version](https://poser.pugx.org/spekulatius/silverstripe-phpinfo/v/unstable.svg)](https://packagist.org/packages/spekulatius/silverstripe-phpinfo) [![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/spekulatius/silverstripe-phpinfo.svg)](https://scrutinizer-ci.com/g/spekulatius/silverstripe-phpinfo?branch=master) [![Total Downloads](https://poser.pugx.org/spekulatius/silverstripe-phpinfo/downloads.svg)](https://packagist.org/packages/spekulatius/silverstripe-phpinfo) [![License](https://poser.pugx.org/spekulatius/silverstripe-phpinfo/license.svg)](https://github.com/spekulatius/silverstripe-phpinfo/blob/master/license.md)

Give you a chance to view the phpinfo() output as a task. Requires admin permissions.

**Do not permanently install this! Only use this if you are know what you are doing!**

### Why?

Sometimes you have to work with servers you can't ssh into and get more information about e.g. installed packages or versions. This package allows you get the information if you have admin privileges.

### Requirements

* PHP >= 4.0.0
* SilverStripe Framework ~3.0.

### Usage

**You should not leave this package installed permanently because it could give a potential attacker information about your environment!**

For the installation you can either download the package, unzip it into your project directory and run dev build manually or run the following commands in your project directory:

1. Install into your project:
   ```
   composer require spekulatius/silverstripe-phpinfo
   ```

2. Deploy onto the environment in question.

3. Login as a admin

4. Go on yourproject.com/dev/tasks and find the phpinfo task...

5. Remove package:
   ```
   composer remove spekulatius/silverstripe-phpinfo
   ```

6. Deploy again onto the environment to remove the package from the server!

## MISC: [Future ideas/development, issues](https://github.com/FriendsOfSilverStripe/spekulatius/silverstripe-phpinfo/issues), [Contributing](https://github.com/FriendsOfSilverStripe/spekulatius/silverstripe-phpinfo/blob/master/CONTRIBUTING.md), [License](https://github.com/FriendsOfSilverStripe/spekulatius/silverstripe-phpinfo/blob/master/license.md)
