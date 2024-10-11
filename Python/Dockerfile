FROM ubuntu:latest

LABEL org.opencontainers.image.authors="https://carlodh.myds.me" \
     org.opencontainers.image.url="https://github.com/carlodh" \
     org.opencontainers.image.version="0.0.1" \
     org.opencontainers.image.title="Ejemplo Python" \
     org.opencontainers.image.description="Ejemplo python en ubuntu"

RUN apt-get update && apt-get install -y \
gcc libc6-dev autoconf automake \
python3-pip libssl-dev libffi-dev python3-dev python3-venv \
&& rm -rf /var/lib/apt/lists/*
  
RUN pip install pyinstaller pylint flake8 build --break-system-packages