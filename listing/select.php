<html>  
    <head>  
    <title>Drop Down List</title>  
    </head>  
    <BODY bgcolor ="white">  
        <form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">  
            List name :  
            <select  Name='NEW'>  
            <option value="">--- Select ---</option>  
            <?  
                mysql_connect ("localhost","root","","kimheng");  
                mysql_select_db ("meyy");  
                $select="meyy";  
                if (isset ($select)&&$select!=""){  
                $select=$_POST ['NEW'];  
            }  
            ?>  
            <?  
                $list=mysql_query("select * from employee order by emp_id asc");  
            while($row_list=mysql_fetch_assoc($list)){  
                ?>  
                    <option value="<? echo $row_list['emp_id']; ?>"<? if($row_list['emp_id']==$select){ echo "selected"; } ?>>  
                                         <?echo $row_list['emp_name'];?>  
                    </option>  
                <?  
                }  
                ?>  
            </select>  
            <input type="submit" name="Submit" value="Select" />
        </form>  
    </body>  
</html>  