<img width="1440" alt="Cover" src="https://github.com/user-attachments/assets/076a955a-0ce3-4afa-b7e5-7e8bffb57769" />

# PHP Local CDN manager

### One Click to install all packages
CDN Package List
> path: public/packages.txt

There are list of packages with package, version & url by categorized.
```txt
# [Category]
[package] [version] [url]
```

You can use This way to install all packages with one click!

> path: scripts/downloader.sh
if you have Shell env, You will run this bash script
```bash
bash scripts/downloader.sh
``` 

## Installation
> Composer installer
```bash
composer create-project arefshojaei/anchor my-app
```

OR

> Clone the repository
```bash
git clone https://github.com/ArefShojaei/Anchor.git
```

## Setup
> Move to the folder
```bash
cd my-app
```

or 

```bash
cd Anchor
```

> Install dependencies
```bash
composer install
```

## How to use?
> Pattern
```txt
php bin/cli add cdn [package] [version] [url]
```

> Example
```bash
php bin/cli cdn add bootstrap 5.3.8 https://cdn.js
delivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
```

## How to run?

> Pattern
```txt
1: php bin/cli serve
2: php bin/cli serve --port:[port]
3: php bin/cli serve --host:[host]
4: php bin/cli serve --host:[host] --port:[port]
```

> Usage
```bash
php bin/cli serve
```

> 2: browse this URL:
```txt
http://[host]:[port]
```

Finally, You can upload files in "public/" folder