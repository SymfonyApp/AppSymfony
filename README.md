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
