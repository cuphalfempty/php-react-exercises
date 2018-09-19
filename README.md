https://sergeyzhuk.me/2018/08/31/fast-webscraping-images/

$ docker run --rm --interactive --tty --volume $PWD:/app composer config platform.php "7.2.0"
$ docker run --rm --interactive --tty --volume $PWD:/app composer install

$ docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.2-cli php your-script.php
