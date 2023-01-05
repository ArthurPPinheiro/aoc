<!-- docker run --rm -v $(pwd):/app -w /app php:cli php index.php -->

docker build -t php-app . && docker run -it --rm php-app