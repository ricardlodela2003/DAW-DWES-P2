<table width="350px" cellspacing="0px" cellpadding="2px" border="4px">
<?php
for ($row=1;$row<=9;$row++)
{
    echo "<tr>";
    for ($column=1;$column<=9;$column++)
    {
        $total=$row+$column;
        if ($total%2==0)
        {
            echo "<td height=40px width=30px bgcolor=#FFFFFF></td>";
        }
        else
        {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
        }
    }
    echo "</tr>";
}

?>
</table>