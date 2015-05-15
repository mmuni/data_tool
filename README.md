DATA TOOL
=========

Development Setup Instructions
------------------------------

Clone this repository to create the app directory of the CakePHP installation like so:

        git clone https://github.com/mmuni/data_tool
        cd data_tool

install composer from http://getcomposer.org

        curl -sS https://getcomposer.org/installer | php

install the dependencies using the recently installed composer

        php composer.phar update

setup the database

        cp Config/database.php.default Config/database.php
        edit Config/database.php

Then start the builtin cakephp server like so:

        Vendor/bin/cake server --port 4000

You can then hit the application with your web browser on this URL

        http://localhost:4000
