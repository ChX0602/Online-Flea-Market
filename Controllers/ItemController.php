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
               "<lect>
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
           if ($value->is_available == 1) {
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
                      
                      <tr>
                        <td>
                        <a href = 'confirmBuy.php?id=$value->id'>Buy</a><br/>
                        </td>
                      </tr>
                      
                    </table>";  
           }
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
   
   function getImages()
   {
       $temp = opendir("Images/Items");
       while ($img = readdir($temp))
       {
           $images[] = $img;
       }
       closedir($temp);
       $image_array = array();
       foreach($images as $image)
       {
           array_push($image_array, $image);
       }
       return $this->getOptionValues($image_array);
   }
   
   function updateItem()
   {
       
   }
   
   function insertItem()
   {
       $name = $_POST["txtName"];
       $price = $_POST["txtPrice"];
       $age = $_POST["txtAge"];
       $image = $_POST["ddlImage"];
       $type = $_POST["ddlType"];
       $review = $_POST["txtReview"];
       
       $newItem = new ItemEntity(-1, $name, $type, $price, $age, $image, $review);
       $itemModel = new itemModel();
       $itemModel->insertItem($newItem);     
   }
   
   function setNotAvailable($id) {
       $itemModel = new itemModel();
       $itemModel->changeAvailability($id, 0);
   }
   
   function deleteItem()
   {
       
   }
}
?>
