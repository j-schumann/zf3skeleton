# README

ZF3 Application skeleton

replace:
_ModuleName_ with YourModule (Namespaces etc)
_module-name_ with your-module (javascript files, view paths etc)
_modulename_ with yourmodule (cache namespaces etc)

rename:
module/_ModuleName_ to YourModule
public/js/_module-name_.js to your-module.js
view/_module-name_ to your-module

configure:
composer.json
* name, description, homepage

config/autoload/local
* doctrine: db credentials
* email_service: mail adresse and smtp server
* general: full URL
