#!/bin/bash

# Télécharger et installer Composer
curl -sS https://getcomposer.org/installer | php

# Déplacer Composer globalement
mv composer.phar /usr/local/bin/composer