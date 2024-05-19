# Databases container

This project uses Docker Compose to facilitate the deployment and execution of a container. You can launch the container with a simple `docker-compose up` command.

## Prerequisites

- [Docker](https://www.docker.com/get-started) installed on your machine.
- [Docker Compose](https://docs.docker.com/compose/install/) installed on your machine.

## Configuration

Before running the container, you need to create a `.env` file at the root of the project. This file should contain the environment variables necessary to configure the application inside the container.

### Example of a `.env` File

Here is an example of a `.env` file that you can adapt to your needs:

```plaintext
# .env
DATABASE_USER=user
DATABASE_PASSWORD=secret
DATABASE_NAME=my_db

MYSQL_ROOT_PASSWORD=admin
MARIADB_ROOT_PASSWORD=admin
```
## Usage

1. Launch Docker Compose:
    ```bash
    docker compose up
    ```