#   Install with command

#unless Vagrant.has_plugin?('vagrant-hostsupdater')
#    raise 'Install vagrant hostsupdater pluging with command "vagrant plugin install vagrant-hostsupdater"'
#end

Vagrant.configure("2") do |config|
  config.vm.define "webserver" do |machine|
    #machine.hostsupdater.aliases = ["phpmyadmin.dev", "webdb.dev", "phppgadmin.dev"]
    machine.vm.network :private_network, ip: "172.33.10.50"

    machine.vm.synced_folder ".", "/vagrant", :disabled => false, :nfs => false
    machine.vm.synced_folder "./www", "/var/www", :disabled => false, :nfs => false

    machine.vm.provider :virtualbox do |vb, override|
      vb.customize ["modifyvm", :id, "--memory", "256"]
      vb.customize ["modifyvm", :id, "--cpus", "1"]
      override.vm.box = "webdb"
      override.vm.box_url = "https://www.dropbox.com/s/jt7j7htbeivmrxl/webdb.box?dl=1"
    end
  end
end
