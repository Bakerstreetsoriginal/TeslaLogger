FROM mcr.microsoft.com/dotnet/aspnet:8.0
# timezone / date
RUN echo "Europe/Berlin" > /etc/timezone && dpkg-reconfigure -f noninteractive tzdata

# install packages
RUN apt-get update && \
 apt-get install -y --no-install-recommends git && \
 apt-get install -y --no-install-recommends mariadb-client && \
 apt-get install -y optipng && \
 apt-get clean && \
 apt-get autoremove -y && \
 rm -rf /var/lib/apt/lists/* && \
 echo "export TERM=xterm" >> /root/.bashrc  && \
 echo "DOCKER" >> /tmp/teslalogger-DOCKER

RUN mkdir -p /etc/teslalogger
WORKDIR /etc/teslalogger
COPY --chmod=777 TeslaLogger/bin TeslaLogger/bin/Debug/net8.0 /etc/teslalogger/ 

RUN mkdir -p /etc/teslalogger/sqlschema
COPY TeslaLogger/sqlschema.sql /etc/teslalogger/sqlschema

ENTRYPOINT ["dotnet", "./TeslaLogger.dll"]
