#!/bin/sh

# Build HAProxy Docker image
docker build -t haproxy proxy/.

# Build Prefect Docker image
docker build -t prefect prefect/.

# Build Eruditio Docker image
docker build -t eruditio eruditio/.

# Create network
docker network create --driver bridge --subnet 172.50.0.0/16 eruditio_proxnet
