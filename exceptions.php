<?php
echo "Exceptions in PHP";
function divide($a, $b)
{
    if (!$b) {
        throw new Exception("Cannot divide by zero<br>");
    }
    return $a / $b;
}

try {
    echo divide(10, 2);
    echo "<br>";
    echo divide(10, 0);
    echo "No errors";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
} finally {
    echo "Finally come here...";
}
echo "Program runs here...";
