# Codeigniter 2 with docker setup

# Introduction!
This project is just for testing purpouses. It includes basic installation of codeigniter framework version 2.

### Tech
```
Tech stack:
 - php5.6-fpm
 - nginx
 - composer
``` 

### Docker
Project is very easy to install in a Docker container.
From the project directory run:
```sh
docker-compose build
```
This will run docker-compose file which will build php and nginx container. 
To run all builded containers witch detached mode run:
```sh
docker-compose up -d
```
Finally you can peek into php container by typing:

```sh
docker exec -it php bash
```

Now your website is available under: localhost:85/


