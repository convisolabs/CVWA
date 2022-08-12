# Contributing Guide

I'm really glad you're reading this, because we need volunteer developers to help this project come to fruition.

This is a Conviso Vulnerable Web Application (CVWA) contributing guide. Please read the following sections to learn how to ask questions and how to work on something.

Reading and following these guidelines will help us make the contribution process easy and effective for everyone involved. It also communicates that you agree to respect the time of the developers managing and developing these open source projects. In return, we will reciprocate that respect by addressing your issue, assessing changes, and helping you finalize your pull requests.

## Table of contents
1. Before you contribute
2. How to contribute?
3. Community


## Before you contribute

Please follow the Code of Conduct in all your interactions with our project.

## How to contribute?

### Issues
If you have a bug or an idea, check out the following sections before submitting your contribution.

Open an issue for any new problem
Writing a good issue will help our team better analyze and manage your contributions, therefore, follow the standards and best practices below:

With the title:

**Project:Scope** - Title Description
**Project:** Name of the project or repository you want to contribute to.
**Scope:** Add what your issue refers to:

**Bug Report**
Create a report to help us improve

**Feature request**
Suggest a new feature for a project

**Improvement**
Suggest a improvement for a project

**Support request**
Support request or question relating to Conviso Vulnerable Web Application

**Example:** CVWA-cli:Improvement - Suggestion for CLI installation experience

### With the issue description:

Try to explain the scenario to us by following these tips:

**Context:** explain the conditions which led you to write this issue.
**Problem or idea:** the context should lead to something, an idea or a problem that you’re facing.
**Solution or next step:** this where you move forward. You can engage others (request feedback), assign somebody else to the issue, or simply leave it for further investigation, but you absolutely need to propose a next step towards solving the issue.

### Prepare your development environment

To start contributing with Conviso Vulnerable Web Application, you need to deploy on local machine:

```
$ git clone https://github.com/convisolabs/CVWA
$ cd CVWA
$ docker build -t cvwa .
$ docker container run -ti -p 8080:80 cvwa
```

### Add new feature, bug fixing or improvement

If you want to add an improvement, a new feature or bug fix, follow the steps to contribute:

Step 1: Make sure your branch is based on main;

Step 2: When opening an issue, choose a template to answer the questions regarding what you want to contribute:

Step 3: Make your changes and open a GitHub pull request;

Step 4: Make sure to write a title describing what you have done;

Step 5: Fill in the template in the PR, here you need to write what you did and how the team can verify it;

## Community
Do you have any question about Conviso Vulnerable Web Application? Let's chat in our [Community](https://join.slack.com/t/devsecopsglobal/shared_invite/zt-18pirxrbb-0JBmsu5tiFTqg96IJ8Lf5Q).

Thank you for your contribution.
