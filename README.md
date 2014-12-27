In-Touch Insight Systems - Proof of Concept
======================


##Overview
This web is a proof of concept, intended to demonstrate the integration of Stripe API library into Laravel.  The deployed web should appear as a 'shopping cart' ready for checkout.

For ease of sharing, the web was created using Vagrant and Laravel Homestead.

##Installation
###Requirements
- Vagrant 1.6
- Laravel Homestead
- Composer

###Installation
Documentation for homestead can be found here:  (http://laravel.com/docs/4.2/homestead).  The following instructions are largely borrowed from the homestead installation instructions.

####Installing VirtualBox & Vagrant

Before launching your Homestead environment, you must install [VirtualBox] (https://www.virtualbox.org/wiki/Downloads) and [Vagrant] (http://www.vagrantup.com/downloads.html). Both of these software packages provide easy-to-use visual installers for all popular operating systems.

####Adding The Vagrant Box

Once VirtualBox and Vagrant have been installed, you should add the laravel/homestead box to your Vagrant installation using the following command in your terminal. It will take a few minutes to download the box, depending on your Internet connection speed:

```
vagrant box add laravel/homestead
```


####Installing Homestead

Once the box has been added to your Vagrant installation, you are ready to install the Homestead CLI tool using the Composer global command:
```
composer global require "laravel/homestead=~2.0"
```
Make sure to place the ~/.composer/vendor/bin directory in your PATH so the homestead executable is found when you run the homestead command in your terminal.

Once you have installed the Homestead CLI tool, run the init command to create the Homestead.yaml configuration file:
```
homestead init
```
The Homestead.yaml file will be placed in the ~/.homestead directory.

####Configuring the homestead.yaml 
This package is configured to reside in '\Users\[Current User]\Code'.  You will need to configure the '~/.homestead/homestead.yaml' file to reflect this.
If you wish the package to reside elsewhere change the homestead.yaml 'folders' section accordingly.  

*If the ip address provided does not suit your requirements, change it accordingly.*

**_'~/' refers to '\Users\[Current User]\' on a windows machine._**


#####Create Your SSH Keys:
Create a set of public and private SSH keys, and place them in '\Users\[Current User]\.ssh'.  The private and public key files should be named 'id_rsa' and 'id_rsa.pub' respectively.

#####Example homestead.yaml
homestead.yaml should appear as follows:
```
---
ip: "192.168.10.11"
memory: 2048
cpus: 1

authorize:  ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map:  ~/Code
      to: /home/vagrant/Code

sites:
    - map: option1.local
      to: /home/vagrant/Code/Projects/option1/public

databases:
    - homestead
    - proofofconcept

variables:
    - key: APP_ENV
      value: local
```



####Clone The Repository
This package is configured to reside in '\Users\[Current User]\Code'.  Create this folder, then clone the repository into it.

Open a command prompt in the root folder you just created, and clone the repository into it:
```
git clone https://github.com/gsalmon/ProofOfConcept.git
```



####Configure Hosts
You will need to modify your servers hosts file to use the ip address specified in the homestead.yaml file.  Add the following to the end of your hosts file:

```
192.168.10.11 option1.local
```

On a windows machine the hosts file can be found in '[Windows]\System32\drivers\etc\'.

####Launch The Vagrant Box
Open a command prompt in the root folder you created and cloned the repository into, then launch the vagrant box with the following command:
```
vagrant up --provision
```
The '--provision' argument ensure that vagrant provisions our environment properly.  

The web should now be available at http://option1.local !

##Usage
Needs Content




