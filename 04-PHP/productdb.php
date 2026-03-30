<?php
echo"<h1 style='color:red;text-align:center;'>Product Data</h1>";
echo "<table width=100% style='border:1px solid blue';>
        <tr>
        <th width=10%>PID</th>
        <th width=20%>Product Name</th>
        <th width=10%>Product Type</th>
        <th width=10%>Mfg. Date</th>
        <th width=10%>No. Units</th>
        <th width=10%>Cost</th>
        <th width=25%>Discription</th>
        <th width=5%>Action</th>

        </tr>
        </table>";
        $con=mysqli_connect("localhost","root","","productdb");
        $select="select * from productinfo_tbl";
        $data=mysqli_query($con,$select);
        if(mysqli_num_rows($data)>0){
            while($rows=mysqli_fetch_assoc($data)){
               echo "<table width=100% style='border:1px solid blue';>
       <tr>
       <td  width=10%>{$rows['PID']}</td>
       <td  width=20%>{$rows['PRODUCT_NAME']}</td>
       <td  width=10%>{$rows['PRODUCT_TYPE']}</td>
       <td  width=15%>{$rows['MFG_DATE']}</td>
       <td  width=10%>{$rows['NO_OF_UNITS']}</td>
       <td  width=10%>{$rows['COST_PER_UNIT']}</td>
       <td  width=25%>{$rows['DISCRIPTION']}</td>
       <td width=5%><input type='submit' value='Delete'></td>
       </tr>
        </table>"; 
            }
        }
?>