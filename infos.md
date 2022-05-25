# IAM Roles

### CodeDeploy_EC2Role

| AmazonEC2RoleforAWSCodeDeploy

```
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Effect": "Allow",
      "Principal": {
        "Service": "ec2.amazonaws.com"
      },
      "Action": "sts:AssumeRole"
    }
  ]
}
```

### CodeDeployRole

| AmazonEC2FullAccess
| AWSCodeDeployFullAccess
| AdministratorAccess
| AWSCodeDeployRole

``` 
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Effect": "Allow",
      "Principal": {
        "Service": "codedeploy.amazonaws.com"
      },
      "Action": "sts:AssumeRole"
    }
  ]
}
```

# EC2

1. Ubuntu Server 20.04 LTS
2. Função do IAM -> CodeDeploy_EC2Role
3. TAGs -> key: name -> value: ec2-deploy-finally
4. Security Group -> SSH-HTTP

4. 
```
#!/bin/bash
sudo apt-get update && sudo apt-get upgrade -y
sudo apt-get install git apache2 php7.4-cli php7.4-fpm ruby-full libapache2-mod-php7.4 -y
   
sudo systemctl reload apache2
sudo systemctl enable apache2
   
wget https://aws-codedeploy-us-east-2.s3.us-east-2.amazonaws.com/latest/install
chmod +x install
sudo ./install auto
   
sudo service codedeploy-agent start
```

# CodeDeploy -> Aplicativos

1. deploy-app-name
2. grupo-deploy-app-name
3. CodeDeployDefault.OneAtATime

# Criar implantação

1. Meu aplicativo está armazenado no GitHub
2. Nome do REPO -> SomenteTest/private-semi-pronto
3. ID ultimo COMMIT
4. Substituir o conteúdo

# Fazer Commit no repo :)