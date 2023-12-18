Vagrant.configure("2") do |config|
  config.vm.box = "generic/ubuntu2004"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.hostname = "pllocaltest.com"

  config.vm.synced_folder ".", "/var/www/html"

  config.vm.provision :shell, path: "Vagrant_InstantiationScript.sh"

  config.vm.provider "virtualbox" do |v|
		v.memory = 1024
	end

end