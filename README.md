# LibreTo for YunoHost

[![Integration level](https://dash.yunohost.org/integration/libreto.svg)](https://dash.yunohost.org/appci/app/libreto) ![](https://ci-apps.yunohost.org/ci/badges/libreto.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/libreto.maintain.svg)  
[![Install LibreTo with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=libreto)

> *This package allow you to install LibreTo quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview
Libreto let you aggregate your pad (etherpad lite) to create a kind of wiki easily.

**Shipped version:** 0.0.20180605

## Screenshots

![Home page of Libreto](img/home.png)
![Usage of Libreto](img/menu.png)

## Demo

* [Official demo](https://libreto.net)

## Configuration

No configuration needed.

## Documentation

 * Official documentation: https://github.com/Ventricule/libreto

## YunoHost specific features

#### Multi-users support

Libreto has no user management, but YunoHost allow you to decide if this app is public or not.

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/libreto%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/libreto/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/libreto%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/libreto/)

## Limitations

Only app instances with a valid certificate and allowing to be included in Frame could be used.

## Links

 * Report a bug: https://github.com/YunoHost-Apps/libreto_ynh/issues
 * App website: http://libreto.net/
 * Upstream app repository: https://github.com/Ventricule/libreto
 * YunoHost website: https://yunohost.org/

---

## Developers info

Please do your pull request to the [testing branch](https://github.com/YunoHost-Apps/libreto_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/libreto_ynh/tree/testing --debug
or
sudo yunohost app upgrade libreto -u https://github.com/YunoHost-Apps/libreto_ynh/tree/testing --debug
```
