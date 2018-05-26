# [dvcables-harness.com](http://dvcables-harness.com/)

The DV Cables & Harness website is a simple static site, with a very basic PHP template system.

* The development code is in the [`./src`](src) directory.
* The build process relies on [`gulp`](https://gulpjs.com/).
* The `gulp` tasks can be found in the [`gulpfile.js`](gulpfile.js) file.


## Build

**Default Task** - Run a complete build, watch and serve on a `./intermediate` directory.

```sh
$ gulp
```

**Build Task** - Run a build distribution-ready package to the `./dist` directory.

```sh
$ gulp build
```
