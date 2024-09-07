FROM debian:bookworm

RUN apt-get update && \
    apt-get install -y \
        supervisor \
        libmariadb-dev \
        python3 \
        python3-pip \
        python3-venv \
        unzip \
		curl \
        w3m \
        net-tools \
        nano \
		ca-certificates && \
	apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /var/cache/apt/archive/*.deb

# Copy the Supervisord config file
COPY supervisord/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Setup Python environement
RUN python3 -m venv /wkdir/venv
RUN chmod +x /wkdir/venv/bin/activate

# Upgrade pip and setuptools inside the virtual environment
RUN . /wkdir/venv/bin/activate && pip install --upgrade pip setuptools

# Install required Python packages from requirements.txt
COPY python/requirements.txt .
RUN . /wkdir/venv/bin/activate && pip install -r requirements.txt

# Add Python venv to PATH
ENV PATH="/wkdir/venv/bin:$PATH"

# Install prefect
RUN pip install -U prefect


STOPSIGNAL SIGWINCH

WORKDIR /var/prefect/src

EXPOSE 4200

CMD ["/usr/bin/supervisord"]
