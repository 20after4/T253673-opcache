# T253673

## build & run the container:
```
make build
make run
```

## get opcache info:
```
curl http://localhost:8080/mon/index.php?/opcache-info
```

## siege the server
```
siege -f urls.txt -c 10 --log=siege.log
```

https://phabricator.wikimedia.org/T253673
