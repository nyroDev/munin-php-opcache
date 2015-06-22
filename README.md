# munin-php-opcache

Munin plugin for monitoring PHP OPcache


# Requirements

The `php_opcache_` plugin is made for the Munin v1.4.0+ monitoring system.

The Munin homepage can be found at: http://munin-monitoring.org/


# Documentation

Project homepage: https://github.com/nyroDev/munin-php-opcache


# Installation and Usage

Copy the file php_opcache.php to a location accessible to the web server, such as:

    www.example.com/php_opcache.php
  
Add the following lines to the munin-node file, usually found in
`/etc/munin/plugin-conf.d/munin-node`.

    [php_opcache_*]
    user root
    env.url http://www.example.com/php_opcache.php

There are 5 available graphs for this multi graph plugin:

  - `php_opcache_memory`
  - `php_opcache_hitrate`
  - `php_opcache_hits`
  - `php_opcache_misses`
  - `php_opcache_keys`

Each required graph should be added to the plugins directory, usually found in
`/etc/munin/plugins/`.

The common approach is to copy the file `php_opcache_` to the directory `/usr/share/munin/plugins/`
and then add a symbolic link to it from `/etc/munin/plugins/`.

For example:

    sudo ln -s /usr/share/munin/plugins/php_opcache_ /etc/munin/plugins/php_opcache_memory
    sudo ln -s /usr/share/munin/plugins/php_opcache_ /etc/munin/plugins/php_opcache_hitrate
    ..

After symlinking the files, restart munin-node (`$ sudo service munin-node restart`).

For more information regarding installation of Munin plugins, read the
[Munin documentation][1].


# Archive Contents

  The complete project archive contains the following files:

    php_opcache_     - the php_opcache_ Munin plugin.
    php_opcache.php  - the PHP script that is called by the plugin.
    README.md        - this file.


# Licensing

`php_opcache_` is licensed under the [MIT License][2].


[1]: http://munin-monitoring.org/wiki/Documentation "Munin Documentation"
[2]: http://www.opensource.org/licenses/mit-license.php "MIT License"