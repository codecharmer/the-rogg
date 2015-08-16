#!/usr/bin/env bash

echo ">>> Installing Ruby"

# Update
sudo apt-get update

# Install Ruby
# -qq implies -y --force-yes
sudo apt-get install -qq ruby1.9.3

# Install Bundler
sudo gem install bundler