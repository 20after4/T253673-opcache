# T253673

## build & run the server
```
make start-server
```

## Cause php files to be changed constantly
```
make update-files-loop &
```

## Hammer the server with requests
```
# Stops at the first failure
make siege
```

## get opcache info
```
make info
```

## stop the server
```
make stop-server
```

https://phabricator.wikimedia.org/T253673
