## About
HmPanel is a Laravel based cloud server control panel that supports Digital Ocean, AWS, Vultr, Google Cloud, Linode, Azure and other VPS. It comes with nginx, Mysql, multi PHP-FPM versions, multi users, Supervisor, Composer, npm, free Let's Encrypt certificates, Git deployment, backups, ffmpeg, fail2ban, Redis, API and with a simple graphical interface useful to manage Laravel, Codeigniter, Symfony, WordPress or other PHP applications. With HmPanel you don’t need to be a Sys Admin to deploy and manage websites and PHP applications powered by cloud VPS.

## Features
- Easy install: setup one or more servers with a click in few minutes without be a Linux expert.

- Server Management: manage one or more servers in as easy as a few clicks without be a LEMP Guru.

- Perfect stack for PHP devs: HmPanel comes with nginx, PHP, MySql, Composer, npm and Supervisor.

- Multi-PHP: Run simultaneous PHP versions at your ease & convenience.

- Secure: no unsed open ports, unprivileged PHP, isolated system users and filesystem, only SFTP (no insecure FTP), Free SSL certificates everywhere.

- Always update: HmPanel takes care about your business and automatically keeps your server's software up to date so you always have the latest security patches.

- Integrate HmPanel with your own software via Rest API and Swagger.

- Real-time servers stats: Keep an eye on everything through an awesome dashboard.

- Always up to date: HmPanel installs last versions of LTS dists and supports Ubuntu 20.04 LTS :)

## Discover HmPanel
Visit website: https://hmpanel.github.io

## Documentation
HmPanel Documentation is available at: https://hmpanel.github.io/docs.html.

## Installation
```bash
wget -O - https://raw.githubusercontent.com/hmpanel/laravel/main/install.sh | bash
```
#### Installation on AWS
AWS by default disables root login. To login as root inside AWS, login as default user and then use command sudo -s.

```
$ ssh ubuntu@<your server IP address>
$ ubuntu@aws:~$ sudo -s
$ root@aws:~# wget -O - https://raw.githubusercontent.com/hmpanel/laravel/main/install.sh | bash
```
Remember to open ports: 22, 80 and 443!

#### Installation Note
Before you can use HmPanel, please make sure your server fulfils these requirements:

- Ubuntu 20.04 x86_64 LTS (Fresh installation)

Hardware Requirement: More than 1GB of HD / At least 1 core processor / 512MB minimum RAM / At least 1 public IP  Address (IPv6 and NAT VPS are not supported) / For VPS providers such as AWS, those providers already include an external firewall for your VPS. Please open port 22, 80 and 443 to install HmPanel.

Installation may take up to about 30 minutes which may also depend on your server's internet speed. After the installation is completed, you are ready to use HmPanel to manage your servers.

To correctly manage remote servers HmPanel has to be on a public IP address (IPv4). Do not use it in localhost!

## HmPanel LEMP environment
- nginx: 1.18
- PHP-FPM: 8.1, 8.0, 7.4
- MySql: 8
- node: 16
- npm: 8
- Composer: 2

## Screenshots

<img src="https://hmpanel.github.io/assets/images/docs/dashboard.png"> 

<img src="https://hmpanel.github.io/assets/images/docs/server.png"> 

<img src="https://hmpanel.github.io/assets/images/docs/site.png"> 

## Why use HmPanel?
HmPanel is easy, stable, powerful and free for any personal and commercial use and it's a perfect alternative to Runcloud, Ploi.io, Serverpilot, Forge, Moss.sh and similar software...

## Mobile App
Christian Giupponi (https://zerouno.io) has developed the HmPanel Mobile App.<br>
Android: https://play.google.com/store/apps/details?id=it.christiangiupponi.HmPanel<br>
iOS: Coming soon!<br><br>

## HmPanel Roadmap... what's next? 
- HmPanel Version 4 (half 2022)
- Laravel 9 support
- Backup on s3
- Apps installer

## Need support with HmPanel?
Please open an issue here: https://github.com/hmpanel/hmpanel/issues.


### ...enjoy HmPanel :)
