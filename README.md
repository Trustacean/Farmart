## Farmart

Farmart is an online market service for farmers in Indonesia, we aim to uhhhhhh.

## Addresses
**'/'** will show onboard page of the webapp\
**'/login'** will show login page of the webapp\
**'/register'** will show register page of the webapp

## Database Structure
|**user_id**|**user_phone**|**user_password**|**user_name**|user_postal_code|
|:-:|:-:|:-:|:-:|:-:|
|Varchar(36)|Varchar(13)|Varchar(60)|Varchar(36)|int(5)

#### Explanation
**user_id** : Primary Key of Users model, using Hash structure for security\
**user_phone** : Secondary Key\
**user_password** : Passkey for user to login into their accounts, using Hash structure for security\
**user_name** : The name of the user\
**user_postal_code** : National Postal Code, will be used in relation to address table for adress details like city, province, etc

## Contributors
[Edward (Trustacean)](https://github.com/Trustacean)
[Sahril Nanda Putra](https://github.com/sahrilputra)
[Stepanus Deni](https://github.com/putrastepanus)