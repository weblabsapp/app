#!/bin/bash

source ./utilities/progressbar.sh || exit 1

# Define array of dependencies
dependencies=(wget libfreetype6-dev libpng-dev libjpeg-dev libcurl4-gnutls-dev libyaml-dev libicu-dev libzip-dev unzip git openssh-server rsync vim)


### DO NOT EDIT AREA ###
echo "Installing dependencies ..."
dependencies_count=${#dependencies[@]}
i=0
draw_progress_bar $i ${dependencies_count} "dependencies"
for dependency in ${dependencies[*]}; do
  apt-get install -y --no-install-recommends ${dependency} > /dev/null
  i=$((i+1))
  draw_progress_bar $i ${dependencies_count} "dependencies"
done
echo

# Install JPEG library
cd utilities && tar xvfz jpegsrc.v6b.tar.gz
cd jpeg-6b || exit
./configure
make
make install
rm -rf jpeg-6b && cd ../../
