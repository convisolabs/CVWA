<p align="center">
  <img src="https://user-images.githubusercontent.com/66391286/184713609-b0a73026-c6c0-403f-8085-bb37521f1ba4.png" width="500">
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

### If you are a job candidate

The expectation boils down to two things:

- We expect you to perform a white-box analysis on the code in this repository, identifying risks and vulnerabilities, pointing out opportunities for improvement and the root causes of problems - with suggestion of fix.
- Document all this in a didactic, direct and comprehensive way in a PDF report that will be evaluated by our technical team.

What will be evaluated:

- Number of identified vulnerabilities/risks;
- Report narrative, grammar and organization;
- Depth of analyses;
- Analytical and critical thinking during analysis;

**The report can be written in Portuguese or in English.**

---

### Contribution

- Your contributions and suggestions are heartily ♥ welcome. [See here the contribution guidelines.](/.github/CONTRIBUTING.md) Please, report bugs via [issues page](https://github.com/convisolabs/CVWA/issues).

---

### License

- This work is licensed under [MIT License.](/LICENSE.md)
