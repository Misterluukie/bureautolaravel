## Het-Bureau.com to Laravel

Alle branches zijn testjes. De master branch is een test voor het CMS Twil. 
De branch "laravelappmergewithtwill" is hetzelfde als de branch "laravelAppZonderTwill" maar dan met het Twill CMS.
Dit waren allemaal testjes, dit betekent dat niks echt volledig werkt. De branch met de meeste functionaliteit is de branch "laravelAppZonderTwill".

Voor de Twill installatie kunt u naar de pagina hieronder. Daar staat alles mooi uitgelegd.

Cms: https://twill.io/docs/#installation

## Installation

add database
composer install
cp example.env .env
update .env

php artisan key:generate
php artisan migrate:refresh
php artisan migrate:refresh --seed <-- dit kan fouten geven. Als het fouten geeft kan je dit skippen.
\*for editting sass this command
npm run watch <-- dit hoeft ook niet.
