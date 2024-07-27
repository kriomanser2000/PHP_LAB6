<?php
function generateTable($rows, $cols, $cellWidth, $cellHeight)
{
    echo "<table border='1' style='border-collapse: collapse;'>";
    for ($i = 0; $i < $rows; $i++)
    {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++)
        {
            echo "<td style='width: " . $cellWidth . "px; height: " . $cellHeight . "px;'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
generateTable(5, 4, 100, 50);