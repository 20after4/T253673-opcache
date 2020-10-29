build:
	docker build -t t236104 -f Dockerfile .

start-server: build
	docker run --name t236104 --rm -d \
		--cap-add=SYS_PTRACE \
		-p 8080:8080 \
		-v $(shell pwd)/src:/var/www/html \
		-v $(shell pwd)/urls.txt:/urls.txt \
		-v $(shell pwd)/siegerc:/siegerc \
		t236104:latest

stop-server:
	docker rm -f t236104

update-files:
	php src/codegen.php 0 500

update-files-loop:
	while true; do $(MAKE) -s update-files; done

siege:
	siege -f urls.txt -i -c 10 --log=siege.log --rc=siegerc

# Runs siege from the same container as the server to avoid any docker
# network proxying overhead/interaction.  Note: The version of siege that
# gets installed (4.0.2) crashes regularly.
siege-docker:
	docker exec -it t236104 siege -f /urls.txt -i -c 10 --log=/tmp/siege.log --rc=/siegerc

info:
	curl -s http://localhost:8080/mon/index.php?/opcache-info | jq

check:
	test/checker.sh

.PHONY: build run switch check
