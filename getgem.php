 <?php
$mysqli = new mysqli("sql304.epizy.com", "epiz_25125236", "etL1THEt1bHn", "epiz_25125236_exile");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT Gems, Dexterity Percent, Description, Tags, Intelligence Percent, Primary Attribute, Strength Percent, Support Gem Letter
FROM gems WHERE Gems = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($Gems);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Gems</th>";
echo "<td>" . $Gems . "</td>";

echo "</table>";
?> 