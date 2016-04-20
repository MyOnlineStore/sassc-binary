SASSC
============

This package is a wrapper for the sassc-binary, compiled from hcatlin's source libraries [libsass](https://github.com/hcatlin/libsass) and [sassc](https://github.com/hcatlin/sassc).

Centos 6 instructions to recompile sassc binary
============
```sh
sudo yum-config-manager --enable rhel-server-rhscl-6-rpmss
sudo yum install centos-release-scl
sudo yum install devtoolset-3-gcc devtoolset-3-gcc-c++
CC=/opt/rh/devtoolset-3/root/usr/bin/gcc CXX=/opt/rh/devtoolset-3/root/usr/bin/g++ php build.php
```
