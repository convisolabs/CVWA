<p align="center">
  <h3 align="center"><b>CVWA</b></h3>
  <p align="center">Conviso Vulnerable Web Application</p>
  <p align="center">
    <a href="https://github.com/convisolabs/CVWA/master/LICENSE.md">
      <img src="https://img.shields.io/badge/license-MIT-blue.svg">
    </a>
    <a href="https://github.com/convisolabs/CVWA/releases">
      <img src="https://img.shields.io/badge/version-0.0.1-blue.svg">
    </a>
  </p>
</p>

---

### Description

This application was purposely coded insecurely, having a large number of vulnerabilities and bad practices. The idea is to simulate an initial blog structure, made by a novice programmer who made serious mistakes, leaving it vulnerable to numerous attacks.

We use this application for educational purposes only, making demonstrations on how to manually and automatically detect these vulnerabilities and also how to fix them.

---

### How to deploy on local machines

```bash
$ git clone https://github.com/convisolabs/CVWA
$ cd CVWA
$ docker build -t cvwa .
$ docker container run -ti -p 8080:80 cvwa
```

---

### Contribution

- Your contributions and suggestions are heartily ♥ welcome. [See here the contribution guidelines.](/.github/CONTRIBUTING.md) Please, report bugs via [issues page](https://github.com/convisolabs/CVWA/issues).

---

### License

- This work is licensed under [MIT License.](/LICENSE.md)