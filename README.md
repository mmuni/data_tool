DATA TOOL
=========

Development Setup Instructions
------------------------------

Grab the CakePHP 2.6.1 release

        wget https://github.com/cakephp/cakephp/archive/2.6.1.zip -O 2.6.1.zip

Unzip the downloaded zip file

        unzip 2.6.1.zip

to create the cakephp-2.6.1 directory

        cd cakephp-2.6.1

Remove the default app directory

        rm -r app

Clone this repository to create the app directory of the CakePHP installation like so:

        git clone https://github.com/mmuni/data_tool app
    
Then start the builtin cakephp server like so:

        lib/Cake/Console/cake server --port 4000
    
You can then hit the application with your web browser on this URL

        http://localhost:4000
        
Working with feature branches
------------------------------

        cd app
        git checkout feature/<name_of_feature>
