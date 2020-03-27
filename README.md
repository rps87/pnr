# pnr


$ cd /var/www/html/pnr/codigo/trunk/pnr
$ git add .
$ git push origin master

------- Configurações para inicializar o GIT -----------------

$ git init (DIGITE ENTER - ⌨️)
Initialized empty Git repository in /var/www/html/pnr/codigo/trunk/pnr/.git/

------- Configurações para apontar o repositorio do GIT que vamos utilizar -----------------

$ git remote add origin git@github.com:rps87/pnr.git (DIGITE ENTER - ⌨️)

------- No diretorio local exemplo "/var/www/html/pnr" irá ADD arquivos e diretórios para subir p/ o GIT -----------------

$ git add . (DIGITE ENTER - ⌨️)

------- COMMIT p/ o GIT, por enquanto LOCAL, ainda não foi para a NUVEM ----------------- (NÃO FUNCIONOU 💣️)

$ git commit -m "primeiro commit com todos os diretorios base e arquivos base vazios." (DIGITE ENTER - ⌨️)
*** Please tell me who you are.

Run

  git config --global user.email "you@example.com"
  git config --global user.name "Your Name"

to set your account's default identity.
Omit --global to set the identity only in this repository.

fatal: unable to auto-detect email address (got 'root@santos-dev-pc.(none)')

------- Configurações Pessoais para o GIT -----------------

$ git config --globa user.email "seuemail@mail.com" (DIGITE ENTER - ⌨️)

$ git config --globa user.name "Seu Nome" (DIGITE ENTER - ⌨️)

------- COMMIT p/ o GIT, por enquanto LOCAL, ainda não foi para a NUVEM ----------------- (FUNCIONOU 👌️)

$ git commit -m "primeiro commit com todos os diretorios base e arquivos base vazios."
[master (root-commit) c531266] primeiro commit com todos os diretorios base e arquivos base vazios.
 18 files changed, 50 insertions(+)
 create mode 100644 .htaccess
 create mode 100755 .vscode/launch.json
 create mode 100755 .vscode/settings.json
 create mode 100644 _utilitarios/db.sql
 create mode 100644 classes/class-MainController.php
 create mode 100644 classes/class-MainModel.php
 create mode 100644 config.php
 create mode 100644 controllers/home-controller.php
 create mode 100644 controllers/login-controller.php
 create mode 100644 functions/global-functions.php
 create mode 100644 includes/404.php
 create mode 100644 index.php
 create mode 100644 loader.php
 create mode 100644 views/_includes/footer.php
 create mode 100644 views/_includes/header.php
 create mode 100644 views/_includes/menu.php
 create mode 100644 views/home/home-view.php
 create mode 100644 views/login/login-view.php
root@santos-dev-pc:/var/www/html/pnr/codigo/trunk/pnr# git status
No ramo master
nothing to commit, working tree clean
root@santos-dev-pc:/var/www/html/pnr/codigo/trunk/pnr# git log
commit c53126672143dc05498111d6f53d2bbf22456a4a (HEAD -> master)
Author: Raphael Santos <rps.indio@gmail.com>
Date:   Thu Mar 26 10:16:10 2020 -0300

    primeiro commit com todos os diretorios base e arquivos base vazios.

------- PUSH p/ o GIT, empurrar os arquivos p/ a NUVEM ----------------- (NÃO FUNCIONOU 💣️, sem CHAVE de acesso)

$ git push origin master
The authenticity of host 'github.com (192.192.192.192)' can't be established.
RSA key fingerprint is SHA256:*************************************.
Are you sure you want to continue connecting (yes/no)? yes
Warning: Permanently added 'github.com,192.192.192.192' (RSA) to the list of known hosts.
git@github.com: Permission denied (publickey).
fatal: Could not read from remote repository.

Please make sure you have the correct access rights
and the repository exists.

------- Verificando se há chave criada para o GIT ----------------- (NÃO FUNCIONOU 💣️, sem CHAVE de acesso)

$ ls -al ~/.ssh
total 12
drwx------ 2 root root 4096 mar 26 10:16 .
drwx------ 5 root root 4096 mar 26 10:16 ..
-rw-r--r-- 1 root root  884 mar 26 10:16 known_hosts

------- Criar CHAVE LOCAL para o GIT -----------------

$ ssh-keygen -t rsa -b 4096 -C "seuemail@mail.com"
Generating public/private rsa key pair.
Enter file in which to save the key (/root/.ssh/id_rsa): (DIGITE ENTER - ⌨️)
Enter passphrase (empty for no passphrase): (DIGITE ENTER - ⌨️)
Enter same passphrase again: (DIGITE ENTER - ⌨️)
Your identification has been saved in /root/.ssh/id_rsa.
Your public key has been saved in /root/.ssh/id_rsa.pub.
The key fingerprint is:
SHA256:******************************** seuemail@mail.com
The key's randomart image is:
+---[RSA 4096]----+
|     **********  |
|     **********  |
|     **********  |
|     **********  |
|     **********  |
|     **********  |
|     **********  |
|     **********  |
|     **********  |
+----[SHA256]-----+

------- Coloca CHAVE LOCAL em cache por tempo indefinido para as conexões com o GIT -----------------

$ git config --global credential.helper cache


------- NOVAMENTE, Verificando se há chave criada para o GIT ----------------- (FUNCIONOU 👌️)

$ ls -al ~/.ssh
total 20
drwx------ 2 root root 4096 mar 26 10:30 .
drwx------ 5 root root 4096 mar 26 10:46 ..
-rw------- 1 root root 3243 mar 26 10:28 id_rsa
-rw-r--r-- 1 root root  745 mar 26 10:28 id_rsa.pub
-rw-r--r-- 1 root root 1326 mar 26 10:30 known_hosts


------- ADICIONA -> CHAVE LOCAL em arquivo para as conexões SSH com o GIT -----------------

$ ssh-add ~/.ssh/id_rsa
Identity added: /root/.ssh/id_rsa (/root/.ssh/id_rsa)


------- Instalação de um "copiador" de CHAVE LOCAL para o clipboard -----------------

$ sudo apt-get install xclip


------- Copia a CHAVE LOCAL para o clipboard -----------------

$ xclip -sel clip < ~/.ssh/id_rsa.pub


------- Estes passos são no BROWSER -----------------

 1) No canto superior direito da página do GITHUB, (Já Logado no GIT) clique na foto do seu perfil e clique em "Settings".
 2) Na barra lateral de configurações do usuário, clique em "SSH and GPG keys".
 3) Clica em "New SSH key" ou "Add SSH key".
 4) Insere o nome do computador que esta usando e COLA a chave.
 5) Clica em "Add SSH Key" e vai pedir a senha do GIT.

------- Vamos voltar p/ o TERMINAL -----------------

$ git push origin master
Username for 'https://github.com': seuusuario  (DIGITE SEU USUARIO DO GIT + ENTER - ⌨️)
Password for 'https://seuusuario@github.com': suasenha (DIGITE SUA SENHA DO GIT + ENTER - ⌨️)
Counting objects: 15, done.
Delta compression using up to 2 threads.
Compressing objects: 100% (9/9), done.
Writing objects: 100% (15/15), 1.85 KiB | 948.00 KiB/s, done.
Total 15 (delta 0), reused 0 (delta 0)
To https://github.com/rps87/pnr.git
 * [new branch]      master -> master


-------PRONTO !!!!! -----------------





