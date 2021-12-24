## API SPEC

### GET Inventory
<br>
  Request :
<br>
<ul>
  <li>Method : GET </li>
  <li>Endpoint : /inventory</li>
  <li>Header :</li>
	Accept: application/json
</ul>
<br>
 Response :
 
 	{
	"code" : "number",
    "status" : "string",
	"data" : 
			{
			id_inventory: "int, unique",	
			code: "int",					
			name: "string",				
			design: "string",			
			code_quality: "string",	
			weight: "int",				
			qty_pcs: "int",				
			qty_ctn: "int",				
			total_pcs: "int",		
			created_at: "datetime",	
			updated_at: "datetime"		
			}
	}
	
### CREATE Data Inventory
<br>
Request :
<br>
<ul>
	<li>Method : POST</li>
	<li>Endpoint : /inventory</li>
	<li>Header :</li>
	<ul>
		<li>Content-Type: application/json	</li>
		<li>Accept: application/json</li>
	<ul>
Body :

	{
	
	code: "int",					
	name: "string",				
	design: "string",			
	code_quality: "string",	
	weight: "int",				
	qty_pcs: "int",				
	qty_ctn: "int",				
	total_pcs: "int"		
	
	}
	
Response :
 
 	{
	"code" : "number",
    "status" : "string",
	"data" : 
		 {
		 id_inventory: "int, unique",	
		 code: "int",					
		 name: "string",				
		 design: "string",			
		 code_quality: "string",	
		 weight: "int",				
		 qty_pcs: "int",				
		 qty_ctn: "int",				
		 total_pcs: "int",		
		 created_at: "datetime",	
		 updated_at: "datetime"		
		 }
	}

### UPDATE Data Inventory

Request :
<br>
	<ul>
		<li>Method : PUT</li>
		<li>Endpoint : /inventory/{id_inventory}</li>
		<li>Header :</li>
		<ul>
			<li>Content-Type: application/json</li>
			<li>Accept: application/json</li>
Body :

	{
	
	code: "int",					
	name: "string",				
	design: "string",			
	code_quality: "string",	
	weight: "int",				
	qty_pcs: "int",				
	qty_ctn: "int",				
	total_pcs: "int"		
	
	}
	
Response :
 
 	{
	"code" : "number",
    "status" : "string",
	"data" : 
			{
			id_inventory: "int, unique",	
			code: "int",					
			name: "string",				
			design: "string",			
			code_quality: "string",	
			weight: "int",				
			qty_pcs: "int",				
			qty_ctn: "int",				
			total_pcs: "int",		
			created_at: "datetime",	
			updated_at: "datetime"		
			}
	}
			
#### DELETE Data Inventory
			
Request :
<ul>
	<li>Method : DELETE</li>
	<li>Endpoint : /inventory/{id_inventory}</li>
	<li>Header :</li>
Accept: application/json
			</ul>
			<br>
Response :
			
	{
    "code" : "number",
    "status" : "string"
	}
			

try on here https://hinventory.000webhostapp.com/
