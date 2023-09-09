# Use the official Kali Linux image as the base image
FROM kalilinux/kali-rolling

# Update the package list and install the required tools
RUN apt-get update && \
    apt-get install -y nmap gobuster iputils-ping metasploit-framework hping3 && \
    rm -rf /var/lib/apt/lists/*

# Set the default command to start an interactive shell
CMD ["bash"]