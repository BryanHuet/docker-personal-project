#!/bin/sh

# Build HAProxy Docker image
cd proxy/
docker build -t eruditio-haproxy .
cd ..

# Build Eruditio Docker image
docker build -t eruditio .

# Create network
docker network create --driver bridge --subnet 172.50.0.0/16 eruditio_proxnet
