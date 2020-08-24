## About the app
project-timer is an application for managing the time spent by a user on a given project. This user can belong to one or more groups, and each group can have one or more different projects.
We let you discover the application.  

## Getting started

This repository holds project-timer code.
In order to run the project you will need to check your local machine requirements.

### Requirements
- docker, docker-compose
- Makefile

#### Cloning the repository

You can clone the repository on your machine and use the client as your own risk.
You will need to install docker and Makefile.

### if you have a problem installing the Makefile on your device, you can follow these steps

```
# Go to the root of the project and enter this command to start the application:
  docker-compose up --build

# Type this command then to create all the tables necessary for the proper functioning of the application in the mysql database
  docker-compose exec web php bin/console doctrine:migrations:migrate

# Here is the command to execute to create false data (Data Fixtures) in order to be able to test the application
  docker-compose exec web php bin/console doctrine:fixtures:load
```

### Others
***
#### If you need to access the database

```
docker-compose exec web php bin/console app:create-admin-user <email> <password> <prenom> <nom> 
```

### For those whose installation of Makefile went well
***

* For start application
```
    $ make start
```
* For stop application
```
    $ make stop    
```

* For load différents entity to database
```   
    $ make migrations 
```
* For generate a data fixtures for your tests
```
    $ make fixtures 
```

## Contributing
We encourage you to contribute to Project-timer! Please check out the
[Contributing to project-timer guide](https://github.com/Abdoulaye224/Project-timer/blob/master/CONTRIBUTING.md) for guidelines about how to proceed. [Join us!](https://abdoulaye224.github.io/Project-timer/)

Everyone interacting in project-timer and its sub-projects' codebases, issue trackers, chat rooms, and mailing lists is expected to follow the project-timer [code of conduct](https://github.com/Abdoulaye224/Project-timer/blob/master/CODE_OF_CONDUCT.md).
## Support

Please
[open an issue](https://github.com/Abdoulaye224/Project-timer/issues)
for support.