# Generate Strings and Id

**Version 2.0.0**

This is a refactored code of the version 1.0.0 where I tries to to rewrite the snippet in OOP 

### Key Changes

- The code has a class key and a few attributes and methods bound to it.
- The len attribute is used to determine the length of the id to be generated
- The str attribute is used to determine the available symbols to be used in making the random id
- The type attribute is used to detemine which function to be called and therefore which type of key to be generated 

## Requirements 

- PHP 
- MYSQL 
- BROWSER

## Usage

- For the first 2 functions, you can copy the code from the key_functions.php file to the php snippet in the main.php file. Then test it.

- Function 3 requires you to have a database set up. 
- Run the following sql statements to get started.

```SQL
CREATE DATABASE phpKeys ;

CREATE TABLE keystring (keystringId int, keystringKey varchar(30));
```
- With the database you can test the third function

### Cheers and goodluck !