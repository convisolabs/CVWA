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

Essa aplicação simula um Blog onde um usuário pode pesquisar e acessar publicações do seu interesse. Os vetores de ataques são muitos, identicos a um ambiente real.

---

### How to deploy on local machines

```bash
$ git clone https://github.com/convisolabs/CVWA
$ cd CVWA
$ docker build -t cvwa .
$ docker container run -ti -p 8080:8080 cvwa
```

---

### Challenge

O objetivo desse desafio é que o candidato analise e encontre falhas no ambiente preparado para o teste, o qual consiste em uma aplicação web com algumas vulnerabilidades e falsos positivos, com o intuito de validar principalmente a capacidade analítica do candidato, além de alguns conhecimentos técnicos. Ao fim da análise, deverá ser enviado um relatório descrevendo todo o fluxo das explorações feitas, preferencialmente aliado a um bom detalhamento de todo o processo para que tenhamos visibilidade dos conhecimentos gerais do candidato em questão.

---

### Contribution

- Your contributions and suggestions are heartily ♥ welcome. [See here the contribution guidelines.](/.github/CONTRIBUTING.md) Please, report bugs via [issues page](https://github.com/convisolabs/CVWA/issues) and for security issues, see here the [security policy.](/SECURITY.md) (✿ ◕‿◕)

---

### License

- This work is licensed under [MIT License.](/LICENSE.md)