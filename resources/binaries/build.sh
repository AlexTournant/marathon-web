#!/usr/bin/env sh

echo "update marathon project "
rsync -rtv . $NAME@marathon.ipa.iutlens.local:/srv/comptes/marathon23/$NAME/www/
ssh $NAME@marathon.ipa.iutlens.local "/srv/comptes/marathon23/$NAME/www/resources/binaries/install.sh"

