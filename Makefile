.PHONY: all deploy

all:
	@php index.php compile

deploy:
	@git pull
	@php index.php compile
	@git checkout gh-pages
	@rm .tmp -fR
	@mkdir .tmp
	@mv * .tmp
	@mv .tmp/_compiled/* .
	@rm .tmp -fR
	@git add .
	@git commit -m "Modified updated manual"
	@git push
