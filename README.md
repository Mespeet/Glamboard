<img src="https://github.com/Mespeet/Glamboard/assets/70283394/7bccef83-a28d-483b-a70f-35353906a35e" width="10%"/>

# Glamboard
*Open Source Server Management Dashboard*

## Installation guide
1. create a docker volume.
	```bash
	docker volume create glamboard_data
	```
2. Download and install Glamboard.
	```bash
	docker run -d -p 8000:8000 -p 9444:9444 --name glamboard --restart=always -v /var/run/docker.sock:/var/run/docker.sock -v glamboard_data:/data mespeet/glamboard-r:latest
	```
3. Log into your Glamboard.
	*default credentials:*
	- username: admin
	- password: admin
	```bash
	https://localhost:9444
	```
