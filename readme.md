# LEMP docker starter integrated with Codeigniter

Quick learning, deubgging, playing with [Codeigniter](https://codeigniter.com/) just one line of command.

## Prerequisite

Windows requires 64bit Windows 10 Pro with Hyper-V available. Please see What to know before you install for a full list of prerequisites.

macOS & Others unix just download and install on [docker official site.](https://www.docker.com/get-docker)

## Usage

### Create and Start Containers

```
$ docker-compose up -d
```

If you already ```docker-compose up -d``` you can just

```
$ docker-compose start
```

### Stop Containers

```
$ docker-compose stop
```

### Stop and remove containers, networks, images, and volumes

```
$ docker-compose down
```

### Access Codeigniter

After you create and start containers

Website: http://localhost/codeigniter

phpmyadmin: http://localhost/phpmyadmin

---

## Structures

### Overall structures

```
├── mysql
│   └── conf    --- MySQL config
├── nginx
│   ├── conf    --- Nginx configuration folder
│   ├── log     --- Nginx logs folder
│   └── site    --- Store our sites, php scripts
└── phpfpm
    └── conf
        ├── cli --- Php-cli config folder
        └── fpm --- Php-fpm config folder
```

### Private IP Address 

Private address which container talk to each others


(If you want to access with host just add uncomment in docker-compose.yml)


(If you want to edit private ip address just go to .env file)

```
Gateway: 172.20.1.1
Subnet: 172.20.0.0/16

Nginx: 172.20.1.2
PhpFPM: 172.20.1.3
MySQL: 172.20.1.4
```

## Special Thanks

I was built this project from scratch for a practice with docker and thanks his stureture and idea from nuuneoi https://github.com/nuuneoi/lemp-docker-starter-kit
