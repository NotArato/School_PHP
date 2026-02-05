<?php require_once 'db_config.php'; 
if (isset($_POST['add'])) {
    $name = $_POST['student_name'];
    $sid  = $_POST['student_id'];
    $major = $_POST['major'];

    $sql = "INSERT INTO students (student_name, student_id, major) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $sid, $major]);

    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
if ( isset($_POST['id']) ) {
    $sql = "DELETE FROM students WHERE id = :zip";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['id']));
}
?>

<!DOCTYPE html>
<html>
<head><title>បញ្ជីឈ្មោះសិស្ស</title></head>
<body>
    <h2>ស្វែងរកព័ត៌មានសិស្ស</h2>
    <form method="GET">
        <input type="text" name="search" placeholder="បញ្ចូលលេខអត្តសញ្ញាណ..." value="<?= $_GET['search'] ?? '' ?>">
        <button type="submit">ស្វែងរក</button>
    </form>
<h3>បន្ថែមព័ត៌មាន</h3>
    <form method="POST">
        <input type="text" name="student_name" placeholder="ឈ្មោះ" required>
        <input type="text" name="student_id" placeholder="អត្តសញ្ញាណ" required>
        <input type="text" name="major" placeholder="ជំនាញ" required>
        <button type="submit" name="add">បន្ថែម</button>
    </form>

<h3>លុបព័ត៌មាន</h3>
    <form method="post">
        <p>លុបតាមលេខរៀង:
        <input type="text" name="id">
        <input type="submit" value="លុប"/></p>
    </form>


    <table border="1" style="margin-top: 20px; width: 30%;">
        <tr>
            <th>លេខរៀង</th>
            <th>ឈ្មោះ</th>
            <th>អត្តសញ្ញាណ</th>
            <th>ជំនាញ</th>
        </tr>
        <?php
        $search = $_GET['search'] ?? '';
        $query = "SELECT * FROM students WHERE student_id LIKE ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute(["%$search%"]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['student_name']}</td>
                    <td>{$row['student_id']}</td>
                    <td>{$row['major']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>