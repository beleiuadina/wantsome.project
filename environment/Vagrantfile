# -*- mode: ruby -*-
# vi: set ft=ruby :

# ssh-keygen -t rsa -b 4096 -C "ansible"

$ansible_user_setup = <<SCRIPT
#!/bin/bash

function create_user {
  USER_EXISTS=0
  USERS=`getent passwd | cut -d":" -f1`
  
  for USER in $USERS;
  do
    if [[ $1 == $USER ]]; then
      echo "$1 user exists"
      USER_EXISTS=1
    fi
  done

  if [[ $USER_EXISTS -eq 0 ]]; then
    echo "Creating user: $1"
    adduser --disabled-password --gecos "" $1
  fi
}

function set_authorized_keys {
  if [[ ! -d /home/$1/.ssh ]]; then
    echo "Creating .ssh folder for $1 ssh access"
    mkdir /home/$1/.ssh
  fi
  
  if [[ ! -f /vagrant/ansible/keys/ansible.pub ]]; then
    echo "Make sure the vagrant folder is mounted and the file ansible.pub exists!"
    exit 1
  fi

  cat /vagrant/ansible/keys/ansible.pub > /home/$1/.ssh/authorized_keys

  chown -R $1:$1 /home/$1/.ssh
  chmod 600 /home/$1/.ssh/authorized_keys
}

function add_to_sudoers {

  if [ ! -f /etc/sudoers.d/$1 ]; then
    echo "Granting sudo access for user: $1"
    echo "$1 ALL=(ALL) NOPASSWD:ALL" > /etc/sudoers.d/$1
  else
    echo "User has been already added to sudoers"
  fi
}

create_user "ansible"
set_authorized_keys "ansible"
add_to_sudoers "ansible"

SCRIPT

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/focal64"

  config.vm.define "load_balancer" do |lb|
    lb.vm.hostname = "load-balancer"
    lb.vm.network "private_network", ip: "192.168.56.11"
    lb.vm.provision "shell", :inline => $ansible_user_setup
    lb.vm.provider :virtualbox do |vb|
		vb.memory = 4096
		vb.cpus = 1
    end
  end
  config.vm.define "app_server_1" do |ap1|
    ap1.vm.hostname = "application-server-1"
    ap1.vm.network "private_network", ip: "192.168.56.12"
    ap1.vm.provision "shell", :inline => $ansible_user_setup
    ap1.vm.provider :virtualbox do |vb|
		vb.memory = 4096
		vb.cpus = 1
    end
  end
  config.vm.define "app_server_2" do |ap2|
    ap2.vm.hostname = "application-server-2"
    ap2.vm.network "private_network", ip: "192.168.56.13"
    ap2.vm.provision "shell", :inline => $ansible_user_setup
    ap2.vm.provider :virtualbox do |vb|
		vb.memory = 4096
		vb.cpus = 1
    end
  end
  config.vm.define "database" do |db|
    db.vm.hostname = "database"
    db.vm.network "private_network", ip: "192.168.56.14"
    db.vm.provision "shell", :inline => $ansible_user_setup
    db.vm.provider :virtualbox do |vb|
		vb.memory = 4096
		vb.cpus = 1
    end
  end
  config.vm.define "jenkins" do |lb|
    lb.vm.hostname = "jenkins"
    lb.vm.network "private_network", ip: "192.168.56.10"
    lb.vm.provision "shell", :inline => $ansible_user_setup
    lb.vm.provider :virtualbox do |vb|
		vb.memory = 4096
		vb.cpus = 1
    end
  end
  # Enable provisioning with a shell script. Additional provisioners such as
  # Ansible, Chef, Docker, Puppet and Salt are also available. Please see the
  # documentation for more information about their specific syntax and use.
  # config.vm.provision "shell", inline: <<-SHELL
  #   apt-get update
  #   apt-get install -y apache2
  # SHELL
end
