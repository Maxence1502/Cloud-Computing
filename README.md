# Retrieving files

Install git : https://git-scm.com/book/en/v2/Getting-Started-Installing-Git

To start, create a new folder on your computer, open a terminal in it and run:

```bash
git clone https://github.com/Maxence1502/Cloud-Computing.git
```

# Requirements

Install docker : https://docs.docker.com/engine/install/

Install docker-compose: https://docs.docker.com/compose/install/

# Setup the containers

In the docker-compose.yml file change the path to match your GIT folder:
```
- "/mnt/c/Users/maxence/Desktop/Exercices/Cloud computing/Final project/website:/var/www/html/"
```

Then in a terminal launch the containers with the command:
```bash
docker-compose up -d
```
