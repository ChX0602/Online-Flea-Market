<?php
/**
 * Description of ItemController
 *
 * @author Chen Xing
 */
require ("Model/itemModel.php");
class ItemController {
    
    /**
     * returns the option values to create the drop down list
     * @param array $valueArray
     * @return string
     */
   function getOptionValues(array $valueArray)
   {
       $result = "";
       foreach ($valueArray as $value)
       {
           $result = $result."<option value = '$value'>$value</option>";
       }
       return $result;
   }
   
   /**
    * make a drop down list using the types of items
    */
   function makeDropDownList()
   {
       $itemModel = new itemModel();
       $result = 
               "<form action = ''method = 'post' width = '200px'>
               Select a type:
               <select name = 'types' >
               <option value = '%' >All</option>".$this->getOptionValues($itemModel->getItemTypes()).
               "</select>
                   <input type = 'submit' value = 'Search'/>
                   </form>";
       return $result;
               
   }
   /**
    * create tables using the type selected by the user
    */
   function createtable($types)
   {
       $itemModel = new itemModel();
       $itemArray = $itemModel->getItemByType($types);
       $result = "";
       foreach ($itemArray as $key => $value)
       {
          $result = $result.
                  "<table class = 'itemTable'>
                      <tr>
                        <th rowspan = '6' width = '150px'><img runat = 'server' src = '$value->image'/></th>
                        <th width = 75px>Name: </th>
                        <td>$value->name</td>
                      </tr>
                      
                      <tr>
                        <th>Type: </th>
                        <td>$value->type</td>
                      </tr>
                      
                      <tr>
                        <th>Price: </th>
                        <td>$value->price</td>
                      </tr>
                      
                      <tr>
                        <th>Age: </th>
                        <td>$value->age</td>
                      </tr>
                      
                      <tr>
                        <th>Msg: </th>
                        <td colspan = '2' >$value->review</td>
                      </tr>
                    </table>";  
       }
       return $result;
   }
   
   function getItemTypes()
   {
       $itemModel = new itemModel();
       return $itemModel->getItemTypes();
   }
   
   function getItemByType($type)
   {
       $itemModel = new itemModel();
       return $itemModel->getItemByType($type);
   }
   
   function getItemById($id)
   {
       $itemModel = new itemModel();
       return $itemModel->getItemById($id);
   }
}
?>
