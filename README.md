# CakePHP App with HAProxy and PostgreSQL

This project sets up a CakePHP application with HAProxy as a reverse proxy. The setup uses Docker for containerization and Docker Compose for orchestration. 

## Prerequisites

- Docker
- Docker Compose

## Setup Instructions

### Step 1: Clone the Repository

```sh
git clone https://github.com/BryanHuet/docker-personal-project.git
```

### Step 2: Build Docker Images

Run the `startup.sh` script to build the Docker images for the CakePHP app and HAProxy.

```sh
chmod +x startup.sh
./startup.sh
```

### Step 3: Start the Services

Use Docker Compose to start the services.

```sh
docker-compose up -d
```
### Step 4: Add Entry to Hosts File

Add the following entry to your hosts file to point `eruditio.local` to your localhost.

- **Windows**: Edit `C:\Windows\System32\drivers\etc\hosts`
- **Linux/Mac**: Edit `/etc/hosts`

Add the following line:

```
127.0.0.1 eruditio.local
```
### Step 5: Access the Application

Once the containers are up and running, you can access the CakePHP application via your web browser.

- CakePHP App: `http://eruditio.local`
- CakePHP Info: `http://eruditio.local/info` 

## Scripts

### `startup.sh`

```sh
#!/bin/sh

# Build HAProxy Docker image
cd proxy/
docker build -t eruditio-haproxy .
cd ..

# Build Testing AI Docker image
docker build -t eruditio .

# Create network
docker network create --driver bridge --subnet 172.50.0.0/16 eruditio_proxnet
```

## Troubleshooting

If you encounter any issues, check the logs of the running containers:

```sh
docker-compose logs
```

For more detailed inspection, you can also enter the containers:

```sh
docker exec -it <container_name> bash
```

## Contributing

Feel free to submit issues and pull requests if you have suggestions or improvements.
