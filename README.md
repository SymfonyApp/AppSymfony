# AppSymfony
---------------------
DoctrineFixturesBundle

Step 1: Download the Bundle
	composer require --dev doctrine/doctrine-fixtures-bundle
Step2: Enable the Bundle

	Writing Fixtures	

	Loading Fixtures
	# when using the ORM
	$ php bin/console doctrine:fixtures:load

	# when using the ODM
	$ php bin/console doctrine:mongodb:fixtures:load


Using Bootstrap 

Step 1:

Create two folders “/web/js/” and “/web/css/”

Step 2:

Download JQuery from http://jquery.com/ and place it to “/web/js/”

Download Bootstrap from http://getbootstrap.com/ and place bootstrap and bootstrap-theme to “/web/css/” folder

Change base.html.twig from “/app/Resources/views/” folder and then change another project views 