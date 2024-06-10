## Farmart

Farmart is an online market service for farmers in Indonesia, we aim to uhhhhhh.

## Addresses
**'/'** will show onboard page of the webapp\
**'/login'** will show login page of the webapp\
**'/register'** will show register page of the webapp

## Database Structure
### **users**
|**user_id**|**user_phone**|**user_password**|**user_name**|**user_postal_code**|**user_address_detail**|
|:-:|:-:|:-:|:-:|:-:|:-:|
|Varchar(36)|Varchar(13)|Varchar(60)|Varchar(36)|int(5)|Varchar(200)

### **sellers**
|**seller_id**|**user_id**|**store_name**|**seller_phone**|**seller_postal_code**|**seller_address_detail**|
|:-:|:-:|:-:|:-:|:-:|:-:|
|Varchar(36)|Varchar(36)|Varchar(36)|Varchar(13)|int(5)|Varchar(200)

### **products**
|**product_id**|**product_name**|**product_description**|**product_sell_price**|**product_weight**|**product_stock**|**product_picture**|**category_id**|**seller_id**
|:-:|:-:|:-:|:-:|:-:|:-:|:-:|:-:|:-:|
|Varchar(36)|Varchar(32)|mediumtext|decimal(65)|int(100)|int(255)|longblob|int(100)|Varchar(36)

#### **Explanation**
**user_id** : Primary Key of Users model, using Hash structure for security\
**user_phone** : Secondary Key\
**user_password** : Passkey for user to login into their accounts, using Hash structure for security\
**user_name** : The name of the user\
**user_postal_code** : National Postal Code, will be used in relation to address table for adress details like city, province, etc



## Contributors
[Edward (Trustacean)](https://github.com/Trustacean)
[Sahril Nanda Putra](https://github.com/sahrilputra)
[Stepanus Deni](https://github.com/putrastepanus)