# 01 - Store

[BACK TO LIST](/tasks)  

Helpful resources - http://www.csvgenerator.com/

**Story:**

A client asks you to build a simple program for his store that would allow couple of his clients to get information about the products and purchase them.

**Task:**

Create a database of products (.csv file)   
Database should hold information about the product  
1. Name 
2. Price
3. Category
4. Description
5. Expiry date
6. Amount

Requester (buyer) is a .txt file that hold information about the person and how much cash he has.  
Create a store program that you can enter multiple commands.  
When the customer purchases the product, cash from the customer.txt file has to be subtracted.
Example: "php store.php list" would list all products in the store.
Example: "php store.php purchase apple-1 10" would make john.php purchase the 10 apples.  

Commands:
- List all products, prices & info
- List single product info
- Buy product from the store 1 or multiple items at the same time.  

**Additional**  

Create import script that will read information from the warehouse file and update your products in the store.  
Note that warehouse could only export their products in .txt file with | as separator.
